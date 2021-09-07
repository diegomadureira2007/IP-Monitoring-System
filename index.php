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
<h2>Monitoramento - Acesso Internet / Conexão Externa</h2>   
<?php

$iplist = array
(
    array("LINK01","201.59.95.62"),
    array("LINK02","201.59.119.2",),
    array("EMBRATEL","201.30.184.161",),
    array("VPN-SP-01","200.146.201.201",),
    array("VPN-SP-02","200.150.163.130",),
    array("EMAIL-EXTERNO","172.16.0.249",),
    array("EMAIL-INTERNO","172.16.0.214",),
    array("SPARK","172.16.0.238",)
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
