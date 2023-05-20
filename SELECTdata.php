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
     
    /* $requete = "//TO INSERT AGE 
     ALTER TABLE Visiteurs ADD age INT(100)
     ";
    $connexion->exec($requete);*/
    $requete1 = $connexion->prepare(
        "SELECT prenom FROM Visiteurs WHERE sexe='H' ORDER BY age DESC
        ");/*to select the prenom form visiteurs ---where the sexe ='H'-----
        ------ORDER BY age to filer with age s8ir->kbir  -----DESC------- TO ORDER IN kbir->s8ir*
        --------LIMIT 0,3------ to show the firts 3 prenom*/
         
    $requete1->execute();
    $resultat = $requete1->fetchAll();
    echo'<pre>';
    print_r($resultat);
    echo'<pre>';



    }
    catch(PDOException $e){
    echo'echec: ' .$e->getMessage();
    }
    
    ?>
</body>
</html>