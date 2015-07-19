<!DOCTYPE html>
<html>
<head>
	<title>Add Admin Account Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="row">
			<form class="col s12" action="add_admin" method="POST" name="add_a">
				<div class="row">
					<div class="input-field col s12">
						<input id="email" type="email" class="validate" name="email">
						<label for="email">Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="password" type="password" class="validate" name="password">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="confpass" type="password" class="validate" name="confpass">
						<label for="confpass">Confirm Password</label>
					</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="add">Add Admin
					<i class="material-icons">send</i>
				</button>
			</form>
		</div>
	</div>
</body>
</html>