<?php
include_once('partials/header.php');
if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
    header('Location: admin.php');
}
?> 
    <main> <!-- To Do: Optimalizovať -->
        <br><br><br><br><br>
        <div class="loginbox">
        <h1 class="text-center">Prihlásenie</h1><br>
        <form class="text-center" action="" method="POST">
            <input type="email" class="entry" style="width: 60%;" name="email" placeholder="meno@priklad.org"><br>
            <input type="password" class="entry" style="width: 60%;" name="password" placeholder="Heslo"><br><br><br>
            <input type="submit" class="submit" value="Prihlásiť sa" name="userLogin">
        </form>
        <br><br>
        </div><br><br><br>
        <?php

            if(isset($_POST['userLogin'])){
                $email = $_POST['email'];
                $password = $_POST['password']; 

                $userObject = new User();

                $loginSuccess = $userObject->login($email,$password);
                if($loginSuccess == true) {
                    header('Location: admin.php');
                    die();
                } else {
                    echo 'Nesprávne meno alebo heslo';
                }

            }
        
        ?>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 