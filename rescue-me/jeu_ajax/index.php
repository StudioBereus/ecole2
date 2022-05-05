<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJAX Jeu de Rôles</title>
  <script src="jeux.js" defer></script>
  <link rel="stylesheet" href="css/style.css" type="">
</head>

<body>
  <main>
    <table id="jeu">
      <caption>Tableau liste des caractéristiques des personnages </caption>
    </table>
    <input type="button" value="Joueur Attaque Maximum" id="btn_attaque">
    <input type="button" value="Joueur Defense Maximum" id="btn_defense">
    <br>
    <div id="max">
      <div id="high"><h2 class="joueur">CHARACTER</h2></div>
      <div id="middle">
        <div id="left">
<img src="armure.png" alt="image personnage standard">

        </div>
        <div id="right">
          
        </div>

      </div>
      <div id="lower"></div>

    </div>



  </main>


</body>

</html>