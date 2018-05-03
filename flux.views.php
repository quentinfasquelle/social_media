<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="css/main.css">
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
            <li class="active"><a href="flux.php">flux</a></li>
            <li><a href="profil.php">Profile</a></li>
            <li><a href="monreseau.php">Mon réseau</a></li>
      <li><a href="notifications.php">Notifications</a></li>
      <li><a href="emplois.php">Emplois</a></li>
      <li><a href="index.php">Deconnexion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">

      <div class="jumbotron"> 
        <h1>Bienvenue dans votre flux d'actualité !</h1>
      </div>
         <div class="row">
      <div class="col-md-6">
        
        
            <form  method ="post">
              <div class = "form-group">
                <label class="control-label" for="champtexte">Statut:</label>
                <input type = "text" class = "form-control" id = "champtexte" name="champtexte" required="required"/>
                <input type="submit" name="publier" value="publier" class="btn btn-default btn-xs">
              </div>

              </form>

           
            <div class="jumbotron"> 
              <h2>Publications :</h2>
              <p> <?php while ($pd = mysqli_fetch_array($_SESSION['rep'])){

                while ($data = mysqli_fetch_array($_SESSION['reponse'])) { 

                $_SESSION['p'] = $data['publicationID'];

              if($data['compteID'] == $_SESSION['compteID']){
              echo 'publication n° : '.$data['publicationID'].'<br />';
              echo 'pseudo : '.$_SESSION['pseudo'].'<br />';
              echo 'contenu : '.$data['champtexte'].'<br /><br />';
            }
            

              if($data['compteID'] == $pd['compteID']){
              echo 'publication n° : '.$data['publicationID'].'<br />';
              echo 'pseudo : '.$pd['pseudo'].'<br />';
              echo 'contenu : '.$data['champtexte'].'<br /><br /><br /><br />';
            }
              
            }
          }
            
          
                ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <form  method ="post">
              <div class = "form-group">
                <label class ="control-label" for ="publicationID">quel numéro de publication voulez vous commentez ?</label>
                <input type = "text" class = "form-control" id = "publicationID" name="publicationID" required="publicationID"/>
                <label class="control-label" for= "contenu">Commentaire:</label>
                <input type = "text" class = "form-control" id = "contenu" name="contenu"/>
                <label class="control-label" for="aime">Mention j'aime :</label>
                <input type="checkbox" name="aime" value="aime" class="btn btn-default btn-xs">
                <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
              </div>

              </form>
              <?php  while ($d = mysqli_fetch_array($_SESSION['r'])) {

                     

                if( $d['compteID'] == $_SESSION['compteID']){
                echo 'commentaire de la publication n° :'.$d['publicationID'].'<br/>';
                echo 'pseudo :'.$_SESSION['pseudo'].'<br/>';
                echo 'commentaire :'.$d['contenu'].'<br/>';
              } 
          }?>
            </div>

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
    <script src ="D:/wamp64/www/social_media/libraries/parsley/parsley.min.js"></script>
    <script src ="D:/wamp64/www/social_media/libraries/parsley/fr.js"></script>
  </body>
</html>