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
    $connexion = new PDO("mysql:localhost=$serveur;dbname=test2",$login,$pass);
    $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*$modif = "UPDATE Visiteurs SET age=35 WHERE id=1";/*----UPDATE--- "name of the table" ---SET--- "variable of the uptade"
    ----WHERE--- "condetion of the uptade"*/
    //$suppr = "DELETE FROM Visiteurs WHERE id = 3";//----DELETE FROM----- to delete ligne 
    //$suppr = "DROP TABLE Visiteurs";//----DROP TABLE---- "tabel name"
    $suppr = "ALTER TABLE Visiteurs DROP age ";//----ALTER TABEL----"name of the table" ---DROP---"colone"
    $requete = $connexion->prepare($suppr); //to asing the suppr to the prep requete 
    $requete->execute();//to execut the prep requete 
    echo"uptade";


    }
    catch(PDOException $e){
    echo'echec  ' .$e->getMessage();
    }
    
    ?>
</body>
</html>