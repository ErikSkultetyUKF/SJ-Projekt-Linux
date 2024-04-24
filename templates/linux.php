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

    <?php
        $linuxInfoObject = new LinuxInfo();
        $linuxInfo = $linuxInfoObject->select();

        for ($i = 0; $i < count($linuxInfo); $i++) {
          echo '<div class="accordion">'.$linuxInfo[$i]->title.'</div>';
          echo '<div class="accordion-content"">';
          echo '<p>'.$linuxInfo[$i]->text.'</p>';
          echo '</div>';
        }
    ?>

    <!-- Tabuľka - Podiel na trhu -->
    <div class="accordion">Podiel na trhu</div>
    <div class="accordion-content">
        <table>
            <tr>
                <th colspan=2>Podiel na trhu - všetky platformy (marec 2024)</th>
            </tr>
            <tr>
                <th>Operačný systém</th>
                <th>Podiel</th>
            </tr>

            <?php
              $marketShareObject = new MarketShare();
              $marketShare = $marketShareObject->select();

              for ($i = 0; $i < count($marketShare); $i++) {
                echo '<tr>';
                echo '<td>'.$marketShare[$i]->operating_system.'</td>';
                echo '<td class="right">'.$marketShare[$i]->share.'</td>';
                echo '</tr>';
              }
            ?>
        </table>
    </div>

</main>

<?php
    include_once("partials/footer.php");
?>