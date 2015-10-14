<?php

$opleidingsblok = new Opleidingsblok(new DbOpleidingsblok());
$opleidingsblok_array = $opleidingsblok->getOpleidingsblokList();
//$countArray = count($opleiding_array);
?>

 
        
        
        <h2>
            <br/>Opleidingsblok overzicht<br/>
        </h2>
        <table class="tabel" border="1">
            <thead> 
                <tr>
                    <th>Wijzigen</th>
                    <th>Actief</th>
                    <th>Naam</th>
                    <th>Omschrijving</th>
                    <th>Koppeling met</th>
                   
                    
                </tr>

            </thead>
            <tbody>
                
    <?php
    
    if($opleidingsblok_array) {
        foreach($opleidingsblok_array as  $idx => $opleidingsblok_object) {
            
            
           // var_dump($opleidingsblok_object);
        echo '<tr>'
               . ' <td>'.
                    '<a href="?page=opleiding&subpage=opleidingsblokaanpassen&id='
                        . $opleidingsblok_object['opleidingsblok_id'] . '">
                            <img width="30" src="img/aanpassen.png""/>
                    </a>'
                . '</td>'
                . '<td>';
                if($opleidingsblok_object['opleidingsblok_actief'] == 1) {
                    echo '<img width="30" src=img/gebruiker_actief.png  />';
                } else {
                    echo '<img width="30" src="img/gebruiker_inactief.png" />';
                } echo '</td>'
                . '<td>'
                    .$opleidingsblok_object['opleidingsblok_naam']
                . '</td>'
                . '<td>'
                    .$opleidingsblok_object['opleidingsblok_omschrijving']
                . '</td>'
                        . '</td>'
                . '<td>';
                if($opleidingsblok_object['fk_opleiding_id'] == 2) {
                    echo 'STE';
                } else if($opleidingsblok_object['fk_opleiding_id'] == 3) {
                    echo 'OTI';
                }
                    else  {
                        echo'OAT';
                    }
                    
                } 
                echo '</td>'
            .'</tr>';
    }
    
    
    ?>
            </tbody>
        </table>
                