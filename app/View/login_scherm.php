<?php
ob_start();
require '../../vendor/autoload.php';
require_once '../defs/constants.php';
// Nieuw object van Login class
$login = new Login;
// Controleer of gebruiker al ingelogd is, zoja ga dan naar de index pagina
if($login->isloggedin()){
    header("Location: ".HOME);
    exit;
} else {
if(isset($_POST['inloggen'])) {
    // gebruiker_user setten in Login class
	$login->setGebruikerUser($_POST['gebruikersnaam']);
    // password setten in Login class
	$login->setGebruikerWachtwoord($_POST['wachtwoord']);
    // Kijk of gegevens kloppen login
        
	$login->login();
	// Ga naar index pagina
	header("Location:".HOME);
	exit;
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cegelec | Inloggen</title>
        <link rel="stylesheet" href="../../public/style/style.css">
</head>
<body>
    <div id="main">
	<div id="loginwrap">
            <span id="logo">
                <a href="<?php echo URL_DASHBOARD ?>">
                    <img src="../../public/img/actemium.png"/>
                </a>
            </span>
            <form method="POST" class="formulier">
                <table>
                    <tr>
                        <td>Gebruikersnaam</td>
                        <td>
                            <input type="text" name="gebruikersnaam">
                        </td>
                    </tr>
                    <tr>
                        <td>Wachtwoord</td>
                        <td>
                            <input type="password" name="wachtwoord">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="knopje" name="inloggen" value="Inloggen">
                        </td>
                    </tr>
                </table>
            </form>
	</div>
    </div>
</body>
</html>
<?php
}
?>
