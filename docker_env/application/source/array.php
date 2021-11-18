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
    $mafamille = ["boris", "yoan", "francis", "michele", "julie"]


    ?>

    <?php

    echo '<pre>';
    print_r($mafamille);
    echo '</pre>';

    ?>

    <br>
    <?php
    var_dump($mafamille)

    ?>

    <br>


    <!-- ajouter un element -->

    <?php


    array_push($mafamille, "joannie");

    echo $mafamille[5];



    $person[] = " bibis ";
    $person['function'] = 'Junior Web Developer';
    echo $person['function'];
    // returns 'Junior Web Developer'

    echo '<pre>';
    print_r($person);
    echo '</pre>';

    var_dump($person);

    ?>

    <?php

    $mafamille['taille'] = ["184", "183", "174", "169", "147"];

    echo $mafamille[0];
    echo $mafamille['taille'][0];







    ?>

    <br>

    <?php


    $me = array(
        'age'    => 29,
        'firstname'         => 'boris',
        'lastname'               => 'Lorenzzzz',
        'favourite_movies'     => array('dexter', 'starwas', 'Matrix', 'oss117'),
        'praticingkungfu' => true,
        'passion'         => array('not football',),
    );

    echo '<pre>';
    print_r($me);
    echo '</pre>';





    ?>



    <?php

    $me['passion'][] = 'not tennis ';

    ?>



    <br>

    <?php
    echo '<pre>';
    print_r($me['passion']);
    echo '</pre>';

    ?>

    <?php



    $soulmate = array(
        'age'    => 78,
        'firstname'         => 'eduardo',
        'lastname'               => 'rkaszi',
        'favourite_movies'     => array('kikou', 'pokerstar', 'perlinpinpin', 'oss117'),
        'praticingkungfu' => false,
        'passion'         => array('not football',),
        'autre' => ' naime pas le chocolat ',
    );

    // array merge permet de fusionner 
    $result = array_merge($me, $soulmate);
    print_r($result);

    // array intersect  les fusionne mais que les communes 
    $resulttaunt = array_intersect($me, $soulmate);
    print_r($result);

    echo '<pre>';
    print_r($result);
    print_r($resulttaunt);
    echo '</pre>';

    ?>


    <br>

    <?php

    $web_development = array(
        'frontend' => array(),
        'backend' => array(),




    );


    $web_development['frontend'][] = 'xtml';
    $web_development['backend'][] = 'ruby';
    $web_development['frontend'][] = 'css';
    $web_development['frontend'][] = 'flash';
    $web_development['backend'][] = 'javascript';
    $web_development['frontend'][0] = 'html';
    unset($web_development['frontend'][2]);
    $web_development['frontend'][] = 'xptdr';

    // ATTENTION ICI LALLIGNE 169 , xptdr va au numero 3 meme si jai supprimé le numéro 2 


    echo '<pre>';
    print_r($web_development);

    echo '</pre>';

    ?>





    <?php

    $web = array(
        'frontend' => array(),
        'backend' => array(),




    );


    $web['frontend'][] = 'xtml';
    $web['backend'][] = 'ruby';
    $web['frontend'][] = 'css';
    $web['frontend'][] = 'flash';
    $web['backend'][] = 'javascript';
    $web['frontend'][0] = 'html';
    array_splice($web['frontend'], 2);
    $web['frontend'][] = 'xptdr';

    // ATTENTION ICI LALLIGNE 169 , xptdr va au numero 3 meme si jai supprimé le numéro 2 


    echo '<pre>';
    print_r($web);

    echo '</pre>';

    ?>























</body>

</html>