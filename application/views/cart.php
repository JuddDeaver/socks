
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
	.cart_list thead{
		font-size: 10px;
		color: grey;
	}
	#name {
		margin-top: 5px;
		font-size: 10px;
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
	#remove {
		text-align: right;
	}
	#picture {
		width: 70px;
	}
	td {
		padding: 10px;
	}
	#checkout {
		text-align: right;
	}
	.close img{
		width: 20px;
		position: absolute;
		right: 20px;
		top: 20px;
	}
	.price {
		color: gray;
		line-height: 19px;
	}
	#price_th{
		width: 100px;
	}
	.product input {
		border: none;
		display: inline-block;
	}
	#quantity input{

		position: relative;
		top: -10px;
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
	#thumbnail {
	 	width: 50px;
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
			//load shopping cart table//
			$.get("/socks/shopping_cart", function(res){
				$(".shopping_cart").html(res);


			return false;
		});
			//dynamic content
		  	$(document).on("change", ".number", function(){
		  		// alert('here');
		  		$.post(
		  			"/socks/edit_cart",
		  			$(this).parent().serialize(),
	  				function(res){
	  					$(".shopping_cart").html(res);
	  				});
			});
			 $(document).on("click", "#remove", function(){
					$.post(
						"/socks/remove_cart",
						$(this).parent().serialize(),
						function(res){
							$(".shopping_cart").html(res);
						});
			  });
		  	
		});
	</script>
</head>
<body>
    <div class="row">
        <div class="menu_left hide-on-med-and-down">
            <?php
                $this->load->view('partials/menu_left');
            ?>
        </div>
        <div class="menu_top hide-on-large-only">
            <?php
                $this->load->view('partials/menu_top');
            ?>
        </div>
	<div class="content">
		<div class="row">
			<div class="col s12">
				<h5>Shopping Cart</h5>
					<div class="shopping_cart">
						<?php
							$this->load->view('partials/shopping_cart');
						?>
		      		</div>
		      <a href="/checkout"><p id="checkout"><button type="submit" class="waves-effect black btn-flat" style="color:white">Checkout</button></p></a>
			</div>
		</div>

	</div>
	       <div class="menu_right">
            <?php
                $this->load->view('partials/menu_right');
            ?>
        </div>
</body>
</html>
<body>