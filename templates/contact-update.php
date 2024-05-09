<?php
    include_once('partials/header.php');

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
    
    $contactObject = new Contact();

    if(isset($_POST['editContact'])) {
        $editContactId = $_POST['editContact'];
        $contactData = $contactObject->selectSingle($editContactId);
    }

    if($contactData) {
        $name = $contactData->name;
        $email = $contactData->email;
        $message = $contactData->message;
    }
    if(isset($_POST['editContactId'], $_POST['name'], $_POST['email'], $_POST['message'])) {
        $editContactId = $_POST['editContactId'];
        $newData = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        );
    
        $contactObject->edit($editContactId, $newData);
    
        header('Location: admin.php');
        exit();
    }
    
?>
<main> <!-- To Do: Optimalizovať -->
    <br><br><br><br><br>
    <div class="form-box text-center">
        <h1>Upraviť kontakt</h1><br>

        <form action="" method="POST">
            <label for="name">Meno:</label><br>
            <input type="text" class="entry" name="name" placeholder="Meno Priezvisko" value="<?php echo $name?>"><br>

            <label for="email">Email:</label><br>
            <input type="email" class="entry" name="email" placeholder="meno@priklad.org" value="<?php echo $email?>"><br>

            <label for="message">Správa:</label><br>
            <textarea class="message" name="message"><?php echo $message?> </textarea><br><br><br>

            <button type="submit" class="submit" name="editContactId" value="<?php echo $editContactId?>">Uložiť zmeny</button>
        </form><br><br>
    </div><br><br><br>
</main>
    
<?php
    include_once('partials/footer.php')
?> 