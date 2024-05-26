<?php
    include_once('partials/header.php');

    $userObject = new User();

    // Registrácia
    if(isset($_POST['userRegister'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        // Heslá sa zhodujú
        if($password === $confirmPassword) {
            if($userObject->register($email, $password)) { // Zaregistrovanie
                echo "<p>Registrácia bola úspešná</p>";

                $loginSuccess = $userObject->login($email,$password); // Automatické prihlásenie po zaregistrovaní
                if($loginSuccess == true) {
                    header('Location: profile.php');
                }
            } else { // Zlyhanie registrácie
                echo "<p>Registrácia zlyhala</p>";
            }
        } else { // Heslá sa nezhodujú
            echo "<p>Heslá sa nezhodujú</p>";
        }
    }
?>

<main>
    <div class="form-box text-center margin-middle-7">
        <h1>Registrácia</h1>

        <!-- Formulár -->
        <form action="" method="POST">

            <!-- Email -->
            <label for="email">E-mail:</label><br>
            <input type="email" class="entry" name="email" placeholder="meno@priklad.org" required><br>

            <!-- Heslo -->
            <label for="password">Heslo:</label><br>
            <input type="password" class="entry" name="password" placeholder="Heslo" required><br>

            <!-- Zopakovať heslo -->
            <label for="confirmPassword">Zopakujte heslo:</label><br>
            <input type="password" class="entry" name="confirmPassword" placeholder="Zopakované heslo" required><br><br><br>

            <!-- Registrovať sa -->
            <input type="submit" class="submit" name="userRegister" value="Registrovať sa">

        </form>
    </div>
</main>

<?php
    include_once('partials/footer.php');
?>