<?php

class Page {

    private $pageName;

    public function __construct($pageName)
    {
        $this->pageName = $pageName;
    }

    function addScripts(){
        switch($this->pageName){
        case 'index':
            echo('<script src="./assets/js/slider.js"></script>');
            break;
        case 'linux':
            echo('<script src="./assets/js/accordion.js"></script>');
            break;  
        case 'distributions':
            echo('<script src="./assets/js/accordion.js"></script>');
            break;  
        } 
    }

}
?>