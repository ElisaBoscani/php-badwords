<?php
var_dump($_GET);
$parolaForm = $_GET["paragrafo"]; 
$parole = explode(' ', $parolaForm);
var_dump($parole)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <p><?php echo $parolaForm  ?>  </p>
  <span><?php echo strlen($parolaForm);?></span>
<h2>Parola censurata</h2>
  <p><?php echo str_replace($parole[1], '***', $parolaForm ) ?>  </p>
  <span><?php echo strlen($parolaForm);?></span>
</body>
</html>