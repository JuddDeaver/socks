<!DOCTYPE html>
<html>
<head>
	<title>Order Items</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
	<script type="text/javascript">
		$(document).ready(function()
		{
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
					<li><a href="/products_a">Products</a></li>
					<li><a href="/logout_a">Log out</a></li>
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
			<table>
				<thead>
					<tr>
						<th>Brand</th>
					    <th>Name</th>
					    <th>Color</th>
					    <th>Pattern</th>
					    <th>Size</th>
					    <th>Style</th>
					    <th>Material</th>
					    <th>Quantity</th>
						<th>Price</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
<?php
				$orders = $this->sock->get_order_items($id);
				foreach ($orders as $order)
				{
?>				
					<tr>
						<td><?= $order['Brand']; ?> </td>
					    <td><?= $order['Name']; ?> </td>
					    <td><?= $order['Color']; ?> </td>
					    <td><?= $order['Pattern']; ?> </td>
					    <td><?= $order['Size']; ?> </td>
					    <td><?= $order['Style']; ?> </td>
					    <td><?= $order['Material']; ?> </td>
					    <td><?= $order['Quantity']; ?> </td>
						<td><?= $order['Price']; ?> </td>
						<td><?= $order['Description']; ?> </td>
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