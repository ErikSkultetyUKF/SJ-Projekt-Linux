<?php

define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'Skultety-SJ-Projekt-Linux',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('classes/Database.php');
require_once('classes/ContentCreator.php');
require_once('classes/Distribution.php');
require_once('classes/LinuxInfo.php');
require_once('classes/Page.php');
require_once('classes/PopularWebpage.php');
?>