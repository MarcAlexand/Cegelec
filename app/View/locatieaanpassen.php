<?php 
    $locatie = new Locatie( new DbLocatie);
    $locatie_plaats = $locatie->getLocatieById($_GET["id"]);
    $locatie_naam = $locatie->getLocatieByNaam($locatie_plaats["locatie_naam"]);

    
    ?>
<div id="loginwrap">
   
    <h2>Locatie aanpassen :  <?php echo $locatie_naam[0]['locatie_naam']; ?></h2>
     <nav>
<div id="">
<a href="?page=dashboard">
    <img src="img/dashboardbutton.png" />
</a>
</div>

<?php if (!$gebruiker->heeftRecht($_SESSION['rechten'], $recht_array['Leerling'])) { ?>
    <a href="?page=locatie">Alle Locaties</a>
<?php } ?>
<a href="?page=locatie&subpage=nieuwelocatie">Nieuwe Locatie</a>

</nav>
    
    <?php 
    
    $error_array = array();
    
    if(isset($_POST['submit_toevoegen'])) {
    /**
     * Nieuwe instantie van Locatie maken.
     * Alles setten.
     */
    
    try {
        $locatie = new Locatie();
        $locatie->setLocatieId($_GET["id"]);
        $locatie->setLocatieNaam($_POST['locatie_naam']);
        $locatie->setLocatieTelefoonnummer($_POST['locatie_telefoonnummer']);
        $locatie->setLocatieStraat($_POST['locatie_straat']);
        $locatie->setLocatiePostcode($_POST['locatie_postcode']);
        $locatie->setLocatiePlaats($_POST['locatie_plaats']);
        $locatie->setLocatieActief($_POST['locatie_actief']);
    
    } catch (Exception $e) {
        $error_array['locatie_naam']
                    ['locatie_telefoonnummer']
                    ['locatie_straat']
                    ['locatie_postcode']
                    ['locatie_plaats']
                    ['locatie_actief']
                = $e->getMessage();
        
    }
  
     // Locatie opslaan in database
     
    if( empty($error_array)){
    $locatie->updateLocatie();
    
    
    header("Location:http://actemium:8888/public/index.php?page=locatie");
    echo "<div id='result'>";
    echo 'Uw locatie is <strong>succesvol</strong> aangepast!';
    echo "</div>";
    } 
}

    
    if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
    <form method="POST" action="#" id="ticketform">
        <section id="gebruiker">
        <table>
            <tr>
                <td colspan="2" style="text-align: center">
                    <h4>Locaties aanpassen</h4>
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                    Naam: 
                </td>
                <td>
                    <input type="text" name="locatie_naam" value="<?php echo $locatie_naam[0]['locatie_naam']; ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                    Telefoonnummer: 
                </td>
                <td>
                    <input type="text" name="locatie_telefoonnummer" value="<?php echo $locatie_naam[0]['locatie_telefoonnummer']; ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                        Activeren : 
                </td>
                <td>
                    <select name="locatie_actief">
                        <option value="1">
                            Activeren
                        </option>
                        <option value="0">
                            Deactiveren
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center">
                    <b>Adres gegevens</b>
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                    Straat: 
                </td>
                <td>
                    <input type="text" name="locatie_straat" value="<?php echo $locatie_naam[0]['locatie_straat']; ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                    Postcode: 
                </td>
                <td>
                    <input type="text" name="locatie_postcode" value="<?php echo $locatie_naam[0]['locatie_postcode']; ?>">
                </td>
            </tr>
            <tr>
                <td style="text-align: left; padding-right: 10px;">
                    Plaats: 
                </td>
                <td>
                    <input type="text" name="locatie_plaats" value="<?php echo $locatie_naam[0]['locatie_plaats']; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 10px;">
                    <input type="submit" class="knopje" name="submit_toevoegen" value="Aanmaken">
                </td>
            </tr>
    </table>
        </section>
</form>
</div><?php

?>