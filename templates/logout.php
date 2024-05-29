<?php
    include('partials/header.php');
?>
<main>
    <?php
        // Odhlásenie
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['loggedIn']);
        unset($_SESSION['isAdmin']);
        header('Location: login.php');
    ?>
</main>
<?php
    include('partials/footer.php');
?>