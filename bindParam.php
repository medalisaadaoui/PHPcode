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
     $nom = "";
     $prenom= "";
     $email = "";
     $id = "";
     try{
         $connexion = new PDO("mysql:localhost=$serveur;dbname=test2",$login,$pass);//datainsert in table with bindParam
         $connexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         

            $requete=$connexion->prepare(
                "INSERT INTO Visiteurs( id, nom,prenom,email)
                VALUES(:id,:nom,:prenom,:email)"
         );
         $requete->bindParam(':id',$id);
         $requete->bindParam(':nom',$nom);
         $requete->bindParam(':prenom',$prenom);
         $requete->bindParam(':email',$email);
        
         $id = "";
         $nom = "ali";
         $prenom = "bouazizi";
         $email = "alibouazizi@gmail.com";
         $id = "";
         $nom = "roudaina";
         $prenom = "mnassri";
         $email = "roudainamnassir@gmail.com";
         $requete->execute();
         
        }
        catch(PDOException $e){
        echo'echec de la conexion : ' .$e->getMessage();
        }


    ?>
</body>
</html>