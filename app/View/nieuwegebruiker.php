<?php
include_once FILE_M_GEBRUIKER;
include_once FILE_M_RECHT;
// @TODO put constant in constant file
define("NEVER_LOGGED_IN", 2);

/*
  // nieuwe instantie van Recht
  $rechtgroep = new Recht();
  //Haal array op uit database met alle rechtgroepen
  $recht_array = $reflection->getConstants();

  $countArray = count($recht_array);

  / */
$error_array = array();
$myinputs = array();

function getValueText($error_array,$inputs,$field){
   return isset($error_array[$field]) ? $error_array[$field] : (isset($inputs[$field])? $inputs[$field] : '' );  
}

$rechtgroep = new RechtGroep();
$rechtlijst = $rechtgroep->getRechtGroepList();

$error =  FALSE;

if (isset($_POST) && !empty($_POST)) {
    //variabele voor foutmelding
    $error = FALSE;
    //nieuw object gebruiker
    $gebruiker = new Gebruiker(new DbGebruiker);
      
    
    //Alles valideren
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
        'recht' => FILTER_VALIDATE_INT,
        'gebruiker_actief' => FILTER_VALIDATE_BOOLEAN,
    );
    $myinputs = filter_input_array(INPUT_POST, $args);
    //gebruiker_email
    //Verdeel array in $key en $value voor te kijken dat velden false zijn  
    
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
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_EMAIL;
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
                case 'recht':
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_RECHT;
                    break;
                default :
                    $error_array[$key] = TEXT_FORM_FIELD_ERROR_DEFAULT;
            }
            //fout gevonden
            $error = TRUE;
            
            //
        } 
    }
    if($error === FALSE){
           
            try {
                //gerbuiker info saven 
                $gebruiker->save($myinputs);
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
<form method="post" name="form1" id="ticketform" action="#">
    <h2>Gebruiker Toevoegen</h2>
    <nav>
        <div id="">
            <a href="?page=dashboard">
                <img src="img/dashboardbutton.png" />
            </a>
        </div>

        <?php if (!$gebruiker->heeftRecht($_SESSION['rechten'], $recht_array['Leerling'])) { ?>
            <a href="?page=gebruikers">Alle gebruikers</a>
        <?php } ?>
        <a href="?page=gebruikers&subpage=nieuwegebruiker">Nieuwe gebruiker</a>

    </nav>
    <table id="dataTable" class="formulier" border="1">
        <tr>
            <td>Gebruikersnaam</td>
            <td>
                <input  placeholder="Gebruikersnaam" lang="NL" type="text" name="gebruiker_user" id="user" title="Voer hier de gebruikersnaam in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_user')?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Voornaam" type="text" name="gebruiker_voornaam" id="voornaam" title="Voer hier een voornaam in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_voornaam')?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Tussenvoegsel" type="text" name="gebruiker_tussenvoegsel" id="tussenvoegsel" title="Voer hier een tussenvoegsel in." value="<?php echo getValueText($error_array,$myinputs,'gebruiker_tussenvoegsel')?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Achternaam" type="text" name="gebruiker_achternaam" id="achternaam" title="Voer hier een achternaam in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_achternaam')?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="email@adres.com" type="mail" name="gebruiker_email" id="email" title="Voer hier een emailadres in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_email' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input lang="nl" type="date" name="gebruiker_geboorteDatum" id="gebdatum" title="Voer hier een geboorte datum in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_geboorteDatum' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Adres 23" type="text" name="gebruiker_adres" id="adres" title="Voer hier een adres in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_adres' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="Woonplaats" type="text" name="gebruiker_woonplaats" id="woonplaats" title="Voer hier een woonplaats in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_woonplaats' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="0623451232" type="text" name="gebruiker_telefoonPrive" id="telefoonPrive" title="Voer hier een prive nummer in." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_telefoonPrive' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input placeholder="0623451232" type="text" name="gebruiker_telefoonWerk" id="telefoonWerk" title="Voer hier het telefoon nummer in van je werk" required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_telefoonWerk' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="date" name="gebruiker_inDienst" id="inDienst" title="Voer hier de datum in wanneer je in dienst gaat." required value="<?php echo getValueText($error_array,$myinputs,'gebruiker_inDienst' )?>">
            </td>
        </tr>
        <tr>
            <td>
                <select name="recht">
                    <?php
// loop all rights  
                    
                    foreach ($rechtlijst as $idx => $recht_array) {
                        echo '<option value="' . $recht_array['rechtgroep_id'] . '">' . $recht_array['rechtgroep_beschrijving'] . "</option>\n";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
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
    </table>
    
    <?php if (array_key_exists('generic', $error_array)){
        echo $error_array['generic'];
    } ?>
    <!--    <INPUT type="button" value="Add Row" onClick="addRow('dataTable')" />-->
    <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
</form>
