<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

</head>
<body>


  
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="index.php")?"active":"" ?> " href="index.php">INTERNET / CONEXÃO EXTERNA</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="servidor.php")?"active":"" ?> " href="servidor.php">SERVIDORES</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="oi.php")?"active":"" ?> " href="oi.php">OI</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="agibank.php")?"active":"" ?> " href="agibank.php">AGIBANK</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="vivo.php")?"active":"" ?> " href="vivo.php">VIVO</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="claro.php")?"active":"" ?> " href="claro.php">CLARO</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="crea.php")?"active":"" ?> " href="crea.php">CREA</a></li>
  <li><a class="sidenav <?php echo (basename($_SERVER['PHP_SELF'])=="total.php")?"active":"" ?> " href="total.php">TOTAL</a></li>
</ul>

</body>
</html>
