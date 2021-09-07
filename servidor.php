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
<h2>Monitoramento - Servidores</h2>   
<?php

$iplist = array
(
    array("ADITB01","10.73.20.240"),
    array("ADITB03","10.73.20.244",),
    array("PROXYITB / SERVICEDESK","10.73.20.250",),
    array("PROXYITB02","10.73.20.235",),
    array("PROXYITB0_2","10.73.20.252",),
    array("PROXYITB03","10.73.20.234",),
    array("PROXYITB0_3","10.73.20.246",),
    array("FILE_SERVER","10.73.20.245",),
    array("SERV_BKP","10.73.20.241",),
    array("BD_ITB / SISFREQ","10.73.20.242",),
    array("SISPLAN","10.73.20.133",),
    array("CatracaJSP","10.73.20.138",),
    array("STORAGE_AKIVA","10.73.20.175",),
    array("SRV_ANTI_VIRUS","10.73.20.230",),
    array("Server_STT","10.73.20.231",),
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
        echo '<td style=color:red>Offline</td>';
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
