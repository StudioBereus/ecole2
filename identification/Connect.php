<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Affichage Ponant</h1>
    <?php
    define('USER',"root");
    define('PASSWD',"");
    define('SERVER',"localhost");
    define('BASE',"ponant");
    $dsn="mysql:dbname=".BASE.";host=".SERVER;
    try{
        $connexion=new PDO($dsn,USER,PASSWD);
    }
    catch(PDOException $e){
        echo "Echec de la connexion: ".$e->getMessage();
    };
    $sql="select * from clients";

    foreach($connexion->query($sql) as $row){
        echo $row["client_lastname"]." ".$row["client_firstname"]."<br> ";
    }





    
    
    
    ?> 

</body>
</html>