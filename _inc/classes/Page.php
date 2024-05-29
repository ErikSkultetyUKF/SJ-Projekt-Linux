<?php

    class Page {

        private $pageName;

        public function __construct($pageName) {
            $this->pageName = $pageName;
        }

        // Pridať štýly
        function addStylesheets() {
            echo('<link rel="stylesheet" href="../assets/css/style.css">');
            echo('<link rel="stylesheet" href="../assets/css/desktop.css">');
            echo('<link rel="stylesheet" href="../assets/css/mobile.css">');

            switch($this->pageName) {
            case 'home':
                echo('<link rel="stylesheet" href="../assets/css/slider.css">');
                break;
            case 'linux':
                echo('<link rel="stylesheet" href="../assets/css/accordion.css">');
                break; 
            case 'distributions':
                echo('<link rel="stylesheet" href="../assets/css/gallery.css">');
                break; 
            case 'community':
                echo('<link rel="stylesheet" href="../assets/css/gallery.css">');
                break;
            case 'profile':
                echo('<link rel="stylesheet" href="../assets/css/accordion.css">');
                break;
            } 
        }

        // Pridať skripty
        function addScripts() {
            echo('<script src="../assets/js/script.js"></script>');

            switch($this->pageName) {
            case 'home':
                echo('<script src="../assets/js/slider.js"></script>');
                break;
            case 'linux':
                echo('<script src="../assets/js/accordion.js"></script>');
                break;
            case 'profile':
                echo('<script src="../assets/js/accordion.js"></script>');
                break;
            } 
        }
    }
?>