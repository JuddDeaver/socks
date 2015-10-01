<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.js"></script>
	<script>
		$(document).ready(function(){
			var htmlstr = '';
		    $(".menu_icon").click(function(){
		        $(".menu_right").animate({width: 'toggle'}, 200);
		    });
		    $(".close img").click(function(){
		        $(".menu_right").animate({width: 'toggle'}, 200);
		    });
			$(".cart").click(function() {
		    	window.location='/view_cart';
		    });
		    $.get('/socks/search_api', function(res){
		    	$.each(res.products, function(index,element) {
			    	htmlstr += "<div class='col s6 m3'>";
						htmlstr += "<a href='/product_info/" + element.id + "'>";
						htmlstr += "<img src='/assets/products/" + element.imageurl + "'>";
						htmlstr += "<p>" + element.name + "</p>";
						htmlstr += "<p class='price'>$" + element.price + "</p>";
						htmlstr += "</a>";
					htmlstr += "</div>";});
	   		$('.products').html(htmlstr)}, 'json');
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
	<div class="products">

</div>



</body>
</html>