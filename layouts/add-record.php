<?php
/*
* 	@ SIMPLE CRUD USING PHP PDO and TWITTER BOOTSTRAP
* 	@ 2017 Kel Novi - http://github.com/heyitsnovi
*	@ License MIT
*	@ You can modify this project. Credits is really appreciated :)
*/
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title> Add Record </title>
</head>
<body>

		<div class="container" style="margin-top: 70px;">
		<h1> New Info</h1>
		<br>
			<div class="row">
				<div class="col-sm-4">


					<?php foreach($errors as $err): ?>

					<li><?php echo $err; ?></li>

					<?php endforeach; ?>
					

					<form action="scripts/add.php" method="POST">

					<input type="hidden" name="form_name" value="add_form" />
					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="firstname" class="form-control" value="" />
						</div>

						<div class="form-group">
							<label>Lastname</label>
							<input type="text" name="lastname" class="form-control" value="" />
						</div>

						<div class="form-group">
							<button class="btn btn-primary" type="submit"> Add New </button>
							<a href="index.php" class="btn btn-primary"> Back to List</a>
						</div>

					</form>
					</div>
				</div>
			</div>
		</div>

</body>
</html>