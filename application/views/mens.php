<?php
	// var_dump($products);
?>
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
		/*outline: red dotted 1px;*/
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
	.cart {
		width: 250px;
		height: 50px;
		background-color: black;
		float:right;

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
			<div class="logo_left"><a href="/">MATCHSOCKS</a></div>
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
		<h5>MENS</h5>
		<div class="row">
			<form>
			<ul class="option collection">
				<li class="collection-item">Price</li>
					<ul >
						<li class="collection-item">Inside Price</li>
					</ul>
				<li class="collection-item">Size</li>
					<ul>
						<li>Inside Size</li>
					</ul>
				<li class="collection-item">Color</li>
					<ul>
						<li></li>
					</ul>
				<li class="collection-item">Brand</li>
					<ul>
						<li></li>
					</ul>
				<!-- <li class="col s12 color">Color</li>
				<li class="">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/blue.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
					<img width="15px" style="border: 1px solid silver" src="/assets/colors/red.jpg">
				</li>
				<li class="col s6">
					<p class="range-field">
				      <input type="range" id="test5" min="0" max="15" />
				    </p>
				</li>
				<li class="col s12">Size</li>
				<li class="col s12">Brand</li>
				<li class="col s12">Price</li> -->
			</ul>
			</form>
		</div>
		<div class="row pictures">
<?php foreach($products as $product)
{
?>
			<div class="col s6 m3">
				<a href="/product_info/<?=$product['id']?>">
				<img src="/assets/products/<?=$product['imageurl']?>">
				<p><?=$product['name']?></p>
				<p class="price">$<?=$product['price']?></p>
				</a>
			</div>
<?php
}
?>
			<div class="col s6 m3">
				<img src="/assets/grey.png">
				<p>name</p>
				<p class="price">price</p>
			</div>

		</div>
	<!-- 	<ul class="pagination">
		    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
		    <li class="active"><a href="#!">1</a></li>
		    <li class="waves-effect"><a href="#!">2</a></li>
		    <li class="waves-effect"><a href="#!">3</a></li>
		    <li class="waves-effect"><a href="#!">4</a></li>
		    <li class="waves-effect"><a href="#!">5</a></li>
		    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
		  </ul> -->
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