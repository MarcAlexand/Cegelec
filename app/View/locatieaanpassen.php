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
        $locatie->setLocatieNaam($_POST['locatie_naam']);
        $locatie->setLocatiePlaats($_POST['locatie_naam']);
        $locatie->setLocatieActief($_POST['locatie_actief']);
    
    } catch (Exception $e) {
        $error_array['locatie_naam']
                    ['locatie_plaats']
                    ['locatie_actief']
                = $e->getMessage();
        
    }
  
     // Locatie opslaan in database
     
    if( empty($error_array)){
    $locatie->updateLocatie();
    
    var_dump($locatie);
   
    echo "<div id='result'>";
    echo 'Uw locatie is <strong>succesvol</strong> aangepast!';
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
                    <h4>Locaties aanpassen</h4>
                </td>
            </tr>
            <tr>
                <td>
                    Naam locatie: 
                </td>
                <td>
                    <input type="text" name="locatie_naam" placeholder="<?php echo $locatie_naam[0]['locatie_naam']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Naam plaats: 
                </td>
                <td>
                    <input type="text" name="locatie_plaats" placeholder="<?php echo $locatie_naam[0]['locatie_plaats']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                        Activeren : 
                </td>
                <td>
                    <select>
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
                <td>
                    <input type="submit" class="knopje" name="submit_toevoegen" value="Aanmaken">
                </td>
            </tr>
    </table>
</form>
</div><?php

?>