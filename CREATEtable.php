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
    $connexion = new PDO("mysql:localhost=$serveur;dbname=test2",$login,$pass);//creation une table en MySQL 
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $codesql="CREATE TABLE Visiteurs(
        id INT PRIMARY KEY,nom VARCHAR(50),prenom VARCHAR(50),email VARCHAR(50)
        )";
    $connexion->exec($codesql);
    
    echo"tabel et creee";


    }
    catch(PDOException $e){
    echo'echec de la conexion : ' .$e->getMessage();
    }
    
    ?>
</body>
</html>