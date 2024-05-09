<?php
    include_once("partials/header.php");
?>

<main>
    <h1 class="large-center">Ďakujeme</h1><br><br><br><br><br>
    <?php
        $contactObject = new Contact();
        $contactObject->insert();
    ?>
</main>

<?php
    include_once("partials/footer.php");
?>