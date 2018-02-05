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
	<title> View Records  </title>
</head>
	<body>


		<div class="container" style="margin-top: 70px;">
		<h1> Names </h1>
		<br>
		<a href="index.php?action=add-record" class="btn btn-success" style="margin-bottom: 15px;"> Add New </a>
		
			<div class="row">
				<div class="col-md-12">
					<div class="">
						<div class="table-responsive">
							<table class="table table-condensed table-hover">
								<tr>
									<th> # </th>
									<th> Name </th>
									<th> Lastname </th>
									<th>Action</th>
								</tr>
								<tbody>
										<?php

										foreach($data as $item){

											echo "<tr>";
											echo "<td>".$item['id']."</td>";
											echo "<td>".$item['firstname']."</td>";
											echo "<td>".$item['lastname']."</td>";
											echo "<td>";
											echo "<a href='?action=edit&name_id=".$item['id']."' class='btn btn-warning'> Edit </a>";
											echo "&nbsp;";
											echo "<a href='?action=delete&name_id=".$item['id']."' class='btn btn-danger'> Delete </a>";
											echo "</td>";
										}

										?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>
