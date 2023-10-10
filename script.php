<?php
/* var_dump($_GET); */
$parolaForm = $_GET["paragrafo"]; 
$parolaCensurata=$_GET["censura"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <h2>Frase intera</h2>
  <p><?php echo $parolaForm  ?>  </p>
  <span>Lunghezza:<?php echo strlen($parolaForm);?></span>
<h2>Frase con la parola censurata</h2>
  <p><?php echo str_replace($parolaCensurata, '***', $parolaForm ) ?>  </p>
  <span>Lunghezza:<?php  echo strlen($parolaCensurata);?></span>
</body>
</html>