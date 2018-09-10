<html>
<head>
<title>
STUDENT_FEE PRINT PAY
</title>
<style>			.background{
						background-image:url("mvgr1.jpg");
						background-repeat:no-repeat;
						background-size:cover;
						background-position:center;
						<!--opacity: 0.4;//-->
					}
					.button {
  padding: 10px 15px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000;
  background-color:#E5E8E8;
  border: none;
  border-radius: 5px;
  box-shadow: 0 9px #707B7C;
}

.button:hover {background-color: #CD6155}

.button:active {
  background-color: #C0392B;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

</head>
<body style=" font-size:30;"class="background">
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
?>
</br></br></br>
<button class="button"><a href="Studentfeepaycard.php">Pay by Credit Card</a></button>
</br></br>
[OR]</br></br>
<button class="button"><a href="">Pay by Debit Card</a></button>
</br></br>
[OR]</br></br>
<button class="button"><a href="">Pay by Cash</a></button>
]</br></br>
</br></br>
</form>
</body>
</html>