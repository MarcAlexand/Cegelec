<?php
$gebruiker = new Gebruiker(new DbGebruiker()); 
$gebruiker_list= $gebruiker->getGebruikerList();
$locatie = new Locatie(new DbLocatie());
$locatie_list = $locatie->getLocatieList();
$opleiding = new Opleiding(new DbOpleiding());
$opleiding_array = $opleiding->getOpleidingList();
?>

<h2>
    <br/>Totaaloverzicht<br/>
</h2>
<div id="">
    <div id="">
        <a href="?page=dashboard"><img src="img/dashboardbutton.png" /></a>
    </div>
<table class="tabel" border="1">
    <thead> 
        <tr>
            <th>Volgnummer</th>
            <th>Naam leerling</th>
            <th>Werkzaam op locatie</th>
            <th>Projectleider</th>
            <th>Coach</th>
            <th>Mentor</th>
            <th>Training</th>
            <th>Startdatum</th>
            <th>Duur</th>
            <th>Voortgang</th>
        </tr>

    </thead>
    <tbody>
        <?php
        foreach($gebruiker_list as $idx => $gebruikers) {
            echo '<tr>'
            . '<td>'
            .$gebruikers->getGebruikerId()
            . '</td>'
            . '<td>'
            .$gebruikers->getVoornaam()
            . '</td>'
            . '<td>'
            .$gebruikers->getProjectleiderId()
            . '</td>'
            . '<td>'
            .$gebruikers->getCoachId()
            . '</td>'
            . '<td>'
            .$gebruikers->getMentorId()
            . '</td>'
            .'</tr>';
            
        }
        
        foreach ($locatie_list as $idx => $locatie){
            echo '<tr>'
            . '<td>'
            .$locatie->getLocatieNaam()
            . '</td>'
            .'</tr>';
        }
        
        foreach ($opleiding_array as $idx => $opleiding){
            echo '<tr>'
            . '<td>'
            .$opleiding->getOpleidingNaam()
            . '</td>'
            .'</tr>';
        }
                
        
        ?>
    </tbody>
</table>
</html>
