<table class="bordered cart_list">
    <thead>
      <tr>
      	  <th id="picture" data-field="picture">Item</th>
          <th data-field="id"></th>
          <th id="quantity_th" data-field="quantity">Quantity</th>
          <th id="price_th" data-field="price">Price</th>
          <th data-field="change"></th>
      </tr>
    </thead>
    <tbody>
<?php
if(count($this->cart->contents()>0)) {
foreach ($contents as $content){
?>
      <tr>
        <td id="thumbnail"><img id="thumbnail" src="/assets/products/<?=$content['picture']?>"></td>
        <td><p id="name"><?=$content['name']?></p></td>
        <td id="quantity">
	      	<form class="update" method="post">
        		<input class="number" type="number" name="qty" min="1" max="10" value="<?=$content['qty']?>">
        		<input class="rowid" type="hidden" name="rowid" value="<?=$content['rowid']?>">
	        </form>
        </td>
         <td><p id="price">$<?=number_format($content['price'] * $content['qty'], 2)?></p></td>
        <td>
        	<form class="remove" method="post">
        		<p id="remove" ><img src="/assets/icon_close.png" width="10px"></p>
        		<input type="hidden" name="rowid" value="<?=$content['rowid']?>">
        	</form>
    	</td>
      </tr>
<?php
}
}
else 
{
?>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
<?php				
}
?>
      <tr>
        <td id="subtotal" colspan="5"><b>Subtotal</b>  $<?=number_format($this->cart->total(), 2)?></td>
      </tr>
    </tbody>
</table>