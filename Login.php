<html>
    <head>
        <link rel="stylesheet" href="response.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="register.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
            .form{
                border: solid black;
                width:650px;
                height:200px;
                position:absolute;
                margin-top: 11%;
                left:28%;
                border-radius: 20px;
                background-color: rgba(246, 242, 242, 0.252);

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
            <a href="register.html" style="float: right"><i class="fa fa-fw fa-sign-in "></i>Sign Up</a> 
        </div>
        <br>
        <div class="form">
        <h1 style="text-align:center" ><br>

<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con = mysqli_connect('localhost', 'root', '', 'banking');  
$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($con, $username);  
$password = mysqli_real_escape_string($con, $password);  

$sql = "select *from login where username = '$username' and password = '$password'";  
$result = mysqli_query($con, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){  
    session_start();  
    $_SESSION["sess_user"]=$username;  
    header("Location: profile.php");  
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     
?>
</h1>
<br>
<h4 style="text-align:center">Click here to <a href="login.html">Login</h4></div>
</body>
</html>