<?php
session_start();
$username = $_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","banking");
$connection = mysqli_connect("localhost","root","","transactions");
$resultm = mysqli_query($con, "SELECT * FROM balance WHERE username = '$username'");
$rowm = mysqli_fetch_array($resultm,MYSQLI_ASSOC);
$my_balance = $rowm['balance'];
$online_limit = $rowm['online_limit'];
$online_no = $rowm['online_no'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $usernamee = $_POST['usernamee'];
  $amount = $_POST['amount'];
  $resulto = mysqli_query($con, "SELECT * FROM balance WHERE username = '$usernamee'");
  $count = mysqli_num_rows($resulto);
  if($count==1)
  {
    $rowo = mysqli_fetch_array($resulto,MYSQLI_ASSOC);
    $other_balance = $rowo['balance'];
    $my_balance = $my_balance - $amount;
    $other_balance = $other_balance + $amount;
    $online_limit = $online_limit - $amount;
    $online_no = $online_no - 1;
    $date = date("Y-m-d");
    $remarkm = "transfer to ".$account_noo;
    $remarko = "from ".$account_nom;
    $c = mysqli_multi_query($con, "update balance set balance = '$my_balance', online_limit = '$online_limit', online_no = '$online_no' where username = '$username'; update balance set balance = $other_balance where username = '$usernamee';");
    $s = mysqli_multi_query($connection, "INSERT INTO `$username` (date, remark, debit, credit, balance) VALUES('$date', '$remarkm', '$amount', '', '$my_balance'); INSERT INTO `$usernamee` (date, remark, debit, credit, balance) VALUES('$date', '$remarko', '', '$amount', '$other_balance');");
    if($c && $s) {header("refresh:0;url=success.html"); } else {echo "no";}
    }
  else {
    header("refresh:0;url=transferW.php");
  }
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

  <script>function validate() {
      var v = document.getElementById("amount").value;
      if(isNaN(v)) {
        document.getElementById("msg").innerHTML = "Should be a Number";
      }
      else {
        document.getElementById("msg").innerHTML = "";
      }
    }
</script>
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
  <img style="float:right; right:1" src="../img/lg.png" height="44" width="204.8">
  <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php" class="active"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>Transfer Money</h1></div>
  <br>
  <div><p style="color: red">Account Number do not Exist</p></div>
  <form action="" method="POST">
    <table width="40%">
      <tr>
        <td>
          <input type="text" name="usernamee" class="question" id="account_noo" required autocomplete="off" />
          <label for="account_noo"><span>Username</span></label>
        </td>
      </tr>
    </table>
    <table width="40%">
      <tr>
        <td>
          <input type="text" name="amount" class="question" id="amount" required autocomplete="off" />
          <label for="amount"><span>Amount(in Rs.)</span></label>
        </td>
      </tr>
    </table>
    <br>
    <table width="80%">
      <tr>
        <td align="right"><input type="submit" name="submit" value="PAY NOW" style="height: 40px; width: 150px; font-size: 20px; color: white; background-color: #4CAF50"></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>