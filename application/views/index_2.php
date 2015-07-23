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
    .close img{
        width: 20px;
        position: absolute;
        right: 20px;
        top: 20px;
    }
    img{
        width: 100%;
    }
    .pattern {
        font-size: 12px;

        
    }
    .pattern div {
        margin-top: 10px;
    }
    .size div {
        margin-top: 10px;
    }
    .size {
        font-size: 12px;
    }
    .style {
        font-size: 12px;
    }
    h5 {
        font-weight: 500;
        font-size: 15px;
        letter-spacing: 4px;
        margin-left: 10px;
        text-align: center;
    }

    </style>
    <script>
        $(document).ready(function(){
            $.get('/socks/menu_left', function(res){
                $('.menu_left').html(res);
            });
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
<?php if(  count ($this->cart->total_items() ) > 0 )
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
                        <ul class="collapsible z-depth-1" data-collapsible="accordion">
                            <li>
                              <div class="collapsible-header">Color</div>
                              <div class="collapsible-body">
                              <p class="color">
                               <!--  <?php
                                for($i = 1; $i < 14; $i++)
                                {
                                    ?>
                                    <img width="20px" style="border: 1px solid silver" src="/assets/colors/<?=$i?>.jpg">
                                <?php
                                }
                                ?> -->
                              </p>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header">Pattern</div>
                              <div class="collapsible-body ">
                                <div class="row pattern ">
                                  <div class="col s6">ARGYLE</div>
                                  <div class="col s6">CHARACTERS</div>
                                  <div class="col s6">CHECKERED</div>
                                  <div class="col s6">CROSSHATCH</div>
                                  <div class="col s6">DOTS</div>
                                  <div class="col s6">FAIR ISLE</div>
                                  <div class="col s6">FLECKS</div>
                                  <div class="col s6">FLORAL</div>
                                  <div class="col s6">GEOMETRIC</div>
                                  <div class="col s6">PAISLEY</div>
                                  <div class="col s6">SOLID</div>
                                  <div class="col s6">STRIPES</div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header">Size</div>
                              <div class="collapsible-body">
                                    <div class="row size">
                                        <div class="col s2">XS</div>
                                        <div class="col s2">S</div>
                                        <div class="col s2">M</div>
                                        <div class="col s2">L</div>
                                        <div class="col s2">XL</div>
                                    </div>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header">Style</div>
                              <div class="collapsible-body">
                                <div class="row style">
                                    <div class="col s4">MEN</div>
                                    <div class="col s4">WOMEN</div>
                                    <div class="col s4">KIDS</div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header">Brand</div>
                              <div class="collapsible-body">
                                <input type="text" name="brand">
                              </div>
                            </li>
                          </ul>
                          <button>FIND</button>
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
            <p class="close"><img class="close" src="/assets/icon_close.png"></p>
            <div class="middle">
                <div class="logo_left"><a href="/">MATCHSOCKS</a></div>
                <ul class="categories">
                    <li><a href="/mens">MENS</a></li>
                    <li><a href="/womens">WOMENS</a></li>
                    <li><a href="/kids">KIDS</a></li>
                </ul>
                <ul class="sub-categories">
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
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