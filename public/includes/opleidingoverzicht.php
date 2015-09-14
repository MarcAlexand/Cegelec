<?php
include_once 'classes/opleiding.php';


$opleiding = new Opleiding(new DbOpleiding());
$opleiding_array = $opleiding->getOpleidingList();

$countArray = count($opleiding_array);
?>
<h2>
    Opleidingoverzicht
</h2>
<table border="1">
    <head> 
       <tr>
            <th>Opleidingnaam</th>
            <th>Opleidingniveau</th>
            <th>Opleidingstartdatum</th>
            <th>Opleidingeinddatum</th>
            <th>Opleidingduur</th>
            <th>Opleidinglocatie</th>
        </tr>
        </table>
    </head>
    <body>
<?php
    for ($i = 0; $i < $countArray; $i++) {
        echo '<tr>';
        echo '<td>';
        echo $opleiding_array[$i]['opleiding_naam'];
        echo '</td>';
        echo '<td>';
        echo '<a href="?page=opleiding&subpage=opleidingview&id='
            . $opleiding_array[$i]['opleiding_id'] . '">
            <img src="img/view.png""/></a>';
        echo '</td>';
        echo '</tr>';
    }
?>
    </body>
</html>