<?php
include_once 'classes/opleiding.php';
$opleiding = new Opleiding();
$opleiding_array = $opleiding->getOpleidingList();

$countArray = count($opleiding_array);

/*
echo __FILE__.__LINE__.__FUNCTION__.'<br />';
echo '<pre>';
var_dump($_POST);
echo '</pre>';
//*/

$error_array = array();
    
if(isset($_POST['Verzenden'])) {
    /**
     * Nieuwe instantie van opleiding maken.
     * Alles setten.
     */
    
    try {
    } catch (Exception $e) {
       $error_array['opleidingnaam'] = $e->getMessage();
    }
    $opleiding = new Opleiding();
    $opleiding->setOpleidingNaam(isset($_POST['opleidingnaam']));
    $opleiding->setOpleidingNiveau(isset($_POST['opleidingniveau']));
    $opleiding->setOpleidingStartDatum(isset($_POST['opleiding_start_datum']));
    $opleiding->setOpleidingEindDatum(isset($_POST['opleiding_eind_datum']));
    $opleiding->setOpleidingDuur(isset($_POST['opleidingduur']));
    $opleiding->setOpleidingLocatie(isset($_POST['opleidinglocatie']));
     // Opleiding opslaan in database
     
    if( empty($error_array)){
    $opleiding->create();
    
    
   

    } 
}

?>
<form method="post" name="form1" id="ticketform" action="#">    <h2>Opleiding Toevoegen</h2>
    <table class="formulier">
        <tr>
            <td>
                <label for="toevoegen">Opleiding naam:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidingnaam" id="titel" title="Voer hier de opleidingnaam in." />
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Opleiding niveau:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidingniveau" id="titel" title="Voer hier het niveau van de opleiding in." />
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Opleiding startdatum:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidingstartdatum" id="titel" title="Voer hier de startdatum van de opleiding in." />
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Opleiding einddatum:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidingeinddatum" id="titel" title="Voer hier de einddatum van de opleiding in." />
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Opleiding duur:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidingduur" id="titel" title="Voer hier de duur van de opleiding in." />
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Opleiding locatie:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="opleidinglocatie" id="titel" title="Voer hier de locatie van de opleiding in." />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
            </td>
        </tr>
    </table>
    <?php if( !empty($error_array)){
    //    echo FORM_TEXT_ERROR_IN_FORM;
    
    
    echo "<div id='result'>";
    echo 'Uw opleiding '. isset($_POST['opleiding']). ' is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
    }
    ?>
</form>
