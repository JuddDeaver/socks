<!DOCTYPE html>
<html>
<head>
	<title>SockMatch</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</head>
<body>
	<a href="login_a" class="btn waves-effect waves-light" type="login" name="admin">Admin Login</a>
	<a href="logout_a" class="btn waves-effect waves-light" type="logout" name="admin">Admin Logout</a>
<h1><?php
	if($this->session->flashdata("errors"))
	{
		echo $this->session->flashdata("errors");
	}
?>​</h1>
</body>
</html>