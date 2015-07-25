<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>MatchSocks</title>
	<link rel="stylesheet" href="/assets/css/materialize.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css">
    <style type="text/css">

    .main_search{
        padding: 0px 15px;
        width: 100%;
    }
    @media screen and (max-width: 991px) {
        .main_search {
            margin-top: 10px;
        }
    }
    .border {
        outline: 3px solid black;
        padding: 10px;
        min-height: 400px;
    }
    .sub_menu{
        margin-top: 20px;
    }
    img{
        width: 100%;
    }
    .collapsible-header {
    	 font-size: 12px;   
    }
    .pattern div {
        margin-top: 10px;
    }
    .size div {
        margin-top: 10px;
    }
    h5 {
        letter-spacing: 4px;
        text-align: center;
    }
    .color img {
    	width: 15px;
    }
    /*CHECKBOX BUTTON*/
    div label input {
   margin-right:100px;
	}

	#ck-button {
	    margin:4px;
	    background-color: red;
	    border:1px solid #eee;
	    overflow:auto;
	    float:left;
	}

	#ck-button:hover {
	    background:red;
	}

	#ck-button label {
	    float:left;
	    width:4.0em;
	}

	#ck-button label span {
	    text-align:center;
	    padding:3px 0px;
	    display:block;
	}

	#ck-button label input {
	    display: none;
	}

	#ck-button input:checked + span {
	    background: grey;
	    color:#fff;
	}
	#red {
		background-color: #ee443b;
		color: white;
		font-weight: 400;
	}
    </style>
    <script>
        $(document).ready(function(){
            $(".menu_icon").click(function(){
                $(".menu_right").animate({width: 'toggle'}, 200);
            });
            $(".close img").click(function(){
                $(".menu_right").animate({width: 'toggle'}, 200);
            });
            $(".cart").click(function() {
                window.location='/view_cart';
            });
        });
    </script>
</head>
<body>
<?php if( count ($this->cart->contents()) > 0 )
{
?>
    <div class="cart valign-wrapper hide-on-small-only">
      <?php
        $this->load->view('partials/cart');
      ?>
    </div>
<?
}
?> 
    <div class="row">
        <div class="menu_left hide-on-med-and-down">
            <?php
                $this->load->view('partials/menu_left');
            ?>
        </div>
        <div class="menu_top hide-on-large-only">
            <?php
                $this->load->view('partials/menu_top');
            ?>
        </div>
        <div class="content">
            <div class="main_search ">
                <div class="border">
                    <h5>FIND A MATCH </h5>
                    <div class="col s12 m6">
                     <table>
                     	<tr>
                     		<td>Color</td>
                     		<td class="color">
<?php
		$colors = $this->sock->get_all_colors();
		foreach($colors as $color){
?>
								<img src="/assets/colors/<?=$color['color']?>.jpg">
<?php
	}

?>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>Color</td>
                     		<td>
                     			<div id="ck-button">
								   <label id="red">
								      <input type="checkbox" value="1"><span>red</span>
								   </label>
								</div>
                     		</td>
                     	</tr>
                     	<tr>
                     		<td>Color</td>
                     	</tr>
                     	<tr>
                     		<td>Color</td>
                     	</tr>
                     	<tr>
                     		<td>Color</td>
                     	</tr>
                     </table>
                    </div>    
                    <div class="col s12 m6">
                        -OR-
                        Upload a picture

                        COMING SOON
                    </div>
                </div>
            </div>
            <div class="row sub_menu">
                <div class="col s12 m4"><a href="mens"><img src="/assets/mens.jpg"></a>
                </div>
                <div class="col s12 m4"><a href="womens"><img src="/assets/womens.jpg"></a></div>
                <div class="col s12 m4"><a href="kids"><img src="/assets/kids.jpg"></a></div>   
            </div>
            <div class="row sub_menu">
                <div class="col s12 m6"><a href="/about"><img src="/assets/menu_pic2.jpg"></a></div>
                <div class="col s12 m6"><a href="/news"><img src="/assets/menu_pic1.jpg"></a></div>
            </div>
        </div>
        <div class="menu_right">
            <?php
                $this->load->view('partials/menu_right');
            ?>
        </div>

<?php if(  count ($this->cart->total_items() ) > 0 )
{
?>
    <div class="cart_bottom valign-wrapper hide-on-med-and-up">
      <?php
        $this->load->view('partials/cart');
      ?>
    </div>
<?
}
?>        

    </div>
</body>
</html>