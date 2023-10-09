<?php
var_dump($_GET);
$parolaForm = $_GET["paragrafo"] 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <p><?php echo $_GET["paragrafo"] ?>  </p>
  <span><?php echo strlen($paragrafo);?></span>
<h2>Parola censurata</h2>
  <p><?php  str_replace($parolaForm, "*", $_GET["paragrafo"] ) ?>  </p>
  <span><?php echo strlen($paragrafo);?></span>
</body>
</html>