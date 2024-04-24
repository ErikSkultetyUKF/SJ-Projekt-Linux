<!-- Footer -->
<footer>
    <div>
        <h2>Kontaktujte nás</h2>
        <p>info@projektlinux.org<br>
        +421 123 456 789<br>
        Tr. A. Hlinku 1, 949 01 Nitra</p>
    </div>
    <div>
        <!-- Použité zdroje -->
        <h2>Použité zdroje:</h2>
        <a href="https://www.linux.com/what-is-linux/" target="_blank">https://www.linux.com/what-is-linux/</a><br>
        <a href="https://gs.statcounter.com/os-market-share/" target="_blank">https://gs.statcounter.com/os-market-share/</a><br>
        <a href="https://www.atatus.com/blog/top-10-linux-distros/" target="_blank">https://www.atatus.com/blog/top-10-linux-distros/</a>
    </div>
    <div>
        <p>©2023-2024<br>Vytvoril a nadizajnoval - Erik Škultéty</p>
    </div>
</footer>

<?php

    $pageName = basename($_SERVER["SCRIPT_NAME"],'.php');
    $pageObject = new Page($pageName);
    $pageObject->addScripts();

?>
</body>
</html>