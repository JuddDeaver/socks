<?php
	// var_dump($this->session->userdata('cart'));
if($this->session->userdata('cart'))
{
	$cart_infos = $this->session->userdata('cart');
	$total = 0;
	foreach ($cart_infos as $info)
	{
		$total = $total + number_format(($info['price'] * $info['quantity']), 2);
	}
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
	* {
		/*outline: red dotted 1px;*/
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
	.collapsible {
		margin: 10px;
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
			$(".cart").click(function() {
		    	window.location='/view_cart';
		    });
		});
	</script>
</head>
<body>
	<?php if($this->session->userdata('cart'))
{
?>
	<div class="cart valign-wrapper">
	  <p><i class="material-icons tiny">shopping_cart</i> Cart - <?=count($cart_infos)?> items <b>$<?=$total?></b></p>
	</div>
<?
}
?>
	<div class="menu_left">
		<div class="middle">
			<div class="logo_left"><a href="/">MATCHSOCKS</a></div>
			<ul class="categories">
				<li><a href="/mens"  id="active">MENS</a></li>
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
		<div class="logo_top"><a href="/">MATCHSOCKS</a></div>
		<div class="menu_icon right"><i class="material-icons">menu</i></div>

	</div>
	<div class="content">
		<h5>MENS</h5>
		<div class="row">
			<form>
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