<?php
    include_once("partials/header.php");
?>

<main>

    <div class="container">

        <!-- Text -->
        <div class="column-left">
            <h1>Linux</h1>
            <p>Výkonný operačný systém s otvoreným zdrojovým kódom založený na Unixe a schopný bežať na rôznom hardvéri s vysokými prevádzkovými nárokmi.</p>
        </div>

        <!-- Obrázok -->
        <div class="column-right">
            <div class="slideshow-container">

                <div class="slideshow-img fade">
                  <div class="img-num">1 / 2</div>
                  <img class="img-350" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux.svg" alt="maskot-linuxu">
                </div>

                <div class="slideshow-img fade">
                    <div class="img-num">2 / 2</div>
                    <img class="img-350" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/tux2.png" alt="maskot-linuxu-neoficialne">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
        </div>
    </div>

</main>

<?php
    include_once("partials/footer.php");
?>