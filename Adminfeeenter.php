<html>
<head>
<title>
ADMIN_FEE ENTER
</title>
</head>
<style>
body{

	background-image:url("p.jpg");
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
  color: #FFF9C4  ;
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

.tb6 {
	border: 3px double #CCCCCC;
	width: 170px;
}

</style>
<body>
<?php
 session_start();

 ?>
<form align="center" method="post" action="Adminfeeprintamount.php">
<table align="center">
<tr><td>Tuition Fee</td><td><input CLASS="tb6" type="text" name="TuitionFeePaid" required/></td></tr>
<tr><td>Miscellaneous Fee</td><td><input class="tb6" type="text" name="MiscellaneousFeePaid" required/></td></tr>
<tr><td>Transport Fee</td><td><input CLASS="tb6" type="text" name="TransportFeePaid" required/></td></tr>
<tr><td>TP Fee</td><td><input CLASS="tb6" type="text" name="TPFeePaid" required/></td></tr>
<tr><td>Hostel Fee</td><td> <input CLASS="tb6" type="text" name="HostelFeePaid" required/></td></tr>
</table></br>
<center><input class="button" type="submit"/></center>
</form>
</body>
</html>
