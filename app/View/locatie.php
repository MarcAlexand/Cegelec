<div id="">
    <div id="">
        <a href="?page=dashboard"><img src="img/dashboardbutton.png" /></a>
    </div>
   
        <?php if (!$gebruiker->heeftRecht($_SESSION['gebruiker_recht'], $recht_array['Leerling'])) { ?>
            <a href="?page=locatie&subpage=locatieoverzicht">Alle Locaties</a>
        <?php } ?>
        <a href="?page=locatie&subpage=nieuwelocatie">Nieuwe locatie</a>
    
</div>

<div class="">
    <?php
    if (isset($_GET['subpage'])) {
        switch ($_GET['subpage']) {
            case "locatieoverzicht": include 'locatieoverzicht.php';
                break;
            case "nieuwelocatie": include 'nieuwelocatie.php';
                break;
            case "gebruikerview": include 'userview.php';
                break;
        }
    } else {
        ?>
        <h2>Locaties</h2>

        <p>Welkom bij het locatiesysteem van Cegelec.
            <br />
            <br />
            Links in het menu kunt u kiezen uit: <br />
            - Alle locaties. Deze optie gebruikt u als u alle locaties wilt zien van het systeem.<br />
            - Nieuwe locatie. Deze optie gebruikt u als u een locatie wilt aanmaken.<br />
        </p>
    </div>
    <?php
}
?>