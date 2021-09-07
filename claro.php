<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
<link rel="navmenu" href="nav.php">
<link rel="shortcut icon" href="logo.ico">
<title>Monitoramento</title>
</head>
<body>

<ul class="sidenav"> 
 <?php require 'nav.php' ?>
 
</ul>


<div class="content">
<h2>Monitoramento - CLARO</h2>   
<?php

$iplist = array
(
    array("SERVER_AKIVA","172.26.0.102")
    

);

$i = count($iplist);
$results = [];



for($j=0;$j<$i;$j++) {
    $ip = $iplist[$j] [1];
    $ping = exec("ping -n 1 $ip",$output,$status);
    $results[] = $status;
}
//Tabela

echo '<font face=Courier New>';
echo "<table border=1 style=border-collapse:collapse>
<th colspan=4> LINKS_MONITORAMENTO </th>
<tr>
<td align=center width=25>#</td>
<td align=center width=250>Name</td>
<td align=center width=100>Status</td>
<td align=center width=110>IP/URL</td>
</tr>";
foreach ($results as $item =>$k){
    echo '<tr>';
    echo '<td align=center>'.$item.'</td>';
    echo '<td>'.$iplist[$item] [0].'</td>';
    if($results[$item] ==0) {
        echo '<td style=color:green>Online</td>';
    }
    else{
        echo '<td style=color:red style=back>Offline</td>';
    }
    echo '<td>'.$iplist[$item] [1].'</td>';
    echo '</tr>';
    
}
echo "</table>";
echo '</font>';
echo header("refresh: 5");

?>
</div>

</body>
</html>
