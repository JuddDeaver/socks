<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="/assets/css/materialize.css">
<script type="text/javascript">
		$(document).ready(function()
		{
		    $('select').material_select();
		 //    $('a.delete_product').bind('click', function()
			// {
			// 	console.log($(this));
			// 	// break;
			// 	// alert($('a#delete_product')[0].href); 
			// 	if (confirm('Delete?')) {
			// 		window.location.href="$('a#delete_product')[0].href";
			// 	} else {
			// 	    return false;
			// 	}
			// });

			// $(".menu_icon").click(function(){
		 //        $(".menu_right").animate({width: 'toggle'}, 200);
		 //    });
		 //    $(".close img").click(function(){
		 //        $(".menu_right").animate({width: 'toggle'}, 200);
		 //    });
			// $(".cart").click(function() {
		 //    	window.location='/view_cart';
		 //    });
		    $.get('/socks/mens_pictures', function(res){
		   		$('.pictures').html(res);
	   		});
		});
	</script>
	<style type="text/css">
		a {
			display: inline-block; color: black;
		}
		a:hover {
			color: red;
		}
		.logo_top a:hover {
			color: black;
		}

		#search {
			background: url("../assets/search_icon.png") no-repeat scroll 3px 3px;
			background-size: 20px;
			padding-left:30px ;
			display: inline-block;
	    	height: 30px;
			border: 2px solid black;
			width: 155px;
		}
		select {

			color: red;
		}
		* {

			outline: red dotted 1px;
		}
		.main_content {

			padding: 20px;
		}
		.menu {
			padding: 23px 23px 15px 23px;
		}
		.logo {

			display: inline-block;
		    width: 100px;
		    font-size: 18px;
		    font-weight: 500;
		}
		@media screen and (max-width: 600px) {
			.right {

				margin-top: 20px;
				float: none !important;

			}
		}
	</style>
</head>


<body>
	<div class="row">
        <div class="menu">
            <?php
                $this->load->view('partials/menu_admin');
            ?>
        </div>
	<div class= "main_content">
		<div class="wrapper">
			<!-- <nav> -->
				<!-- <div class="nav-wrapper">
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li>
							<form name="search" action="search_a" method="POST">
								<li>			
									<select name="search_type">
										<option value="brand">Brand</option>
										<option value="name">Name</option>
										<option value="color">Color(s)</option>
										<option value="pattern">Pattern</option>
										<option value="material">Material</option>
										<option value="size">Style</option>
										<option value="price">Price</option>
									</select>
								</li>
								<li>
									<div class="input-field">
										<input name="search_term" id="search" type="search" required>
										<label for="search"><i class="material-icons">search</i></label>
										<i class="material-icons">close</i>
									</div>
								</li>
								<input type='submit'>
							</form>
						</li>
						<li><a href="orders_a">Orders</a></li>
						<li class="active"><a href="products_a">Products</a></li>
						<li><a href="logout_a">Log out</a></li>
					</ul>
				</div> -->
			<!-- </nav> -->
			<h1><?php
				if($this->session->flashdata("errors"))
				{
					echo $this->session->flashdata("errors");
				}
			?>​</h1>

			<div>
				<table class="responsive-table">
					<thead>
						<tr>
							<th>Action</th>
							<th data-field='imageurl' style="height: 100px;">Product Image</th>
						    <th data-field='inventory'>Inventory</th>
							<th data-field='brand'>Brand</th>
							<th data-field='name'>Name</th>
							<th data-field='color'>color(s)</th>
						    <th data-field='pattern'>Pattern</th>
						    <th data-field='price'>Price</th>
						    <th data-field='size'>Size</th>
			    			<th data-field='style'>Style</th>
						    <th data-field='material'>Material</th>
						    <th data-field='Description'>Description</th>
						</tr>
					</thead>
					<tbody>
	<?php
					$products = $this->sock->fetch_all('products');
					foreach ($products as $product)
					{
						// temp to filter out dummy data
						$image =  '/assets/products/' . $product['imageurl'];
						if (file_exists('.' . $image))
						{
	?>				
							<tr>
								<td>
									<a href="edit_product/<?= $product['id']; ?>">Edit</a>
									 | 
									<a class="delete_product" id="<?= $product['id']; ?>" href="delete_product/<?= $product['id']; ?>">Delete</a>
								</td>
								<td><img width='60' src="<?= $image; ?>"></td>
							    <td><?= $product['inventory']; ?> </td>
								<td><?= $product['brand']; ?> </td>
							    <td><?= $product['name']; ?> </td>
							    <td><?= $product['color']; ?> </td>
							    <td><?= $product['pattern']; ?> </td>
							    <td><?= $product['price']; ?> </td>
							    <td><?= $product['size']; ?> </td>
							    <td><?= $product['style']; ?> </td>
							    <td><?= $product['material']; ?> </td>
							    <td><?= $product['description']; ?> </td>
						</a>
							</tr>
	<?php
					
					}
				}

	?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
</body>
</html>