<?php
    include_once("partials/header.php");
?>

<main>

    <h1 class="cent">Máte otázky?</h1>
    <h2 class="cent">Napíšte nám:</h2>

    <!-- Formulár -->
    <form class="cent" action="thankyou.php" method="POST">

        <label for="name">Vaše meno a priezvisko:</label><br>
        <input type="name" class="entry" name="name" placeholder="Meno Priezvisko" value="" required><br>

        <label for="email">Váš e-mail:</label><br>
        <input type="email" class="entry" name="email" placeholder="meno@priklad.org" value="" required><br>
    
        <label for="message">Vaša správa:</label><br>
        <textarea class="message" name="message" maxlength="250" required></textarea><br><br>
    
        <input type="checkbox" name="acceptStatus" required>
        <label>Súhlasím so spracovaním osobných údajov</label><br><br>
        
        <input type="submit" class="submit" name="submitted" value="Odoslať">

    </form>
</main>

<?php
    include_once("partials/footer.php");
?>