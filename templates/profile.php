<?php
    include_once('partials/header.php');

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?> 
    <main>
        <?php
            if($_SESSION['isAdmin'] == 1) {
                include_once('partials/admin-ui.php');
            } else {
                include_once('partials/newsletter.php');
            }
        ?>
    </main>
    
<?php
    include_once('partials/footer.php');
?> 