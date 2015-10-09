<?php 
    $locatie = new Locatie( new DbLocatie);
    ?>
<div id="loginwrap">
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
    <h2>Nieuwe Locatie</h2>
    
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
        $locatie->setLocatieActief($_POST['locatie_actief']);
    
    } catch (Exception $e) {
        $error_array['locatie_naam']  
                    ['locatie_actief']
                = $e->getMessage();
        
    }
  
     // Locatie opslaan in database
     
    if( empty($error_array)){
    $locatie->createLocatie();
    
    
   
    echo "<div id='result'>";
    echo 'Uw locatie is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
    } 
}

    
    if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
    <form method="POST" action="#" class="formulier">
        <table>
            <tr>
                <td>
                    <h4>Locaties toevoegen</h4>
                </td>
            </tr>
            <tr>
                <td>
                        Nieuwe locatie : 
                </td>
                <td>
                    <input type="text" name="locatie_naam" placeholder=" locatie naam">
                </td>
            </tr>
            <tr>
                <td>
                        Activeren : 
                </td>
                <td>
                    <input type="checkbox" name="locatie_actief" value="1"> Ja
                    <input type="checkbox" name="locatie_actief" value="0"> Nee
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="knopje" name="submit_toevoegen" value="Aanmaken">
                </td>
            </tr>
    </table>
</form>
</div><?php

?>