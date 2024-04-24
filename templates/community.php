<?php
    include_once("partials/header.php");
?>

<main>

    <!-- Vybraní populárni tvorcovia na tému Linux -->
    <h1>Populárni tvorcovia na tému Linux</h1>

    <?php
        $contentCreatorObject = new ContentCreator();
        $contentCreator = $contentCreatorObject->select();

        for ($i = 0; $i < count($contentCreator); $i++) {
            echo('<div class="gallery">');
            echo('<a href="'.$contentCreator[$i]->link.'" target="_blank">');
            echo('<img src="'.$contentCreator[$i]->image.'" alt="'.$contentCreator[$i]->image_description.'">');
            echo('<div class="gallery-text">'.$contentCreator[$i]->name.'</div></a>');
            echo('</div>');
        }
    ?>

    <!-- Vybrané populárne stránky o Linuxe -->
    <h1>Populárne Linuxové stránky</h1>

    <?php
        $popularWebstrankaObject = new PopularWebpage();
        $popularWebstranka = $popularWebstrankaObject->select();

        for ($i = 0; $i < count($popularWebstranka); $i++) {
            echo('<div class="gallery">');
            echo('<a href="'.$popularWebstranka[$i]->link.'" target="_blank">');
            echo('<img src="'.$popularWebstranka[$i]->image.'" alt="'.$popularWebstranka[$i]->image_description.'">');
            echo('<div class="gallery-text">'.$popularWebstranka[$i]->name.'</div></a>');
            echo('</div>');
        }
    ?>

</main>

<?php
    include_once("partials/footer.php");
?>