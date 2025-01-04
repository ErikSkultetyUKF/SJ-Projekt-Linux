<?php

// Zadefinovanie informácii o db
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'sj-projekt-linux',
    'USERNAME' => 'root',
    'PASSWORD' => ''
]);

// Require classes
require_once('classes/Database.php');
require_once('classes/Article.php');
require_once('classes/Contact.php');
require_once('classes/ContentCreator.php');
require_once('classes/Distribution.php');
require_once('classes/LinuxInfo.php');
require_once('classes/Menu.php');
require_once('classes/Page.php');
require_once('classes/PopularWebpage.php');
require_once('classes/Slideshow.php');
require_once('classes/User.php');

// Vytvoriť session
session_start();
?>
