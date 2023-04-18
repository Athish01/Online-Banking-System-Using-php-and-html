<?php
  session_start();
  unset($_SESSION['sess_user']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>TN Bank</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="response.css">


<style>
            .head{
                font-size: 75px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                background: -webkit-linear-gradient(#eb090d, #333);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent; ;
            }
            .bdy{
                background-color: #240b7d;
                background-image: url("home.png");
                background-attachment: fixed;
  background-position: top;
            }
            
            .center {
  display: block;
  margin-top: -2px;
  margin-left: auto;
  margin-right: auto;
  width: 250px;
  height: 98px;
}
            div.op {
  background-color: #ffffff;
  border: 1px 
  opacity: 0.5;
}

div.op th {
  font-weight: bold;
  color: black;
  font-size: 30px;
}

        </style>


    </head>

    <body class="bdy">
        <img src="a.png" class="center">
        <br>
        <div class="op">
            <table style="width:100% ;">
                <tr>
                    <th style="width:25%">Email:TNBANK@gmail.com</th>
                    <th style="width:50%">Welcome to Bank of TN</th>
                    <th style="width:25%">Phone no:1234567893</th>
                </table></div>
<br>

<div class="topnav" id="myTopnav">
  <a href="index.html" class="active"><i class="fa fa-fw fa-home "></i>Home</a>
  <a href="login.html" style="float: right"><i class="fa fa-fw fa-sign-in "></i>Login</a>
 
</div>
<br><br>
  <center>
    <br><br>
    <h1>Thank you for banking with TN Bank</h1>
    <hr>
    <p>You have been logged out of Internet Banking services of TN Bank</p>
    <p>Please close this window for security reasons</p>
  </center>
</body>
</html>