<?php
$gebruiker = new Gebruiker();
$gebruiker_array = $gebruiker->CreateLeerling();

?>
<table>
    <tr>
        <td>
            <a href="?page=leerling">
                Alle leerlingen        
            </a>    
        </td>
        <td>
            <a href="?page=leerling&subpage=nieuweleerling">
                Nieuwe Leerling
            </a>
        </td>
    </tr>
</table>
<h2>Leerlingoverzicht</h2>
<nav>
    <div id="">
        <a href="?page=dashboard">
            <img src="img/dashboardbutton.png" />
        </a>
    </div>
</nav>
<form method="post" name="form1" id="ticketform" action="#">    
    <table class="formulier">

        <tr>
            <td >
            <label class="f1" for ="naam">Naam:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="naam" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="adres">Adres:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="adres" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="woonplaats">Woonplaats:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="woonplaats" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="email">E-mail:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="email" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="gbdatum">Gb. Datum:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="gb. datum" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="telwerk">Tel. Werk:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="tel. werk" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for="telprive">Tel. Priv&eacute:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="tel. privé" />
            </td>
        </tr>




        <tr>
            <td>
                <label class="f1"for=opleidingniv">Opleidingsniveau:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="opleidingsniveau" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="werkzaam">Werkzaam op locatie:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="email" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="projectleider">Projectleider:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="email" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="coach">Coach:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="coach" />
            </td>
        </tr>

        <tr>
            <td>
                <label class="f1"for ="huidigefunctie">Huidige functie:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="coach" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="bijzonderheden">Bijzonderheden:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="coach" />
            </td>
        </tr>
        <tr>
            <td>
                <label class="f1"for ="datumdienst">Datum in dienst:</label>
            </td>
            <td>
                <input class="f2"type="tekst" name="coach" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" class="wijzigLeerling" name="Verzenden" value="Wijzigen" />
            </td>
        </tr>
    </table>  