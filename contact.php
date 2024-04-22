<?php
    include_once("partials/header.php");
?>

<main>

    <h1 class="cent">Kontakt</h1>
    <p class="cent">Náš E-mail: info@projektlinux.org</p>
    <p class="cent">Náš telefón: +421 123 456 789</p>
    <p class="cent">Naša adresa: Tr. A. Hlinku 1, 949 01 Nitra</p>

    <!-- Formulár -->
    <h2 class="cent">Napíšte nám:</h2>

    <form class="cent" action="thankyou.php">

        <label for="email">E-mail:</label><br>
        <input type="email" class="email" name="email" placeholder="meno@priklad.org" value="" required><br>
    
        <label for="note">Poznámka:</label><br>
        <textarea class="note" name="note" maxlength="180" required></textarea><br><br>
    
        <input type="checkbox" required>
        <label>Súhlasím so spracovaním osobných údajov</label><br><br>
        
        <input type="submit" class="submit" value="Odoslať">

    </form>
</main>

<?php
    include_once("partials/footer.php");
?>