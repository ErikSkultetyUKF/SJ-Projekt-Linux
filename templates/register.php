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
        <div class="loginbox text-center">
            <h1>Registrácia</h1>
            <form action="" method="POST">

                <label for="email">E-mail:</label><br>
                <input type="email" class="entry" name="email" required><br>

                <label for="password">Heslo:</label><br>
                <input type="password" class="entry" name="password" required><br>

                <label for="confirmPassword">Zopakovať heslo:</label><br>
                <input type="password" class="entry" name="confirmPassword" required><br><br><br>

                <input type="submit" class="submit" name="userRegister" value="Registrovať sa">

            </form><br><br>
        </div><br><br><br>
    </main>

<?php
    include_once('partials/footer.php');
?>