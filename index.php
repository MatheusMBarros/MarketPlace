<?php
  session_start();
  include('MySql.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MarketPlace | Home </title>
</head>
<body>
  <?php
  $sql = MySql::getConn()->prepare("SELECT * FROM usuarios");
  $sql->execute();

  $usuarios = $sql->fetchAll();

  foreach ($usuarios as $key => $value) {
    echo $value['login'];
    echo"<br/>";

  }
  ?>
  
</body>
</html>