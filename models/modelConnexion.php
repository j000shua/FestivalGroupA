<?php

// fichier de connexion à la bdd, à inclure sur les autres pages

//identifiant et mdp mysql
$user = 'root';
$pswd = 'root';

//hote de l'application
$host = 'localhost';

//nom de la base de donnée
$bdd = 'festival';

//data source name, soit la definition de l'hote et du nom de la base
$dsn = "mysql:$host=localhost;dbname=$bdd";


//connexion

function getBDD()
{
    try{

        return new PDO('mysql:localhost=localhost;dbname=festival', 'root', 'root'); //$dbh l'objet de notre bdd connecté à l'application
        //echo "connexion pdo reussie (à retirer) <br/>";
    
    } catch(PDOException $e) {
    
        return "erreur de connexionp : ".$e->getMessage()."<br/>";
        
    
    }
}

?>
