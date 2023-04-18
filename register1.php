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
if (isset($_POST['title'])) {
    $title=$_POST['title'];
  }
  else{
    $title=NULL;
  }
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
if (isset($_POST['middlename'])) {
    $middlename=$_POST['middlename'];
  }
  else{
    $middlename=NULL;
  }
$middlename=$_POST['middlename'];
$phone=$_POST['phone'];
$email=$_POST['mail'];
$DOB=$_POST['DOB'];
$account=$_POST['accountt'];
$cad1=$_POST['cad1'];
if (isset($_POST['cad2'])) {
    $cad2=$_POST['cad2'];
  }
  else{
    $cad2=NULL;
  }
$town1=$_POST['town'];
$country1=$_POST['country'];
$pcode1=$_POST['pcode'];
$pad1=$_POST['pad1'];
if (isset($_POST['pad2'])) {
    $pad2=$_POST['pad2'];
  }
  else{
    $pad2=NULL;
  }
$town2=$_POST['town2'];
$pcode2=$_POST['pcode2'];
$usernames=$_POST['uname'];
$passwords=$_POST['pword'];
$country2=$_POST['country2'];
$conn = new mysqli("localhost", "root", "", "banking");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $query=mysqli_query($conn,"SELECT * FROM login WHERE username='".$usernames."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
  $sql = "insert into login values('$title', '$firstname', '$middlename', '$lastname', '$phone', '$email', '$DOB', '$account', '$cad1', '$cad2','$town1','$country1','$pcode1','$pad1','.$pad2','$town2','$country2', '$pcode2', '$usernames', '$passwords' )";
  if ($conn->query($sql) === TRUE) {
    echo "Registered Successfully...";
  } else {
    echo "Error creating table: " . $conn->error;
  }}
  
  $conn->close();
  $connection = new mysqli("localhost","root","","transactions");

  $trans = "CREATE TABLE $usernames (
    dates varchar(10),
    remarks varchar(200),
    debit int(6) ,
    credit int(6) ,
    balance int(8)
  )";
  $connection->query($trans);
?>
</h1>
<br>
<h4 style="text-align:center">Click here to <a href="login.html">Login</h4></div>
</body>
</html>