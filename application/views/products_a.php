<!DOCTYPE html>
<html>
<head>
	<title>Product Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<nav>
			<div class="nav-wrapper">
				<a href="/dash_a" class="brand-logo">Dashboard</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
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
		?>​</h1>

		<div>
			<table class="hoverable">
				<thead>
					<tr>
						<th data-field='brand'>Brand</th>
						<th data-field='name'>Name</th>
						<th data-field='color'>color(s)</th>
					    <th data-field='pattern'>Pattern</th>
					    <th data-field='price'>Price</th>
					    <th data-field='size'>Size</th>
		    			<th data-field='style'>Style</th>
					    <th data-field='material'>Material</th>
					    <th data-field='image'>Image</th>
					    <th data-field='created_at'>Created At</th>
					    <th data-field='updated_at'>Shipping Address</th>
					</tr>
				</thead>
				<tbody>
<?php
				$products = $this->sock->fetch_all('products');
				foreach ($products as $product)
				{
?>				
						<tr>
							<td><a href="items_a/<?= $product['id']; ?>">Edit Product</a></td>
							<td><?= $product['brand']; ?> </td>
						    <td><?= $product['name']; ?> </td>
						    <td><?= $product['color']; ?> </td>
						    <td><?= $product['pattern']; ?> </td>
						    <td><?= $product['price']; ?> </td>
						    <td><?= $product['size']; ?> </td>
						    <td><?= $product['style']; ?> </td>
						    <td><?= $product['material']; ?> </td>
						    <td><?= $product['imageurl']; ?> </td>
						    <td><?= $product['created_at']; ?> </td>
						    <td><?= $product['updated_at']; ?> </td>
					</a>
						</tr>
<?php
				}
?>
				</tbody>
			</table>
		</div>

	</div>
</body>
</html>