<?php
$opleiding = new Opleiding(new DbOpleiding());
if(!$opleiding_array = $opleiding->getOpleidingList()) {
    $opleiding_array = [];
}

$opleidingsblok = new Opleidingsblok();

//$countArray = count($opleiding_array);
?>
<div id="">
    <div id="">
        <a href="?page=dashboard"><img src="img/dashboardbutton.png" /></a>
    </div>

    <?php if (!$gebruiker->heeftRecht($_SESSION['rechten'], $recht_array['Leerling'])) { ?>
        <a href="?page=opleiding">Alle opleidingen</a>
    <?php } ?>
    <a href="?page=opleiding&subpage=nieuweopleiding">Nieuwe opleiding</a>
    <a href="?page=opleiding&subpage=nieuwecursusstarten">Nieuwe cursus starten</a>
    <a href="?page=opleiding&subpage=cursusoverzicht">Alle cursussen</a>
    <a href="?page=opleiding&subpage=nieuweopleidingsblok">Nieuwe opleidingsblok</a>
    <a href="?page=opleiding&subpage=opleidingsblok">Alle opleidingsblokken</a>
</div>

<div class="">
    <?php
    if (isset($_GET['subpage'])) {
        switch ($_GET['subpage']) {
            case "opleidingoverzicht": include 'opleidingoverzicht.php';
                break;
            case "nieuweopleiding": include 'nieuweopleiding.php';
                break;
            case "nieuwecursusstarten": include 'nieuwecursusstarten.php';
                break;
            case "cursusblokoverzicht": include 'cursusblokoverzicht.php';
                break;
            case "gebruikerview": include 'userview.php';
                break;
            case "opleidingaanpassen": include 'opleidingaanpassen.php';
                break;
            case "nieuweopleidingsblok": include 'nieuweopleidingsblok.php';
                break;
            case "opleidingsblok": include 'opleidingsblok.php';
                break;
             case "opleidingsblokaanpassen": include 'opleidingsblokaanpassen.php';
                break;
            case "opleidingdetails": include 'opleidingdetails.php';
                break;
           
               
        }
    } else {
        
        ?>
        <h2>
            <br/>Opleiding overzicht<br/>
        </h2>
        <table class="tabel" border="1">
            <thead> 
                <tr>
                    <th>Wijzigen</th>
                    <th>Actief</th>
                    <th>Naam</th>
                    <th>Startdatum</th>
                    <th>Einddatum</th>
                    <th>Niveau</th>
                    <th>Duur</th>
                    <th>Extra informatie</th>
                  
                    
                </tr>

            </thead>
            <tbody>
                
    <?php
    
    if($opleiding_array) {
 
        foreach($opleiding_array as  $idx => $opleiding_object) {
            if(!$blok_array = $opleidingsblok->getByOpleiding($opleiding_object['opleiding_id'])) {
                $blok_array = array();
            }
        echo '<tr>'
               . ' <td>'.
                    '<a href="?page=opleiding&subpage=opleidingaanpassen&id='
                        . $opleiding_object['opleiding_id'] . '">
                            <img width="30" src="img/aanpassen.png""/>
                    </a>'
                . '</td>'
                . '<td>';
                if($opleiding_object['opleiding_actief'] == 1) {
                    echo '<img width="30" src=img/gebruiker_actief.png  />';
                } else {
                    echo '<img width="30" src="img/gebruiker_inactief.png" />';
                } echo '</td>'
                . '<td>'
                    .$opleiding_object['opleiding_naam']
                . '</td>'
                . '<td>'
                    .$opleiding_object['opleiding_start_datum']
                . '</td>'
                . '<td>'
                    .$opleiding_object['opleiding_eind_datum']
                . '</td>'
                . '<td>'
                    .$opleiding_object['opleiding_niveau']
                . '</td>'
                . '<td>'
                    . $opleiding_object['opleiding_duur']
                . '</td>'
                . '<td>' ;
                        if ($opleiding_object['opleiding_naam'] == "OAT") {
                            echo '<a href="?page=opleiding&subpage=opleidingdetails&opleidingid='.$opleiding_object['opleiding_id'].'"><button type="button" class="knopje">Extra informatie</button></a>';
                        }
                        else if ($opleiding_object['opleiding_naam'] == "OTI") {
                            echo '<a href="?page=opleiding&subpage=opleidingdetails&opleidingid='.$opleiding_object['opleiding_id'].'"><button type="button" class="knopje">Extra informatie</button></a>';
                        }
                        else  {
                            echo '<a href="?page=opleiding&subpage=opleidingdetails&opleidingid='.$opleiding_object['opleiding_id'].'"><button type="button" class="knopje">Extra informatie</button></a>';
                        }
                        
//                        '<select>';
//                        foreach($blok_array as $blok){
//                            echo "<option value='".$blok['opleidingsblok_id']."'>" . $blok['opleidingsblok_naam'] . "</option>";
//                        }
//                        echo '</select>' .
                 '</td>'
            .'</tr>';
    }
        }
    }
    
    ?>
            </tbody>
        </table>
