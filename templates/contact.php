<?php
    include_once("partials/header.php");
?>

<main>
    <h1 class="text-center">Máte otázky?</h1><br>

    <div class="form-box text-center">
        <h1>Napíšte nám:</h1>

        <!-- Formulár --> 
        <form action="thankyou.php" method="POST">

            <!-- Meno a priezvisko -->
            <label for="name">Vaše meno a priezvisko:</label><br>
            <input type="name" class="entry" name="name" placeholder="Meno Priezvisko" value="" required><br>

            <!-- Email -->
            <label for="email">Váš e-mail:</label><br>
            <input type="email" class="entry" name="email" placeholder="meno@priklad.org" value="" required><br>

            <!-- Správa -->
            <label for="message">Vaša správa:</label><br>
            <textarea class="message" name="message" placeholder="Sem napíšte Vašu správu" required></textarea><br><br>

            <!-- Súhlas -->
            <input type="checkbox" id="accept" name="acceptStatus" value="1" required>
            <label>Súhlasím so spracovaním osobných údajov</label><br><br>

            <!-- Odoslať -->
            <input type="submit" class="submit" name="submitted" value="Odoslať">

        </form>
    </div>
</main>

<?php
    include_once("partials/footer.php");
?>