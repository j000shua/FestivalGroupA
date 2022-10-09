<?php 

require 'controllers/controller.php';


if(!isset($_GET['action']))
    accueil();
else
    switch($_GET['action']){
        case "etablissements" :
            etab();
            break;
        case "attributions" :
            attrib();
            break;
        default:
            echo "erreur dans l'action demandée"; //FAIRE UNE VUE ET CONTROLLER ERREUR PLUS TARD
            break;
        
    }


/* echo "hello<br><br><br><br><br>";

$a = [1,2,3];
print_r($a);
echo "<br>";
foreach($a as $b):
    echo $b."<br>";
endforeach;
echo "<br>";

$b = [
    [1,2,3],
    ['a','b','c']
];

foreach($b as $d0):
    foreach($d0 as $d1):
        print($d1);
    endforeach;
endforeach  */
?>