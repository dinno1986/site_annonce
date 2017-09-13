<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Petites annonces</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Déposer une annonce</a></li>
        <li><a href="#">Offres</a></li>
        <li><a href="#">Mes annonces</a></li>
        <li><a href="/inscription">Inscription</a></li>
        <li><a href="/admin">Connexion</a></li> 
      </ul>
    </div>
 
  </div>
</nav>

<form>

 <div class="row">
  <div class="col-md-4">
  </div>
      <div class="col-md-4">
      
        <label for="recherche">Votre recherche</label>
        <input type="text" class=form-control name="recherche" placeholder="Votre recherche">
        <label for="type">Type de logement</label>
        <input type="text" class=form-control name="type" placeholder="type de logement">
        <label for="dep">Département/Région</label>
        <input type="text" class=form-control name="dep" placeholder="Département/Région">
        <label for="ville">Ville/Code Postal</label>
        <input type="text" class=form-control name="ville" placeholder="ville/code postal">
        <br>
        <button type="submit" class="btn btn-success">Validation</button>
      </div>
 </div>
 
</form>








<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>