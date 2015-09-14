<?php

include_once FILE_M_GEBRUIKER;
include_once FILE_M_RECHT;
// @TODO put constant in constant file
define("NEVER_LOGGED_IN", 2);
$gebruiker = new Gebruiker();
$gebruiker_persoon = $gebruiker->getGebruikerById($_GET["id"]);

$error_array = array();
$myinputs = array();

$error = FALSE;

if(isset($_POST) && !empty($_POST)){
    
    $args = array(
        'gebruiker_user' => FILTER_SANITIZE_STRING,
        'gebruiker_voornaam' => FILTER_SANITIZE_STRING,
        'gebruiker_tussenvoegsel' => FILTER_SANITIZE_STRING,
        'gebruiker_achternaam' => FILTER_SANITIZE_STRING,
        'gebruiker_email' => FILTER_VALIDATE_EMAIL,
        'gebruiker_geboorteDatum' => array(
                                     'filter' => FILTER_VALIDATE_REGEXP,
                                     'options' => array(
                                                 'regexp' => '~^\d{4}-\d{2}-\d{2}$~',
                                     )
        ),
        'gebruiker_adres' => FILTER_SANITIZE_STRING,
        'gebruiker_woonplaats' => FILTER_SANITIZE_STRING,
        'gebruiker_telefoonPrive' => FILTER_SANITIZE_STRING,
        'gebruiker_telefoonWerk' => FILTER_SANITIZE_STRING,
        'gebruiker_inDienst' => array(
                                     'filter' => FILTER_VALIDATE_REGEXP,
                                     'options' => array(
                                                 'regexp' => '~^\d{4}-\d{2}-\d{2}$~',
                                     )
        ),
        'gebruiker_actief' => FILTER_VALIDATE_BOOLEAN,
    );
    $myinputs = filter_input_array(INPUT_POST, $args);
    
    foreach ($myinputs as $key => $value) {
        //skip gebruiker actief(boolean)
        if ($key === 'gebruiker_actief') {
            continue;
        }
        if ($value === FALSE) {
            switch($key){
                case 'gebruiker_user':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_USERNAME;
                    break;
                case 'gebruiker_voornaam':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_VOORNAAM;
                    break;
                case 'gebruiker_tussenvoegsel':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_TUSSENVOEGSEL;
                    break;
                case 'gebruiker_achternaam':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_ACHTERNAAM;
                    break;
                case 'gebruiker_email':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_MAIL;
                    break;
                case 'gebruiker_geboorteDatum':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_GEBOORTEDATUM;
                    break;
                case 'gebruiker_adres':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_ADRES;
                    break;
                case 'gebruiker_woonplaats':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_WOONPLAATS;
                    break;
                case 'gebruiker_telefoonPrive':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_TELEFOONPRIVE;
                    break;
                case 'gebruiker_telefoonWerk':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_TELEFOONWERK;
                    break;
                case 'gebruiker_inDienst':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_INDIENST;
                    break;
                default :
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_DEFAULT;
            }
            //fout gevonden
            $error = TRUE;
        } 
    }
    if($error === FALSE){
               
        
           $gebruiker = new Gebruiker();
            try {
                //gerbuiker info saven 
                $gebruiker->updateGebruiker($myinputs, $_GET["id"]);
            } catch (Exception $exc) {
                // Fout gevonden;
                $error = TRUE;
                $error_array['generic' ]= $exc->getMessage();
            }            
            // Formulier velden leeg maken
            $myinputs = array();
            
    }
}
?>

<h3>Gebruiker Wijzigen</h3>
<form method="post" name="form1" id="ticketform" action="#">  
    <section id="gebruiker">
    <table id="dataTable" class="formulier" border="1">
        <tr>
            <td colspan="2">
                <h4 style="text-decoration: underline; text-align: center;">Inloggegevens</h4>
            </td>
        </tr>
        <tr>
            <td>
                Gebruikersnaam :
            </td>
            <td>
                <input type="text" name="gebruiker_user" value="<?php echo $gebruiker_persoon->getGebruikerUser()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Wachtwoord :
            </td>
            <td>
                <input type="text" name="gebruiker_wachtwoord"/>
            </td>
        </tr>
        <tr>
            <td>
                E-mail adres :
            </td>
            <td>
                <input type="mail" name="gebruiker_email" value="<?php echo $gebruiker_persoon->getGebruikerEmail()?>"/>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h4 style="text-decoration: underline; text-align: center;">Persoonsgegevens</h4>
            </td>
        </tr>
        <tr>
            <td>
                Voornaam :
            </td>
            <td>
                <input type="text" name="gebruiker_voornaam" value="<?php echo $gebruiker_persoon->getGebruikerVoornaam()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Tussenvoegsel :
            </td>
            <td>
                <input type="text" name="gebruiker_tussenvoegsel" value="<?php echo $gebruiker_persoon->getGebruikerTussenvoegsel()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Achternaam :
            </td>
            <td>
                <input type="text" name="gebruiker_achternaam" value="<?php echo $gebruiker_persoon->getGebruikerAchternaam()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Geboortedatum :
            </td>
            <td>
                <input type="date" name="gebruiker_geboorteDatum" value="<?php echo $gebruiker_persoon->getGebruikerGeboorteDatum()?>"/>
            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td>
                Adres :
            </td>
            <td>
                <input type="text" name="gebruiker_adres" value="<?php echo $gebruiker_persoon->getGebruikerAdres()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Woonplaats :
            </td>
            <td>
                <input type="text" name="gebruiker_woonplaats" value="<?php echo $gebruiker_persoon->getGebruikerWoonplaats()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Telefoonnummer prive :
            </td>
            <td>
                <input type="text" name="gebruiker_telefoonPrive" value="<?php echo $gebruiker_persoon->getGebruikerTelefoonPrive()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Telefoonnummer werk :
            </td>
            <td>
                <input type="text" name="gebruiker_telefoonWerk" value="<?php echo $gebruiker_persoon->getGebruikerTelefoonWerk()?>"/>
            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td>
                Indienst sinds :
            </td>
            <td>
                <input type="date" name="gebruiker_inDienst" value="<?php echo $gebruiker_persoon->getGebruikerInDienst()?>"/>
            </td>
        </tr>
        <tr>
            <td>
                Functie :
            </td>
            <td>
                <input type="text" name="gebruiker_functie"/>
            </td>
        </tr>
        <tr>
            <td>
                Actief :
            </td>
            <td>
                <select name="gebruiker_actief">
                    <option value="1">
                        Actief
                    </option>
                    <option value="0">
                        Inactief
                    </option>
                </select>
            </td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td>
                Bijzonderheden :
            </td>
            <td>
                <textarea style="resize: none;" rows="5" cols="19" name="gebruiker_bijzonderheden"></textarea>
            </td>
        </tr>
    </table>
</section>
    <input id="verzenden" type="submit" class="knopje" name="Verzenden" value="Wijzigen" />
</form>
