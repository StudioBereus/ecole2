<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template  Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--JavaScript-->
    <script type="text/javascript" src="main.js"></script>

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <style>

    /* GLOBAL STYLES
    -------------------------------------------------- */
  
    .encadrement{
    width: 600px;
    margin: auto;
    background-color: rgb(246, 242, 242);
    }
    .info{
      display:block;
      float: left;
      width: 162px;
    }
    .textInp{
      margin: 1px;
    }
    body {
      padding-bottom: 40px;
      color: #5a5a5a;
    }

.nav-header {
	text-align:center;
	font-style:italic;}

    /* CUSTOMIZE THE NAVBAR
    -------------------------------------------------- */

    /* Special class on .container surrounding .navbar, used for positioning it into place. */
	#logo{
		background-image:url("img/logochateau.jpg");
		/*background-size:100% 50px;*/
		background-color:#CCC;
		height:100px;
		width:91px;
		margin-top:-1px;
		margin-left: -16px;

		
		}
	.navbar-brand {
		padding-top:0px;}
    .navbar-wrapper {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      margin-top: 20px;
      margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
    }
    .navbar-wrapper .navbar {

    }

    /* Remove border and change up box shadow for more contrast */
    .navbar .navbar-inner {
      border: 0;
      -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
         -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
              box-shadow: 0 2px 10px rgba(0,0,0,.25);
    }

    /* Downsize the brand/project name a bit */
    .navbar .brand {
      padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
      font-size: 16px;
      font-weight: bold;
      text-shadow: 0 -1px 0 rgba(0,0,0,.5);
    }

    /* Navbar links: increase padding for taller navbar */
    .navbar .nav > li > a {
      padding: 15px 20px;
    }

    /* Offset the responsive button for proper vertical alignment */
    .navbar .btn-navbar {
      margin-top: 10px;
    }



    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 60px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }

    .carousel-control {
      height: 30%;
      margin-top: 10%;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel .item {
      height: 500px;
    }
    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: transparent;
      position: static;
      max-width: 550px;
      padding: 0 20px;
      margin-top: 200px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }



    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
      text-align: center;
    }
    .marketing h2 {
      font-weight: normal;
    }
    .marketing .span4 p {
      margin-left: 10px;
      margin-right: 10px;
    }


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 80px 0; /* Space out the Bootstrap <hr> more */
    }
    .featurette {
      padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
      overflow: hidden; /* Vertically center images part 2: clear their floats. */
    }
    .featurette-image {
      margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
    }

    /* Give some space on the sides of the floated elements so text doesn't run right into it. */
    .featurette-image.pull-left {
      margin-right: 40px;
    }
    .featurette-image.pull-right {
      margin-left: 40px;
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-size: 50px;
      font-weight: 300;
      line-height: 1;
      letter-spacing: -1px;
    }




    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (max-width: 979px) {

     /* .container.navbar-wrapper {
        margin-bottom: 0;
        width: auto;
      }
      .navbar-inner {
        border-radius: 0;
        margin: -20px 0;
      }

      .carousel .item {
        height: 500px;
      }
      .carousel img {
        width: auto;
        height: 500px;
      }

      .featurette {
        height: auto;
        padding: 0;
      }
      .featurette-image.pull-left,
      .featurette-image.pull-right {
        display: block;
        float: none;
        max-width: 40%;
        margin: 0 auto 20px;
      }
    }
*/

    @media (max-width: 767px) {

     /* .navbar-inner {
        margin: -20px;
      }

      .carousel {
        margin-left: -20px;
        margin-right: -20px;
      }
      .carousel .container {

      }
      .carousel .item {
        height: 300px;
      }
      .carousel img {
        height: 300px;
      }
      .carousel-caption {
        width: 65%;
        padding: 0 70px;
        margin-top: 100px;
      }
      .carousel-caption h1 {
        font-size: 30px;
      }
      .carousel-caption .lead,
      .carousel-caption .btn {
        font-size: 18px;
      }

      .marketing .span4 + .span4 {
        margin-top: 40px;
      }

      .featurette-heading {
        font-size: 30px;
      }
      .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
      }

    }*/
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
  <!--  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">-->
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
   
  <div class="container">

       
<!--votre navbar ici -->

   <div class="navbar-wrapper">
    
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-header">
            <!-- Responsive Navbar Part 1:-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" >
                     <span class="sr-only">Apparaitre/Disparaitre Navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                      
                    </button>
            <a class="navbar-brand" href="#"><div id="logo"></div></a>
            </div>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="navbar-collapse collapse" id="collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="#about">Agence</a></li>
                <li><a href="#contact">Services</a></li>
                <!-- Read about Bootstrap dropdowns at https://getbootstrap.com/2.3.0/javascript.html#dropdowns -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Achats/ventes<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Appartements</a></li>
                    <li><a href="#">Maisons</a></li>
                    <li><a href="#">locaux professionnels</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Sp??cial investisseur</li>
                    <li><a href="#">Garages</a></li>
                    <li><a href="#">Terrains</a></li>
                  </ul>
                </li>
                 <li><a href="#contact">Estimation</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Locations<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Appartements</a></li>
                    <li><a href="#">Maisons</a></li>
                    <li><a href="#">locaux professionnels</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Sp??cial loueur</li>
                    <li><a href="#">Garages</a></li>
                    <li><a href="#">Terrains</a></li>
                  </ul>
                </li>
                <li><a href="#contact">Estimation</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="parent">
      <fieldset class="encadrement">
      <div class="enfant">
        <form action="index.php" class="formContact">
        <p>Pour nous contacter sans attendre, veuillez renseigner le formulaire suivant. <br>
        Les champs pr??c??d??s du signe * sont obligatoires</p>

        <div>
          <label for"civilite" class="info">Civilit??</label>
          <select name="civilite" id="civilite" class="listDeroulante">
            <option class="opt" value="nothing"></option>
            <option class="opt" value="madame">Mme</option>
            <option class="opt" value="mademoiselle">Mlle</option>
            <option class="opt" value="monsieur">M.</option>
          </select>
        </div>
        <br>
        <div>
          <label for="nom" class="info">Nom*</label>
          <input type="text" name="nom" id="nom" class="textInp">
        </div>
  
        <div>
          <label for="prenom" class="info">Prenom</label>
          <input type="text" name="prenom" id="prenom" class="textInp">
        </div>
  
        <div>
          <label for="adresse" class="info">Adresse</label>
          <input type="text" name="adresse" id="adresse" class="textInp">
        </div>
  
        <div>
          <label for="telephone" class="info">T??l??phone*</label>
          <input type="text" name="telephone" id="telephone" class="textInp" maxlength="10"> 
        </div>
  
        <div>
          <label for="email" class="info">E-mail*</label>
          <input type="text" name="email" id="email" class="textInp">
        </div>
  
        <div>
          <label for="objet">Objet de votre message</label>
          <input type="text" name="obj" id="obj" class="textInp">
        </div>
  
        <div>
          <label for="message">Votre message</label>
          <input type="text" name="message" id="message" class="textInp">
        </div>

        <div>
          <input type="button" value="Envoi" id="envoi" name="envoi">
        </div>
      </form>
      </div>
    </fieldset>
    </div>
    
   


    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="img/index.png">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/index.png">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="img/index.png" >
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
       
        <h2 class="featurette-heading">Propriet?? 1 <span class="muted"></span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="">
        <h2 class="featurette-heading">Propriet?? 2</h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <div class="featurette">
      
        <h2 class="featurette-heading">Propriet?? 3 <span class="muted"></span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Haut de page</a></p>
        <p>&copy; 2019 Demo, Centre de r??adaptation de Mulhouse. &middot; <a href="#">mentions legales</a> &middot; <a href="#">Plan du  site</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.js"></script>
<script src="js/bootstrap.js"></script>
    <script>
    /*  !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)*/
    </script>
    
  </body>
</html>