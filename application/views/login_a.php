<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<!-- Question, what/how is class="validate" used? -->
	<div class="wrapper">
		<div class="row">
		<h1><?php
	if($this->session->flashdata("errors"))
	{
		echo $this->session->flashdata("errors");
	}
?>​</h1>
			<form class="col s12" action="login_admin" method="POST" name="login_admin">
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
				<button class="btn waves-effect waves-light" type="submit" name="login">Login
					<i class="material-icons">send</i>
				</button>
				<input type="hidden" name="usertype" value="admin">
			</form>
		</div>
	</div>
</body>
</html>