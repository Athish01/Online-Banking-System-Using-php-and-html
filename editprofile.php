<?php
session_start();
$username = $_SESSION['sess_user'];
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
$state = $row['pcode2'];
$country = $row['country2'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $c = mysqli_query($con," update login set firstname = '.$firstname.', lastname = '.$lastname.', email = '.$email.', phone = '.$phone.', cad1 = '.$address1.', cad2 = '.$address2.', town2 = '.$city.', pcode2 = '.$state.', country2 = '.$country.', where username = '.$username.'");
  if($c) {header("refresh:0;url=profile.php"); } else { echo "no";}
}
?>
<html>
    <head>
        <link rel="stylesheet" href="response.css">
        
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
th,td{background-color: white;}
input{background-color: aqua;}

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
  <a href="profile.php" class="active"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>Edit Profile</h1></div>
  <form action="" method="POST">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="firstname" class="question" id="firstname" value="<?php echo $firstname ?>" required autocomplete="off" />
          <label for="firstname"><span>First Name*</span></label>
        </td>
        <td>
          <input type="text" name="lastname" class="question" id="lastname" value="<?php echo $lastname ?>" required autocomplete="off" />
          <label for="lastname"><span>Last Name*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="email" class="question" id="email" value="<?php echo $email ?>" required autocomplete="off" />
          <label for="email"><span>Email*</span></label>
        </td>
        <td>
          <input type="text" name="phone" class="question" id="phone" value="<?php echo $phone ?>" required autocomplete="off" />
          <label for="phone"><span>Mobile Number*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="address1" class="question" id="address1" value="<?php echo $address1 ?>" required autocomplete="off" />
          <label for="address1"><span>Address Line 1*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="address2" class="question" id="address2" value="<?php echo $address2 ?>" required autocomplete="off" />
          <label for="address2"><span>Address Line 2*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="city" class="question" id="city" value="<?php echo $city ?>" required autocomplete="off" />
          <label for="city"><span>City*</span></label>
        </td>
        <td>
          <input type="text" name="state" class="question" id="state" value="<?php echo $state ?>" required autocomplete="off" />
          <label for="state"><span>Pincode*</span></label>
        </td>
        <td>
          <input type="text" name="country" class="question" id="country" value="<?php echo $country ?>" required autocomplete="off" />
          <label for="country"><span>Country*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    
    <table width="80%">
      <tr>
        <td colspan="2" align="right" style="border-top: 1px solid white;"><input type="submit" name="submit" value="SUBMIT" style="height: 40px; width: 150px; color: white; background-color: #4CAF50"></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>