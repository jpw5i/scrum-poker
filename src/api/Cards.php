<?php

namespace src\api;

class Cards
{

    public static function default(): object
    {
        return (object)[
            '1' => new Card('1', Card::LOW),
            '2' => new Card('2', Card::LOW),
            '3' => new Card('3', Card::LOW),
            '4' => new Card('5', Card::MIDDLE),
            '5' => new Card('8', Card::MIDDLE),
            '6' => new Card('13', Card::MIDDLE),
            '7' => new Card('20', Card::HIGH),
            '8' => new Card('40', Card::HIGH),
            '9' => new Card('?', Card::UNKNOWN),
            '10' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function default_100(): object
    {
        return (object)[
            '1' => new Card('1', Card::LOW),
            '2' => new Card('2', Card::LOW),
            '3' => new Card('3', Card::LOW),
            '4' => new Card('5', Card::MIDDLE),
            '5' => new Card('8', Card::MIDDLE),
            '6' => new Card('13', Card::MIDDLE),
            '7' => new Card('20', Card::HIGH),
            '8' => new Card('40', Card::HIGH),
            '9' => new Card('100', Card::HIGH),
            '10' => new Card('?', Card::UNKNOWN),
            '11' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function fibonacci(): object
    {
        return (object)[
            '1' => new Card('1', Card::LOW),
            '2' => new Card('2', Card::LOW),
            '3' => new Card('3', Card::LOW),
            '4' => new Card('5', Card::MIDDLE),
            '5' => new Card('8', Card::MIDDLE),
            '6' => new Card('13', Card::HIGH),
            '7' => new Card('21', Card::HIGH),
            '8' => new Card('?', Card::UNKNOWN),
            '9' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function fibonacci_144(): object

    {
        return (object)[
            '1' => new Card('1', Card::LOW),
            '2' => new Card('2', Card::LOW),
            '3' => new Card('3', Card::LOW),
            '4' => new Card('5', Card::MIDDLE),
            '5' => new Card('8', Card::MIDDLE),
            '6' => new Card('13', Card::MIDDLE),
            '7' => new Card('21', Card::MIDDLE),
            '8' => new Card('34', Card::HIGH),
            '9' => new Card('55', Card::HIGH),
            '10' => new Card('89', Card::HIGH),
            '11' => new Card('144', Card::HIGH),
            '12' => new Card('?', Card::UNKNOWN),
            '13' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function smilies(): object
    {
        return (object)[
            '1' => new Card(':D', Card::LOW),
            '2' => new Card(':)', Card::LOW),
            '3' => new Card(':|', Card::MIDDLE),
            '4' => new Card(':/', Card::MIDDLE),
            '5' => new Card(':(', Card::HIGH),
            '6' => new Card(':O', Card::HIGH),
            '7' => new Card('?', Card::UNKNOWN),
            '8' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function sizes(): object
    {
        return (object)[
            '1' => new Card('XS', Card::LOW),
            '2' => new Card('S', Card::LOW),
            '3' => new Card('M', Card::MIDDLE),
            '4' => new Card('L', Card::MIDDLE),
            '5' => new Card('XL', Card::HIGH),
            '6' => new Card('XXL', Card::HIGH),
            '7' => new Card('?', Card::UNKNOWN),
            '8' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function one_to_six(): object
    {
        return (object)[
            '1' => new Card('1', Card::LOW),
            '2' => new Card('2', Card::LOW),
            '3' => new Card('3', Card::MIDDLE),
            '4' => new Card('4', Card::MIDDLE),
            '5' => new Card('5', Card::HIGH),
            '6' => new Card('6', Card::HIGH),
            '7' => new Card('?', Card::UNKNOWN),
            '8' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function percents(): object
    {
        return (object)[
            '1' => new Card('0', Card::HIGH),
            '2' => new Card('10', Card::HIGH),
            '3' => new Card('20', Card::HIGH),
            '4' => new Card('30', Card::HIGH),
            '5' => new Card('40', Card::MIDDLE),
            '6' => new Card('50', Card::MIDDLE),
            '7' => new Card('60', Card::MIDDLE),
            '8' => new Card('70', Card::MIDDLE),
            '9' => new Card('80', Card::LOW),
            '10' => new Card('90', Card::LOW),
            '11' => new Card('100', Card::LOW),
            '12' => new Card('?', Card::UNKNOWN),
            '13' => new Card('break', Card::UNKNOWN),
        ];
    }

    public static function w5i(): object
    {
        return (object)[
            '1' => new Card('0.3', Card::LOW),
            '2' => new Card('0.5', Card::LOW),
            '3' => new Card('1', Card::LOW),
            '4' => new Card('2', Card::LOW),
            '5' => new Card('3', Card::LOW),
            '6' => new Card('4', Card::MIDDLE),
            '7' => new Card('6', Card::MIDDLE),
            '8' => new Card('8', Card::MIDDLE),
            '9' => new Card('10', Card::MIDDLE),
            '10' => new Card('12', Card::MIDDLE),
            '11' => new Card('16', Card::MIDDLE),
            '12' => new Card('20', Card::HIGH),
            '13' => new Card('24', Card::HIGH),
            '14' => new Card('30', Card::HIGH),
            '15' => new Card('40', Card::HIGH),
            '16' => new Card('60', Card::HIGH),
            '17' => new Card('?', Card::UNKNOWN),
            '18' => new Card('break', Card::UNKNOWN),
        ];
    }
    
    public static function allCards(): object
    {
        return (object)[
            'w5i' => self::w5i(),
            'default' => self::default(),
            'default_100' => self::default_100(),
            'fibonacci' => self::fibonacci(),
            'fibonacci_144' => self::fibonacci_144(),
            'smilies' => self::smilies(),
            'sizes' => self::sizes(),
            'one_to_six' => self::one_to_six(),
            'percents' => self::percents()
        ];
    }

}
