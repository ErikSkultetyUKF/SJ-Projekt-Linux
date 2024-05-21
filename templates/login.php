<?php
    include_once('partials/header.php');

    if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        header('Location: admin.php');
    }
?> 
    <main>
        <div class="form-box text-center margin-middle-7">
            <h1>Prihlásenie</h1><br>
            <form action="" method="POST">

                <label for="email">E-mail:</label><br>
                <input type="email" class="entry" style="width: 60%;" name="email" placeholder="meno@priklad.org"><br>

                <label for="password">Heslo:</label><br>
                <input type="password" class="entry" style="width: 60%;" name="password" placeholder="Heslo"><br><br><br>

                <input type="submit" class="submit" value="Prihlásiť sa" name="userLogin">

            </form>
        </div>
        <?php

            if(isset($_POST['userLogin'])){
                $email = $_POST['email'];
                $password = $_POST['password']; 

                $userObject = new User();

                $loginSuccess = $userObject->login($email,$password);
                if($loginSuccess == true) {
                    header('Location: profile.php');
                    die();
                } else {
                    echo '<p>Nesprávne meno alebo heslo</p>';
                }

            }
        ?>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 