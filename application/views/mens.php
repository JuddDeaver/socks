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
			<form method="post" action="">
			<ul class="collapsible z-depth-1" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header">Color</div>
			      <div class="collapsible-body">
			      	<form action="#">
					    <p>
					      <input type="checkbox" class="filled-in" id="filled-in-box"  />
					      <label for="filled-in-box">Red</label>
					    </p>
					    <p>
					      <input type="checkbox" class="filled-in" id="filled-in-box"  />
					      <label for="filled-in-box">White</label>
					    </p>
					    <p>
					      <input type="checkbox" class="filled-in" id="filled-in-box"  />
					      <label for="filled-in-box">Black</label>
					    </p>
					    <p>
					      <input type="checkbox"   />
					      <label >Yellow</label>
					    </p>
					    <button type="submit">Search</button>
					  </form>
			      </div>
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
			      <div class="collapsible-header">Brand</div>
			      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
			    </li>
			  </ul>
			</form>
		</div>
		<div class="row pictures">
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
		
	</div>
</body>
</html>