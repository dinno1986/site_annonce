<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>



<div class="row">
	<div class="col-md-4">
	</div>

	<div class="col-md-4">
		<form method='post' id="form" enctype="multipart/form-data" action='http://127.0.0.1:8000/admin/users/add-save''>

		{{csrf_field()}}
		
			<legend>
				<center>Formulaire d'inscription</center>
			</legend>
			
			  <div class="form-group">
			    <label for="name">name</label>
			    <input type="text" name="name" class="form-control" id="name" placeholder="name">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="mail">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputFile">File input</label>
			    <input type="file" name="photo" id="exampleInputFile">
			  </div>

			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control"  id="exampleInputPassword1" placeholder="Password">
			  </div>

			  <div class="form-group">
                <input name="id_cms_privileges" type="hidden" id="" value="2">
              </div>

	  		 
	  		 	<button type="submit" class="btn btn-success">Validation</button>
	  		 
	  		
  		</form>
  	</div>

  	<div class="col-md-4">
  	</div>

</div>





<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>