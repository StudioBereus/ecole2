
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <title> Authentification </title>
</head>
<body>
<fieldset>
    <legend>S'identifier</legend>
    <?php
    session_start();
    $tab=array("admin"=>password_hash("Cdi1234", PASSWORD_BCRYPT),"ahaddock"=>password_hash("Ondine", PASSWORD_BCRYPT));

    if(isset($_GET["btn_ok"])){
      if(!empty($_GET["login"]) && !empty($_GET["password"]) ){
          $search=false;
          foreach($tab as $key=>$val){
              if($key==$_GET["login"] && password_verify($_GET["password"],$val)){
                  $search=true;
                  break;
              }
            }
            if($search==true){
                $_SESSION["pseudo"]=$_GET["login"];
                header('location:info.php');
            }
            else{
                echo"Login ou mdp erronné(s), veuillez recommencer !!!";
            }
      }else{ 
          echo "Veuillez remplir tous les champs";
      }
    }
    
        echo'<form action="index.php" method ="Get" enctype=text.plain> <label>Login</label>
        <input type="text" id="login" name="login" value="" width="200px" maxlength="50"><br/> <br/>
        <label>Password</label>
        <input type="password" id="mdp" name="mdp" value="" minlength="8" /> <br/> <br/>
        <input type="submit" value="Envoyer" id="btn_env" width="80px"><br/><br/>
        </form>';
    ?>
    </fieldset>
