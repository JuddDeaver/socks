<?php
$contents = $this->cart->contents();
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
	.product_picture{
		padding: 0px 12px;
	}
	.sub_menu{
		margin-top: 20px;
	}
	.cart_list thead{
		font-size: 10px;
		color: grey;
	}
	#name {
		margin-top: 5px;
		font-size: 11px;
		color: grey;
		border: none;
		width: 150px;
	}
	#price {
		border: none;
		color: grey;
		font-size: 13px;
		text-align: right;
	}
	#price_th {
		text-align: right;
	}
	#number input{
		width: 50px;
		text-align: right;
	}
	#subtotal {
		text-align: right;
		color: grey;
		padding: 25px 0px;
	}
	#subtotal b {
		margin-right: 20px;
		font-weight: normal;
	}
	#change {
		text-align: right;
	}
	#picture {
		width: 70px;
	}
	td {
		padding: 0px;
	}
	#checkout {
		text-align: right;
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
		<div class="logo_top"><a href="/">MATCHSOCKS</a></div>
		<div class="menu_icon right"><i class="material-icons">menu</i></div>

	</div>
	<div class="content">
		<div class="row">
			<div class="col s12">
				<h5>Shopping Cart</h5>
				<table class="bordered cart_list">
		        <thead>
		          <tr>
		          	  <th id="picture" data-field="picture">Item</th>
		              <th data-field="id"></th>
		              <th data-field="quantity">Quantity</th>
		              <th id="price_th" data-field="price">Price</th>
		              <th data-field="change"></th>
		          </tr>
		        </thead>
		        <tbody>
<?php
if(count($this->cart->contents()>0)) {
	foreach ($contents as $content){
?>
		          <tr>
		          	<form method="post" action="edit_cart">
		            <td><img src="/assets/products/<?=$content['picture']?>" width="50px"></td>
		            <td><p id="name"><?=$content['name']?></p></td>
		            <td>
		            	<input id="number" type="number" name="qty" min="1" max="10" value="<?=$content['qty']?>">
		            </td>
		            <td><p id="price">$<?=$content['price']?></p></td>
		            <td><a href="/remove_cart/<?=$content['rowid']?>"><p id="change" ><img src="/assets/icon_close.png" width="10px"></p></a>
		      <!--       	<input type="hidden" name="id" value="<?=$content['id']?>"> -->
		            	<input type="hidden" name="rowid" value="<?=$content['rowid']?>">
		            	<button type="submit">Edit</button>
	            	</td>
		            </form>
		          </tr>
<?php
	}
}
else 
{
?>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
<?php				
}
?>
		          <tr>
		            <td id="subtotal" colspan="5"><b>Subtotal</b>  $<?=$this->cart->total()?></td>
		          </tr>
		        </tbody>
		      </table>
		      <a href="/checkout"><p id="checkout"><button type="submit" class="waves-effect black btn-flat" style="color:white">Checkout</button></p></a>
			</div>
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