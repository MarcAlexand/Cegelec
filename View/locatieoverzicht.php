<?php
include_once FILE_M_LOCAITE;


$locatie = new Locatie(new DbLocatie());
$locatie_array = $locatie->getList();

$countArray = count($locatie_array);
?>
<h2>
    Locatieoverzicht
</h2>
<table border="1">
    <head> 
       <tr>
            <th>Locatienaam</th>
            <th>Locatiebeschrijving</th>
        </tr>
        </table>
    </head>
    <body>
<?php
    for ($i = 0; $i < $countArray; $i++) {
        echo '<tr>';
        echo '<td>';
        echo $locatie_array[$i]['locatie_naam'];
        echo '</td>';
        echo '<td>';
        echo '<a href="?page=locatie&subpage=locatieview&id='
            . $locatie_array[$i]['locatie_id'] . '">
            </a>';
        echo '</td>';
        echo '</tr>';
    }
?>
    </body>
</html>