<?php
    include_once("partials/header.php");
?>

<main>
    <!-- Základné informácie, úmeselne nie sú ako akordión -->
    <h1>Čo je to Linux?</h1>
        <p>Rovnako ako Windows, iOS a Mac OS, aj Linux je operačný systém. V skutočnosti jedna z najpopulárnejších platforiem na svete, Android, je poháňaná operačným systémom Linux.</p>

        <p>Linux existuje od polovice 90-tych rokov a odvtedy dosiahol používateľskú základňu, ktorá pokrýva celý svet.</p>

        <p>Od smartfónov po autá, superpočítače a domáce spotrebiče, domáce desktopy až po podnikové servery, operačný systém Linux je všade.</p>

        <p>Ale okrem toho, že Linux je platformou desktopov, serverov a vstavaných systémov na celom svete, je jedným z najspoľahlivejších, najbezpečnejších a bezstarostných operačných systémov.</p>

    <!-- Prečo používať Linux? -->
    <button class="accordion">Prečo používať Linux?</button>
    <div class="panel">
        <p>Toto je otázka, ktorú si kladie väčšina ľudí. Prečo sa obťažovať učením sa úplne iného počítačového prostredia, keď operačný systém dodávaný s väčšinou stolných počítačov, notebookov a serverov funguje dobre?</p>

        <p>Pre zodpovedanie tejto otázky, položme si ďalšiu otázku. Funguje operačný systém, ktorý momentálne používate, naozaj „v pohode“? Alebo sa ocitnete v boji s prekážkami, ako sú vírusy, malvér, spomalenia, zlyhania, nákladné opravy a licenčné poplatky?</p>

        <p>Ak bojujete s vyššie uvedeným, Linux môže byť pre vás ideálnou platformou. Linux sa vyvinul do jedného z najspoľahlivejších počítačových ekosystémov na planéte. Skombinujte túto spoľahlivosť s nulovými vstupnými nákladmi a máte dokonalé riešenie pre platformu stolných počítačov.</p>
    </div>

    <!-- Open Source -->    
    <button class="accordion">Open source</button>
    <div class="panel">
        <p>Linux je tiež distribuovaný pod licenciou open source. Open source sa riadi týmito kľúčovými princípmi:</p>
    
        <!-- Zoznam - princípy open source -->
        <ul>
            <li>Sloboda spustiť program na akýkoľvek účel.</li>
            <li>Sloboda študovať, ako program funguje, a meniť ho tak, aby robil to, čo chcete.</li>
            <li>Sloboda redistribúcie kópií, aby ste mohli pomôcť svojmu blížnemu.</li>
            <li>Sloboda distribuovať kópie vašich upravených verzií ostatným.</li>
        </ul>
        <p>Tieto princípy sú kľúčové pre pochopenie komunity, ktorá spolupracuje na vytváraní platformy Linux. Linux je bezpochyby operačný systém, ktorý je „od ľudí, pre ľudí“. Takisto sú hlavným faktorom, prečo si veľa ľudí vyberá Linux. Ide o slobodu a slobodu používania a slobodu výberu.</p>
    </div>

    <!-- Inštalovanie Linuxu -->   
    <button class="accordion">Inštalovanie Linuxu</button>
    <div class="panel">
        <p>Pre mnohých ľudí sa myšlienka inštalácie operačného systému môže zdať ako veľmi náročná úloha. Verte tomu alebo nie, Linux ponúka jednu z najjednoduchších inštalácií zo všetkých operačných systémov.</p>
        <p>V skutočnosti väčšina verzií Linuxu ponúka to, čo sa nazýva Live distribúcia, čo znamená, že operačný systém spúšťate z USB flash disku bez toho, aby ste na pevnom disku robili akékoľvek zmeny. Získate plnú funkčnosť bez toho, aby ste sa museli zaviazať k inštalácii.</p>
        <p>Keď ho vyskúšate a rozhodnete sa ho použiť, jednoducho dvakrát kliknite na ikonu „Inštalovať“ a prejdite jednoduchým sprievodcom inštaláciou. to je všetko. Po dokončení inštalácie systém reštartujte a ste pripravení ho využívať.</p>
    </div>

    <!-- Tabuľka - Podiel na trhu -->
    <button class="accordion">Podiel na trhu
    </button>
    <div class="panel">
    <table>
        <tr>
          <th colspan=2>Podiel na trhu - všetky platformy</th>
        </tr>
        <tr>
          <th>Operačný systém</th>
          <th>Podiel</th>
        </tr>
        <tr>
          <td>Android</td>
          <td class="td_pravo">38.27%</td>
        </tr>
        <tr>
          <td>Windows</td>
          <td class="td_pravo">30.60%</td>
        </tr>
        <tr>
          <td>iOS</td>
          <td class="td_pravo">16.54%</td>
        </tr>
        <tr>
          <td>OS X</td>
          <td class="td_pravo">9.40%</td>
        </tr>
        <tr>
          <td>Chrome OS</td>
          <td class="td_pravo">1.66%</td>
        </tr>
        <tr>
          <td>Linux</td>
          <td class="td_pravo">1.44%</td>
        </tr>
    </table>
    </div>
</main>

<?php
    include_once("partials/footer.php");
?>