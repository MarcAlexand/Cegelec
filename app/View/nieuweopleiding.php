<?php
include_once FILE_M_OPLEIDING;
$opleiding = new Opleiding();
$opleiding_array = $opleiding->getOpleidingList();

$countArray = count($opleiding_array);
$errors = [];
if(isset($_POST['Verzenden'])) {
    $rules = [
        'opleiding_naam' => 'required|string|nointeger',
        'opleiding_start_datum' => 'required',
        'opleiding_eind_datum' => 'required',
        'opleiding_niveau' => 'string|required',
        'opleiding_duur' => 'string|required',
        'opleiding_actief' => 'required'
    ];
    array_pop($_POST);
    $validator = new Validator($_POST, $rules);
    $errors = $validator->getErrors();

    if(!$errors) {
        // db       
        $opleiding->setOpleidingNaam($_POST['opleiding_naam']);
        $opleiding->setOpleidingStartDatum($_POST['opleiding_start_datum']);
        $opleiding->setOpleidingEindDatum($_POST['opleiding_eind_datum']);
        $opleiding->setOpleidingNiveau($_POST['opleiding_niveau']);
        $opleiding->setOpleidingDuur($_POST['opleiding_duur']);
        $opleiding->setOpleidingActief($_POST['opleiding_actief']);
        $opleiding->createOpleiding();
        
            echo "<div id='result'>";
    echo 'Uw opleiding is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
        
    }
}
?>

<form method="post" name="form1" id="ticketform" action="#">    <br/><h2>Opleiding Toevoegen</h2>
  
    <table class="formulier">
                
            <tr>
                <td>
                    <label class="f1" for "opleiding_naam">Opleiding naam:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_naam" />
                    <?php 
                    if(isset($errors['opleiding_naam'])) {
                        echo $errors['opleiding_naam'];
                    }
                    ?>
                </td>
            </tr>
           
              <tr>
                <td>
                    <label class="f1"for "opleiding_start_datum">Opleiding startdatum:</label>
                </td>
                <td>
                    <input class="f2"type="date" name="opleiding_start_datum" />
                                        <?php 
                    if(isset($errors['opleiding_start_datum'])) {
                        echo $errors['opleiding_start_datum'];
                    }
                    ?>
                </td>
            </tr>
             <tr>
                <td>
                    <label class="f1"for "opleiding_eind_datum">Opleiding einddatum:</label>
                </td>
                <td>
                    <input class="f2"type="date" name="opleiding_eind_datum" />
                                        <?php 
                    if(isset($errors['opleiding_eind_datum'])) {
                        echo $errors['opleiding_eind_datum'];
                    }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>
                    <label class="f1"for "opleiding_niveau">Opleiding niveau:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_niveau" />
                                        <?php 
                    if(isset($errors['opleiding_niveau'])) {
                        echo $errors['opleiding_niveau'];
                    }
                    ?>
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "opleiding_duur">Opleiding duur:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleiding_duur" />
                                        <?php 
                    if(isset($errors['opleiding_duur'])) {
                        echo $errors['opleiding_duur'];
                    }
                    ?>
                </td>
            </tr>
            <td>
                <label class="f1"for "opleiding_actief">Opleiding status:</label>
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
            
                      <tr>
                <td>
                    <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
                </td>
            </tr>
        </table>  
