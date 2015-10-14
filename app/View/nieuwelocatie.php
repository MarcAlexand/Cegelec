<?php 
    $locatie = new Locatie( new DbLocatie);
    ?>
<div id="loginwrap">
   
    <h2>Nieuwe Locatie</h2>
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
        $locatie->setLocatieNaam($_POST['locatie_naam']);
        $locatie->setLocatieTelefoonnummer($_POST['locatie_telefoonnummer']);
        $locatie->setLocatieStraat($_POST['locatie_straat']);
        $locatie->setLocatiePostcode($_POST['locatie_postcode']);
        $locatie->setLocatiePlaats($_POST['locatie_plaats']);
        
    
    } catch (Exception $e) {
        $error_array['locatie_naam']
                    ['locatie_telefoonnummer']
                    ['locatie_straat']
                    ['locatie_postcode']
                    ['locatie_plaats']
                = $e->getMessage();
        
    }
  
     // Locatie opslaan in database
     
    if( empty($error_array)){
    $locatie->createLocatie();
    
   
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
        <table id="dataTable" class="formulier" border="1">
            <tr>
                <td colspan="2" style="text-align: center">
                    <h4>Locaties toevoegen</h4>
                </td>
            </tr>
            <tr>
                <td>
                    Naam: 
                </td>
                <td>
                    <input type="text" name="locatie_naam" placeholder="naam">
                </td>
            </tr>
            <tr>
                <td>
                    Telefoonnummer : 
                </td>
                <td style="text-align: center;">
                    <input type="text" name="locatie_telefoonnummer" placeholder="telefoonnummer">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <b>Adres gegevens : </b>
                </td>
            </tr>
            <tr>
                <td> Straat</td>
                <td style="text-align: center;">
                    <input type="text" name="locatie_straat" placeholder="straat">
                </td>
            </tr>
            <tr>
                <td> Postcode</td>
                <td style="text-align: center;">
                    <input type="text" name="locatie_postcode" placeholder="postcode">
                </td>
            </tr>
            <tr>
                <td>
                    Plaats: 
                </td>
                <td>
                    <input type="text" name="locatie_plaats" placeholder="plaats">
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" class="knopje" name="submit_toevoegen" value="Opslaan">
                </td>
            </tr>
    </table>
</section>
</form>
</div><?php

?>