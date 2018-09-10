<html>
	<head>
		<title>Registration</title>
	
	<script type="text/javascript" >
	function validate() {
		var x=/^[a-zA-Z.' ']+$/;
		var y=/^[1]?[0-9]?[3]?[3]?[0-9]?[A|D|E]?[0-9]?[1-8]?[0-9|A|B|C|D|E|F|G|H]?[0-9]?$/;
		if(document.registration.name.value.match(x))
		{-
		;
		}
		else
		{
		alert("name doesnot contain special characters");
		return false;
		}
		if(document.registration.regdno.value.length!=10)
		{
		alert("invalid registration number");
		return false;
		}
		if(document.registration.regdno.value.match(y))
		{
		;
		}
		else
		{
		alert("invalid registration number");
		return false;
		}
		var d=document.registration.dob.value;
		var mydate=new Date(d);
		var today=new Date();
		if(mydate>today)
		{
		alert("date should not be greater than current date");
		return false;
		}
		if(isNaN(document.registration.phnum.value)){
			alert("enter valid phone number");	
			return false;	
		}
		if((document.getElementById('s').checked&&document.getElementById('s1').value==0)||(document.getElementById('c').checked&&document.getElementById('ic').value==0)||(document.getElementById('i').checked&&document.getElementById('ic').value==0))
		{
		alert("please enter the percentage");
		return false;
		}
		var Password = document.getElementById("Password").value;
        var ConfirmPassword = document.getElementById("ConfirmPassword").value;
        if (Password != ConfirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
	}
		</script>
|	</head>
		
		
		<body class="background" bgcolor="#FAD7A0">
		<img src="logo.png" width="400" height="100"/>
		</br></br>
		<form name="Registration" align="center"  method="POST" action="">

		<table align="center" border="0">
			<tr>
			<td>First Name:</td>
			<td><input type="text" name="FirstName" required/></td>
			</tr>
			<tr>
			<td>Last Name:</td>
			<td><input type="text" name="LastName" required/></td>
			</tr>
			<tr>
			<td>Registration Number:</td>
			<td><input type="text" name="RegistrationNumber" required/></td>
			</tr>
			<tr>
			<td>Phone Number:</td>
			<td><input type="text" name="PhoneNumber" required/></td>
			</tr>
			<tr>
			<td>Email:</td><td><input type="email" name="Email" required/></td>
			</tr>
			<tr>
			<td>Date of Birth:</td>
			<td><input type="date" name="DateOfBirth" placeholder="yyyy-mm-dd"  required/></td>
			</tr>
			<tr>
			<td>Gender:</td>
			<td><input type="radio" name="Gender" value="male" required>Male</input><input type="radio" name="Gender" value="female" required>Female</input></td>
			</tr>
			<tr>
			<td>Branch</td><td>
			<select name="Branch" id="btech" >
				<option value="0">--select--</option>
				<option value="cse">CSE</option>
				<option value="ece">ECE</option>
				<option value="eee">EEE</option>
				<option value="civil">CIVIL</option>
				<option value="mech">MECH</option>
				<option value="others">OTHERS</option>
			</select>
			</td>
			</tr>
			<td>Year Of Passing:</td>
			<td><input type="text"  name="YearOfPassing" required/></td>
			</tr>
			<tr>
			<td>Password:</td>
			<td><input type="password" name="Password" required/></td>
			</tr>
			<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="ConfirmPassword" required/></td>
			</tr>
			
 
		</table>
		<br>
        <input type="submit" class=" btn " value="Submit" name="Submit"/>
        </form>
	</body>
</html>
		

<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "FPT";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 

 
 
if(isset($_POST['Submit']))
{

$FirstName    = $_POST['FirstName'];
$LastName    = $_POST['LastName'];
$RegistrationNumber    = $_POST['RegistrationNumber'];
$PhoneNumber   = $_POST['PhoneNumber'];
$Email   = $_POST['Email'];
$DateOfBirth   = $_POST['DateOfBirth'];
$Gender   = $_POST['Gender'];
$Branch  = $_POST['Branch'];
$YearOfPassing  = $_POST['YearOfPassing'];
$Password= $_POST['Password'];
$ConfirmPassword= $_POST['ConfirmPassword'];

$query   = "INSERT into Registration VALUES('$FirstName','$LastName','$RegistrationNumber','$PhoneNumber','$Email','$DateOfBirth','$Gender','$Branch','$YearOfPassing','$Password','$ConfirmPassword')";
//echo $query;
$success = $conn->query($query);
 
 if($success)
 {
echo "Your Registration is Successful";
header('Location: StudentLogin.php');

 }			
}
 
mysqli_close($conn);
 
?>

