<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--
    Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $messaggio = 'Accesso riuscito';

    // http://localhost:8888/php-snacks-b1/2/?email=rocco.andrea1234@gmail.com&name=rocco&age=21

    //name lunghezza minima 3
    if( strlen($name) <= 3 ){
        $messaggio = 'Accesso negato';
    } 
    // email se non contiene '@' '.'
    else if( strpos($email, '@') === false || strpos($email, '.') === false ) {
        $messaggio = 'Accesso negato';
    }
    // age se non è un numero
    else if( is_numeric($age) === false ) {
        // is_numeric($var) verifica che sia un numero
        $messaggio = "Accesso negato";
    }

    // Stampo il messaggio
    echo $messaggio;

?>  

<body>

    <h2>Verifica Accesso</h2>

    <ul>
        <li>Nome: <?php echo $name; ?></li>
        <li>Email: <?php echo $email; ?></li>
        <li>Età: <?php echo $age; ?></li>
    </ul>

    <h4><?php echo $messaggio ?></h4>
    
</body>
</html>
