<!-- Footer -->
<footer>
    <!-- Kontakt -->
    <div>
        <h2>Kontaktujte nás</h2>
        <p>info@projektlinux.org<br>
        +421 123 456 789<br>
        Tr. A. Hlinku 1, 949 01 Nitra</p>
    </div>

    <!-- Copyright -->
    <div>
        <h3>Zdrojový kód:</h3>
        <p><a href="https://github.com/ErikSkultetyUKF/Skultety-SJ-Projekt-Linux" target="_blank">https://github.com/ErikSkultetyUKF/Skultety-SJ-Projekt-Linux</a></p>
        <h3>Vytvorené pre vzdelávacie účely</h3>
        <p><b>©2023-2024 Vytvoril a nadizajnoval: Erik Škultéty</b></p>
    </div>
</footer>

<?php

    $pageName = basename($_SERVER["SCRIPT_NAME"],'.php');
    $pageObject = new Page($pageName);
    $pageObject->addScripts();

?>
</body>
</html>