<?php
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
	.colors img{
		width: 20px;
	}
	img{
		width: 100%;
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
		border: 1px silver solid;
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
	
<?php if( count ($this->cart->contents()) > 0 )
{
?>
    <div class="cart valign-wrapper hide-on-small-only">
      <?php
        $this->load->view('partials/cart');
      ?>
    </div>
<?
}
?> 
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
					<input type="hidden" name="picture" value="<?=$product_info['imageurl']?>">
				</form>
					<p>Details</p>
					<p class="colors">
					<?php
					foreach ($colors as $color)
					{
					?>
						<img width="20px" style="border: 1px solid silver" src="/assets/colors/<?=$color['color']?>.jpg">
					<?php
				}
				?>
					</p>
					<p><?=$product_info['pattern']?>/ <?=$product_info['material']?>/ <?=$product_info['size']?></p>
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
	</div>
       <div class="menu_right">
            <?php
                $this->load->view('partials/menu_right');
            ?>
        </div>

<?php if(  count ($this->cart->total_items() ) > 0 )
{
?>
    <div class="cart_bottom valign-wrapper hide-on-med-and-up">
      <?php
        $this->load->view('partials/cart');
      ?>
    </div>
<?
}
?>    
	
</body>
</html>
<body>