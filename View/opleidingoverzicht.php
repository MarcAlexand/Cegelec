<?php
include_once FILE_M_OPLEIDING;


$opleiding = new Opleiding(new DbOpleiding());
$opleiding_array = $opleiding->getOpleidingList();

$countArray = count($opleiding_array);
?>
<h2>
    <br/>Opleiding overzicht<br/>
</h2>
<table class="tabel" border="1">
    <thead> 
        <tr>
            <th>Naam</th>
            <th>Status</th>
            <th>Startdatum</th>
            <th>Einddatum</th>
            <th>Niveau</th>
            <th>Voortgang</th>
            <th>Duur</th>
        </tr>

    </thead>
    <tbody>
        <?php
        foreach ($opleiding_array as $idx => $opleiding_object) {
            echo '<tr><td><a href="view/cursusblokoverzicht.php">' .
            $opleiding_object->getOpleidingNaam() .
            '</a></td><td>' .
            $opleiding_object->getOpleidingStatus() .
            '</td><td>' .
            $opleiding_object->getOpleidingStartDatum() .
            '</td><td>' .
            $opleiding_object->getOpleidingEindDatum() .
            '</td><td>' .
            $opleiding_object->getOpleidingNiveau() .
            '</td><td>' .
            $opleiding_object->getOpleidingVoortgang() .
            '</td><td>' .
            $opleiding_object->getOpleidingDuur() .
            '</td></tr>';
        }
        ?>
    </tbody>
</table>
</html>