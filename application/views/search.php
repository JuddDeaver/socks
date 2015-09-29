<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
	<style type="text/css">
	* {
		/*outline: red dotted 1px;*/
	}
	img{
		width: 100%;
	}
	.price {
		color: gray;
		line-height: 19px;
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
			$(".cart").click(function() {
		    	window.location='/view_cart';
		    });
		    $.get('/socks/mens_pictures', function(res){
		   		$('.pictures').html(res);
	   		});
		});
	</script>
</head>
<body>

<?php if($this->session->flashdata("errors")) {?>
		<h1>
			<?=$this->session->flashdata("errors");?> 
		</h1>
<?php } ?>​




	<form name="search" action="search" method="POST">
		<?php
			$colors = $this->sock->get_all_colors();
			foreach ($colors as $color)
			{
		?>				
				 <input type="checkbox" name="color" value="<?=$color['color']?>"><?=$color['color']?><br>
		<?php
			}
		?>
<hr/>
		<?php
			$patterns = $this->sock->get_all_patterns();
			foreach ($patterns as $pattern)
			{
		?>				
				 <input type="checkbox" name="pattern" value="<?=$pattern['pattern']?>"><?=$pattern['pattern']?><br>
		<?php
			}
		?>
<hr/>
		<?php
			$sizes = $this->sock->get_all_sizes();
			foreach ($sizes as $size)
			{
		?>				
				 <input type="checkbox" name="size" value="<?=$size['size']?>"><?=$size['size']?><br>
		<?php
			}
		?>
<hr/>
		<?php
			$styles = $this->sock->get_all_styles();
			foreach ($styles as $style)
			{
		?>				
				 <input type="checkbox" name="style" value="<?=$style['style']?>"><?=$style['style']?><br>
		<?php
			}
		?>
<hr/>
		<?php
			$brands = $this->sock->get_all_brands();
			foreach ($brands as $brand)
			{
		?>				
				 <input type="checkbox" name="brand" value="<?=$brand['brand']?>"><?=$brand['brand']?><br>
		<?php
			}
		?>
<hr/>
		<button>Submit</button>
	</form>
	<?php foreach($pictures as $picture)
{
?>
			<div class="col s6 m3">
				<a href="/product_info/<?=$picture['id']?>">
				<img src="/assets/products/<?=$picture['imageurl']?>">
				<p><?=$picture['name']?></p>
				<p class="price">$<?=$picture['price']?></p>
				</a>
			</div>
<?php
}
?>



</body>
</html>