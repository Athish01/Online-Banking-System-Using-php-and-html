<?php
session_start();
$username = $_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","banking");
$result = mysqli_query($con, "SELECT * FROM balance WHERE username = '$username'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$online_limit = $row['online_limit'];
$card_limit = $row['card_limit'];
$upi_limit = $row['upi_limit'];
$online_no = $row['online_no'];
$card_no = $row['card_no'];
$upi_no = $row['upi_no'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $online_limit = $_POST['onlinelimit'];
  $card_limit = $_POST['cardlimit'];
  $upi_limit = $_POST['upilimit'];
  $online_no = $_POST['onlineno'];
  $card_no = $_POST['cardno'];
  $upi_no = $_POST['upino'];
  $c = mysqli_query($con, "update balance set online_limit = '$online_limit', card_limit = '$card_limit', upi_limit = '$upi_limit', online_no = '$online_no', card_no = '$card_no', upi_no = '$upi_no' where username = '$username';");
  if($c) {header("refresh:0;url=dashboard.php"); } else { echo "no";}
}
?>
<html>
    <head>
        <link rel="stylesheet" href="response.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="register.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="register.js"></script>
        
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

<style type="text/css">
  table { border: 1px solid black; border-collapse: collapse; }
  table th{border: 1px solid black; font-size: 18px;}
  table td{font-size: 18px;}
  input{font-size: 25px;}
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
  <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php" class="active"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>Set Limit</h1></div>
  <br><br>
  <form action="" method="POST">
  <table cellpadding="20" width="80%">
    <tr>
      <th align="center">Transaction Type</th>
      <th align="center">Amount Limit</th>
      <th align="center">Number Of Transactions Permitted (maximum 5)</th>
    </tr>
    <tr>
      <td align="center">UPI Transaction</td>
      <td align="center"><input size="5" type="text" name="upilimit" id="upilimit" value="<?php echo $upi_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="upino" id="upino" value="<?php echo $upi_no ?>"></td>
    </tr>
    <tr>
      <td align="center">Online Transaction</td>
      <td align="center"><input size="5" type="text" name="onlinelimit" id="onlinelimit" value="<?php echo $online_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="onlineno" id="onlineno" value="<?php echo $online_no ?>"></td>
    </tr>
    <tr>
      <td align="center">Card Transaction</td>
      <td align="center"><input size="5" type="text" name="cardlimit" id="cardlimit" value="<?php echo $card_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="cardno" id="cardno" value="<?php echo $card_no ?>"></td>
    </tr>
  </table>
  <br>
  <table style="border: white;" width="80%">
    <tr>
      <td style="border: white;" align="center"><input type="submit" name="submit" value="Continue" style="height: 40px; width: 150px; font-size: 20px; color: white; background-color: #4CAF50"></td>
    </tr>
  </table>
  </form>
</center>
</body>
</html>