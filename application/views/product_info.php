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
		outline: red dotted 1px;
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
	.pictures img{
		width: 100%;
	}
	/*.main_picture{
		width: 100%;
		padding: 65px;
	}	*/
/*	.main_picture{
		padding: 0px 12px;
	}*/
	.sub_menu{
		margin-top: 20px;
	}
	.close img{
		width: 20px;
		position: absolute;
		right: 20px;
		top: 20px;
	}
	.content h5 {
		padding: 0 10px;
	}
	.price {
		color: gray;
		line-height: 19px;
	}
	.option {
		padding-left: 0px;
		margin: 0 10px;
	}
	.option ul {
		display: none;
	}
	.option li ul li {
	}
	.similar img {
		width: 100%;
	}
	.product_picture img {
		width: 100%;
	}
	.product input {
		border: none;
		display: inline-block;
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
		    $( ".option li" ).click(function() {
			  $( ".option ul" ).toggle(200);
			});
		});
	</script>
</head>
<body>
	<div class="menu_left">
		<div class="middle">
			<div class="logo_left">MATCHSOCKS</div>
			<ul class="categories">
				<li><a href="/mens">MENS</a></li>
				<li><a href="#">WOMENS</a></li>
				<li><a href="#">KIDS</a></li>
			</ul>
			<ul class="sub-categories">
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>	
	</div>
	<div class="menu_top">
		<div class="logo_top">MATCHSOCKS</div>
		<div class="menu_icon right"><i class="material-icons">menu</i></div>

	</div>
	<div class="content">
		<div class="row">
			<div class="product_picture col s12 m7">
				<img src="/assets/redbluewhite_stripes.jpg">
			</div>
			<div class="product_info col s12 m5">
				<p style="color:silver"> Mens </p>
				<form class="product" method="post" action="cart">
				<p>
					<input type="text" name="name" value="PATRIOTISM" readonly>
				</p>
					<p style="color: grey; font-size: 25px;">
						$<input style="font-size: 25px;" type="text" name="price" value="0.69" readonly>
					</p>
					<p>
						<img width="20px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
						<img width="20px" style="border: 1px solid silver" src="/assets/colors/blue.jpg">
						<img width="20px" style="border: 1px solid silver" src="/assets/colors/white.jpg">
					</p>
					<p>Size: <input type="text" name="size" value="M" readonly></p>
					<label>Quantity</label>
				    <p><select class="browser-default" name="quantity">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">1</option>
				      <option value="2">2</option>
				      <option value="3">3</option>
				    </select></p>
					<p><button type="submit" class="waves-effect black btn-flat" style="color:white">Add to Cart</button></p>
					<p>Details</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</form>
			</div>
		</div>
		<div class="row similar">
			<h5>SIMILAR ITEMS</h5>
			<div class="col s4 m2"><img src="/assets/grey.png"></div>
			<div class="col s4 m2"><img src="/assets/grey.png"></div>
			<div class="col s4 m2"><img src="/assets/grey.png"></div>	
			<div class="col s4 m2"><img src="/assets/grey.png"></div>	
			<div class="col s4 m2"><img src="/assets/grey.png"></div>	
			<div class="col s4 m2"><img src="/assets/grey.png"></div>	
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
<body>