
<?php

if (isset($_GET['subpage'])) {
    switch ($_GET['subpage']) {
        case "nieuweleerling": include 'nieuweleerling.php';
            break;
        case "wijzigleerling": include 'wijzigleerling.php';
            break;
        case "leerlingvoortgang": include 'leerlingvoortgang.php';
    }
} else {
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
                <td>
                <a href="?page=leerling&subpage=leerlingvoortgang">
                    Persoonlijke voortgang
                </a>
            </td>
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
    <table class="tabel" border="1">
        <thead> 
            <tr>

                <th>Naam</th>
                <th>Adres</th>
                <th>Woonplaats</th>
                <th>E-mail</th>
                <th>Gb. Datum</th>
                <th>Tel. Werk</th>
                <th>Tel. Priv&eacute</th>
                <th>Opleidingsniveau</th>
                <th>Wekzaam op locatie</th>
                <th>Projectleider</th>
                <th>Coach</th>
                <th>Huidige functie</th>
                <th>Bijzonderheden</th>
                <th>Datum in dienst</th>    
            </tr>

        </thead>
        <tbody>
    </table>
    <?php

?>
    <form method="post" name="form1" id="ticketform" action="#">    
        <table class="formulier">
                
            <tr>
                <td>
                    <label class="f1" for "naam">Naam:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="naam" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="f1"for "adres">Adres:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="adres" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "woonplaats">Woonplaats:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="woonplaats" />
                </td>
            </tr>
             <tr>
                <td>
                    <label class="f1"for "email">E-mail:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="email" />
                </td>
            </tr>
            <tr>
                <td>
                    <label class="f1"for "gbdatum">Gb. Datum:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="gb. datum" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "telwerk">Tel. Werk:</label>
                </td>
                <td>
                    <input class="f2"type="tekst" name="tel. werk" />
                </td>
            </tr>
              <tr>
                <td>
                    <label class="f1"for "telprive">Tel. privé:</label>
                </td>
          
                <td>
                    <input class="f2"type="tekst" name="coach" />
                </td>
            </tr>
            
            
            
            
            
            
            
            
            <tr>
                <td>
                    <input type="submit" class="knopje" name="Verzenden" value="Wijzigen" />
                </td>
            </tr>
        </table>  
    <form method="post" name="form1" id="ticketform" action="#">    
        <table class="formulier">
             
        </table>  

    
       



        <?php
    }
    ?>



