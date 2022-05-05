<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <title> Impots </title>
</head>
<body>
    <style>
        fieldset{width:30%}
        label{display: inline-block; width: 150px;text-align: right;}
        input[type=text]{ width: 200px; }
    </style>
    <?php
    spl_autoload_register(fucnction ($class)){
        include 'models/'.$impot.'.php'
    }
    require ".vscode\models\impot.php";
    if(isset ($_GET["btn_revenu"])&& !empty($_GET["revenu"])){
        $objComptableImp=new ComptablePublic($_GET["nom"], $_GET["revenu"]);
        $resultat=$objComptableImp->calculImpot();
    }
    else {
        echo(("Veuillez remplir tous les champs."));
    }
   
    ?>
    </php>
    <fieldset>
        <legend>Calcul d'impots sur le revenu</legend>
        <form action="index.php" method="get" enctype="text/plain" > 
        <label>Nom</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_GET["nom"])) { echo $nom; }   ?>"  maxlength="50"/> <br/> <br/>
        <label>Revenu annuel</label>
        <input type="number" id="revenu" name="revenu" placeholder="30 000" value="<?php (isset($objComptableImp))?$objComptableImp->getNom():""?>" maxlength="30" width="50px" > <br/><br/>
        <input type="submit" value="calculer"id="btnRevenu"name="btnRevenu"width="100px"/> <br/> <br/>
        </form> 
        <label for="impot"> Impot annuel</label>
        <input type="text"  name="impot" id="impot" placeholder="votre impot" readonly=true value="<?php echo $resultat."€"  ?>"/>
    </fieldset>
</body> 
</html> 