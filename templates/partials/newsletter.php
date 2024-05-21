
<h1 class="text-center" style="font-size: 3.5rem">Newsletter</h1>
    <?php

    $newsletterObject = new Newsletter();
    $newsletters = $newsletterObject->select();

    for ($i = 0; $i < count($newsletters); $i++) {
        echo '<article class="text-left margin-bottom-5">';
        echo '<h1 class="textc-base">'.$newsletters[$i]->title.'</h1>';
        echo '<p>'.$newsletters[$i]->author.'<br><span class="date">'.$newsletters[$i]->date.'</span></p>';
        echo '<hr>';
        echo '<div class="text-justify"><p>'.$newsletters[$i]->text.'</p></div>';
        echo '</article>';
    }
?>