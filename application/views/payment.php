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
    * {
        /*outline: red dotted 1px;*/
    }
    body {
        background-color: #eee; 
    }
    #contents {
        background-color: white;
        padding: 20px;
        margin-bottom: 20px;
    }
    .main {
        margin: 20px auto;
        width: 900px;

    }
    input {
      width: 100%;
      height: 2.5rem;
      padding: 5px;
      border: 1px solid #f2f2f2;
      border-radius: 2px;
      background-color: rgba(255, 255, 255, .9);
      font-size: 12px;
      color: grey;
    }
    select {
      width: 100%;
      height: 2.5rem;
      padding: 5px;
      border: 1px solid #f2f2f2;
      border-radius: 2px;
      background-color: rgba(245, 245, 245, .9);
      font-size: 12px;
      color: grey;
    }
    .checkbox input {
    	width: 10px;
    }
    table {
      border-collapse: separate;
    }
    td {
      padding: 5px;
      font-size: 11px;
    }
    th {
      font-size: 9px;
      font-weight: 400;
    }
    #thumbnail {
      width: 30px;
    }
    .number {
      width: auto;
    }
    .update {
      text-align: right;
    }
    #quantity_th {
      text-align: right;
    }
    #price_th {
      text-align: right;
    }
    #price {
      text-align: right;
    }
    .label {
      font-size: 12px;
      font-weight: 500;
      margin: 0px 0px 0px 5px;
    }
    .title {
      margin-left: 5px;
    }
    #info {
      margin: 55px 0px 20px 5px;
      font-size: 10px;
    }
    .logo_left {
      margin-left: 5px;
      margin-bottom: 15px;
    }
    </style>
    <script>
      $(document).ready(function(){
      //load shopping cart table//
        $.get("/socks/shopping_cart", function(res){
          $(".shopping_cart").html(res);
        
          });
        $('#same').click(function(){
              if($('#same').is(':checked')){
                // alert('works');
                  $('#billing_fname').val($('#shipping_fname').val());
                  $('#billing_lname').val($('#shipping_lname').val());
                  $('#billing_street1').val($('#shipping_street1').val());
                  $('#billing_street2').val($('#shipping_street2').val());
                  $('#billing_city').val($('#shipping_city').val());

                  var state = $('#shipping_state option:selected').val();
                  console.log(state);
                  $('#billing_state option[value=' + state + ']').attr('selected','selected');

                  $('#billing_zip').val($('#shipping_zip').val());
                  $('#billing_phone').val($('#shipping_phone').val());
                  // var state = $('#state-field option:selected').val();
                  // $('#state-field1 option[value=' + state + ']').attr('selected','selected');
              } else { 
                  //Clear on uncheck
                  $('#billing_fname').val("");
                  $('#billing_lname').val("");
                  $('#billing_street1').val("");
                  $('#billing_street2').val("");
                  $('#billing_country option[value=Nothing]').attr('selected','selected');
                  $('#billing_city').val("");
                  $('#billing_state option[value=Nothing]').attr('selected','selected');
                  $('#billing_zip').val("");
                  $('#billing_phone').val("");
                  // $('#address-field1').val("");
                  // $('#city-field1').val("");
                  // $('#zip-field1').val("");
                  // $('#state-field1 option[value=Nothing]').attr('selected','selected');
              };

          });
          return false;
      
      });
        $(document).on("change", ".number", function(){
        // alert('here');
        $.post(
          "/socks/edit_cart",
          $(this).parent().serialize(),
          function(res){
            $(".shopping_cart").html(res);
          });
        });
         $(document).on("click", "#remove", function(){
          $.post(
            "/socks/remove_cart",
            $(this).parent().serialize(),
            function(res){
              $(".shopping_cart").html(res);
            });
        });
    </script>
</head>
<body>
    <div class="main">	
        <div class="logo_left"><a href="/">MATCHSOCKS</a></div>
        <div class="row">
          <form method="post" action="/proceed">
            <div class="col l6 s12">
                <div class="contact" id="contents">
                    <div class="row">
                      <p class="title">Contact & Shipping</p>    
                    	<fieldset>
                        <p class="label">Your email address</p>
                        <div class="input-field col s12">
                          <input type="text" placeholder="Email">
                        </div>
                        <p id="info">Receipts and notifications will be sent to this email address.</p>
                        <p class="label">Shipping Address</p>
                        <div class="input-field col m6 s12">
                           <input type="text" id="shipping_fname" name="shipping_fname" placeholder="First Name">
                         </div>
                        <div class="input-field col m6 s12">
                          <input type="text" id="shipping_lname" name="shipping_lname" placeholder="Last Name">
                        </div>
                        <div class="input-field col s12">
                          <input type="text" id="shipping_street1" name="shipping_street1" placeholder="Street Address 1">
                        </div>
                        <div class="input-field col s12">
                          <input type="text" id="shipping_street2" name="shipping_street2" placeholder="Street Address 2">
                        </div>
                        <div class="input-field col s12">
                          <select class="browser-default" >
                            <option id="shipping_country" name="shipping_country" value="USA">United States</option>
                          </select>
                        </div>
                        <div class="input-field col s5">
                          <input type="text" id="shipping_city" name="shipping_city" placeholder="City">
                        </div>
                        <div class="input-field col s3">
                          <select id="shipping_state" name="shipping_state" class="browser-default">
                            <option value=""disabled selected></option>
    <?php
    $states = $this->sock->get_states();
