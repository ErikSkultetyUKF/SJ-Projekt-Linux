<!-- Footer -->
<!-- Inline štýl, footer ignoruje css-->
<footer style="text-align: center; font-size: 1rem;">
    <p>©2023-2024 Nadizajnoval - Erik Škultéty</p>
    <p>Zdroje:</p>
    <a href="https://www.linux.com/what-is-linux/" target="_blank">https://www.linux.com/what-is-linux/</a><br>
    <a href="https://gs.statcounter.com/os-market-share/" target="_blank">https://gs.statcounter.com/os-market-share/</a><br>
    <a href="https://www.atatus.com/blog/top-10-linux-distros/" target="_blank">https://www.atatus.com/blog/top-10-linux-distros/</a>
</footer>

<?php

    $pageName = basename($_SERVER["SCRIPT_NAME"],'.php');
    $pageObject = new Page($pageName);
    $pageObject->addScripts();

?>
</body>
</html>