<!DOCTYPE html>
<html>
<head>
	<title>MatchSocks</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
	* {
		/*outline: red dotted 1px;*/
	}
	body {
		background-color: #fff;
	}
	a {
		color: black;
	}
	html, body {
	    height: 100%;
	    margin: 0;
	}
	@media screen and (min-width: 992px){
		.menu_left {
	    width: 20%;
	    height: 100%;
	    position: fixed;
		}
		.content {
		    width: 80%;
		    height: auto;
		    position: absolute;
		    right: 0;
		    padding: 0px 65px;
		    margin-top: 60px;
		}
		.menu_top{
			visibility: hidden;
			height: 0px;
		}
		.menu_right{
			visibility: hidden;
		}
	}
	@media screen and (max-width: 991px){
		.menu_top {
			padding: 20px;
		}
		.content{
			padding: 0 10px;
			float: right;
		}
		.menu_left{
			visibility: hidden;
			height: 0px;
		}
		.categories{
				margin-top: 0px !important;
			}
		.logo_top {
			width: 100px;
			display: inline-block;
		}
		.menu_icon {
			display: inline-block;
			position: relative;
		  	top: 0px;
  			right: -2px;
		}
		.menu_right {
			display: none;
			width: 250px;
			position: absolute;
			right: 0px;
			float: right;	
			opacity: 1;
			  overflow-x: hidden;
			  overflow-y: auto;
			  box-sizing: border-box;
			  position: fixed;
			  top: 0;
			  right: 0;
			  bottom: 0;
			  z-index: 1;
			  width: 240px;
			  padding: 50px 0 40px;
			  background: #fff;

		}

	}
	@media screen and (max-width: 600px){
		.menu_top {
			padding: 20px 10px;
		}
		.content{
			padding: 0px;
		}
		.menu_left{
			visibility: hidden;
			height: 0px;
		}
		.categories{
				margin-top: 0px !important;
			}
		.logo_top {
			width: 100px;
			display: inline-block;
		}
		.menu_icon {
			display: inline-block;
		}
	}
	.middle{
				margin: auto 30px;
				padding: 10% 0 0 10%;
				position: absolute;
	   			top: 25%;
				}
			.categories{
				margin-top: 30px;
			}
			.categories a{
				color: black;
			}
			.categories li {
				letter-spacing: 5px;
				font-size: 12px;
				line-height: 25px;
			}
			.sub-categories{
				margin-top: 30px;
				color: grey;
				font-size: 13px;
				line-height: 25px;
			}
			.sub-categories a{
				color: grey;
			}
	img{
		width: 100%;
	}
	/*.main_picture{
		width: 100%;
		padding: 65px;
	}	*/
	.main_picture{
		padding: 0px 12px;
	}
	.sub_menu{
		margin-top: 20px;
	}
	.close img{
		width: 20px;
		position: absolute;
		right: 20px;
		top: 20px;
	}
	</style>
	<script>
		$(document).ready(function(){
		    $(".menu_icon").click(function(){
		        $(".menu_right").toggle();
		    });
		    $(".close img").click(function(){
		        $(".menu_right").toggle();
		    });
		});
	</script>
</head>
<body>
	<div class="row">
		<div class="menu_left">
			<div class="middle">
				<div class="logo_left"><a href="/">MATCHSOCKS</a></div>
				<ul class="categories">
					<li><a href="/mens">MENS</a></li>
					<li><a href="/womens">WOMENS</a></li>
					<li><a href="/kids">KIDS</a></li>
				</ul>
				<ul class="sub-categories">
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>	
		</div>
		<div class="menu_top">
			<div class="logo_top"><a href="/">MATCHSOCKS</a></div>
			<div class="menu_icon right"><i class="material-icons">menu</i></div>
		</div>
		<div class="content">
			<div class="row">
				<div class="col s12 m6">
					<div class=""></div>
					<h5>Contact & Shipping</h5>
					<!-- <img src="/assets/mens.jpg"> -->
					<div class="row">
					    <form class="col s12">
					      <div class="row">
					        <div class="input-field col s6">
					          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
					          <label for="first_name">First Name</label>
					        </div>
					        <div class="input-field col s6">
					          <input id="last_name" type="text" class="validate">
					          <label for="last_name">Last Name</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="password" type="password" class="validate">
					          <label for="password">Password</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input id="email" type="email" class="validate">
					          <label for="email">Email</label>
					        </div>
					      </div>
					    </form>
					  </div>
				</div>
				<div class="col s12 m6">
					<h5>Order Summary</h5>
					<!-- <img src="/assets/womens.jpg"> -->
				</div>
			</div>
		</div>
		<div class="menu_right">
			<p class="close"><img class="close" src="/assets/icon_close.png"></p>
			<div class="middle">
				<div class="logo_left">MATCHSOCKS</div>
				<ul class="categories">
					<li><a href="/mens">MENS</a></li>
					<li><a href="/womens">WOMENS</a></li>
					<li><a href="/kids">KIDS</a></li>
				</ul>
				<ul class="sub-categories">
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>