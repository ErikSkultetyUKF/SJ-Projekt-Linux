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

                <?php
                    $slideshowObject = new Slideshow();
                    $slideshow = $slideshowObject->select();

                    for ($i = 0; $i < count($slideshow); $i++) {
                        echo '<div class="slideshow-content fade">';
                        echo '<img class="img-350" src="'.$slideshow[$i]->image.'" alt="'.$slideshow[$i]->image_description.'">';
                        echo '</div>';
                      }
                ?>
            </div>
        </div>
    </div>

</main>

<?php
    include_once("partials/footer.php");
?>