foreach ($states as $state){
    ?>
                            <option value="<?=$state['code']?>"><?=$state['code']?></option>
<?php
}
?>
                          </select>
                        </div>
                        <div class="input-field col s4">
                          <input type="text" id="shipping_zip" name="shipping_zip" placeholder="Zip / Postal">
                        </div>
                        <div class="input-field col s12">
                          <input type="text" id="shipping_phone" name="shipping_phone" placeholder="Phone Number">
                        </div>
                      </fieldset> 
                    </div>
                  </div>
            </div>
            <div class="col l6 s12">
                <div class="orders" id="contents">
                  <p class="title">Order Summary</p>
                  <div class="shopping_cart">
                    <?php
                      $this->load->view('partials/shopping_cart');
                    ?>
                  </div>
                </div>
            </div>
            <div class="col l6 s12">
                <div class="orders" id="contents">
                  <div class="row">
                  	<fieldset>
                        <p class="title">Billing Address</p>
                          <div class="input-field col s12">
                            	<p class="checkbox">
                                <div class="row">
                                   <label>Same as shipping</label>
                                   <input id="same" name="same" type="checkbox"/>
                                </div>
					                     </p>
                          </div>
                          <div class="input-field col m6 s12">
                             <input type="text" id="billing_fname" name="billing_fname" placeholder="First Name">
                           </div>
                           <div class="input-field col m6 s12">
                          <input type="text" id="billing_lname" name="billing_lname" placeholder="Last Name">
                          </div>
                          <div class="input-field col s12">
                            <input type="text" id="billing_street1" name="billing_street1" placeholder="Street Address 1">
                          </div>
                          <div class="input-field col s12">
                            <input type="text" id="billing_street2" name="billing_street2" placeholder="Street Address 2">
                          </div>
                          <div class="input-field col s12">
                            <select class="browser-default" >
                              <option id="billing_country" name="billing_country" value="1">United States</option>
                            </select>
                          </div>
                          <div class="input-field col s5">
                            <input type="text" id="billing_city" name="billing_city" placeholder="City">
                          </div>
                          <div class="input-field col s3">
                            <select id="billing_state" name="billing_state" class="browser-default">
                              <option value=""disabled selected></option>
      <?php
      $states = $this->sock->get_states();
foreach ($states as $state){
      ?>
                            <option value="<?=$state['code']?>"><?=$state['code']?></option>
<?php
}
?>
                            </select>
                          </div>
                          <div class="input-field col s4">
                            <input type="text" id="billing_zip" name="billing_zip" placeholder="Zip / Postal">
                          </div>
                          <div class="input-field col s12">
                            <input type="text" id="billing_phone" name="billing_phone" placeholder="Phone Number">
                          </div>
                          <div class="input-field col s12">
                            <select class="browser-default">
         <?php
$states = $this->sock->get_cards();
foreach ($cards as $card){
        ?>
                              <option name="card" value="<?=$card['type']?>"><?=$card['type']?></option>
<?php
}
?>
                              </select>
                            </div>
                            <div class="input-field col m6 s12">
                               <input type="text" name="name_on_card" placeholder="Name on Card">
                             </div>
                             <div class="input-field col m6 s12">
                              <input type="text" name="card_number" placeholder="Card number">
                            </div>
                            <div class="input-field col s3">
                              <select name="expiration_month" class="browser-default">
                                <option value="01">JAN</option>
                                <option value="02">FEB</option>
                                <option value="03">MAR</option>
                                <option value="04">APR</option>
                                <option value="05">MAY</option>
                                <option value="06">JUN</option>
                                <option value="07">JUL</option>
                                <option value="08">AUG</option>
                                <option value="09">SEP</option>
                                <option value="10">OCT</option>
                                <option value="11">NOV</option>
                                <option value="12">DEC</option>
                              </select>
                            </div>
                            <div class="input-field col s3">
                              <select name="expiration_year" class="browser-default">
                                <?php
                                 for($i=date("Y"); $i<=date("Y")+10; $i++)
                                 {
                                  ?>
                                    <option value="<?=$i?>"><?=$i?></option>
                                  <?php
                                 }
                                     
                                ?>
                              </select>
                            </div>
                            <div class="input-field col s6">
                              <input type="text" name="security_code" placeholder="Card Security Code">
                            </div>
                            <div class="input-field col s12">
                            <p id="checkout"><button type="submit" class="waves-effect black btn-flat" style="color:white">Proceed</button></p>
                            </div>
                      </fieldset>
                  </div>
                </div>
            </div>
          </form>
      </div>

    </div>

</body>
</html>
<body>