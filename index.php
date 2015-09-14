
<?php
ob_start();
include_once '/defs/constants.php';
include_once FILE_M_GEBRUIKER;
include FILE_M_GEBRUIKER_RECHT;
include_once FILE_M_LOGINSYSTEEM;
include_once FILE_DEFS_RECHTCONSTANS;
$rechten = new RechtConstants();
$reflection = new ReflectionClass($rechten);
$recht_array= $reflection->getConstants();
$login = new Login;

$gebruiker = new Gebruiker(new DbGebruiker());

if (isset($_POST['logout'])) {
    $login->logout();
    exit;
}                       
if (!$login->isloggedin()) {
    header("Location: ".FILE_V_LOGINSCHERM);
    exit;
} else {
    $recht = new GebruikerRecht();
    ?>
    <!DOCTYPE html>
    <html lang="nl">
        <head>
            <title>Cegelec</title>
            <link rel="stylesheet" href="style/style.css" />
            <meta charset="UTF-8">
        </head>
       
        <header>
                    <span id="logo">
                        <a href="<?php echo URL_DASHBOARD ?>">
                            <img src="img/actemium.png"/>
                        </a>
                    </span>
                </header>
        <body>
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
                    }} else {
                        include FILE_V_DASHBOARD;
                    }
                ?>
            </div>
            <footer>
                <p></p>
            </footer>
        </body>
    </html>
<?php
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>

