<?php
    include_once('partials/header.php');
?> 
<main>
    <?php    
        $distributionObject = new Distribution();
        $distributionSingle = $distributionObject->selectSingle();

        echo '<div id="distro-heading">';
        echo '<img id="logo" src="'.$distributionSingle->logo.'" alt="'.$distributionSingle->logo_description.'">';
        echo '<h1>'.$distributionSingle->name.'</h1>';
        echo '</div>';
        echo '<img class="distro-img" src="'.$distributionSingle->image.'" alt="'.$distributionSingle->image_description.'">';
        echo '<p>'.$distributionSingle->description.'</p>';
        echo '<h3>Webová stránka:</h3>';
        echo '<div class="zdroje" style="margin-top: 0;">';
        echo '<a href="'.$distributionSingle->website.'" target="_blank">'.$distributionSingle->website.'</a>';
        echo '</div>';
    ?>
    
    <div class="zdroje">
    <h3>Použité zdroje:</h3>
        <a href="https://www.atatus.com/blog/top-10-linux-distros/" target="_blank">https://www.atatus.com/blog/top-10-linux-distros/</a>
    </div>
</main>
<?php
    include_once('partials/footer.php');
?> 