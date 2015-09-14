<?php
include_once FILE_M_OPLEIDING;
$opleiding = new Opleiding();
$opleiding_array = $opleiding->getOpleidingList();

$countArray = count($opleiding_array);
?>

<form method="post" name="form1" id="ticketform" action="#">    <br/><h2>Opleiding Toevoegen</h2>
  
    <table class="formulier">
                
            <tr>
                <td>
                    <label class="f1" for "opleidng_naam">Opleiding naam:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_naam" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="f1"for "opleiding_omschrijving">Opleiding omschrijving:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_omschrijving" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "opleiding_start_datum">Opleiding startdatum:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_start_datum" />
                </td>
            </tr>
             <tr>
                <td>
                    <label class="f1"for "opleiding_eind_datum">Opleiding einddatum:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_eind_datum" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="f1"for "opleiding_niveau">Opleiding niveau:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_niveau" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "opleiding_duur">Opleiding duur:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_duur" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "opleiding_locatie">Opleiding locatie:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_locatie" />
                </td>
            </tr>
            
                      <tr>
                <td>
                    <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
                </td>
            </tr>
        </table>  
    <form method="post" name="form1" id="ticketform" action="#">    
        <table class="formulier">
             
        </table>  

            
            
            
    <?php 
    
    $error_array = array();
    
if(isset($_POST['Verzenden'])) {
    /**
     * Nieuwe instantie van opleiding maken.
     * Alles setten.
     */
    
    try {
    $opleiding->setOpleidingNaam($_POST['opleiding_naam']);
    $opleiding->setOpleidingStatus($_POST['opleiding_status']);
    $opleiding = new Opleiding();
    } catch (Exception $e) {
        $error_array['opleiding_naam']  
                    ['opleiding_status']
                = $e->getMessage();
        
    }
  
     // opleiding opslaan in database
     
    if( empty($error_array)){
    $opleiding->createOpleiding();
    
    
   
    echo "<div id='result'>";
    echo 'Uw opleiding is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
    } 
}

    
    if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
</form>
