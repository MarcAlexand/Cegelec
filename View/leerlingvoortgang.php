<?php
require_once FILE_M_MEETWAARDE;
$meetwaarde = new Meetwaarde();
$meetwaarde_array = $meetwaarde->getMeetwaardeList();

$countArray = count($meetwaarde_array);
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

                <th>Aanwezigheid</th>
                <th>Evaluatiedatum</th>
                <th>Due date</th>
                <th>Voortgang</th>
                <th>Evaluatie</th>
                  
            </tr>

        </thead>
        <?php
         for ($i = 0; $i < $countArray; $i++) {
        echo '<tr>'  
                . '<td>'
                    .$meetwaarde_array[$i]['meetwaarde_aanwezigheid']
                . '</td>'
                . '<td>'
                    .$meetwaarde_array[$i]['evaluatie_datum']
                . '</td>'
                . '<td>'
                    .$meetwaarde_array[$i]['due_datum']
                . '</td>'
                . '<td>'
                    .$meetwaarde_array[$i]['meetwaarde_gebruikerId']
                . '</td>'
                . '<td>'
                    .$meetwaarde_array[$i]['meetwaarde_cursusId']
                . '</td>'
             .'</tr>';
         }
         
         //*
         echo __FILE__.__LINE__.__FUNCTION__.'<br />';
         echo '<pre>';
         var_dump($meetwaarde);
         echo '</pre>';
         //*/
                        ?>
        <tbody>
    </table>
 
    
    
        