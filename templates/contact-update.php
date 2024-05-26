<?php
    include_once('partials/header.php');

    // Používateľ nie je prihlásený
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
    
    $contactObject = new Contact();

    // Získanie kontaktu
    if(isset($_POST['editContact'])) {
        $editContactId = $_POST['editContact'];
        $contactData = $contactObject->selectSingle($editContactId);
    }

    // Získanie dát o kontakte
    if($contactData) {
        $name = $contactData->name;
        $email = $contactData->email;
        $message = $contactData->message;
    }

    // Získanie nových dát
    if(isset($_POST['editContactId'], $_POST['name'], $_POST['email'], $_POST['message'])) {
        $editContactId = $_POST['editContactId'];
        $newData = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message']
        );
    
        $contactObject->edit($editContactId, $newData); // Upraviť dáta o kontakte
    
        header('Location: profile.php');
    }
    
?>
<main>
    <div class="form-box text-center margin-middle-4">
        <h1>Upraviť kontakt</h1><br>

        <!-- Formulár --> 
        <form action="" method="POST">

            <!-- Upraviť meno a priezvisko -->
            <label for="name">Meno a priezvisko:</label><br>
            <input type="text" class="entry" name="name" placeholder="Meno Priezvisko" value="<?php echo $name?>"><br>

            <!-- Upraviť email -->
            <label for="email">Email:</label><br>
            <input type="email" class="entry" name="email" placeholder="meno@priklad.org" value="<?php echo $email?>"><br>

            <!-- Upraviť správu -->
            <label for="message">Správa:</label><br>
            <textarea class="message" name="message"><?php echo $message?></textarea><br><br><br>

            <!-- Uložiť zmeny -->
            <button type="submit" class="submit" name="editContactId" value="<?php echo $editContactId?>">Uložiť zmeny</button>

        </form>
    </div>
</main>
    
<?php
    include_once('partials/footer.php')
?> 