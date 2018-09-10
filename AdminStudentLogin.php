<HTML>
<HEAD>
<TITLE>
ADMIN_STUDENT_LOGIN
</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

	background-image:url("i.jpeg");
	background-repeat:no-repeat;
	background-size:cover;
	background-position:center;
}
.button {
  padding: 10px 15px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000;
  background-color:#2980B9;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #707B7C;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.tb7 {
	width: 221px;
	background: transparent url('images/bg.jpg') no-repeat;
	color : #747862;
	height:20px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
.tb8 {
	width: 230px;
	border: 1px solid #3366FF;
	border-left: 4px solid #3366FF;
}
.tb6 {
	border: 3px double #CCCCCC;
	width: 230px;
}
.tb5 {
	border:2px solid #456879;
	border-radius:10px;
	height: 28px;
	width: 230px;
}
</style>
</HEAD>
<BODY style="font-family:Forte;font-size:26;" class="background">
<FORM ALIGN="CENTER" method="post" action="Adminfeedetails.php">
</br></br></br></br>
STUDENT REGISTRATION NO.
<INPUT class="tb5" TYPE="TEXT" name="RegistrationNumber1" required/></BR></br></br></br></br></br>
<button class="button" style="font-family:Forte;" type="submit">Submit</button>
</FORM>
</BODY>
</HTML>



<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '');

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'FPT');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}


if(isset($_POST['RegistrationNumber1']))
{
$RegistrationNumber2=$_POST['RegistrationNumber1'];

$query = "SELECT * FROM Registration where RegistrationNumber='$RegistrationNumber2'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
$_SESSION['RegistrationNumber1'] = $RegistrationNumber2;
echo "success";
header('Location: Adminfeedetails.php');
}
else{
$fmsg = "Invalid Registration Number.";
echo $fmsg;
}
}
?>