<h1 class="text-center">Používatelia</h1>

<?php
    $userObject = new User();
    $users = $userObject->select();

    // Odstránenie používateľa
    if(isset($_POST['deleteUser']) && $_SESSION['isAdmin'] == 1) {
        $userId = $_POST['deleteUser'];
        $userObject->delete($userId);
        header('Location: profile.php');
    }

    // Vygenerovať hlavičku tabluľky
    echo '<table class="text-center table-center">';
    echo '<tr>
            <th>Používateľské meno</th>
            <th>Email</th>
            <th>Rola</th>
            <th>Vymazať</th>
          </tr>'; // Vymazanie je potvrďované cez JS confirm()

    // Vygenerovať riadky tabuľky
    foreach($users as $u) {
        echo '<tr>';
        echo '<td>'.$u->username;'</td>';
        echo '<td>'.$u->email;'</td>';
        echo '<td>'.$u->role;'</td>';

        // Odstrániť používateľa - Tlačidlo
        echo '<td>
                <form class="text-center" action="" method="POST">
                    <button class="table-button" type="submit" name="deleteUser" value="'.$u->id.'"'.' onclick="return checkDelete()"><img src="../assets/img/misc/delete.png" class="table-button"></button>
                </form>
                </td>';
        echo '</tr>';
    }  
    echo '</table>';
?>