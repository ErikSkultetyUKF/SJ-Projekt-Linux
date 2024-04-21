<?php
    include_once("partials/header.php");
?>

<main>

    <div class="kontajner">

        <!-- text -->
        <div class="stlpec-lavy">
            <h1>Linux</h1>
            <p>Výkonný operačný systém s otvoreným zdrojovým kódom založený na Unixe a schopný bežať na rôznom hardvéri s vysokými prevádzkovými nárokmi.</p>
        </div>

        <!-- obrázok -->
        <div class="stlpec-pravy">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="number-text">1 / 2</div>
                  <img class="tux" src="./assets/img/misc/tux.svg" alt="maskot-linuxu">
                </div>

                <div class="mySlides fade">
                    <div class="number-text">2 / 2</div>
                    <img class="tux" src="./assets/img/misc/tux2.png"  alt="maskot-linuxu-neoficialne">
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