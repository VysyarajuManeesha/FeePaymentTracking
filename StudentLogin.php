<HTML>
<HEAD>
<TITLE>
STUDENT_LOGIN
</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.back{
	isplay: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 450px;
    height: 450px;
    margin: auto;
	background-color:#F6DDCC;;
	background-size:450px 450px;
}
.button {
  border-radius:8px;
  background-color: #993333;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  text-shadow: 2px 3px #558ABB;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</HEAD>
<BODY>
<div class="back">
<FORM ALIGN="CENTER" method="post" action="">
</br>
<label style="color:#993333;font-family:Lucida Handwriting ;font-size:200%;text-align:center;"><i>LOGIN</i></label>
</br></br></br></br>
<table align="center">
<tr>
<td>REGISTRATION NUMBER:</td>
<td><INPUT TYPE="TEXT" name="RegistrationNumber" required/></td>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD:</td>
<td><input type="password" name="Password" required/></td>
</tr>
</table>
<br></br></br>
<button class="button" type="submit"><span>Submit</span></button>
<br><br>
<a href="Registration.php"><font size="1">If you are a new user</font></a>
</FORM>
</div>
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


if(isset($_POST['RegistrationNumber']) and isset($_POST['Password']))
{
$RegistrationNumber=$_POST['RegistrationNumber'];
$Password=$_POST['Password'];
$query = "SELECT * FROM Registration where RegistrationNumber='$RegistrationNumber' and Password='$Password'";
//echo $query; 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

$count = mysqli_num_rows($result);
//echo $count;

if ($count == 1){
$_SESSION['RegistrationNumber'] = $RegistrationNumber;

echo "success";
header('Location: Studentfeedetails.php');
}else{

$fmsg = "Invalid Login Credentials.";
echo $fmsg;
}
}

?>
