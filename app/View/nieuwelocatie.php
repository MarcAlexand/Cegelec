<?php
$locatie = new Locatie();
//$locatie_array = $locatie->getLocatieList();

$countArray = count($locatie_array);



$error_array = array();
    
if(isset($_POST['Verzenden'])) {
    /**
     * Nieuwe instantie van locatie maken.
     * Alles setten.
     */
    
    try {
    $locatie = new Locatie();
    $locatie->setLocatieNaam($_POST['locatienaam']);
    $locatie->setLocatieBeschrijving($_POST['locatiebeschrijving']);
    } catch (Exception $e) {
        $error_array['locatienaam']  
                    ['locatiebeschrijving']
                = $e->getMessage();
        
    }
  
     // locatie opslaan in database
     
    if( empty($error_array)){
    $locatie->create();
    
    
   
    echo "<div id='result'>";
    echo 'Uw locatie is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
    } 
}

?>
<form method="post" name="form1" id="ticketform" action="#">    <h2>Locatie Toevoegen</h2>
    <table class="formulier">
        <tr>
            <td>
                <label for="toevoegen">Locatie naam:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="locatienaam" id="titel" title="Voer hier de locatienaam in." />
               <!-- php tags ervoor en erachter  en foutcontrole -> //echo '<span class="error">*'. (isset($error_array['cursusbloknaam']) ? $error_array['cursusbloknaam'] : '' ). '</span>'; -->
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Locatie beschrijving:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="locatiebeschrijving" id="titel" title="Voer hier de beschrijving van uw locatie in." />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
            </td>
        </tr>
    </table>
    <?php if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
</form>
