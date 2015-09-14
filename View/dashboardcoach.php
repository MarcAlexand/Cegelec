    <h2>Ingelogd als <?php echo $_SESSION['gebruiker_user']; ?></h2
        <div id="dashboard">
            <div id="dashboardbutton">
                <a href="<?php echo URL_USER_BEHEER; ?>">
                    <img src="img/userbeheerbutton.png">
                    </br>
                    <?php echo URL_WEERGEVEN_USER_BEHEER; ?> 
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_OPLEIDING_BEHEER; ?>">
                    <img src="img/opleidingtoevoegen.png">
                    </br>
                    <?php echo URL_WEERGEVEN_OPLEIDING_BEHEER; ?> 
                </a>
            </div>
            <div id="dashboardbutton">
                <a href="<?php echo URL_LEERLING_BEHEER; ?>">
                    <img src="img/userbeheerbutton.png">
                    </br>
                    <?php echo URL_WEERGEVEN_OVERZICHT_LEERLING; ?>
                </a>
            </div>
            <div id="dashboardbutton">
                <form method="POST" id="logout" name="logout">
                    <input type="hidden"  name="logout" value="true">
                    <input type="image" src="img/uitloggenbut.png"> 
                </form>
                <a>
                <?php echo URL_WEERGEVEN_UITLOGGEN; ?>
                    </a>
            </div>
