<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $('select').material_select();
	});
	</script>
</head>
<body>
	<div class="wrapper">
		<nav>
			<div class="nav-wrapper">
				<a href="/dash_a" class="brand-logo">Dashboard</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li>
						<form action="search_a" method="POST">
							<li>			
								<select>
									<option value="all">All Fields</option>
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
									<input id="search" type="search" required>
									<label for="search"><i class="material-icons">search</i></label>
									<i class="material-icons">close</i>
								</div>
							</li>
						</form>
					</li>
					<li><a href="orders_a">Orders</a></li>
					<li class="active"><a href="products_a">Products</a></li>
					<li><a href="logout_a">Log out</a></li>
				</ul>
			</div>
		</nav>
		<h1><?php
			if($this->session->flashdata("errors"))
			{
				echo $this->session->flashdata("errors");
			}
			var_dump($this->input->post());
			die();
		?>​</h1>
		<div class="search_results">
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
					</tr>
				</thead>
				<tbody>
<?php
				$products = $this->sock->search_db(array('happysocks'),array('brand'),array('products'));
				// $products = $this->sock->search_db(array('happysocks'),array('brand'));
				// $products = $this->sock->search_db(array('happysocks'));
				foreach ($products as $table)
				{
					foreach ($table as $product)
					{
						$image =  '/assets/products/' . $product['imageurl'];
						// if (file_exists('.' . $image))
						// {
?>				
							<tr>
								<td><a href="items_a/<?= $product['id']; ?>">Edit Product</a></td>
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
								</a>
							</tr>
<?php
						// }
					}
				}

?>
				</tbody>
			</table>
		</div>

	</div>
</body>
</html>