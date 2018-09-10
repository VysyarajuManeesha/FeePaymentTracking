<html>
<head>
<title>
ADMIN_FEE PRINT AMOUNT
</title>
<style>			.background{
						background-image:url("mvgr1.jpg");
						background-repeat:no-repeat;
						background-size:cover;
						background-position:center;
						}
.button {
 border-radius: 2px;
 background-color:#E96A58 ;
 border: none;
 color: #FFFFFF;
 text-align: center;
 font-size: 16px;
 padding: 12px;
 width: 100px;
 transition: all 0.5s;
 cursor: pointer;
 margin: 5px;
}

.button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.5s;
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
<body style=" font-size:30;"class="background">
<a href="logout.php"> 
<div>
<input  type="button" class="btn" value="LOGOUT">
</div></a>

 
<form align="center">
<b><i>Total Fee you wish to pay:</i><u><?php
session_start();
 $user=$_SESSION['RegistrationNumber1'];
$TuitionFeePaid=$_POST['TuitionFeePaid'];
$MiscellaneousFeePaid=$_POST['MiscellaneousFeePaid'];
$TransportFeePaid=$_POST['TransportFeePaid'];
$TPFeePaid=$_POST['TPFeePaid'];
$HostelFeePaid=$_POST['HostelFeePaid'];
echo $TuitionFeePaid+$MiscellaneousFeePaid+$TransportFeePaid+$TPFeePaid+$HostelFeePaid;
echo "</u>";


$connection = mysqli_connect('localhost', 'root', '');

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'FPT');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$query   = "UPDATE Fee SET TuitionFeePaid=TuitionFeePaid+'$TuitionFeePaid',MiscellaneousFeePaid=MiscellaneousFeePaid+'$MiscellaneousFeePaid',TransportFeePaid=TransportFeePaid+'$TransportFeePaid',TPFeePaid=TPFeePaid+'$TPFeePaid',HostelFeePaid=HostelFeePaid+'$HostelFeePaid' WHERE RegistrationNumber='$user'";
//echo $query;
$success = $connection->query($query);
 
 if($success)
 {
echo "</br><h3>Paid fee is successfully updated in database</h3>";

 }			

 
mysqli_close($connection);




?></b>
</br></br></br>
<input class="button" value="Get_Print"/>
</form>
</body>
</html>

