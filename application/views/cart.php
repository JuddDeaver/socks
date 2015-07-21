<?php
var_dump($this->session->userdata('cart'));
$carts = $this->session->userdata('cart');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SockMatch</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	.cart input{
		border: none;
	}
	</style>
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
			<div class="col m8 s12">
				<table class="bordered cart">
		        <thead>
		          <tr>
		          	  <th data-field="picture"></th>
		              <th data-field="id">Item</th>
		              <th data-field="quantity">Quantity</th>
		              <th data-field="price">Item Price</th>
		              <th data-field="total_price">Total Price</th>
		              <th data-field="change"></th>
		          </tr>
		        </thead>
		        <tbody>
<?php
if(count($carts) > 0) {
	foreach ($carts as $cart){
?>
		          <tr>
		            <td><img src="/assets/grey.png" width="50px" /></td>
		            <td><input type="text" name="name" value="<?=$cart['name']?>" readonly></td>
		            <td>
		            	<input type="text" name="quantity" value="<?=$cart['quantity']?>"> 
		            </td>
		            <td><input type="text" name="price" value="$<?=$cart['price']?>" readonly></td>
		            <td><?php echo "$". $cart['quantity'] * $cart['price'] ?></td>
		            <td><p><a href="">Edit</a></p>
		            	<p><a href="">Remove</a></p>
		            	</td>
		          </tr>
<?php
	}
}
?>
		          <tr>
		            <td><img src="/assets/grey.png" width="50px" /></td>
		            <td>Alan</td>
		            <td>Alan</td>
		            <td>Jellybean</td>
		            <td>$3.76</td>
		          </tr>
		          <tr>
		            <td><img src="/assets/grey.png" width="50px" /></td>
		            <td>Jonathan</td>
		            <td>Jonathan</td>
		            <td>Lollipop</td>
		            <td>$7.00</td>
		          </tr>
		        </tbody>
		      </table>
			</div>
			<div class="col m4 s12">
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
			</div>
		</div>
	</div>
</body>
</html>