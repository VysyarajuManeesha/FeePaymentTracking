<html>
<head>
<title>
STUDENT_FEE PAY CARD
</title>
</head>
<style>
body  
{
	  background-color:gray;
}
.button{
	background-color:blue;
	color:white;
}


</style>
<body>

<form align="center" action="Studentfeepaycvv.php">
<textarea v-model="message" placeholder="Enter Card No"></textarea></br></br>
<textarea v-model="message" placeholder="valid upto"></textarea></br></br>
<textarea v-model="message" placeholder="Card Holder Name"></textarea></br></br>
<textarea v-model="message" placeholder="Card Type"></textarea></br></br>
<textarea v-model="message" placeholder="CVV"></textarea></br></br>
<input class="button" type="submit" value="PAY"/>
</form>
</body>
</html>