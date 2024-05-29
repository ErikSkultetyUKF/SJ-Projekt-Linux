<?php
    include_once("partials/header.php");
?>

<link rel="stylesheet" href="../assets/css/form.css">
<main>
    <?php
        // Kontakt bol odoslaný
        if(isset($_POST['submitted'])) {
            $data = array(
                'name'=>$_POST['name'],
                'email'=>$_POST['email'],
                'message'=>$_POST['message'],
                'acceptStatus'=>$_POST['acceptStatus'],
            );
            // Vložiť kontakt do db
            $contactObject = new Contact();
            $contactObject->insert($data);

            echo '<h1 class="h-xxxlarge text-center margin-top-3">Ďakujeme</h1>
                  <div class="text-center margin-bottom-12">
                      <a href="home.php" class="submit">Domov</a>
                  </div>';

        } else {
            echo '<h1 class="h-xxxlarge text-center margin-top-3">Formulár nebol odoslaný</h1>
                  <div class="text-center margin-bottom-12">
                      <a href="contact.php" class="submit">Späť</a>
                  </div>';
        }
    ?>
</main>

<?php
    include_once("partials/footer.php");
?>