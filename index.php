<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--
    Snack 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
    casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60

    Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php
    $squadre = [

        [
            'squadraCasa' => 'Milano',
            'squadraOspiti' => 'Bologna',
            'puntiCasa' => 70,
            'puntiOspiti' => 65, 
        ],

        [
            'squadraCasa' => 'Napoli',
            'squadraOspiti' => 'Roma',
            'puntiCasa' => 75,
            'puntiOspiti' => 55, 
        ],

        [
            'squadraCasa' => 'Firenze',
            'squadraOspiti' => 'Pisa',
            'puntiCasa' => 46,
            'puntiOspiti' => 53, 
        ],

        [
            'squadraCasa' => 'Cittadella',
            'squadraOspiti' => 'Reggiana',
            'puntiCasa' => 82,
            'puntiOspiti' => 78, 
        ],
    ]
?>

<body>
    <h1>Risultati 32esima giornata di campionato serie A</h1>

    <ul>
        <?php for($i = 0; $i < count($squadre); $i++) { ?>
            <?php $this_squadre = $squadre[$i]; ?>
            <?php //var_dump($this_squadre); ?>

            <li>
                Partita: <?php echo $this_squadre['squadraCasa'] ?> - <?php echo $this_squadre['squadraOspiti'] ?> 
                | Risultato: <?php echo $this_squadre['puntiCasa'] ?>-<?php echo $this_squadre['puntiOspiti'] ?>
            </li>
        <?php } ?>     
    </ul>
    
</body>
</html>

