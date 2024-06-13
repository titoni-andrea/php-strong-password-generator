<?php
$length = $_GET["length"];
$password = "";

// for ($i=0; $i < $length;$i++) {

//     $password .= "X";
// }

while( strlen($password) < $length){
$password.="1";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati pwd</title>
</head>
<body>
 <h1>Generazione password</h1>
 <h2>la tua password è <?= $password ?></h2>
 <h3> hai richiesto una password lunga <?= $length ?> caratteri</h3>
</body>
</html>