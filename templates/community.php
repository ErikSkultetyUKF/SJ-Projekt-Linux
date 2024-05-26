<?php
    include_once("partials/header.php");
?>

<main>

    <!-- Vybraní populárni tvorcovia na tému Linux -->
    <h1>Populárni tvorcovia na tému Linux</h1>

    <?php
        $contentCreatorObject = new ContentCreator();
        $contentCreator = $contentCreatorObject->select();

        // Vygenerovať tvorcov
        for ($i = 0; $i < count($contentCreator); $i++) {
            echo('<div class="gallery">');
            echo('<a href="'.$contentCreator[$i]->link.'" target="_blank">');
            echo('<img class="gallery-img" src="'.$contentCreator[$i]->image.'" alt="'.$contentCreator[$i]->image_description.'">');
            echo('<div class="gallery-text text-center">'.$contentCreator[$i]->name.'</div></a>');
            echo('</div>');
        }
    ?>

    <!-- Vybrané populárne stránky o Linuxe -->
    <h1>Populárne stránky na tému Linux</h1>

    <?php
        $popularWebstrankaObject = new PopularWebpage();
        $popularWebstranka = $popularWebstrankaObject->select();

        // Vygenerovať stránky
        for ($i = 0; $i < count($popularWebstranka); $i++) {
            echo('<div class="gallery">');
            echo('<a href="'.$popularWebstranka[$i]->link.'" target="_blank">');
            echo('<img class="gallery-img" src="'.$popularWebstranka[$i]->image.'" alt="'.$popularWebstranka[$i]->image_description.'">');
            echo('<div class="gallery-text text-center">'.$popularWebstranka[$i]->name.'</div></a>');
            echo('</div>');
        }
    ?>

</main>

<?php
    include_once("partials/footer.php");
?>