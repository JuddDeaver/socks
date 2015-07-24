<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function()
			{
			    $('select').material_select();
			    $('a.delete_product').bind('click', function()
				{
					if (confirm('Delete?')) {
						window.location.href="$('a#delete_product')[0].href";
					} else {
					    return false;
					}
				});
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
									<option <?PHP if($this->input->post()['search_type'] === "brand"){echo 'selected="selected"';}?> value="brand">Brand</option>
									<option <?PHP if($this->input->post()['search_type'] === "name"){echo 'selected="selected"';}?> value="name">Name</option>
									<option <?PHP if($this->input->post()['search_type'] === "color"){echo 'selected="selected"';}?> value="color">Color(s)</option>
									<option <?PHP if($this->input->post()['search_type'] === "pattern"){echo 'selected="selected"';}?> value="pattern">Pattern</option>
									<option <?PHP if($this->input->post()['search_type'] === "material"){echo 'selected="selected"';}?> value="material">Material</option>
									<option <?PHP if($this->input->post()['search_type'] === "size"){echo 'selected="selected"';}?> value="size">Style</option>
									<option <?PHP if($this->input->post()['search_type'] === "price"){echo 'selected="selected"';}?> value="price">Price</option>
								</select>
							</li>
							<li>
								<div class="input-field">
									<input name="search_term" id="search" type="search" required value="<?=$this->input->post()['search_term']?>">
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
				$products = $this->sock->search_db(
					array($this->input->post()['search_term']),
					array($this->input->post()['search_type']),
					array('products'));

				foreach ($products as $table)
				{
					foreach ($table as $product)
					{
						$image =  '/assets/products/' . $product['imageurl'];
?>				
							<tr>
								<td>
								<a href="edit_product/<?= $product['id']; ?>">Edit</a>
								| 
								<a class="delete_product" id="<?= $product['id']; ?>" href="delete_product/<?= $product['id']; ?>">Delete</a>
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