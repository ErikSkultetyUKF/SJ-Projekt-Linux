<?php
    include_once("partials/header.php");
?>

<main>
    <h1 class="h-xxxlarge text-center margin-middle">Ďakujeme</h1>
    <?php
        // Vložiť kontakt do db
        $contactObject = new Contact();
        $contactObject->insert();
    ?>
</main>

<?php
    include_once("partials/footer.php");
?>