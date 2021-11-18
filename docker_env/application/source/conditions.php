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

    /**
     * Series of exercises on PHP conditional structures.
     */
    ?>

    <br>



    <?php
    $age = 15;
    $language = "English";

    if ($age <= 12 and $language == "English") {
        echo  "Hello kiddo!";
    } else {
        echo  "Bonjour étranger !";
    }


    ?>

    <br>

    <h1>1.1 Clean your room Exercise </h1> <br>
    <?php

    $room_is_filthy = true;

    if ($room_is_filthy == 0) {
        echo "Yuk, Room is dirty : let's clean it up !";

        echo "<br>Room is now clean!";
        $room_is_filthy = false;
    } else {
        echo "<br>Nothing to do, room is neat.";
    }


    ?>


    <h1>1.2 Clean your room Exercise, improved</h1><br>

    <!-- Create the array of possible states -->

    <?php
    $possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

    // When testing, change the index value to navigate to the possible array values
    $room_filthiness = $possible_states[3];

    if ($room_filthiness == $possible_states[0]) {
        echo "Yuk, Room is Disgusting! Let's clean it up !";
    } else if ($room_filthiness == $possible_states[1]) {
        echo "Yuk, Room is filthy : let's clean it up !";
    } else if ($room_filthiness == $possible_states[2]) {
        echo "Yuk, Room is dirty : let's clean it up !";
    } else if ($room_filthiness == $possible_states[3]) {
        echo "Yes, Room is clean : let's play ! ";
    } else {
        echo "<br>Nothing to do, room is immaculate";
    }

    ?>


    <h1> 2. "Different greetings according to time" Exercise </h1>


    <?php
    $now = date("H:i:");
    date_default_timezone_set("Europe/Brussels");
    echo "The time is " . $now;

    ?>
    <br>
    <?php
    if ($now >= 5 && $now <= 9) {
        echo "Good morning !";
    } else if ($now >= 5 && $now < 9) {
        echo "Good day !";
    } else if ($now >= 9 && $now < 12) {
        echo "Good afternoon !";
    } else if ($now >= 12  && $now <= 16) {
        echo "Good evening !";
    } else {
        echo "Good night !";
    }
    ?>
    <br>
    <h1>3. Display a different greeting according to the user's age.</h1><br>

    <?php

    if (isset($_GET['age'])  && ctype_digit($_GET['age'])) {
        $vieux = $_GET['age'];
        $sex = $_GET['gender'];
        $speak = $_GET['speak'];
        switch ($vieux) {
            case $vieux < 12;
                if ($sex == 'female') {
                    echo "Hello micht " . $sex;
                }
                if ($sex == 'male') {
                    echo "Hello kiddo bg!";
                }
                if ($sex == 'other') {
                    echo " hello no binary ";
                }


                break;
            case $vieux < 18 && $vieux > 12;
                if ($sex == 'female') {

                    if ($speak == 'yes') {
                        echo "Hello  teen micht " . $sex;
                    }
                    if ($speak == 'no') {
                    }
                    echo "HALOOOOOOOOOOOOOOOOOHA  teen micht " . $sex;
                }
                if ($sex == 'male') {
                    echo "Hello teen kiddo bg!";
                }
                if ($sex == 'other') {
                    echo " hello teen  no binary ";
                }
                break;
            case $vieux < 18 && $vieux > 115;
                if ($sex == 'female') {
                    echo "Hello old  micht " . $sex;
                }
                if ($sex == 'male') {
                    echo "Hello old  kiddo bg!";
                }
                if ($sex == 'other') {
                    echo " hello old  no binary ";
                }
                break;
            case $vieux > 115;
                if ($sex == 'female') {
                    echo "Hello robot micht " . $sex;
                }
                if ($sex == 'male') {
                    echo "Hello robot kiddo bg!";
                }
                if ($sex == 'other') {
                    echo " hello  robot no binary ";
                }
                break;
            default:
                echo 'Ops!';
        }
    }
    // Form (incomplete)
    ?>

    <form method="get" action="">
        <label for="age"> Please tap your age: </label>
        <input type="text" id="age" name="age">
        <input type="submit" name="submit" value="Greet me now">

        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "other") echo "checked"; ?> value="other">Other

    </form>
    <br>

    <form method="get" action="">

        <label for="speak"> do you speak english? </label>
        <input type="radio" name="speak" <?php if (isset($_GET['speak']) && $speak == "yes") echo "checked"; ?> value="yes">Yes
        <input type="radio" name="speak" <?php if (isset($_GET['speak']) && $speak == "no") echo "checked"; ?> value="no">No
    </form>





    <?php echo $sex; ?>


    <br>
    <br>

    <h1>5. The Girl Soccer team</h1>





    <?php
    if (isset($_GET['age'])  &&  isset($_GET['age'])) {




        if ($_GET['age'] > 21 &&  $_GET['age'] < 42 && $_GET['gender'] == 'female') {


            echo  "welcome to the team !";
        } else {

            echo "Sorry you don't fit the criteria";
        }
    }









    ?>




    <form method="get" action="">
        <label for="name"> Please enter your name : </label>
        <input type="text" id="name" name="name">
        <br>

        <label for="age"> Please tap your age: </label>
        <input type="text" id="age" name="age">

        <br>

        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($_GET['gender']) && $gender == "other") echo "checked"; ?> value="other">Other

        <input type="submit" name="submit" value="valid?">



    </form>


    <h1>7. "School sucks!" Exercise</h1>



    <?php




    if (isset($_GET['note'])) {

        $studentnote = $_GET['note'];
        switch ($studentnote) {
            case $studentnote <= 4;
                echo "This work is really bad. <br> What a dumb kid! ";
                break;
            case ($studentnote >= 5 && $studentnote <= 8);
                echo "This is not sufficient. More studying is required.";
                break;
            case $studentnote == 10;
                echo " not enough";
                break;

            case ($studentnote >= 11 && $studentnote <= 14);
                echo "Not bad!";
                break;
            default:
                echo 'Ops!';
        }
    }





    ?>



    <form method="get" action="">
        <label for="note"> Note of the student : </label>

        <br>


        <input type="text" id="note" name="note">

        <br>



        <input type="submit" name="submit" value="valid?">



    </form>

    <br>

    <?php

    $age = 24;
    $is_adult = ($age >= 18) ? true : false;
    echo $is_adult


    ?>

    <br>
    <br>


    <?php
    $hello = " bienvenue ";
    $gender = "m";
    $is_gender = ($gender == "f") ? "femme" : "homme";

    echo $hello . $is_gender;

    ?>



    <br>

    <?php

    $imageURL1 = '<iframe src="https://giphy.com/embed/26vUw5sYGcqmMDoBy" width="480" height="346" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';

    $gif = [
        "<img src = 'https://giphy.com/clips/bestfriends-cat-cats-kitty-IsDjNQPc4weWPEwhWm'>",
        "<img src = 'https://media.giphy.com/media/vvBsAcNyjKk6iOkVx3/giphy.gif'>",
        "<img src = 'https://media.giphy.com/media/jligj6D2MCqOI/giphy.gif'>"
    ];

    $valeur = $_GET['style'];

    $valeur = ($_GET['style'] == "cat") ? "ui" : "false";


    echo $response;
    ?>






    <form method="get" action="">

        <br>

        <label for=""> Etes vous un humain , une licorne , ou un chat ? : </label>




        <input type="radio" id="style" name="style" value="cat"> <label for="style">cat</label>
        <input type="radio" id="style" name="style" value="human"><label for="style">human</label>
        <input type="radio" id="style" name="style" value="unicorn"><label for="style">unicorn</label>

        <input type="submit" name="submit" value="valid?">



    </form>






</body>

</html>