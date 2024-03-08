<?php
    include "partials/header.php";
?>

<main>
    <div class="kontajner">
        <!-- text -->
        <div class="stlpec_lavy">
            <h1>Linux</h1>
            <p>Výkonný operačný systém s otvoreným zdrojovým kódom založený na Unixe a schopný bežať na rôznom hardvéri s vysokými prevádzkovými nárokmi.</p>
        </div>
        <!-- obrazok -->
        <div class="stlpec_pravy">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 2</div>
                  <img class="tux" src="img/tux.svg" alt="maskot-linuxu">
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img class="tux" src="img/tux2.jpg"  alt="maskot-linuxu-neoficialne">
                  </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>©2023; Projekt Linux; Nadizajnoval - Erik Škultéty</p>
    <!-- Každá podstránka má zoznam zdrojov, ktoré boli pre jej tvorbu využité, žiadna neobsahuje všetky zdroje naraz -->
    <p>Zdroje:</p>
    <a href="https://www.linux.com/what-is-linux/" target="_blank">https://www.linux.com/what-is-linux/</a><br>
</footer>
<script src="js/app.js"></script>

</body>
</html>