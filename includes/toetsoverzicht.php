<?php
include_once 'classes/toets.php';
$toets = new Toets(new DbToets());
$toets_array = $toets->getList();

$countArray = count($toets_array);
?>
<h2>
    Toetsoverzicht
</h2>
<table border="1">
    
    <head> 
       <tr>
           <th>Toetsnaam</th>
            <th>Toetsbeschrijving</th>
            <th>Toetsdatum</th>
            <th>Toetsbeoordeling</th>
        </tr>
</table>
    </head>
    <body>
<?php
    for ($i = 0; $i < $countArray; $i++) {
        echo '<tr>';
        echo '<td>';
        echo $toets_array[$i]['toets_naam'];
        echo '</td>';
        echo '<td>';
        echo '<a href="?page=toets&subpage=toetsview&id='
            . $toets_array[$i]['toets_id'] . '">
            <img src="img/view.png""/></a>';
        echo '</td>';
        echo '</tr>';
    }
?>
    <body>
</html>