<?php
$contents = $this->cart->contents();
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
    </style>
    <script>
    </script>
</head>
<body>
    <div class="main">
        <div class="logo_left"><a href="/">MATCHSOCKS</a></div>
        <div class="row">
            <div class="col l6 s12">
                <div class="contact" id="contents">
                    <div class="row">
                        <p>Contact & Shipping</p>
                        <form>
                            <p>Your email address</p>
                            <div class="input-field col s12">
                            <input type="text" placeholder="Email">
                            </div>
                            <p>Receipts and notifications will be sent to this email address.</p>
                            <p>Shipping Address</p>
                            <div class="input-field col m6 s12">
                               <input type="text"placeholder="First Name">
                             </div>
                             <div class="input-field col m6 s12">
                            <input type="text" placeholder="Last Name">
                            </div>
                            <div class="input-field col s12">
                              <input type="text" placeholder="Street Address 1">
                            </div>
                            <div class="input-field col s12">
                              <input type="text" placeholder="Street Address 2">
                            </div>
                            <div class="input-field col s12">
                              <select class="browser-default">
                                <option value="1">United States</option>
                              </select>
                            </div>
                            <div class="input-field col s5">
                              <input type="text" placeholder="City">
                            </div>
                            <div class="input-field col s3">
                              <select class="browser-default">
                                <option value=""disabled selected></option>
        <?php
        $states = $this->sock->get_states();
foreach ($states as $state){
        ?>
                              <option name="state" value="<?=$state['code']?>"><?=$state['code']?></option>
<?php
}
?>
                              </select>
                            </div>
                            <div class="input-field col s4">
                              <input type="text" placeholder="Zip / Postal">
                            </div>
                            <div class="input-field col s12">
                              <input type="text" placeholder="Phone Number">
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="col l6 s12">
                <div class="orders" id="contents">
                Order Summary
                </div>
            </div>
            <div class="col l6 s12">
                <div class="orders" id="contents">
                  <div class="row">
                    <form>
                            <p>Billing Address</p>
                            
                            <div class="input-field col s12">
                              <input type="text" placeholder="Street Address 1">
                            </div>
                            <div class="input-field col s12">
                              <input type="text" placeholder="Street Address 2">
                            </div>
                            <div class="input-field col s12">
                              <select class="browser-default">
                                <option value="1">United States</option>
                              </select>
                            </div>
                            <div class="input-field col s5">
                              <input type="text" placeholder="City">
                            </div>
                            <div class="input-field col s3">
                              <select class="browser-default">
                                <option value=""disabled selected></option>
        <?php
$states = $this->sock->get_states();
foreach ($states as $state){
        ?>
                              <option name="state" value="<?=$state['code']?>"><?=$state['code']?></option>
<?php
}
?>
                              </select>
                            </div>
                            <div class="input-field col s4">
                              <input type="text" placeholder="Zip / Postal">
                            </div>
                            <div class="input-field col s12">
                              <input type="text" placeholder="Phone Number">
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
                               <input type="text"placeholder="Name on Card">
                             </div>
                             <div class="input-field col m6 s12">
                              <input type="text" placeholder="Card number">
                            </div>
                              <div class="input-field col s3">
                                <select class="browser-default">
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
                              <select class="browser-default">
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
                            <div class="input-field col s12">
                            <a href="/#"><p id="checkout"><button type="submit" class="waves-effect black btn-flat" style="color:white">Proceed</button></p></a>
                            </div>
                        </form>
                  </div>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>
<body>