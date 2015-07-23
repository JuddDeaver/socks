<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
		    $('select').material_select();

		});
	</script>
	<style type="text/css">
		a {display: inline-block;}
	</style>
</head>


<body>
	<div class="wrapper">
		<nav>
			<div class="nav-wrapper">
				<a href="/dash_a" class="brand-logo">Dashboard</a>
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
					<li class="active"><a href="orders_a">Orders</a></li>
					<li><a href="products_a">Products</a></li>
					<li><a href="logout_a">Log out</a></li>
				</ul>
			</div>
		</nav>
		<h1><?php
			if($this->session->flashdata("errors"))
			{
				echo $this->session->flashdata("errors");
			}
		?>​</h1>

		<div>
			<table class="hoverable">
				<thead>
					<tr>
						<th>Action</th>
						<th data-field='imageurl'>Product Image</th>
						<th data-field='id'>ID</th>
						<th data-field='brand'>Brand</th>
						<th data-field='name'>Name</th>
						<th data-field='color'>color(s)</th>
					    <th data-field='pattern'>Pattern</th>
					    <th data-field='price'>Price</th>
					    <th data-field='size'>Size</th>
		    			<th data-field='style'>Style</th>
					    <th data-field='material'>Material</th>
					    <th data-field='created_at'>Created At</th>
					    <th data-field='updated_at'>Shipping Address</th>
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
								<a href="delete_product/<?= $product['id']; ?>">Delete</a>
							</td>
							<td><img width='60' src="<?= $image; ?>"></td>
							<td><?= $product['id']; ?> </td>
							<td><?= $product['brand']; ?> </td>
						    <td><?= $product['name']; ?> </td>
						    <td><?= $product['color']; ?> </td>
						    <td><?= $product['pattern']; ?> </td>
						    <td><?= $product['price']; ?> </td>
						    <td><?= $product['size']; ?> </td>
						    <td><?= $product['style']; ?> </td>
						    <td><?= $product['material']; ?> </td>
						    <td><?= $product['created_at']; ?> </td>
						    <td><?= $product['updated_at']; ?> </td>
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
</body>
</html>