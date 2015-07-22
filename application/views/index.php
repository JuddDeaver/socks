<?php
	// var_dump($this->session->userdata('cart'));
	$cart_infos = $this->session->userdata('cart');
	$total = 0;
	foreach ($cart_infos as $info)
	{
		$total = $total + ($info['price'] * $info['quantity']);
	}
	// echo $total;
?>
<!DOCTYPE html>
<html>
<head>
	<title>MatchSocks</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
	<style type="text/css">

	img{
		width: 100%;
	}
	/*.main_search{
		width: 100%;
		padding: 65px;
	}	*/
	.main_search{
		margin-top: 15px;
		padding: 0px 15px;
		width: 100%;
		
		
	}
	.border {
		outline: 3px solid black;
		padding: 10px;
		height: 400px;
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
	h5 {
		/*display: inline-block;*/
		color: white;
		background-color: black;
		width: 170px;
		padding: 10px;
		font-weight: 300;
		font-size: 15px;
		letter-spacing: 4px;
		margin-left: 10px;
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
		    $(".cart").click(function() {
		    	window.location='view_cart';
		    });
		});
	</script>
</head>
<body>
<?php if($this->session->userdata('cart'))
{
?>
	<div class="cart valign-wrapper">
	  <p><i class="material-icons tiny">shopping_cart</i> Cart - <?=count($cart_infos)?>items <b>$<?=$total?>..</b></p>
	</div>
<?
}
?>
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
			<div class="main_search ">
				<div class="border">
					<h5>FIND A MATCH </h5>
					<div class="col s12 m6">
						<ul class="collapsible z-depth-1" data-collapsible="accordion">
						    <li>
						      <div class="collapsible-header">Color</div>
						      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
						    </li>
						    <li>
						      <div class="collapsible-header">Pattern</div>
						      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
						    </li>
						    <li>
						      <div class="collapsible-header">Size</div>
						      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
						    </li>
						    <li>
						      <div class="collapsible-header">Style</div>
						      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
						    </li>
						    <li>
						      <div class="collapsible-header">Brand</div>
						      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
						    </li>
						  </ul>
					</div>
					<div class="col s12 m6">
						-OR-
						Upload a picture

						COMING SOON
					</div>
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