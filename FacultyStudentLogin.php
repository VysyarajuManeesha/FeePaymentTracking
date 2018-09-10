<HTML>
<HEAD>
<TITLE>
FACULTY_STUDENT_LOGIN
</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{

	background-image:url("images1.jpg");
	background-repeat:no-repeat;
	background-size:700px 520px;
	background-position:center;
}
.button {
  padding: 10px 15px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: white;
  background-color:#972737;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #707B7C;
}

.button:hover {background-color: red}

.button:active {
  background-color: orange;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.tb7 {
	width: 221px;
	color : #000000;
	height:25px;
	border:0;
	padding:4px 8px;
	margin-bottom:0px;
}
</style>
</HEAD>
<BODY></br></br></br></br></br></br></br></br></br>
<FORM ALIGN="CENTER" method="post" action="Facultyfeedetails.php">
STUDENT REGISTRATION NO.
<INPUT class="tb7"TYPE="TEXT" name="RegistrationNumber1" required/></BR></br></br>
<INPUT class="button" TYPE="SUBMIT"/>
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
header('Location: Facultyfeedetails.php');
}
else{
$fmsg = "Invalid Registration Number.";
echo $fmsg;
}
}
?>