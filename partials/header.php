<?php
  require_once('./_inc/config.php');
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

    <link rel="icon" href="./assets/img/misc/tux.svg">
    <title>Linux</title>
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar">
        <!-- Logo PC -->
        <img class="tux-nav" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">

        <!-- Hamburger pre mobil -->
        <div class="dropdown">
            <button class="dropdown-button">
                <img src="./assets/img/misc/menu.png" alt="ikona-hamburger-menu">
            </button>

            <div class="dropdown-content">
                <!-- Podstránky sa otvárajú v aktuálnej karte -->
                <a href="index.php">Domov</a>
                <a href="linux.php">O Linuxe</a>
                <a href="distributions.php">Distribúcie</a>
                <a href="community.php">Komunita</a>
                <a href="contact.php">Kontakt</a>

                <!-- Logo Mobil -->
                <img class="tux-nav-mobile" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">
            </div>
        </div>
        <!-- Podstránky sa otvárajú v aktuálnej karte -->
        <a href="index.php">Domov</a>
        <a href="linux.php">O Linuxe</a>
        <a href="distributions.php">Distribúcie</a>
        <a href="community.php">Komunita</a>
        <a href="contact.php">Kontakt</a>
    </nav>
</header>