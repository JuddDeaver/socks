<!DOCTYPE html>
<html>
<head>
	<title>SockMatch</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.inline li{
			display: inline;

		}
		/* label color */
	   .input-field label {
	     color: #000;
	   }
	   /* label focus color */
	   .input-field input[type=text]:focus + label {
	     color: #000;
	   }
	   /* label underline focus color */
	   .input-field input[type=text]:focus {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* valid color */
	   .input-field input[type=text].valid {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* invalid color */
	   .input-field input[type=text].invalid {
	     border-bottom: 1px solid #000;
	     box-shadow: 0 1px 0 0 #000;
	   }
	   /* icon prefix focus color */
	   .input-field .prefix.active {
	     color: #000;
	   }
/*	   .container{
	   	margin-top: 20px;
	   }*/
	   .sub-nav{
	   	height: 40px;
	   	background-color: white;
	   }
	   .nav-wrapper{
	   	background-color: white;
	   	color: black;
	   }
	   nav ul a {
		  color: black;
		}	


	</style>
</head>
<body>
	<nav>
	<!-- 	<div class="sub-nav">
			
		</div> -->
		<div class="nav-wrapper black" >
			<a href="#" class="brand-logo">Logo</a>
			<ul id="nav-mobile" class="right hide-on-small-and-down" >
				<li style="color:black;"><a href="sass.html">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">JavaScript</a></li>
			</ul>
		</div>
	</nav>
	<div class="sub-nav">
		<div class="row center">
		    <div class="col s12">
		    	<ul class="inline">
		    		<li><a href="#">MEN</a></li>
		    		<li><a href="#">WOMEN</a></li>
		    		<li><a href="#">KIDS</a></li>
		    	</ul>
		    </div>	   
	    </div>
	</div>
	<div class="row">
		<div class="col m6">
		    <form class="col s12">
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate">
		          <label for="email">Email</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate">
		          <label for="password">Password</label>
		        </div>
		      </div>
		      <a class="waves-effect waves-light btn">Sign In</a>
		    </form>
		</div>
		<div class="col m6">
			<form class="col s12">
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate">
		          <label for="email">Email</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate">
		          <label for="password">Create Password</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate">
		          <label for="password">Confirm Password</label>
		        </div>
		      </div>
		      <a class="waves-effect waves-light btn">Create Account</a>
		    </form>
		</div>
	</div>
</body>
</html>