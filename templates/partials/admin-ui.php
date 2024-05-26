<h1 class="text-center">Admin rozhranie</h1>
<h1 class="text-center">Kontakty</h1>

<?php
    $contactObject = new Contact();
    $contacts = $contactObject->select();

    // Odstránenie kontaktu
    if(isset($_POST['deleteContact'])){
        $contactId = $_POST['deleteContact'];
        $contactObject->delete($contactId);
        header('Location: profile.php');
    }

    // Vygenerovať hlavičku tabluľky
    echo '<table class="text-center">';
    echo '<tr>
            <th>Meno</th>
            <th>Email</th>
            <th>Správa</th>
            <th>Súhlas</th>
            <th>Upraviť</th>
            <th>Vymazať</th>
        </tr>';

    // Vygenerovať riadky
    foreach($contacts as $c){
        echo '<tr>';
        echo '<td>'.$c->name;'</td>';
        echo '<td>'.$c->email;'</td>';
        echo '<td>'.$c->message;'</td>';
        echo '<td>'.$c->accept_status;'</td>';
        // Tlačidlo upraviť
        echo '<td>
                <form class="text-center" action="contact-update.php" method="POST">
                    <button class="table-button" type="submit" name="editContact" value="'.$c->id.'"'.'><img src="/Skultety-SJ-Projekt-Linux/assets/img/misc/edit.png" class="table-button"></button>
                </form>
                </td>';
        // Tlačidlo odstrániť
        echo '<td>
                <form class="text-center" action="" method="POST">
                    <button class="table-button" type="submit" name="deleteContact" value="'.$c->id.'"'.'><img src="/Skultety-SJ-Projekt-Linux/assets/img/misc/delete.png" class="table-button"></button>
                </form>
                </td>';
        echo '</tr>';
    }  
    echo '</table>';
?>