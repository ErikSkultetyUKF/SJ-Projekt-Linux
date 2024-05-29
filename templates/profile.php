<?php
    include_once('partials/header.php');

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?>

<main>
    <?php
        // print_r($_SESSION);
        // Rozhranie
        if($_SESSION['isAdmin'] == 1) {
            echo '<h1 class="text-center" style="font-size: 3.5rem">Admin rozhranie</h1>';
            include_once('partials/admin-users.php');
            include_once('partials/admin-contacts.php');
            echo '<div class="accordion">';
            echo '<div class="accordion-button">Používateľské rozhranie</div>';
            echo '<div class="accordion-content"">';
            include_once('partials/newsletter.php');
            echo '</div>';
        } else {
            include_once('partials/newsletter.php');
        }
    ?>
</main>
    
<?php
    include_once('partials/footer.php');
?>