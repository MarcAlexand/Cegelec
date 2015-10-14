<?php
$opleidingsblok = new Opleidingsblok();
$opleiding = new Opleiding();
$opleiding_array = $opleiding->getOpleidingList();


//$countArray = count($opleidingsblok_array);

$errors = [];
if(isset($_POST['Verzenden'])) {
    $rules = [
        'opleidingsblok_naam' => 'required',
        'opleidingsblok_omschrijving' => 'required',
        'opleidingsblok_actief' => 'required',
        'fk_opleiding_id' => 'required'
    ];
    array_pop($_POST);
    $validator = new Validator($_POST, $rules);
    $errors = $validator->getErrors();

    if(!$errors) {
        // db       
        $opleidingsblok->setOpleidingsblokNaam($_POST['opleidingsblok_naam']);
        $opleidingsblok->setOpleidingsblokOmschrijving($_POST['opleidingsblok_omschrijving']);
        $opleidingsblok->setOpleidingsblokActief($_POST['opleidingsblok_actief']);
        $opleidingsblok->setFkOpleidingId($_POST['fk_opleiding_id']);
        $opleidingsblok->createOpleidingsblok();
        
            echo "<div id='result'>";
    echo 'Uw opleidingsblok is <strong>succesvol</strong> aangemaakt!';
    echo "</div>";
        
    }
}
?>


<form method="post" name="form1" id="ticketform" action="#">    <br/><h2>Opleidingsblok Toevoegen</h2>
  
    <table class="formulier">
                
            <tr>
                <td>
                    <label class="f1" for "opleidingsblok_naam">Opleidingsblok naam:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleidingsblok_naam" />
                    <?php 
                    if(isset($errors['opleidingsblok_naam'])) {
                        echo $errors['opleidingsblok_naam'];
                    }
                    ?>
                </td>
            </tr>
           
              <tr>
                <td>
                    <label class="f1"for "opleidingsblok_omschrijving">Opleidingsblok omschrijving:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="opleidingsblok_omschrijving" />
                                        <?php 
                    if(isset($errors['opleidingsblok_omschrijving'])) {
                        echo $errors['opleidingsblok_omschrijving'];
                    }
                    ?>
                </td>
            </tr>
            <tr>
            <td>
                <label class="f1"for="opleidingsblok_actief">Opleidingsblok status:</label>
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
            <tr>
            <td>
                <label class="f1"for="fk_opleiding_id">Opleidingsblok koppelen met:</label>
            </td>
            <td>
                <select name="fk_opleiding_id"><?php
                    foreach ($opleiding_array as $idx => $opleiding_object) {
                        echo '<option value="' . $opleiding_object['opleiding_id'] . '">' . $opleiding_object['opleiding_naam'] . "</option>\n";
                    }?>
                    
                </select>
            </td>
            </tr>
        </tr>
            
                      <tr>
                <td>
                    <input type="submit" class="knopje" name="Verzenden" value="Aanmaken" />
                </td>
            <!--</tr>-->
        </table>  
    <form method="post" name="form1" id="ticketform" action="#">    
        <table class="formulier">
             
        </table>  

            
            
            
</form>
