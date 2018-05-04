<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=" reseau social ECEin">
    <meta name="author" content="Q">

    <title>ECEin</title>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" >
<link rel="syleshett" href = "assets/css/main.css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><[endif]>
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <[endif]>
  </head>

  <title>Emploi à Pourvoir!</title>
<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
  font-size:20px;
}
button:hover {
    opacity: 0.8;
}
/* The Modal (background) */
.modal {
  display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
  padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}
/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

</style>
</style>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ECEin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="flux.php">flux</a></li>
            <li><a href="profil.php">Profile</a></li>
            <li ><a href="monreseau.php">Mon réseau</a></li>
      <li><a href="notifications.php">Notifications</a></li>
      <li class="active"><a href="emplois.php">Emplois</a></li>
      <li><a href="index.php">Deconnexion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <div class="jumbotron"> 
        <h2>Bienvenue dans vos emplois !</h2>  
      </div>
    <div id ="main-content">
      <div class="jumbotron"> 
        <h2> Voici tous les emplois disponibles</h2> </br>

        <div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"> Nouvelles offres d'emplois  </h3>
          </div>
          <div class="panel-body">
      
     
      
          <!--/ IMAGE -->
      <div class="col-md-5"> </br>
      <img src="views/photoemplois/m3drift.jpg" width="100" height="60" >
      </div>
      <div class="col-md-7"> 
           <h6> BMW Motorsport vous propose un emploi en tant que responsable qualité. Vous aurez à traiter des données et à les analyser. Nous contacter pour plus d'informations. </h6>                         
      </div> 

<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:10px; margin-left:100px;">
Postuler</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="emplois.php">
        
    <div>
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h2 style="text-align:center">Rejoignez-nous!</h2>
    </div>

    <div class="container">
     <h5> Envoyez nous votre mail et votre spécialité, nous vous transmettrons alors ce dont nous avons besoin! </h5>
      <input type="text" placeholder="Email" name="email">
      <input type="text" placeholder="Spécialités" name="psw">        
      <button type="submit">Postuler</button>     
    </div>
    
  </form>
  
</div> </br>
      
      <div class="col-md-5"> </br>
      <img src="views/photoemplois/sncf.jpg" width="100" height="60" >
      </div>
      <div class="col-md-7"> 
           <h6> La SNCF recherche un ingénieur afin de l'aider dans le développement de ses rails à grande vitesse . Nous contacter pour plus d'informations. </h6>                         
      </div>

      <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:10px; margin-left:100px;">
Postuler</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="views/emplois.views.php">
        
    <div>
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h2 style="text-align:center">La SNCF ENGAGE!</h2>
    </div>

    <div class="container">
      <input type="text" placeholder="Email" name="email">
      <input type="text" placeholder="Spécialités" name="psw">        
      <button type="submit">Postuler</button>     
    </div>
    
  </form>
  
</div> </br>
      
      <div class="col-md-5"> </br> 
      <img src="views/photoemplois/thales.png" width="100" height="60" >
      </div>
      <div class="col-md-7"> 
           <h6> Thales recherche un jeune ingénieur afin de travailler sur un nouveau produit electronique destiné au fonctionnement de train nouvelle génération. Nous contacter pour plus d'informations. </h6>                         
      </div>

      <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:10px; margin-left:100px;">
Postuler</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="views/emplois.views.php">
        
    <div>
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h2 style="text-align:center">THALES ENGAGE!</h2>
    </div>

    <div class="container">
      <input type="text" placeholder="Email" name="email">
      <input type="text" placeholder="Spécialités" name="psw">        
      <button type="submit">Postuler</button>     
    </div>
    
  </form>
  
</div> </br>
      
      <div class="col-md-5"> </br> 
      <img src="views/photoemplois/cegid.png" width="100" height="60" >
      </div>
      <div class="col-md-7"> 
           <h6> Cegid recherche un ingenieur afin de compléter son équipe R&D. Nous contacter pour plus d'informations. </h6>                         
      </div>

      <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:10px; margin-left:100px;">
Postuler</button>

<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" action="emplois.php">
        
    <div>
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <h2 style="text-align:center">CEGID ENGAGE!</h2>
    </div>

    <div class="container">

      <input type="text" placeholder="Email" name="email">
      <input type="text" placeholder="Spécialités" name="psw">        
      <button type="submit">Postuler</button>     
    </div>
    
  </form>
  
</div>
          
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"> Offres qui intéressent votre réseau</h3>
          </div>
          <div class="panel-body">
          2 Personnes de votre réseau ont postulé chez : BMW MOTORSPORT </br>
          3 Personnes de votre réseau ont postulé chez : THALES
          
          </div>
        </div>
      </div>
          

          

    </div><!-- /.container -->

   
  
  
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" ></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>