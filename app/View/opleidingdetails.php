<?php
$opleiding = new Opleiding(new DbOpleiding());
//if(!$opleiding_array = $opleiding->getOpleidingList()) {
//    $opleiding_array = [];
//}
$opleiding_array = $opleiding->getOpleidingById($_GET['opleidingid'])[0];

$opleidingsblok = new Opleidingsblok();

$blok_array = $opleidingsblok->getByOpleiding($opleiding_array['opleiding_id']);


?>

        
       
        <h2>
            <br/>Extra informatie over <?= $opleiding_array['opleiding_naam']; ?><br/>
        </h2>
        <table class="tabel" border="1">
            <thead> 
                <tr>
                    <th>Wijzigen</th>
                    <th>Actief</th>
                    <th>Opleidingsblok naam</th>
                    <th>Opleidingsblok omschrijving</th>
                    
                    
                </tr>

            </thead>
            <tbody>
                
    <?php
         echo '<a href="?page=opleiding&subpage=nieuweopleidingsblok&id='
                        . $opleiding_array['opleiding_id'] . '"><img width="30" src="img/plus.png" /></a>';
    if($blok_array) {
      
        foreach($blok_array as $blok) {
             echo '<tr>'
  . ' <td>'.
                    '<a href="?page=opleiding&subpage=opleidingsblokaanpassen&id='
                        . $blok['opleidingsblok_id'] . '">
                            <img width="30" src="img/aanpassen.png""/>
                    </a>'
                . '</td>'
                . '<td>';
                if($blok['opleidingsblok_actief'] == 1) {
                    echo '<img width="30" src=img/gebruiker_actief.png  />';
                } else {
                    echo '<img width="30" src="img/gebruiker_inactief.png" />';
                } echo '</td>' ;
            echo "<td>".$blok['opleidingsblok_naam']."</td>";
            echo "<td>".$blok['opleidingsblok_omschrijving']."</td></tr>";
//            if(!$blok_array = $opleidingsblok->getByOpleiding($opleiding_object['opleiding_id'])) {
//                $blok_array = array();
//            }
//        echo '<tr>'
//                . '<td>' .
//                        '<select>';
//                        foreach($blok_array as $blok){
//                            echo "<option value='".$blok['opleidingsblok_id']."'>" . $blok['opleidingsblok_naam'] . "</option>";
//                        }
//                        echo '</select>' .
//                 '</td>'
//            .'</tr>';
    }
        }
    
    
    ?>
            </tbody>
        </table>
