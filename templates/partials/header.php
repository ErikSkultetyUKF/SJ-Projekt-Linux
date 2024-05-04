<?php
  require_once('../_inc/config.php');
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Základné informácie o Linuxe">
    <meta name="keywords" content="Linux">
    <meta name="author" content="Erik Škultéty">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        $pageName = basename($_SERVER["SCRIPT_NAME"],'.php');
        $pageObject = new Page($pageName);
        $pageObject->addStylesheets();
    ?>

    <link rel="icon" href="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux.png">
    <title>Linux</title>
</head>
<body>

<!-- Header -->
<header>
    <div class="topnav" id="topnavId">

        <!-- Logo -->
        <a href="home.php" style="padding: 0px;">
            <span><img id="logo" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux.png" alt="ikona-maskot-linuxu"></span>
        </a>

        <!-- Vyenerovať menu -->
        <?php

            $pages = array('Domov' => 'home.php',
                'O Linuxe' => 'linux.php',
                'Distribúcie' => 'distributions.php',
                'Komunita' => 'community.php',
                'Kontakt' => 'contact.php'  
            );

            // Zobraziť logout link
            if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
                $pages['Odhlásiť sa'] = 'logout.php';
            }

            // Zobraziť login a register link
            if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
                $pages['Prihlásenie'] = 'login.php';
                $pages['Registrácia'] = 'register.php';
            }

            $menuObject = new Menu($pages);
            echo($menuObject->generateMenu());
        ?>

        <!-- Hamburger menu -->
        <a href="javascript:void(0);" class="icon" style="padding: 1rem 1.5rem;" onclick="showHamburgerMenu()">
            <span><img src="/Skultety-SJ-Projekt-Linux/assets/img/misc/menu.png" alt="ikona-menu"></span>
        </a>
    </div>
</header>

<!-- Obsah -->