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
        $locatie->setLocatiePlaats($_POST['locatie_plaats']);
        $locatie->setLocatieActief($_POST['locatie_actief']);
    
    } catch (Exception $e) {
        $error_array['locatie_naam']  
                    ['locatie_plaats']
                    ['locatie_actief']
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
                    <input type="text" name="locatie_naam" placeholder=" locatie naam">
                </td>
            </tr>
            <tr>
                <td>
                    Plaats: 
                </td>
                <td>
                    <input type="text" name="locatie_plaats" placeholder=" locatie plaats">
                </td>
            </tr>
            <tr>
                <td>
                    Activeren : 
                </td>
                <td style="text-align: center;">
                    <select name="locatie_actief">
                        <option value="1">
                            Actief
                        </option>
                        <option value="0">
                            Inactief
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" class="knopje" name="submit_toevoegen" value="Aanmaken">
                </td>
            </tr>
    </table>
</section>
</form>
</div><?php

?>