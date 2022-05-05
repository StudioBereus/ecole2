<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    spl_autoload_register(function($class){include "models/".$class.".php";});
    echo var_dump($_POST);
    $tab_input=["genre"=>"integer", "login"=>"string", "pass"=>"string","confirm"=>"string"];
    if(isset($_POST[""])){
        $ObjetValidation= new FormValidation($tab_input);
        if($bjValidation->isFilled()){
            echo var_dump($_POST);
        }
        else{
            echo "Veuillez remplir tous les champs";
        }
    }
    ?>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Inscription espace membre</legend>
        <select name="Genre"id="genre" minwidth="200px">
            <option value="" selected="selected">Choisissez votre genre</option> 
            <option value="1">M.</option>
            <option value="2">Mme</option>
            <option value="3">Mlle</option>
        </select>
        <br/><label>Identifiant</label><input tyoe="text" id="login" value="" maxlength="50" /> <br/> <br/>
        <label>Choisir le mot de passe </label><input type="text" id="pass" name="pass" value="" minlength="8"> <br/> <br/>
        <label>Confirmer le mot de passe</label><input type="password" id="confirm"  value="" minlength="8"><br/></br:>
        <input type="submit" value="Valider" id="btnValid" name="btnValid"/>
    </fieldset>
</body>
</html>