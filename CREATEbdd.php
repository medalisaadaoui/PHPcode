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
    $connexion = new PDO("mysql:localhost=$serveur",$login,$pass);//creation dune base de donnee avec My SQL
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion ->exec("CREATE DATABASE test2");
    echo'base de donnees creee';
    }
    catch(PDOException $e){
    echo'echec de la conexion : ' .$e->getMessage();
    }
    
    ?>
</body>
</html>