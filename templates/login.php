<?php
    include_once('partials/header.php');

    // Používateľ je prihlásený
    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        header('Location: profile.php');
    }

    // Prihlásenie
    if(isset($_POST['userLogin'])){
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $userObject = new User();
        $loginSuccess = $userObject->login($email,$password);

        // Používateľ je zaregistrovaný
        if($loginSuccess == true) {
            header('Location: profile.php');
        } else {
            echo '<p>Nesprávne meno alebo heslo</p>';
        }
    }
?>

<main>
    <div class="form-box text-center margin-middle-7">
        <h1>Prihlásenie</h1><br>

        <!-- Formulár -->
        <form action="" method="POST">

            <!-- Email -->
            <label for="email">E-mail:</label><br>
            <input type="email" class="entry" style="width: 60%;" name="email" placeholder="meno@priklad.org"><br>

            <!-- Heslo -->
            <label for="password">Heslo:</label><br>
            <input type="password" class="entry" style="width: 60%;" name="password" placeholder="Heslo"><br><br><br>

            <!-- Prihlásiť sa -->
            <input type="submit" class="submit" value="Prihlásiť sa" name="userLogin">

        </form>
    </div>
</main>

<?php
    include_once('partials/footer.php')
?> 