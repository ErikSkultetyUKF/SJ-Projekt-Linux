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

    <div class="accordion">
        <?php
            $distributionObject = new Distribution();
            $distribution = $distributionObject->select();

            for ($i = 0; $i < count($distribution); $i++) {
                echo('<div class="gallery">');
                echo('<a href="../templates/distribution.php?id='.$distribution[$i]->id.'">');
                echo('<img style="height: 210px; width: 210px;" src="'.$distribution[$i]->logo.'" alt="'.$distribution[$i]->logo_description.'">');
                echo('<div class="gallery-text text-center">'.$distribution[$i]->name.'</div></a>');
                echo('</div>');
            }
        ?>
    </div>

    <div class="zdroje">
    <h3>Použité zdroje:</h3>
        <a href="https://www.linux.com/what-is-linux/" target="_blank">https://www.linux.com/what-is-linux/</a>
    </div>
 
</main>

<?php
    include_once("partials/footer.php");
?>