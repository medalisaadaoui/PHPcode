<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
     $serveur= "localhots";
     $login = "root";
     $pass = "";
     try{
         $connexion = new PDO("mysql:localhost=$serveur;dbname=test2",$login,$pass);//datainsert in table with INSERT INTO 
         $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo'connexion a la base de donnes reussie';
         $insertion ="INSERT INTO Visiteurs(nom,prenom,email)
                      VALUES ('saadaoui','medali','saadaouidali5@gmail.com')";
                    
         $connexion->exec($insertion);
         echo"valerus et ajoute avec suc";
        }
        catch(PDOException $e){
        echo'echec de la conexion : ' .$e->getMessage();
        }


    ?>
</body>
</html>