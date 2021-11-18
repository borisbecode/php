# faire un Array en PHP :

     // Some comments
         <?php
        $array = array(
         "foo" => "bar",
         "bar" => "foo",
        );
 ---

    // Utilisant la syntaxe de tableau courte
    $array = [
    "foo" => "bar",
    "bar" => "foo",
    ];
    ?>
---
    // connaitre le type
    $avoirfaim = true
    <?php echo gettype($avoirfaim) ?>
    --> boolean

---             
 # ternary operator : 
c'est une maniere d'ecrire une condition if plus simplement 
$condition = 0 ;
$la_condition = ($condition == 1) ? "cestvrai(on met ce qu'on veut)" : "cestfaux" ;
  si cest vrai on sort la premiere reponse , si cest faut la deuxieme .
  
    //
    <?php
    $hello = " bienvenue ";
    $gender = "m";
    $is_gender = ($gender == "f") ? "femme" : "homme";

    echo $hello . $is_gender;

    ?>
    
    
# les arrays en php : 

construire une array : 

    // 
    $mafamille = ["boris", "yoan", "francis", "michele", "julie"]


### la balise pre permet d'avoir une belle array : 

    // 
     echo '<pre>';
    print_r($mafamille);
    echo '</pre>';
                        outputs:
                        Array
                        (
                        [0] => boris
                        [1] => yoan
                        [2] => francis
                        [3] => michele
                        [4] => julie
                        )
                        
### contrairement a var_dump qui lui par contre va nous donner plus d'information 

        //  
        var_dump($mafamille)


### pour ajouter un element dans une array : 

        //
         array_push($mafamille, "joannie");

        echo $mafamille[5];
                                            sortie: Joannie
        OU
        
        $mafamille[] = 'Joannie';
        
        
# dans l'array , on peut y associer une key , 

par exemple si je mets $mafamille['taille'] = "184"
je ne touche en rien a l'array mafamille , qui reste inchangée , mais j'y ajoute une key que je peux utiliser en plus . je pourrais tres bien mettre toutes les tailles des membres de la famille ici . 

       //
        echo $mafamille['taille'] = "184";
        echo $ mafamille[0]    -- sortie : boris 
        echo $mafamille['taille'][0]; -- sortie 184 
        
# Ainsi on peut faire une array associative ::::


        //
          $me = array(
        'age'    => 29,
        'firstname'         => 'boris',
        'lastname'               => 'Lorenzzzz',
        'favourite_movies'     => array('dexter', 'starwas', 'Matrix', 'oss117'),
        'praticingkungfu' => true,
        'passion' => array('not football',),
        
        );

    echo '<pre>';
    print_r($me);
    echo '</pre>';


### si je veux rajouter un element dans ma key passion je peux faire : 
         // 
         $me['passion'][]= " coucou ";

==ATTENTION  ca doit etre ENVOYé dans une ARRAY==                                 
                                    
---

# fusionner deux array ensemble ?  array_merge
        //
        $ result =  array_merge($me,$you);
        print_r($result);
        
                outputs : me sort un nouveau tableau avec tout dedans 

# fusionner deux array ensemble, mais uniquement ceux qui ont les meme key  ?  array_intersect
        //
        $ result =  array_mintersect($me,$you);
        print_r($result);
        
                outputs : me sort un nouveau tableau avec que les keys identiques , 
                si $me a une key ' color' => red   et pas $you  ALORS
                elle ne sera pas présente !!! 



## jouer dans le tableau et supprimer une valeur avec unset , sur base de : 
        //
         $web_development = array(
         
        'frontend' => array(),
        'backend' => array(),
        );
        
        
          $web_development['frontend'][] = 'xtml';  // ajouter un element a frontend
        $web_development['backend'][] = 'ruby';  // ajouter un element a backend 
        $web_development['frontend'][] = 'css'; // ajouter un element a frontend
        $web_development['frontend'][] = 'flash';  // ajouter un element a frontend 
        
         $web_development['frontend'][0] = 'html';  // changer xtml par html 
        unset($web_development['frontend'][2]); // supprimer flash du frontend 
        $web_development['frontend'][] = 'xptdr';   
        
==Attention , ici a la derniere ligne , j'ai ajouter xptdr au front sauf que==
==meme en ayant supprimé l element deux ( flash) , xptdr va quand meme sur l'element 3==
== xptdr = ["frontend"][3] et pas ["frontend"][2]==
### pour supprimer vraiment le deuxieme il faut utiliser splice et pas unset : 

        //
        array_splice($web_development['frontend'], 2);

ca va vraiment supprimer la ligne 2 du frontend , 


---
# Boucle While : 

        //
        $ratio = 1;
        while ($ratio <= 100){
        
        echo $ratio. '. : I shall not watch flies fly when I'm learning PHP.<br />';
   
        $ratio ++; 

        }

# Boucle for 
            //
        
              $client = ["igor", "vladi", "emma", "holigar", "samuel", "etienne", "jeudemot"];

                 for ($x = 0; $x < $client; $x++) {

                echo $client[$x];
                echo "<br />";
                }


    