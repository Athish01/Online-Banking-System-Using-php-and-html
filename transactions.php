<?php
session_start();
$username = $_SESSION['sess_user'];
$con = mysqli_connect("localhost","root","","transactions");
$result = mysqli_query($con, "SELECT * FROM `$username`");
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
td,th{background-color: white;}

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
                <div class="topnav" id="myTopnav">
  <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php" class="active"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>My Transaction</h1></div>
  <br><br>
  <table cellpadding="5" width="80%">
    <tr>
      <th align="center">Transaction Date</th>
      <th align="center">Transaction Remarks</th>
      <th align="center">Debit</th>
      <th align="center">Credit</th>
      <th align="center">Account Balance</th>
    </tr>
    <?php
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      while ($row) {
        if($row['debit']) {
          echo "<tr><td align=\"center\">".$row['date']."</td><td align=\"center\">".$row['remark']."</td><td align=\"center\">".$row['debit']."</td><td></td><td align=\"center\">".$row['balance']."</td></tr>";
        }
        else {
          echo "<tr><td align=\"center\">".$row['date']."</td><td align=\"center\">".$row['remark']."</td><td></td><td align=\"center\">".$row['credit']."</td><td align=\"center\">".$row['balance']."</td></tr>";
        }
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      }
    ?>
  </table>
</center>
</body>
</html>