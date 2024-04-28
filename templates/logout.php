<?php
include('partials/header.php');
?>
<main>
    <?php
        unset($_SESSION['loggedIn']);
        header('Location: login.php');
    ?>
</main>
<?php
    include('partials/footer.php');
?>