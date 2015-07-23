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
// var_dump($product_info);

$colors = $product_info['color'];
$display_colors = explode(',', $colors);

// var_dump($display_colors);
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
	#quantity input{
		border: 1px solid silver;
		border-radius: 2px;
		position: relative;
		top: -10px;
	}
	.back i{
		line-height: 0;
		position: relative;
		top: 10px;
	}
	.back {
		cursor: pointer;
		width: 100px;
		position: relative;
		left: -10px;
		top: -10px;
	}
	.content {
		/*margin-top: 10px;*/
	}
	#name {
		margin: 0px;
		font-size: 18px;
		font-weight: 500;
	}
	#price {
		font-size: 15px;
		font-weight: 500;
		position: relative;
		top: -5px;
	}
	#price input {
		display: inline-block;
		width: 100px;
		font-size: 15px;
		height: 20px;
		margin: 0px;

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
		    $(".back").click(function() {
		    	window.location='/<?=$product_info['style']?>';
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
		<div class="logo_top"><a href="/">MATCHSOCKS</a></div>
		<div class="menu_icon right"><i class="material-icons">menu</i></div>

	</div>
	<div class="content">
		<div class="row">
			<div class="product_picture col s12 m7">
				<img src="/assets/products/<?=$product_info['imageurl']?>">
			</div>
			<div class="product_info col s12 m5">
				<div class="back valign-wrapper">
				 	<p style="color:silver"><i class="material-icons small">chevron_left</i> <?=$product_info['style']?></p>
				</div>
				<form class="product" method="post" action="/cart">
					<p>
						<input id="name" type="text" name="name" value="<?php echo ucwords($product_info['name']);?>" readonly>
					</p>
						<p id="price" style="color: grey;">
							$<input type="text" name="price" value="<?=$product_info['price']?>" readonly>
						</p>
						<label style="letter-spacing: 2px; font-weight:400">QUANTITY:</label>
					<p id="quantity">	
						<input type="number" name="quantity" min="1" max="10">
					</p>
					    <!-- <p><select class="browser-default" name="quantity">
					      <option value="" disabled selected>Choose your option</option>
					      <option value="1">1</option>
					      <option value="2">2</option>
					      <option value="3">3</option>
					    </select></p> -->
	<?php
		if($this->session->flashdata('messages'))
		{
		echo $this->session->flashdata('messages');
		}
	?>
					<p><button type="submit" class="waves-effect black btn-flat" style="color:white">Add to Cart</button></p>
					<input type="hidden" name="id" value="<?=$product_info['id']?>">
				</form>
					<p>
					<?php
					foreach ($display_colors as $color)
					{
					?>
						<img width="20px" style="border: 1px solid silver" src="/assets/colors/<?=$color?>.jpg">
					<?php
				}
				?>
					</p>
					<p>Details</p>
					<p><?=$product_info['color']?>/ <?=$product_info['pattern']?>/ <?=$product_info['material']?>/ <?=$product_info['size']?></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. </p>
					
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
	</div>
</body>
</html>
<body>