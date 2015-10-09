<?php




    if (isset($_GET['subpage'])) {
        switch ($_GET['subpage']) {
            case "locatie": include 'locatieoverzicht.php';
                break;
            case "nieuwelocatie": include 'locationForm.php';
                break;
            case "locatieaanpassen": include 'locatieaanpassen.php';
                break;
        }
    } else {
        $locatie = new Locatie(new DbLocatie());
        $locatie_list= $locatie->getLocatieList();
        ?>
<h2>
    Locatie overzicht
</h2>
<nav>
    <div id="">
        <a href="?page=dashboard">
            <img src="img/dashboardbutton.png" />
        </a>
    </div>
   
 
            <a href="?page=locatie">Alle locaties</a>
    
        <a href="?page=locatie&subpage=nieuwelocatie">Nieuwe locaties</a>
    
</nav>
<table border="1">
    <thead> 
       <tr>
            <th>Wijzigen</th>
            <th>Actief</th>
            <th>Locatie naam</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($locatie_list as $idx => $locatietest) {
        echo '<tr>'
               . ' <td>'.
                    '<a href="?page=locatieoverzicht&subpage=locatieaanpassen&id='
                        .$locatietest->getLocatieId(). '">
                            <img width="30" src="img/aanpassen.png""/>
                    </a>'
                . '</td>'
                . '<td>';
                if($locatietest->getLocatieActief() == 1){
                        echo '<img  width="30" src="img/gebruiker_actief.png" />';
                } else {
                    echo '<img width="30" src="img/gebruiker_inactief.png" />';
                } echo '</td>'
                . '<td>'
                    .$locatietest->getLocatieNaam()
                . '</td>'
            .'</tr>';
    }
?>
    </tbody>
</table>

  <?php
}
?>