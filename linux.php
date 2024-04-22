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
        echo '<button class="accordion">'.$linuxInfo[$i]->title.'</button>';
        echo '<div class="accordion-content"">';
        echo '<p>'.$linuxInfo[$i]->text.'</p>';
        echo '</div>';
    }
    ?>

    <!-- Tabuľka - Podiel na trhu -->
    <button class="accordion">Podiel na trhu</button>
    <div class="accordion-content">
    <table>
        <tr><th colspan=2>Podiel na trhu - všetky platformy</th>
        </tr>
        <tr><th>Operačný systém</th>
          <th>Podiel</th>
        </tr>
        <tr><td>Android</td>
          <td class="right">38.27%</td>
        </tr>
        <tr><td>Windows</td>
          <td class="right">30.60%</td>
        </tr>
        <tr><td>iOS</td>
          <td class="right">16.54%</td>
        </tr>
        <tr><td>OS X</td>
          <td class="right">9.40%</td>
        </tr>
        <tr><td>Chrome OS</td>
          <td class="right">1.66%</td>
        </tr>
        <tr><td>Linux</td>
          <td class="right">1.44%</td>
        </tr>
    </table>
    </div>
  
</main>

<?php
    include_once("partials/footer.php");
?>