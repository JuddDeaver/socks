<?php foreach($pictures as $picture)
{
?>
			<div class="col s6 m3">
				<a href="/product_info/<?=$picture['id']?>">
				<img src="/assets/products/<?=$picture['imageurl']?>">
				<p><?=$picture['name']?></p>
				<p class="price">$<?=$picture['price']?></p>
				</a>
			</div>
<?php
}
?>