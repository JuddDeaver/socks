<?php
$contents = $this->cart->contents();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SockMatch</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
	<style type="text/css">
			* {
		/*outline: red dotted 1px;*/
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
		/*overflow-x: hidden;
		overflow-y: auto;*/
	   /* background: red;*/
		}
		.content {
		    width: 80%;
		    height: auto;
		    position: absolute;
		    right: 0;
		    padding: 0px 65px;
		    margin-top: 60px;
		   /* background: blue;*/
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
		.menu_top{
			visibility: hidden;
			height: 0px;
		}
	}
	@media screen and (max-width: 991px){
		.menu_top {
			padding: 20px;
		}
		.content{
			padding: 0 10px;
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
	/*.product_picture{
		width: 100%;
		padding: 65px;
	}	*/
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
	h5 {
		font-size: 18px;
		font-weight: 500;
	}
	#name {
		margin-top: 5px;
		font-size: 11px;
		color: grey;
		border: none;
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
	</style>
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
		            <td><p id="change" class="close"><img class="close" src="/assets/icon_close.png" width="10px"></p>
		      <!--       	<input type="hidden" name="id" value="<?=$content['id']?>"> -->
		            	<input type="hidden" name="rowid" value="<?=$content['rowid']?>">
		            	<button type="submit">Edit</button>
	            	</td>
		            </form>
		          </tr>
<?php
	}
}
?>
		          <tr>
		            <td id="subtotal" colspan="5"><b>Subtotal</b>  $<?=$this->cart->total()?></td>
		          </tr>
		        </tbody>
		      </table>
			</div>
<!-- 			<div class="col m4 s12">
				<table class="bordered">
		        <thead>
		          <tr>
		              <th data-field="id">Cost Summary</th>
		              <th data-field="total"></th>
		          </tr>
		        </thead>

		        <tbody>
		          <tr>
		            <td>Basket Total</td>
		            <td>$50.00</td>
		          </tr>
		          <tr>
		            <td>Shipping</td>
		            <td>$0.00</td>
		          </tr>
		          <tr>
		            <td>Estimated Tax</td>
		            <td>$0.00</td>
		          </tr>
		          <tr>
		            <td>Total</td>
		            <td>$55.00</td>
		          </tr>
		          <tr>
		            <td colspan="2"><a class="waves-effect waves-light btn">Checkout</a></td>
		          </tr>
		        </tbody>
		      </table>
			</div> -->
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
</body>
</html>