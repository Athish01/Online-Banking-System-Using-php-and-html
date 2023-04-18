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
$username = $_SESSION["sess_user"];
$con = mysqli_connect("localhost","root","","banking");
$result = mysqli_query($con, "SELECT * FROM login WHERE username = '$username'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$phone = $row['phone'];
$address1 = $row['cad1'];
$address2 = $row['cad2'];
$city = $row['town2'];
$pcode = $row['pcode2'];
$country = $row['country2'];
?>
<div class="topnav" id="myTopnav">
    <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
    <a href="profile.php" class="active"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
    <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
    <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
    <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
    <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
    
  </div>
  <br><br>
  <center style="background-color: white;">
    <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>My Profile</h1></div>
    <table cellpadding="10">
      <col width="400">
      <col width="600">
      <tr>
        <td colspan="2" align="right" style="border-top: 1px solid white;"><input type="button" name="changepwd" value="CHANGE PASSWORD" onclick="window.location.href='password/password.php'" style="height: 40px; width: 180px; color: white; background-color: #cc33ff"><input type="button" name="editprofile" value="EDIT PROFILE" onclick="window.location.href='editprofile.php'" style="height: 40px; width: 150px; color: white; background-color: #cc33ff"></td>
      </tr>
      <tr bgcolor="#ffffe6">
        <td><b>Name : </b></td>
        <td><?php echo $firstname . " " . $lastname ?></td>
      </tr>
      <tr>
        <td><b>Username : </b></td>
        <td><?php echo $username ?></td>
      </tr>
      <tr bgcolor="#ffffe6">
        <td><b>Email ID : </b></td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td><b>Phone Number : </b></td>
        <td><?php echo $phone ?></td>
      </tr>
      
      <tr bgcolor="#ffffe6">
        <td><b>Address : </b></td>
        <td><?php echo $address1 . " " . $address2 ?></td>
      </tr>
      <tr>
        <td><b>City : </b></td>
        <td><?php echo $city ?></td>
      </tr>
      <tr bgcolor="#ffffe6">
        <td><b>Pincode : </b></td>
        <td><?php echo $pcode ?></td>
      </tr>
      <tr>
        <td><b>Nationality : </b></td>
        <td><?php echo $country ?></td>
      </tr>
    </table>
    <br>
  </center>
  </body>
  </html>