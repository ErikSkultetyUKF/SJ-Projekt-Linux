<?php
    include_once('partials/header.php');

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('Location: 404.php');
    }
?> 
    <main>
        <h1>Admin rozhranie</h1>
            <h2 class="text-center">Kontakty</h2>
            <?php
                $contactObject = new Contact();
                $contacts = $contactObject->select();

                if(isset($_POST['deleteContact'])){
                    $contactId = $_POST['deleteContact'];
                    $contactObject->delete($contactId);
                    header('Location: admin.php');
                    die();
                }

                echo '<table>';
                echo '<tr>
                        <th>Meno</th>
                        <th>Email</th>
                        <th>Správa</th>
                        <th>Súhlas</th>
                        <th>Upraviť</th>
                        <th>Vymazať</th>
                    </tr>';

                foreach($contacts as $c){
                    echo '<tr>';
                    echo '<td>'.$c->name;'</td>';
                    echo '<td>'.$c->email;'</td>';
                    echo '<td>'.$c->message;'</td>';
                    echo '<td>'.$c->accept_status;'</td>';
                    echo '<td>
                            <form class="text-center" action="contact-update.php" method="POST">
                              <button class="table-button" type="submit" name="editContact" value="'.$c->id.'"'.'><img src="/Skultety-SJ-Projekt-Linux/assets/img/misc/edit.png" style="width: 16px;"></button>
                            </form>
                          </td>';
                    echo '<td>
                            <form class="text-center" action="" method="POST">
                                <button class="table-button" type="submit" name="deleteContact" value="'.$c->id.'"'.'><img src="/Skultety-SJ-Projekt-Linux/assets/img/misc/delete.png" style="width: 16px;"></button>
                            </form>
                         </td>';
                    echo '</tr>';
                }  
                echo '</table>';
            ?>
            
    </main>
    
<?php
    include_once('partials/footer.php')
?> 