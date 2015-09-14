<?php
include_once FILE_M_OPLEIDING;

$opleiding = new Opleiding(new DbOpleiding());
$opleiding_array = $opleiding->getOpleidingList();
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
    <a href="?page=opleiding&subpage=nieuwecursusblok">Nieuwe cursusblok</a>
    <a href="?page=opleiding&subpage=nieuwecursusstarten">Nieuwe cursus starten</a>
    <a href="?page=opleiding&subpage=cursusoverzicht">Alle cursussen</a>
</div>

<div class="">
    <?php
    if (isset($_GET['subpage'])) {
        switch ($_GET['subpage']) {
            case "opleidingoverzicht": include 'opleidingoverzicht.php';
                break;
            case "nieuweopleiding": include 'nieuweopleiding.php';
                break;
            case "nieuwecursusblok": include 'nieuwecursusblok.php';
                break;
            case "nieuwecursusstarten": include 'nieuwecursusstarten.php';
                break;
            case "cursusblokoverzicht": include 'cursusblokoverzicht.php';
                break;
            case "gebruikerview": include 'userview.php';
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
                <?php
            }
            ?>
