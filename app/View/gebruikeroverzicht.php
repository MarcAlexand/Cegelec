<?php




    if (isset($_GET['subpage'])) {
        switch ($_GET['subpage']) {
            case "gebruikeroverzicht": include 'gebruikeroverzicht.php';
                break;
            case "nieuwegebruiker": include 'nieuwegebruiker.php';
                break;
            case "gebruikersaanpassen": include 'gebruikersaanpassen.php';
                break;
        }
    } else {
        $gebruiker = new Gebruiker(new DbGebruiker());
        $gebruiker_list= $gebruiker->getGebruikerList();
        ?>
<h2>
    Gebruiker overzicht
</h2>
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
<table border="1">
    <thead> 
       <tr>
            <th>Wijzigen</th>
            <th>Actief</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Gebruikersnaam</th>
            <th>Email</th>
            <th>Geboorte Datum</th>
            <th>Adres</th>
            <th>Woonplaats</th>
            <th>Telefoon Prive</th>
            <th>Telefoon Werk</th>
            <th>In Dienst Datum</th>
            <th>Recht</th>
        </tr>
    </thead>
    <tbody>
<?php
    foreach($gebruiker_list as $idx => $gebruikers) {
        echo '<tr>'
               . ' <td>'.
                    '<a href="?page=gebruikers&subpage=gebruikersaanpassen&id='
                        . $gebruikers->getGebruikerId() . '">
                            <img width="30" src="img/aanpassen.png""/>
                    </a>'
                . '</td>'
                . '<td>';
                if($gebruikers->getActief() == 1){
                        echo '<img  width="30" src="img/gebruiker_actief.png" />';
                } else {
                    echo '<img width="30" src="img/gebruiker_inactief.png" />';
                } echo '</td>'
                . '<td>'
                    .$gebruikers->getVoornaam()
                . '</td>'
                . '<td>'
                    .$gebruikers->getTussenvoegsel()
                . '</td>'
                . '<td>'
                    .$gebruikers->getAchternaam()
                . '</td>'
                . '<td>'
                    .$gebruikers->getUsername()
                . '</td>'
                . '<td>'
                    . $gebruikers->getEmail()
                . '</td>'
                . '<td>'
                    . $gebruikers->getGeboorteDatum()
                . '</td>'
                . '<td>'
                    . $gebruikers->getAdres()
                . '</td>'
                . '<td>'
                    . $gebruikers->getWoonplaats()
                . '</td>'
                . '<td>'
                    . $gebruikers->getTelefoonPrive()
                . '</td>'
                . '<td>'
                    . $gebruikers->getTelefoonWerk()
                . '</td>'
                . '<td>'
                    . $gebruikers->getDienst()
                . '</td>'        
                . '<td>'
                    . "recht"
                . '</td>'
            .'</tr>';
    }
?>
    </tbody>
</table>

  <?php
}
?>