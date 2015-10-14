<?php

$opleiding = new Opleiding(new DbOpleiding());
$opleiding_persoon = $opleiding->getOpleidingById($_GET["id"])[0];
//var_dump($opleiding_persoon);


?>
<h2>Opleiding Wijzigen</h2>
<form method="post" name="form1" id="ticketform" action="">  
    <table class="formulier">
         <tr>
            <td>
                Opleiding naam :
            </td>
            <td>
                <input type="text" name="opleiding_naam" value="<?php echo $opleiding_persoon['opleiding_naam']?>"/>
            </td>
        </tr>        

        <tr>
            <td>
                Opleiding startdatum :
            </td>
            <td>
                <input type="date" name="opleiding_start_datum" value="<?php echo $opleiding_persoon['opleiding_start_datum']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Opleiding einddatum :
            </td>
            <td>
                <input type="date" name="opleiding_eind_datum" value="<?php echo $opleiding_persoon['opleiding_eind_datum']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Opleiding niveau :
            </td>
            <td>
                <input type="text" name="opleiding_niveau" value="<?php echo $opleiding_persoon['opleiding_niveau']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Opleiding duur :
            </td>
            <td>
                <input type="text" name="opleiding_duur" value="<?php echo $opleiding_persoon['opleiding_duur']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Opleiding status :
            </td>
            <td>
                <select name="opleiding_actief">
                    <option value="1">
                        Actief
                    </option>
                    <option value="0">
                        Inactief
                    </option>
                </select>
            </td>
        </tr>
            
    </table>
    <input id="verzenden" type="submit" class="knopje" name="Verzenden" value="Wijzigen" />
</form>
<?php

$error_array = array ();

if(isset($_POST['Verzenden'])) {
    /**
     * Nieuwe instantie van opleiding maken.
     * Alles setten.
     */
    
    try {
        $opleiding->setOpleidingNaam($_POST['opleiding_naam']);
        $opleiding->setOpleidingStartDatum($_POST['opleiding_start_datum']);
        $opleiding->setOpleidingEindDatum($_POST['opleiding_eind_datum']);
        $opleiding->setOpleidingNiveau($_POST['opleiding_niveau']);
        $opleiding->setOpleidingDuur($_POST['opleiding_duur']);
        $opleiding->setOpleidingActief($_POST['opleiding_actief']);
    } catch (Exception $e) {
        $error_array['opleiding_naam']  
                    ['opleiding_start_datum']
                    ['opleiding_eind_datum']          
                    ['opleiding_niveau']
                    ['opleiding_duur']
                    ['opleiding_actief']
                = $e->getMessage();
       
        
    }
  
     // opleiding opslaan in database
     
    if( empty($error_array)){
        $opleiding->updateOpleiding($_GET['id']);
    
    
   
    echo "<div id='result'>";
    echo 'Uw opleiding is <strong>succesvol</strong> gewijzigd!';
    echo "</div>";
    } 
}

    
    if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
</form>
