<?php
    /* Work In Progress 
        - experimentovanie s php funkciami
        - php classes budú vytvárané zároveň s nimi
    */

    function generateAccordionDistros(array $headings, array $text, array $altText, String $imgFolder) {
    $img_files = glob($img_folder . '*.png');

    for ($i = 0; $i < count($img_files); $i++) {

        echo('<button class="accordion">'.$headings[$i].'</button>');
        echo('<div class="panel">');
        echo('<p>'.$text.'</p>');
        echo('<img class="distro_img" src="$'.img_files.'" alt="'.$altText.'"></div>');
    }
}
?>