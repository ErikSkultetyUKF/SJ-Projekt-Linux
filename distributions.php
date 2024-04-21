<?php
    include_once("partials/header.php");
?>

<main>
    <!-- Základné informácie -->
    <h1>Čo je to “distribúcia”?</h1>

    <p>Linux má množstvo rôznych verzií, ktoré vyhovujú akémukoľvek typu používateľa. Od nových používateľov až po náročných používateľov nájdete „príchuť“ Linuxu, ktorá bude zodpovedať vašim potrebám. Tieto verzie sa nazývajú distribúcie. Takmer každá distribúcia Linuxu sa dá stiahnuť zadarmo, napáliť na disk (alebo USB kľúč) a nainštalovať.</p>

    <p>Každá distribúcia má iný pohľad na pracovnú plochu. Niektoré sa rozhodnú pre veľmi moderné používateľské rozhrania, zatiaľ čo iné zostanú pri tradičnejšom prostredí pracovnej plochy.</p>
    
    <!-- Vybrané distribúcie Linuxu, a základné informácie o nich -->
    <h1>Populárne distribúcie Linuxu</h1>

    <?php
        $distributionObject = new Distribution();
        $distribution = $distributionObject->select();

        for ($i = 0; $i < count($distribution); $i++) {
            echo '<button class="accordion">'.$distribution[$i]->name.'</button>';
            echo '<div class="panel"">';
            echo '<p>'.$distribution[$i]->description.'</p>';
            echo '<img class="distro-img" src="'.$distribution[$i]->image.'" alt="'.$distribution[$i]->image_description.'">';
            echo '</div>';
        }
    ?>
    
</main>

<?php
    include_once("partials/footer.php");
?>