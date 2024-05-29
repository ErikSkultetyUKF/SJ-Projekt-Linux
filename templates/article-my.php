<?php
    include_once('partials/header.php');

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?>

<main>
    <div class="panel">
        <div class="text-left">
            <?php
                echo '<span>Vitajte '.$_SESSION['username'].'!</span>';
            ?>
        </div>

        <div class="text-right">
            <a href="article-add.php">Pridať článok</a>
            <a href="profile.php">Späť na profil</a>
        </div>
    </div>

    <h1 class="text-center" style="font-size: 3.5rem">Moje Články</h1>

    <?php
        $articleObject = new Article();
        $articles = $articleObject->selectByUser($_SESSION['userId']);
        $nArticles = count($articles);

        // Odstránenie článka
        if(isset($_POST['deleteArticle'])){
            $articleId = $_POST['deleteArticle'];
            $articleObject->delete($articleId);
            header('Location: article-my.php');
        }

        // Ak existujú články od používateľa
        if ($nArticles > 0) {
            
            // Vygenerovať články
            for ($i = 0; $i < $nArticles; $i++) {
                echo '<article class="text-left margin-bottom-5">';
                echo '<h1 class="textc-base">'.$articles[$i]->title.'</h1>';
                echo '<div class="flex-center">';

                // Upraviť článok - Tlačidlo
                echo '<form action="article-update.php" method="POST">
                            <button class="table-button" type="submit" name="editArticle" value="'.$articles[$i]->id.'"'.'><img src="../assets/img/misc/edit.png" class="table-button"></button>
                        </form>';

                // Odstrániť článok - Tlačidlo
                echo '<form style="margin-left: 0.5rem" action="" method="POST">
                            <button class="table-button" type="submit" name="deleteArticle" value="'.$articles[$i]->id.'"'.' onclick="return checkDelete()"><img src="../assets/img/misc/delete.png" class="table-button"></button>
                        </form>';

                echo '</div>';
                echo '<p><span class="date">'.$articles[$i]->date.'</span></p>';
                echo '<hr>';
                echo '<div class="text-justify"><p>'.$articles[$i]->text.'</p></div>';
                echo '</article>';
            }
        } else {
            echo '<h1 class="h-large text-center margin-middle-4">Nenašli sa žiadne články</h1>';
        }
    ?>
</main>
<?php
    include_once('partials/footer.php');
?>