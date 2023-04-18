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
    table td {border: 1px solid black; border-right: 1px solid white; border-left: 1px solid white}
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
                <?php
session_start();
$username = $_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","banking");
$resultb = mysqli_query($con, "SELECT * FROM balance WHERE username = '$username'");
$resultr = mysqli_query($con, "SELECT * FROM login WHERE username = '$username'");
$rowb = mysqli_fetch_array($resultb,MYSQLI_ASSOC);
$rowr = mysqli_fetch_array($resultr,MYSQLI_ASSOC);
$balance = $rowb['balance'];
$online_limit = $rowb['online_limit'];
$card_limit = $rowb['card_limit'];
$firstname = $rowr['firstname'];
$lastname = $rowr['lastname'];
?>
<body>

<div class="topnav" id="myTopnav">
  <a href="dashboard.php" class="active"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  
</div>
<br><br>
<h4 align="right" style="color: red; width: 95%"><mark>Welcome <?php echo $firstname . " " . $lastname ?></mark></h4>
<center style="background-color: white;">
<br><table >
  <col width="869">
  <tr>
    <td>
      <h2 align="center">My Bank Account</h2>
    </td>
  </tr>
</table>
<br>
<table bgcolor="#ffe6e6" cellspacing="80">
  <tr>
    <td>
      <table style="border-collapse: collapse; border: 1px solid black">
        <col width="80">
        <col width="200">
        <tr>
          <td><img src="../img/d1.jpg" height="110px"; width="110px"></td>
          <td ><center><h4>My Balance</h4><p id="balance">Rs. <?php echo $balance ?></p></center></td>
        </tr>
      </table>
    </td>
    <td>
      <table style="border-collapse: collapse; border: 1px solid black">
        <col width="80">
        <col width="200">
        <tr>
          <td><img src="../img/d2.jpg" height="110px"; width="110px"></td>
          <td ><center><h4>Total Limit</h4><p id="tlimit">Rs. <?php echo $online_limit + $card_limit ?></p></center></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
      <table style="border-collapse: collapse; border: 1px solid black">
        <col width="80">
        <col width="200">
        <tr>
          <td><img src="../img/d3.jpg" height="110px"; width="110px"></td>
          <td ><center><h4>Online Transaction Limit</h4><p id="olimit">Rs. <?php echo $online_limit ?></p></center></td>
        </tr>
      </table>
    </td>
    <td>
      <table style="border-collapse: collapse; border: 1px solid black">
        <col width="80">
        <col width="200">
        <tr>
          <td><img src="../img/d4.jpg" height="110px"; width="110px"></td>
          <td ><center><h4>Card Limit</h4><p id="climit">Rs. <?php echo $card_limit ?></p></center></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br><br>
</center>
</body>
</html>