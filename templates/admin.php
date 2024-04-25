<?php
include_once('partials/header.php');
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    header('Location: 404.php');
}
?> 
    <main>
        <h1>Admin rozhranie</h1>
            <h2 class="cent">Kontakty</h2>
            <?php
                $contactObject = new Contact();
                $contacts = $contactObject->select();

                echo '<table>';
                echo '<tr><th>Meno</th>
                        <th>Email</th>
                        <th>Správa</th>
                        <th>Súhlas</th>
                    </tr>';

                foreach($contacts as $c){
                    echo '<tr>';
                    echo '<td>'.$c->name;'</td>';
                    echo '<td>'.$c->email;'</td>';
                    echo '<td>'.$c->message;'</td>';
                    echo '<td>'.$c->accept_status;'</td>';
                    echo '</tr>';
                }  
                echo '</table>';
            ?>
            
    </main>
    
<?php
    include_once('partials/footer.php')
?> 