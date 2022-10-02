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
try{

    $dbh = new PDO($dsn, $user, $pswd); //$dbh l'objet de notre bdd connecté à l'application
    //echo "connexion pdo reussie (à retirer) <br/>";

} catch(PDOException $e) {

    echo "erreur de connexionp : ".$e->getMessage()."<br/>";
    die();

}

?>
