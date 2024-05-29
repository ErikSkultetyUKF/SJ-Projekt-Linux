<?php
    include_once("partials/header.php");

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?>

<main>
    
    <?php
        // Článok bol odoslaný
        if(isset($_POST['submitArticle'])) {
            $data = array(
                'title'=>$_POST['title'],
                'authorId'=>$_SESSION['userId'],
                'author'=>$_SESSION['username'],
                'text'=>$_POST['text']
            );
            // Vložiť článok do db
            $articleObject = new Article();
            $articleObject->insert($data);

            echo '<h1 class="h-xxxlarge text-center margin-top-3">Článok bol pridaný</h1>';

        } else {
            echo '<h1 class="h-xxxlarge text-center margin-top-3">Článok nebol odoslaný</h1>';
        }
    ?>

    <div class="text-center margin-bottom-12">
        <a href="article-my.php" class="submit">Späť</a>
    </div>

</main>

<?php
    include_once("partials/footer.php");
?>