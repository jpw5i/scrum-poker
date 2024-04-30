<?php

use src\app\App;

header('Access-Control-Allow-Origin: *');
require '../src/static/helpers.php';
require '../autoload.php';

new App();
