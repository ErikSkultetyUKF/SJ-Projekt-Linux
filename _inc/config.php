<?php

define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'Skultety-SJ-Projekt-Linux',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

require_once('classes/Database.php');
require_once('classes/Contact.php');
require_once('classes/ContentCreator.php');
require_once('classes/Distribution.php');
require_once('classes/LinuxInfo.php');
require_once('classes/MarketShare.php');
require_once('classes/Menu.php');
require_once('classes/Page.php');
require_once('classes/PopularWebpage.php');
require_once('classes/Slideshow.php');
require_once('classes/User.php');

session_start();
?>