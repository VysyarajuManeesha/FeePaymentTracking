
 <html>
<head>
<title>FACULTY_FEE DETAILS</title>
<style>
.btn {
  background:green;
  
  border-radius: 20px;
  font-family: Arial;
  color: yellow;
  font-size: 12px;
  font-style:bold;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-left:1200px;
  margin-bottom:-10px;
  height:35px;
  width:100px;
  top:50px;
  position:relative; 
  
  
}

</style>
</head>
<body bgcolor="pink">
</br>
<a href="logout.php"> 
<div>
<input  type="button" class="btn" value="LOGOUT">
</div></a>
<?php session_start();
$user=$_POST['RegistrationNumber1'];
$_SESSION['RegistrationNumber1']=$user;
echo "WELCOME ,<b> ".$user."</b>";

$connection = mysqli_connect('localhost', 'root', '');

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'FPT');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$query= "SELECT FirstName,LastName,PhoneNumber,Email,DateOfBirth,Gender,Branch,YearOfPassing FROM Registration where RegistrationNumber='$user'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//echo $count;
if ($count > 0) {
	
    echo "</br></br></br></br></br><table><tr><th>FirstName&nbsp;&nbsp;&nbsp;&nbsp;</th><th>LastName&nbsp;&nbsp;&nbsp;&nbsp;</th><th>PhoneNumber&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Email&nbsp;&nbsp;&nbsp;&nbsp;</th><th>DateOfBirth&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Gender&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Branch&nbsp;&nbsp;&nbsp;&nbsp;</th><th>YearOfPassing&nbsp;&nbsp;&nbsp;&nbsp;</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        echo "<tr><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Email"]."</td><td>".$row["DateOfBirth"]."</td><td>".$row["Gender"]."</td><td>".$row["Branch"]."</td><td>".$row["YearOfPassing"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$query1= "SELECT * FROM Fee where RegistrationNumber='$user'";
$result1 = mysqli_query($connection, $query1) or die(mysqli_error($connection));

$count1 = mysqli_num_rows($result1);
//echo $count;
if ($count > 0) {
    echo "</br></br></br></br></br><table><tr><th>Regd No.&nbsp;&nbsp;</th><th>Tuition&nbsp;&nbsp;</th><th>Miscellaneous	&nbsp;&nbsp;</th><th>Transport&nbsp;&nbsp;</th><th>	TP&nbsp;&nbsp;</th><th>Hostel&nbsp;&nbsp;</th><th>TuitionFeePaid&nbsp;&nbsp;</th><th>MiscFeePaid	&nbsp;&nbsp;</th><th>TransportFeePaid	&nbsp;&nbsp;</th><th>	TPFeePaid&nbsp;&nbsp;</th><th>HostelFeePaid&nbsp;&nbsp;</th><th>Scholarship&nbsp;&nbsp;</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_array($result1)) {
        echo "<tr><td>".$row["RegistrationNumber"]."</td><td>".$row["TuitionFee"]."</td><td>".$row["MiscellaneousFee"]."</td><td>".$row["TransportFee"]."</td><td>".$row["TPFee"]."</td><td>".$row["HostelFee"]."</td><td>".$row["TuitionFeePaid"]."</td><td>".$row["MiscellaneousFeePaid"]."</td><td>".$row["TransportFeePaid"]."</td><td>".$row["TPFeePaid"]."</td><td>".$row["HostelFeePaid"]."</td><td>".$row["Scholarship"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($connection);
?>


 
<form align="center">
</br></br></br></br></br></br>

</form>
</body>
</html>
