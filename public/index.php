<?php
require "../vendor/autoload.php";
ob_start();
include_once '../app/defs/constants.php';
$rechten = new RechtConstants();
$reflection = new ReflectionClass($rechten);
$recht_array = $reflection->getConstants();
$login = new Login;

$gebruiker = new Gebruiker(new DbGebruiker());

if (isset($_POST['logout'])) {
    $login->logout();
    exit;
}
if (!$login->isloggedin()) {
    header("Location: " . FILE_V_LOGINSCHERM);
    exit;
} else {
    $recht = new GebruikerRecht();
    ?>
    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <title>Cegelec</title>
        <link rel="stylesheet" href="style/style.css"/>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <span id="logo">
                <a href="<?php echo URL_DASHBOARD ?>">
                    <img src="img/actemium.png"/>
                </a>
            </span>
        </header>
    <div id="main">
        <?php
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case "dashboard":
                    include FILE_V_DASHBOARD;
                    break;
                case "gebruikers":
                    include FILE_V_GEBRUIKERSOVERZICHT;
                    break;
                case "opleiding":
                    include FILE_V_OPLEIDING;
                    break;
                case "locatie":
                    include FILE_V_LOCATIE;
                    break;
                case "leerling":
                    include FILE_V_LEERLING;
                    break;
            }
        } else {
            include FILE_V_DASHBOARD;
        }
        ?>
    </div>
    </body>
    </html>
    <?php
}
?>

