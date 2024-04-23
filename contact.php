<?php
    include_once("partials/header.php");
?>

<main>

    <h1 class="cent">Máte otázky?</h1>

    <!-- Formulár -->
    <h2 class="cent">Napíšte nám:</h2>

    <form class="cent" action="thankyou.php">

        <label for="email">Váš e-mail:</label><br>
        <input type="email" class="email" name="email" placeholder="meno@priklad.org" value="" required><br>
    
        <label for="message">Vaša správa:</label><br>
        <textarea class="message" name="message" maxlength="250" required></textarea><br><br>
    
        <input type="checkbox" required>
        <label>Súhlasím so spracovaním osobných údajov</label><br><br>
        
        <input type="submit" class="submit" value="Odoslať">

    </form>
</main>

<?php
    include_once("partials/footer.php");
?>