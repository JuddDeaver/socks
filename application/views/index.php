<!DOCTYPE html>
<html>
<head>
	<title>MatchSocks</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
	* {
		o/*utline: red dotted 1px;*/
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
		.cart {
			width: 230px;
			height: 45px;
			background-color: black;
			color: white;
			position: fixed;
			right: 0px;
			top: 0px;
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
		.cart {
			width: 230px;
			height: 45px;
			background-color: black;
			color: white;
			position: fixed;
			right: 60px;
			top: 13px;
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
		.cart {
			height: 45px;
			background-color: black;
			color: white;
			position:fixed; 
		    left:0px;
		    bottom:0px;
		    width:100%;
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
	/*.main_search{
		width: 100%;
		padding: 65px;
	}	*/
	.main_search{
		margin-top: 15px;
		padding: 0px 12px;
		width: 100%;
		
	}
	.border {
		outline: 3px solid black;
		padding: 10px;
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
		        $(".menu_right").animate({width: 'toggle'}, 200);
		    });
		    $(".close img").click(function(){
		        $(".menu_right").animate({width: 'toggle'}, 200);
		    });
		});
	</script>
</head>
<body>
	<div class="cart">
		<div class="row">
			<i class="material-icons">shopping_cart</i>Cart - 8 items $1,200..
		</div>
	</div>
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
			<div class="main_search">
				<div class="border">
				<h5>FIND YOUR SOCK A MATCH </h5>
				<form>
					<div class="col s12 m6">
						Color:
					</div>
					<div class="col s12 m6">
						
					</div>
					
					Size:
					Style:
					Brand:
				</form>
				</div>
			</div>
			<div class="row sub_menu">
				<div class="col s12 m4"><a href="mens"><img src="/assets/mens.jpg"></a>
				</div>
				<div class="col s12 m4"><a href="womens"><img src="/assets/womens.jpg"></a></div>
				<div class="col s12 m4"><a href="kids"><img src="/assets/kids.jpg"></a></div>	
			</div>
			<div class="row sub_menu">
				<div class="col s12 m6"><a href="/about"><img src="/assets/menu_pic2.jpg"></a></div>
				<div class="col s12 m6"><a href="/news"><img src="/assets/menu_pic1.jpg"></a></div>
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