<!DOCTYPE html> 
<html > 
	<head> 
		<style type="text/css">
		 a.popup-link {
padding:17px 0;
text-align: center;
margin:7% auto;
position: relative;
width: 300px;
color: #fff;
text-decoration: none;
background-color: #FFBA00;
border-radius: 3px;
box-shadow: 0 5px 0px 0px #eea900;
display: block;
}
a.popup-link:hover {
background-color: #ff9900;
box-shadow: 0 3px 0px 0px #eea900;
-webkit-transition:all .25s;
-moz-transition:all .25s;
transition:all .25s;
}
/* end link popup*//*style untuk popup */
#popup {
visibility: hidden;
opacity: 0;
margin-top: -200px;
}
#popup:target {
visibility:visible;
opacity: 1;
background-color: rgba(255,255,255,0.7);
position: fixed;
top:0;
left:0;
right:0;
bottom:0;
margin:0;
z-index: 99999999999;
-webkit-transition:all .25s;
-moz-transition:all .25s;
transition:all .25s;
}@media (min-width: 768px){
.popup-container {
width:600px;
}
}
@media (max-width: 767px){
.popup-container {
width:100%;
}
}
.popup-container {
position: relative;
margin:7% auto;
padding:30px 50px;
background-color: #333;
color:#fff;
border-radius: 3px;
}a.popup-close {
position: absolute;
top:3px;
right:3px;
background-color: #fff;
padding:7px 10px;
font-size: 20px;
text-decoration: none;
line-height: 1;
color:#333;
}/* style untuk isi popup */.popup-form {
margin:10px auto;
}
.popup-form h2 {
margin-bottom: 5px;
font-size: 37px;
text-transform: uppercase;
}
.popup-form .input-group {
margin:10px auto;
}
.popup-form .input-group input {
padding:17px;
text-align: center;
margin-bottom: 10px;
border-radius:3px;
font-size: 16px;
display: block;
width: 100%;
}
.popup-form .input-group input:focus {
outline-color:#FB8833;
}
.popup-form .input-group input[type="email"] {
border:0px;
position: relative;
}
.popup-form .input-group input[type="submit"] {
background-color: #FB8833;
color: #fff;
border: 0;
cursor: pointer;
}
.popup-form .input-group input[type="submit"]:focus {
box-shadow: inset 0 3px 7px 3px #ea7722;
}
		 </style> 
	 </head> 
 <body> 
 	<div id="closed"></div>
<a href="#popup" class="popup-link">Click to show Pop Up</a>

<div class="popup-wrapper" id="popup">
	<div class="popup-container"><!-- Popup Contents, just modify with your own -->
	<form action="http://www.syakirurohman.net/2015/01/tutorial-membuat-popup-tanpa-javascript-jquery.html#" method="post" class="popup-form">
	<h2>update</h2>
	<p>Daripada hanya melihat demo untuk popup-nya saja, lebih baik masukkan juga email anda agar mendapatkan pemberitahuan saat ada update posting menarik lain seperti ini.<br/>
	<strong>Percayalah, saya hanya akan mengirim sesuatu yang bermanfaat untuk anda :)</strong></p>
	<div class="input-group">
	<p><input type="email" name="email" placeholder="Email Address"></p>
	<p>
	<input type="hidden" name="action" value="subscribe">
	<input type="hidden" name="source" value="http://www.syakirurohman.net/2015/01/tutorial-membuat-popup-tanpa-javascript-jquery.html">
	<input type="hidden" name="sub-type" value="widget">
	<input type="hidden" name="redirect_fragment" value="blog_subscription-2">
	<input type="hidden" id="_wpnonce" name="_wpnonce" value="aaf0b68fcd">
	<input type="submit" value="Submit" name="jetpack_subscriptions_widget">
	</p>
	</div>
	</form>
	<!-- Popup Content is untill here--><a class="popup-close" href="#closed">X</a>
	</div>
</div> 
 </body> 
</html>