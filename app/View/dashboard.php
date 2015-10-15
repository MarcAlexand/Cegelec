    <h2>Ingelogd als <?php echo $_SESSION['gebruiker_user']; ?></h2
        <div id="dashboard">
            <div id="dashboardbutton">
                <a href="<?php echo URL_USER_BEHEER; ?>">
                    <img src="img/gebruikers.png">
                    </br>
                    <?php echo URL_WEERGEVEN_USER_BEHEER; ?> 
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_OPLEIDING_BEHEER; ?>">
                    <img src="img/opleidingen.png">
                    </br>
                    <?php echo URL_WEERGEVEN_OPLEIDING_BEHEER; ?> 
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_LEERLING_BEHEER; ?>">
                    <img src="img/leerling.png">
                    </br>
                    <?php echo URL_WEERGEVEN_OVERZICHT_LEERLING; ?>
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_LOCATIE_BEHEER; ?>">
                    <img src="img/locatie.png">
                    </br>
                    <?php echo URL_WEERGEVEN_OVERZICHT_LOCATIE; ?>
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_TOTAAL_OVERZICHT; ?>">
                    <img src="img/totaaloverzicht.png">
                    </br>
                    <?php echo URL_WEERGEVEN_TOTAAL_OVERZICHT; ?>
                </a>
            </div>
            <div id="dashboardbutton" ">
                <form method="POST" id="logout" name="logout">
                    <input type="hidden"  name="logout" value="true">
                    <input type="image" src="img/uitloggenbut.png"> 
                </form>
                <a>
                <?php echo URL_WEERGEVEN_UITLOGGEN; ?>
                    </a>
            </div>
<!--style="margin: 0 auto; width: 100%;-->