<?php
    include_once('partials/header.php');

    $userObject = new User();

    if(isset($_POST['userRegister'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if($password === $confirmPassword) {
            if($userObject->register($email, $password)) {
                echo "<p>Registrácia bola úspešná</p>";

                $loginSuccess = $userObject->login($email,$password);
                if($loginSuccess == true) {
                    header('Location: admin.php');
                    die();
                }

            } else {
                echo "<p>Registrácia zlyhala</p>";
            }
        } else {
            echo "<p>Heslá sa nezhodujú</p>";
        }
    }
?>

    <main> <!-- To Do: Optimalizovať -->
        <br><br><br><br><br>
        <div class="form-box text-center">
            <h1>Registrácia</h1>
            <form action="" method="POST">

                <label for="email">E-mail:</label><br>
                <input type="email" class="entry" name="email" placeholder="meno@priklad.org" required><br>

                <label for="password">Heslo:</label><br>
                <input type="password" class="entry" name="password" placeholder="Heslo" required><br>

                <label for="confirmPassword">Zopakovať heslo:</label><br>
                <input type="password" class="entry" name="confirmPassword" placeholder="Zopakované heslo" required><br><br><br>

                <input type="submit" class="submit" name="userRegister" value="Registrovať sa">

            </form>
        </div><br><br><br>
    </main>

<?php
    include_once('partials/footer.php');
?>