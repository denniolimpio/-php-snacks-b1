<!-- Creiamo un array 'matches' contenente altri array i quali
rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti
dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php




$matches = [

  [
    'squadra_1' =>   'Bologna' ,
    'squadra_2' => ' Napoli',
    'risultato_1' => rand(0,3),
    'risultato_2' => rand(0,3),

  ],

  [

    'squadra_1' => ' Sampdoria',
    'squadra_2' => ' Cagliari',
    'risultato_1' => rand(0,3),
    'risultato_2' => rand(0,3),

  ],

  [

    'squadra_1' => ' Milan',
    'squadra_2' => ' Parma',
    'risultato_1' => rand(0,3),
    'risultato_2' => rand(0,3),

  ],

  [

    'squadra_1' => ' Lecce',
    'squadra_2' => ' Fiorentina',
    'risultato_1' => rand(0,3),
    'risultato_2' => rand(0,3),

  ],

];

for ($i=0; $i < count($matches); $i++) {

  $this_partita = $matches[$i];

}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

  <link rel="stylesheet" href="style.css">
</head>
<body>


  <div class="container">

    <h1>Risultati serie A</h1>

    <ul>

      <?php for ($i=0; $i < count($matches); $i++) { ?>

        <?php $this_partita = $matches[$i]; ?>

        <li> <?php  echo $this_partita['squadra_1']  ?> - <?php echo $this_partita['squadra_2'] ?> | <?php echo $this_partita['risultato_1'] ?>  -  <?php echo $this_partita['risultato_2'] ?> </li>

      <?php } ?>

    </ul>

  </div>

</body>
</html>
