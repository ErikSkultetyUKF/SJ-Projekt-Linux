<?php
    include_once('partials/header.php');

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
    
    $articleObject = new Article();

    // Získanie článka
    if(isset($_POST['editArticle'])) {
        $editArticleId = $_POST['editArticle'];
        $articleData = $articleObject->selectSingle($editArticleId);
    }

    // Získanie dát o článku
    if($articleData) {
        $title = $articleData->title;
        $text = $articleData->text;
    }

    // Získanie a zapísanie nových dát
    if(isset($_POST['editArticleId'], $_POST['title'], $_POST['text'])) {
        $editArticleId = $_POST['editArticleId'];
        $newData = array(
            'title' => $_POST['title'],
            'text' => $_POST['text']
        );
    
        $articleObject->edit($editArticleId, $newData); // Upraviť dáta o kontakte
    
        header('Location: article-my.php');
    }
    
?>

<main>
    <div class="form-box text-center margin-middle-4">
        <h1>Upraviť článok</h1><br>

        <!-- Formulár --> 
        <form action="" method="POST">

            <!-- Upraviť názov -->
            <label for="title">Názov:</label><br>
            <input type="text" class="entry" name="title" placeholder="Názov" value="<?php echo $title?>"><br>

            <!-- Upraviť text -->
            <label for="text">Správa:</label><br>
            <textarea class="message" name="text"><?php echo $text?></textarea><br><br><br>

            <!-- Uložiť zmeny -->
            <button type="submit" class="submit" name="editArticleId" value="<?php echo $editArticleId?>">Uložiť zmeny</button>

        </form>
    </div>
</main>
    
<?php
    include_once('partials/footer.php')
?> 