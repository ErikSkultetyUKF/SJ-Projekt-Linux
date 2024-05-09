<?php
    include_once('partials/header.php');

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?> 
    <main>
        <?php
            if($_SESSION['isAdmin'] == 1) {
                include_once('partials/admin-contact.php');
            } else {
                echo '<h1 class="large-center">COMING SOON</h1><br><br><br><br><br>';
            }
        ?>
    </main>
    
<?php
    include_once('partials/footer.php');
?> 