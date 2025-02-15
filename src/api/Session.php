<?php

namespace src\api;

use Exception;

class Session
{

    public ?string $owner = null;
    public object $users;
    public string $token;
    public int $created;
    public bool $locked = false;
    public ?string $password = null;
    public string $card_set = 'default';
    public object $votes;
    public string $story_detail = 'no information';

    /**
     * @throws Exception
     */
    public function __construct(?array $load = null, ?string $card_set = null, ?string $story_detail = null)
    {
        $this->created = time();
        $this->users = (object)[];
        $this->token = getRandomString(16);
        $this->votes = (object)[];
        if ($card_set !== null) {
            $this->card_set = $card_set;
        }
        if ($load !== null) {
            $this->load($this, $load);
        }
        else{
            //$this->setStoryDetail($story_detail);
        }
    }

    private function load(mixed &$obj, array $load): void
    {
        foreach ($load as $key => $value) {
            if (is_array($value)) {
                if (is_object($obj)) {
                    if (!property_exists($obj, $key)) {
                        $obj->{$key} = (object)[];
                    }
                    $this->load($obj->{$key}, $value);
                } elseif (is_array($obj)) {
                    array_push($obj, (object)[]);
                    $this->load($obj[$key], $value);
                }
            } else {
                $obj->{$key} = $value;
            }
        }
    }

    /**
     * @throws Exception
     */
    public function addUser(string $name): string
    {
        $name = preg_replace('/[\<\>]/i', '', $name);
        $users = array();
        foreach (get_object_vars($this->users) as $key => $user) {
            $users[$key] = $user->name;
        }
        $user_id = array_search($name, $users);
        if (!$user_id) {
            $user_id = strval(count(get_object_vars($this->users)) + 1);
            $this->users->{$user_id} = (object)[
                'name' => $name,
                'token' => getRandomString(16),
                'icon' => random_int(0, 32),
                'password' => null
            ];
            if ($this->owner === null) {
                $this->owner = $user_id;
                $this->addVote();
                $stats = new Statistics();
                $stats->addVote();
            }
        }
        return $user_id;
    }

    public function getUserIdFromName(string $name): ?string
    {
        $users = array();
        foreach (get_object_vars($this->users) as $key => $user) {
            $users[$key] = $user->name;
        }
        return array_search($name, $users);
    }

    public function getCurrentVoteKey(): int
    {
        return count(get_object_vars($this->votes));
    }

    public function getCurrentVote(): ?object
    {
        if ($this->getCurrentVoteKey() == 0) return null;
        else return $this->votes->{$this->getCurrentVoteKey()};
    }

    public function setStoryDetail(string $storyDetail = null): void
    {
        if($storyDetail == null)
            $$this->story_detail = 'no information';
        else
            $this->story_detail = $storyDetail;
    }

    public function getStoryDetail(): string
    {
        if($this->story_detail == null)
            $this->story_detail = 'no information';
        return $this->story_detail;
    }

    public function addVote(): void
    {
        $last_vote = $this->getCurrentVote();
        if ($last_vote === null || $last_vote->uncovered !== null) {
            $votes = (object)[];
            $this->votes->{strval(count(get_object_vars($this->votes)) + 1)} = (object)[
                'started' => time(),
                'votes' => $votes,
                'uncovered' => null,
                'card_set' => $this->card_set/*,
                'story_detail' => $this->getStoryDetail()*/
            ];
        }
    }

}
