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
    }
    .width {
        width: 100px;
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
                            <input type="text" class="col s12" placeholder="Email">
                            <p>Receipts and notifications will be sent to this email address.</p>
                            <p>Shipping Address</p>
                            <input type="text" class="col m6 s12" placeholder="First Name">
                            <input type="text" class="col m6 s12" placeholder="Last Name">
                            <input type="text" class="col s12" placeholder="Street Address 1">
                            <input type="text" class="col s12" placeholder="Street Address 2">
                            <select class="browser-default">
                              <option value="1">United States</option>
                            </select>
                            <input type="text" class="col s5" placeholder="City">
                            <select class="browser-default width">
                              <option value=""disabled selected></option>
                              <option value="1">CA</option>
                              <option value="1">OR</option>
                              <option value="1">WA</option>
                              <option value="1">NY</option>
                              <option value="1">HI</option>
                            </select>
                            <input type="text" class="col s4" placeholder="Zip / Postal">
                            <input type="text" class="col s12" placeholder="Phone Number">


                            <div class="row">
                              <div class="col-xs-2">
                                <input type="text" class="form-control" placeholder=".col-xs-2">
                              </div>
                              <div class="col-xs-3">
                                <input type="text" class="form-control" placeholder=".col-xs-3">
                              </div>
                              <div class="col-xs-4">
                                <input type="text" class="form-control" placeholder=".col-xs-4">
                              </div>
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
        </div>
        
    </div>

</body>
</html>
<body>