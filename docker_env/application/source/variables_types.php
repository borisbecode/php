<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>

<head>
    <title>Boris</title>
</head>

<body>

    <?php $nom = 'boris'; ?>

    <h1>Salut mon nom est <?php echo $nom; ?>!</h1> <br>

    <?php $age = 38; ?>

    <p> J'ai <?php echo $age; ?> ans </p>

    <?php $eyes = "brun"; ?>

    <p>mes yeux sont <?php echo $eyes; ?> </p>

    <?php $famille = array(

        0 => "boris",
        1 => "michele",
        2 => "francis",
        3 => "yoan",
        4 => "julie",



    ); ?>

    <p> je suis le cadet de ma famille , le plus grand est <?php echo  $famille[3]; ?> </p>


    <?php $avoirfaim = true; ?>


    <p> as tu faim ? <?php echo  $avoirfaim; ?> </p>

    <?php echo gettype($avoirfaim) ?>


    <!--  <?php $f = newDateTime() ?> -->

    <?php echo $f ?>



</body>

</html>