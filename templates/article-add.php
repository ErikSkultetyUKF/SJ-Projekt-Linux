<?php
    include_once('partials/header.php');

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?>
<main>
    <div class="form-box text-center margin-middle-4">
        <h1>Pridať článok</h1><br>

        <!-- Formulár --> 
        <form action="article-added.php" method="POST">

            <!-- Nastaviť názov -->
            <label for="name">Názov:</label><br>
            <input type="text" class="entry" name="title" placeholder="Názov"><br>

            <!-- Text -->
            <label for="message">Text:</label><br>
            <textarea class="message" name="text"></textarea><br><br><br>

            <!-- Uložiť zmeny -->
            <button type="submit" class="submit" name="submitArticle">Uložiť zmeny</button>

        </form>
    </div>
</main>
    
<?php
    include_once('partials/footer.php')
?> 