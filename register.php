

<html>
<head>
<style>

ul {
padding:0px;
margin:0px;
}
ul li a{
text-decoration:none;
color:white;
display:block;
}
ul li{
margin-top:0px;
float:left;
heigth:40px;
width:290px;
background-color:gray;
text-align:center;
font-size:35px;
position:relative;

}
ul li:hover{
background-color:blue;
}
ul li ul li{
display:none;
}
ul li:hover ul li{
display:block;
}
	
body
{
background-image:url("image/abstract-background-blur-255377.jpg")
background-repeat:no-repeat;
background-size:cover;
background-position:center;
}

</style>
</head>
<body background="background/2.jpg">
<img src="images/1.gif"height="150"width="1450"style="margin-left:20px">
<ul style="list-style-type:none;margin-left:20px;font-size:20px;">
<a href="register.php"><li style="height:50px;">Registration</a>
<a href="log.php"><li style="height:50px">Login</a>
<a href="Myshop.php"><li style="height:50px;">Home</a></li>

<a href="Brand.php"><li style="height:50px;">Mobiles</a>
	

<a href="Contactus.php"><li style="height:50px;">Contacts</a>

</li>
</ul>
<br>																										







<form  action="register.php" method="post">
<center>
<div style="height:500px;width:1450px;margin-top:30px;background-color:skyblue;margin-left:6px;">

 

		<img src="images/download.jpg"height="100";width="100" style="margin-top:5px;border-radius:80px;"><br><br>
	
			<label style="margin-left:10px">Name</label>
			<input type="text" name="username" value=""/ style="margin-top:-19px;margin-left:40px;"><br><br>
			<label style="margin-left:10px">Password </label>
			<input type="Password" name="password" value=""/ style="margin-top:-19px;margin-left:20px;"><br><br>
			<label style="margin-left:10px">Email:</label>
			<input type="email" name="email" value=""/ style="margin-top:-19px;margin-left:40px;"><br><br>
			<label style="margin-left:-35px">PhoneCode:</label>
            <select name="phoneCode" style="margin-top:-19px;margin-left:40px;">
				<option selected hidden value="">Select Code</option>
		        <option value="+91">+91</option>
		        <option value="90">90</option>
		        <option value="978">978</option>
		    </select><br><br>
			<label style="margin-left:10px">Phone No.<label>
		    <input type="phone" name="phone" style="margin-top:-19px;margin-left:20px;"><br><br>
			<label style="margin-left:-75px">Gender:</label>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female<br><br>
	        <input type="submit" name="submit" value="submit">


</div></center>
</form>








<div style="height:150px;width:1450px;margin-top:-40px;background-color:gray;margin-left:20px;">


<div style="height:100px;width:200px;margin-top:40px;margin-left:80px;color:white;">
<h1 align="center"style="margin-top:-10px;">contacts</h1>
<p align="center"style="margin-top:-10px;">+91 83510-01844</p>
<p align="center"style="margin-top:-5px;">+91 86290-14355</p>
</div>


<div style="height:100px;width:250px;margin-top:-106px;margin-left:400px;color:white;">
<h1 align="center"style="margin-top:5px;">E mail</h1>
<p align="center"style="margin-top:-10px;">sharmajitender154@gmail.com</p>
<p align="center"style="margin-top:-5px;">akshitbahari3@gmail.com</p></div>

<div style="height:100px;width:500px;margin-top:-106px;margin-left:790px;color:white;">
<h1 align="center"style="margin-top:5px;">Address</h1>
<p align="center"style="margin-top:-10px;">Vill.Lovanpur,P.O.Baroti,Teh.Dharampur,Distt.Mandi(HP)175040</p>
<p align="center"style="margin-top:-5px;">Vill.Natehar,P.O.Kangra,Teh.&Distt.Kangra(HP)176001</p></div>

</div>






</body>
</html>
<?php

include('database.php');
if(isset($_POST["submit"])){
	
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phoneCode=$_POST['phoneCode'];
$phone=$_POST['phone'];

$conn=mysql_query("INSERT INTO login(`username`,`password`,`gender`,`email`,`phoneCode`,`phone`) VALUES('$username','$password','$gender','$email','$phoneCode','$phone')")or die(mysql_error());
if($conn)
{
	echo 'data enter';
}
else
{
	echo 'not enter';
}
}
?>
	
	


