
<div class="panel">
    <div class="text-left">
        <?php
            echo '<span>Vitajte '.$_SESSION['username'].'!</span>';
        ?>
    </div>

    <div class="text-right">
        <a href="article-my.php">Moje články</a>
    </div>
</div>

<h1 class="text-center" style="font-size: 3.5rem">Novinky</h1>

<?php

    $articleObject = new Article();

    // Odstránenie článka
    if(isset($_POST['deleteArticle']) && $_SESSION['isAdmin'] == 1){
        $articleId = $_POST['deleteArticle'];
        $articleObject->delete($articleId);
        header('Location: profile.php');
    }
    $articles = $articleObject->select();

    // Vygenerovať články
    for ($i = 0; $i < count($articles); $i++) {
        echo '<article class="text-left margin-bottom-5">';
        if ($_SESSION['isAdmin'] == 1) {
            echo '<div class="flex-center">';
        }
        echo '<h1 class="textc-base">'.$articles[$i]->title.'</h1>';

        if ($_SESSION['isAdmin'] == 1) {

            // Odstrániť článok - Tlačidlo
            echo '<form style="margin-left: 0.5rem" action="" method="POST">
                        <button class="table-button" type="submit" name="deleteArticle" value="'.$articles[$i]->id.'"'.' onclick="return checkDelete()"><img src="../assets/img/misc/delete.png" class="table-button"></button>
                    </form>';

            echo '</div>';
        }

        echo '<p>'.$articles[$i]->author.'<br><span class="date">'.$articles[$i]->date.'</span></p>';
        echo '<hr>';
        echo '<div class="text-justify"><p>'.$articles[$i]->text.'</p></div>';
        echo '</article>';
    }
?>