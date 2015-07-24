<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="Content-Script-Type" content="text/javascript">
<meta name="Content-Style-Type" content="text/css">
<title>Example</title>

<script type="text/javascript">
<!--
function copyBilling (f) {
  var s, i = 0;
  while (s = ['A', 'B', 'C', 'D', 'country', 'pc'][i++]) {f.elements['shipping_' + s].value = f.elements['bill_' + s].value};
}
// -->
</script>

<style type="text/css">
<!-- 
fieldset, form {padding:1ex; width:25em} 
label {display:block; text-align:right}
input {margin-left:1em}
button {display:block; margin:auto}
-->
</style>

</head>
<body>
<form action="some-script.pl" onsubmit="total (this)">

<fieldset>
<legend>Billing Address</legend>
<label>House Name/Number :<INPUT TYPE="TEXT" NAME="bill_A" SIZE=30></label>
<label>Street :<INPUT TYPE="TEXT" NAME="bill_B" SIZE=30></label>
<label>City :<INPUT TYPE="TEXT" NAME="bill_C" SIZE=30></label>
<label>Region :<INPUT TYPE="TEXT" NAME="bill_D" SIZE=30></label> 
<label>Country :<INPUT TYPE="TEXT" NAME="bill_country" SIZE=30></label>
<label>Post Code :<INPUT TYPE="TEXT" NAME="bill_pc" SIZE=30></label>
</fieldset>

<fieldset>
<legend>Shipping Address</legend>
<label style="text-align:left"><input name="same" onclick="if (this.checked) copyBilling (this.form)" type="checkbox">Same as billing</label>
<label>House Name/Number :<INPUT TYPE="TEXT" NAME="shipping_A" SIZE=30></label>
<label>Street :<INPUT TYPE="TEXT" NAME="shipping_B" SIZE=30></label>
<label>City :<INPUT TYPE="TEXT" NAME="shipping_C" SIZE=30></label>
<label>Region :<INPUT TYPE="TEXT" NAME="shipping_D" SIZE=30></label> 
<label>Country :<INPUT TYPE="TEXT" NAME="shipping_country" SIZE=30></label>
<label>Post Code :<INPUT TYPE="TEXT" NAME="shipping_pc" SIZE=30></label>
</fieldset>

<div><button type="submit">Submit</button></div>

</form>
</body>
</html>