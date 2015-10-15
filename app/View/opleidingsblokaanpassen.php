<?php

$opleidingsblok = new Opleidingsblok(new DbOpleidingsblok());
$opleidingsblok_persoon = $opleidingsblok->getOpleidingsblokById($_GET["id"])[0];


?>
<h2>Opleidingsblok Wijzigen</h2>
<form method="post" name="form1" id="ticketform" action="">  
    <table class="formulier">
         <tr>
            <td>
                Opleidingsblok naam :
            </td>
            <td>
                <input type="text" name="opleidingsblok_naam" value="<?php echo $opleidingsblok_persoon['opleidingsblok_naam']?>"/>
            </td>
        </tr>        

        <tr>
            <td>
                Opleidingsblok omschrijving :
            </td>
            <td>
                <input type="tekst" name="opleidingsblok_omschrijving" value="<?php echo $opleidingsblok_persoon['opleidingsblok_omschrijving']?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Opleidingsblok status :
            </td>
            <td>
                <select name="opleidingsblok_actief">
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
        $opleidingsblok->setFkOpleidingId($_GET['id']);
        $opleidingsblok->setOpleidingsblokNaam($_POST['opleidingsblok_naam']);
        $opleidingsblok->setOpleidingsblokOmschrijving($_POST['opleidingsblok_omschrijving']);
        $opleidingsblok->setOpleidingsblokActief($_POST['opleidingsblok_actief']);
    } catch (Exception $e) {
        $error_array['opleidingsblok_naam']  
                    ['opleidingsblok_omschrijving']
                    ['opleidingsblok_actief']
                = $e->getMessage();
       
        
    }
  
     // opleidingsblok opslaan in database
     
    if( empty($error_array)){
        $opleidingsblok->updateOpleidingsblok($_GET['id']);
    
    
   
    echo "<div id='result'>";
    echo 'Uw opleidingsblok is <strong>succesvol</strong> gewijzigd!';
    echo "</div>";
    } 
}

    
    if( !empty($error_array)){
        echo FORM_TEXT_ERROR_IN_FORM;
    }
    ?>
</form>

