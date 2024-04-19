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
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/misc/tux.svg">
    <title>Linux</title>
</head>

<body>
<header>
    <nav class="navbar">
        <!-- Logo (PC) -->
        <img id="tux_nav" src="./assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">
        <!-- Hamburger pre mobil -->
        <div class="dropdown">
            <button class="dropbtn">
            <img src="./assets/img/misc/menu.png" alt="ikona-hamburger-menu">
            </button>
            <div class="dropdown-content">
                <a href="index.php">Domov</a>
                <a href="linux.php">O Linuxe</a>
                <a href="distribucie.php">Distribúcie</a>
                <a href="komunita.php">Komunita</a>
                <a href="kontakt.php">Kontakt</a>
                <!-- Logo (mobil) -->
                <img id="tux_nav_mobile" src="./assets/img/misc/tux.svg" alt="ikona-maskot-linuxu">
            </div>
        </div>
        <!-- Podstránky sa otvárajú v aktuálnej karte -->
        <a href="index.php">Domov</a>
        <a href="linux.php">O Linuxe</a>
        <a href="distribucie.php">Distribúcie</a>
        <a href="komunita.php">Komunita</a>
        <a href="kontakt.php">Kontakt</a>
    </nav>
</header>