<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    $names = array('John', 'jeanne', 'Joan', 'pepouz');
    foreach ($names as $name) {
        echo ucfirst($name);
    }

    echo '<pre>';
    print_r($names);

    echo '</pre>';




    ?>



    <!-- // for each avec une clé  -->


    <?php
    $names = array('John', 'jeanne', 'Joan', 'émile');
    var_dump($names);

    echo "<br>";

    foreach ($names as $key => $value) {
        $names[$key] = ucfirst($value);
    }
    var_dump($names);



    ?>

    <br>

    <?php


    $amount_of_lines = 1;

    while ($amount_of_lines <= 10) {
        echo $amount_of_lines . '. : I shall not watch flies <br />';

        $amount_of_lines++;
    }






    ?>

    <br>


    <?php


    for ($amount_of_lines = 1; $amount_of_lines <= 10; $amount_of_lines++) {
        echo $amount_of_lines . '. : I shall not watch flies fly when I.<br />';
    }


    ?>

    <br>

    <?php


    $client = ["igor", "vladi", "emma", "holigar", "samuel", "etienne", "jeudemot"];

    for ($x = 0; $x < $client; $x++) {

        echo $client[$x];
        echo "<br />";
    }





    ?>



</body>

</html>