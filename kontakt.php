<?php
    include "partials/header.php";
?>

<main>
    <h1 class="cent">Kontakt</h1>
    <p class="cent">Náš E-mail: info@projektlinux.org</p>
    <p class="cent">Náš telefón: +421 123 456 789</p>
    <p class="cent">Naša adresa: Tr. A. Hlinku 1, 949 01 Nitra</p>

    <!-- formulár -->
    <h2 class="cent">Napíšte nám:</h2>
    <form class="cent" action="dakujeme.php">
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" placeholder="meno@priklad.org" value="" required><br>
    
        <label for="poznamka">Poznámka:</label><br>
        <textarea id="poznamka" name="poznamka" maxlength="150"></textarea><br><br>
    
        <input type="checkbox" required>
        <label>Súhlasím so spracovaním osobných údajov</label><br><br>
        
        <input type="submit" id="odoslat" value="Odoslať">
    </form>
</main>

<footer>
    <p>©2023; Projekt Linux; Nadizajnoval - Erik Škultéty</p>
    <!-- Každá podstránka má zoznam zdrojov, ktoré boli pre jej tvorbu využité, žiadna neobsahuje všetky zdroje naraz -->
</footer>
<script src="js/app.js"></script>

</body>
</html>