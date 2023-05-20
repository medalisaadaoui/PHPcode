<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP et MySQL</title>
</head>
<body>
    <?php
     $serveur= "localhots";
     $login = "root";
     $pass = "";
    try{
    $connexion = new PDO("mysql:localhost=$serveur;dbname=test",$login,$pass);//to connect the bdd with php code in every app!!
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo'connexion a la base de donnes reussie';
    }
    catch(PDOException $e){
    echo'echec de la conexion : ' .$e->getMessage();
    }
    
    ?>
</body>
</html>