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
            <li class="active"><a href="profil.php">Profile</a></li>
            <li><a href="monreseau.php">Mon réseau</a></li>
      <li><a href="notifications.php">Notifications</a></li>
      <li><a href="emplois.php">Emplois</a></li>
      <li><a href="index.php">Deconnexion</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id ="main-content">
      <div class="jumbotron"> 
        <h2>Bienvenue <?= $_SESSION['pseudo']?> !</h2>

        <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title"> Information de <?= $_SESSION['pseudo']?> </h2>
          </div>
          <div class="panel-body">
          <p><?php while ($data = mysqli_fetch_array($_SESSION['reponse'])){
            echo '<a href="'.$data['PhotoProfil'].'"><img class ="photo" src="'.$data['PhotoProfil'].'"/></a><br/>';
            echo 'Nom : '.$data['Nom'].'<br/>';
            echo 'Prenom : '.$data['Prenom'].'<br/>';
            echo 'Date de naissance : '.$data['DateNaissance'].'<br/>';
            echo 'Email : '.$data['Email'].'<br/>'.'<br/>';
            echo 'Pseudo : '.$data['Pseudo'].'<br/>';
            echo 'Mot de passe : '.$data['Mdp'].'<br/>';


          } ?></p>
          </div>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"> Informations professionnelles de <?= $_SESSION['pseudo']?> </h3>
          </div>
          <div class="panel-body">
          <p><?php while ($d = mysqli_fetch_array($_SESSION['rep'])){

            echo 'Promotion :'.$d['Promotion'].'<br/>';
            echo 'Situation Professionnelle :'.$d['SituationPro'].'<br/>';

          } ?>
        Linkedin <br/>
          </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title"> Modification de vos informations </h2>
          </div>
          <div class="panel-body">
            <form method="post">

              
              <div class = "form-group">
                <label class = "control-label" for = "photoprofil"> Photo de profil : </label>
                <input type = "text" class = "form-control" id = "photoprofil" name="photoprofil" />

              <div class = "form-group">
                <label class = "control-label" for = "nom"> Nom: </label>
                <input type = "text" class = "form-control" id = "nom" name="nom" />

              <div class = "form-group">
                <label class = "control-label" for = "prenom"> Prenom: </label>
                <input type = "text" class = "form-control" id = "prenom" name="prenom" /> 

              <div class = "form-group">
                <label class = "control-label" for = "email"> Adresse Email: </label>
                <input type = "email" class = "form-control" id = "email" name="email" /> 

              <div class = "form-group">
                <label class = "control-label" for = "promotion"> promotion : </label>
                <input type = "text" class = "form-control" id = "promotion" name="promotion" />


              <div class = "form-group">
                <label class = "control-label" for = "situationpro"> situation professionelle: </label>
                <input type = "text" class = "form-control" id = "situationpro" name="situationpro" />  

             

              <div class = "form-group">
                <label class = "control-label" for = "mdp"> mot de passe : </label>
                <input type = "text" class = "form-control" id = "mdp" name="mdp"/> 

              <div class = "form-group">
                <label class = "control-label" for = "confirmer_mdp"> confirmer votre mot de passe : </label>
                <input type = "text" class = "form-control" id = "confirmer_mdp" name="confirmer_mdp"/>

              <div class = "form-group">
                <label class = "control-label" >  </label>

              <div class = "form-group">
                <label class = "control-label" for = "mdp_actuel"> Mot de passe actuel : </label>
                <input type = "text" class = "form-control" id = "mdp_actuel" name="mdr_actual" required="required"/>

                <input type="submit" class="btn btn-primary" value="Modifier" name="Modifier"/>
          
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
    <script src ="/Applications/MAMP/htdocs/social_media/libraries/parsley/parsley.min.js"></script>
    <script src ="/Applications/MAMP/htdocs/social_media/libraries/parsley/fr.js"></script>
  </body>
</html>