<?php
    include_once("partials/header.php");
?>

<main>

    <!-- Základné informácie -->
    <h1>Čo je to Linux?</h1>
        <p>Rovnako ako Windows, iOS a Mac OS, aj Linux je operačný systém. V skutočnosti jedna z najpopulárnejších platforiem na svete, Android, je poháňaná operačným systémom Linux.</p>

        <p>Linux existuje od polovice 90-tych rokov a odvtedy dosiahol používateľskú základňu, ktorá pokrýva celý svet.</p>

        <p>Od smartfónov po autá, superpočítače a domáce spotrebiče, domáce desktopy až po podnikové servery, operačný systém Linux je všade.</p>

        <p>Ale okrem toho, že Linux je platformou desktopov, serverov a vstavaných systémov na celom svete, je jedným z najspoľahlivejších, najbezpečnejších a bezstarostných operačných systémov.</p>

    <div class="accordion">
        <?php
            $linuxInfoObject = new LinuxInfo();
            $linuxInfo = $linuxInfoObject->select();

            for ($i = 0; $i < count($linuxInfo); $i++) {
            echo '<div class="accordion-button">'.$linuxInfo[$i]->title.'</div>';
            echo '<div class="accordion-content"">';
            echo '<p>'.$linuxInfo[$i]->text.'</p>';
            echo '</div>';
            }
        ?>

        <!-- Obrázok - Podiel na trhu -->
        <div class="accordion-button">Podiel na trhu</div>
        <div class="accordion-content">
            <!-- Neresponzívne -->
            <img id="chart" src="/Skultety-SJ-Projekt-Linux/assets/img/misc/os-market-share-chart.png" alt="os-market-share-chart">
        </div>
    </div>

    <div class="zdroje">
        <h3>Použité zdroje:</h3>
        <a href="https://www.linux.com/what-is-linux/" target="_blank">https://www.linux.com/what-is-linux/</a><br>
        <a href="https://gs.statcounter.com/os-market-share/" target="_blank">https://gs.statcounter.com/os-market-share/</a>
    </div>

</main>

<?php
    include_once("partials/footer.php");
?>