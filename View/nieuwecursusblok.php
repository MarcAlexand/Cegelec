<?php
include_once FILE_M_CURSUSBLOK;
$cursusblok = new Cursusblok();
$cursusblok_array = $cursusblok->getCursusblokList();

$countArray = count($cursusblok_array);



$error_array = array();
    
if(isset($_POST['Verzenden'])) {
    /**
     * Nieuwe instantie van cursusblok maken.
     * Alles setten.
     */
    
    try {
    $cursusblok = new Cursusblok();
    $cursusblok->setCursusblokNaam($_POST['cursusbloknaam']);
    $cursusblok->setCursusblokBeschrijving($_POST['cursusblokbeschrijving']);
    } catch (Exception $e) {
        $error_array['cursusbloknaam']  
                    ['cursusblokbeschrijving']
                = $e->getMessage();
        
    }
  
     // cursusblok opslaan in database
     
    if( empty($error_array)){
    $cursusblok->create();
    
    
   
    echo "<div id='result'>";
    echo 'Uw cursusblok is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
    } 
}

?>
<form method="post" name="form1" id="ticketform" action="#">    <h2>Cursusblok Toevoegen</h2>
    <table class="formulier">
        <tr>
            <td>
                <label for="toevoegen">Cursusblok naam:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="cursusbloknaam" id="titel" title="Voer hier de cursusbloknaam in." />
               <!-- php tags ervoor en erachter  en foutcontrole -> //echo '<span class="error">*'. (isset($error_array['cursusbloknaam']) ? $error_array['cursusbloknaam'] : '' ). '</span>'; -->
            </td>
        </tr>
        <tr>
            <td>
                <label for="toevoegen">Cursusblok beschrijving:</label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="cursusblokbeschrijving" id="titel" title="Voer hier de beschrijving van uw cursusblok in." />
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
