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
				<a href="/dash_a" class="brand-logo">Dashboard</a>
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
			<table class="hoverable">
				<thead>
					<tr>
						<th data-field='Order_id'>Order id</th>
						<th data-field='First_Name'>First Name</th>
						<th data-field='Last_Name'>Last Name</th>
					    <th data-field='Username'>Username</th>
					    <th data-field='Email'>Email</th>
					    <th data-field='Phone_Number'>Phone Number</th>
		    			<th data-field='Credit_Card'>Credit Card</th>
					    <th data-field='Security_Code'>Security Code</th>
					    <th data-field='Expiration'>Expiration</th>
					    <th data-field='CC_Type'>CC Type</th>
					    <th data-field='Shipping_Address'>Shipping Address</th>
					    <th data-field='Shipping_Address2'>Shipping Address2</th>
					    <th data-field='Shipping_City'>Shipping City</th>
					    <th data-field='Shipping_State'>Shipping State</th>
					    <th data-field='Shipping_Zipcode'>Shipping Zipcode</th>
					    <th data-field='Billing_Address'>Billing Address</th>
					    <th data-field='Billing_Address2'>Billing Address2</th>
					    <th data-field='Billing_City'>Billing City</th>
					    <th data-field='Billing_State'>Billing State</th>
					    <th data-field='Billing_Zipcode'>Billing Zipcode</th>
						<th data-field='Order_Total'>Order Total</th>
					</tr>
				</thead>
				<tbody>
<?php
				$orders = $this->sock->get_order_heads();
				foreach ($orders as $order)
				{
?>				
						<tr>
							<td><a href="items_a/<?= $order['Order_id']; ?>">Order Details</a></td>
							<td><?= $order['First_Name']; ?> </td>
						    <td><?= $order['Last_Name']; ?> </td>
						    <td><?= $order['Username']; ?> </td>
						    <td><?= $order['Email']; ?> </td>
						    <td><?= $order['Phone_Number']; ?> </td>
						    <td><?= $order['Credit_Card']; ?> </td>
						    <td><?= $order['Security_Code']; ?> </td>
						    <td><?= $order['Expiration']; ?> </td>
						    <td><?= $order['CC_Type']; ?> </td>
						    <td><?= $order['Shipping_Address']; ?> </td>
						    <td><?= $order['Shipping_Address2']; ?> </td>
						    <td><?= $order['Shipping_City']; ?> </td>
						    <td><?= $order['Shipping_State']; ?> </td>
						    <td><?= $order['Shipping_Zipcode']; ?> </td>
						    <td><?= $order['Billing_Address']; ?> </td>
						    <td><?= $order['Billing_Address2']; ?> </td>
						    <td><?= $order['Billing_City']; ?> </td>
						    <td><?= $order['Billing_State']; ?> </td>
						    <td><?= $order['Billing_Zipcode']; ?> </td>
							<td><?= $order['Order_Total']; ?> </td>
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