<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”  -->
<?php
$name = $_GET['nome'];
$mail = $_GET['email'];
$age = $_GET['eta'];

$message = "Accesso negato";

echo $name;
echo $mail;
echo $age;

// check 1: verifico che name sia più lungo di 3 caratteri,
// check 2: verifico che la mail contenga un punto e una chiocciola
// check 3: verifico che  age sia un numero
if (strlen($name) < 3){
    echo $message;

  } else if ( strpos($mail, ' @') === false){
    echo $message;
  } else if ( is_numeric($age) === false) {

    echo  $message;
  } else {
    echo 'accesso consentito';
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


  </body>
</html>
