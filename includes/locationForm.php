<?php
require_once 'classes/locatie.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cegelec | Locaties</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="loginwrap">
		<h2>Cegelec | Locatie</h2>
		<form method="POST" action="#" class="formulier">
			<table>
				<tr>
                    <td>
                        <h4>Locaties toevoegen</h4>
                    </td>
                </tr>
                <tr>
	                <td>
		                Nieuwe locatie : 
                    </td>
                    <td>
                        <input type="text" name="locatie_naam" placeholder=" locatie naam">
                    </td>
                </tr>
                <tr>
	                <td>
		                Activeren : 
	                </td>
	                <td>
		                <input type="checkbox" name="locatie_actief" value="0"> Ja
		                <input type="checkbox" name="locatie_actief" value="1"> Nee
                </tr>
                <tr>
                    <td>
                        <input type="submit" class="knopje" name="submit_toevoegen" value="Aanmaken">
                    </td>
                </tr>
                <tr>
	                <td>
		                <h4>Locatie wijzigen</h4>
	                </td>
                </tr>
                <tr>
	                <td>
		                <select>
						    <option value=""> --Select-- </option>
						    <?php foreach($data as $row): ?>
						    <option><?=$row['id']?></option>
						    <?php endforeach ?>
						</select>
	                </td>
                </tr>
			</table>
		</form>
	</div>
</body>
</html>
