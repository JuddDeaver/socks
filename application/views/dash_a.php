<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<nav>
			<div class="nav-wrapper">
				<a href="dash_a" class="brand-logo">Dashboard</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
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
<?php
			$orders = $this->sock->get_orders();
			foreach ($orders as $order)
			{
?>				
				<h3><?= $order['customer_id']; ?> </h3>
				<h3><?= $order['shipping_address_id']; ?> </h3>
				<h3><?= $order['billing_address_id']; ?> </h3>
				<h3><?= $order['created_at']; ?> </h3>
				<h3><?= $order['updated_at']; ?> </h3>
				<h3><?= $order['cc_id']; ?> </h3>
				<h3><?= $order['phone_id']; ?> </h3>
<?php
			}
?>
		</div>

	</div>
</body>
</html>