<html>
<head>
<title>
STUDENT_FEE ENTER
</title>
</head>
<style>
body{

						background-image:url("p.jpg");
						background-repeat:no-repeat;
						background-size:cover;
						background-position:center;
						}

.tb6 {
	border: 3px double #CCCCCC;
	width: 230px;
}

.button{
	background-color:pink;
	width:75px;
	height:30px;
	color:green;
	font-size:15px;
	font-weight:bold;-
	text-shadow:4px 2px yellow;
}

</style>
<body>
<?php
 session_start();

 ?>

<form align="center" method="post" action="Studentfeeprintpay.php">
<table align="center">
<tr><td>Tuition Fee</td><td><input CLASS="tb6" type="text" name="TuitionFeePaid" required/></td></tr>
<tr><td>Miscellaneous Fee</td><td><input class="tb6" type="text" name="MiscellaneousFeePaid" required/></td></tr>
<tr><td>Transport Fee</td><td><input CLASS="tb6" type="text" name="TransportFeePaid" required/></td></tr>
<tr><td>TP Fee</td><td><input CLASS="tb6" type="text" name="TPFeePaid" required/></td></tr>
<tr><td>Hostel Fee</td><td> <input CLASS="tb6" type="text" name="HostelFeePaid" required/></td></tr>
</table></br>
</br>
</br>
<center><input class="button" type="submit" value="Proceed"/></center>
</form>
</body>
</html>