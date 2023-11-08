<?php
	session_start();

    /*$sql = "SELECT firstname FROM users (firstname, password)";
	$select = $db -> prepare($sql);
	$result = $stmtinsert -> execute([$firstname, $lastname, $dob, $address, $email, $phonenumber, $password, $cnfrmpwd]);*/






	
	/*if($_SERVER["REQUEST_METHOD"]== "POST")
	{
		$username = $_POST["uname"];
		$password = $_POST["pwd"];
		
		if($username == ($sql="SELECT firstname FROM users") && $password == ($sql="SELECT password FROM users"))
		{
			$_SESSION['logged_user'] = $username;
			header("location:index.html");
		}
		else
		{
			echo "<script> alert('You have entered a wrong username or password')</script>";
		}
	}*/



    if($_SERVER["REQUEST_METHOD"]== "POST")
	{
		$username = $_POST["uname"];
		$password = $_POST["pwd"];
		
		if($username == "Dilanka" && $password == "Dilanka")
		{
			$_SESSION['logged_user'] = $username;
			header("location:index.html");
		}
		else
		{
			echo "<script> alert('You have entered a wrong username or password')</script>";
		}
	}


?>










<!DOCTYPE html>
<html>
<head>	
	<title>Cloud Recruitment</title>
	<link rel="stylesheet" href="styles/login.css">
</head>
<body>

    <div class="bg">
	
	<nav>
        <a href="#"><img src="image/logo.png" alt="Recruitment image" class="logo"></a>
        <ul class="nav-links">
            <li><a href="">Home</a></li>
            <li><a href="">Jobs</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About Us</a></li>
            <a href="register.php"><li class="btn">Sign Up</li></a>
        </ul>
    </nav>



    <center>
	<div class="font-style-6">
	<h1>Login with us</h1>
	<form method="POST" action="login.php">
		<input type="text" id="uname" name="uname" placeholder="Your Username..."/>
		<input type="password" id="pwd" name="pwd" placeholder="Your Password..."/>
		<br/><br/>
		<input type="submit" value="Login"/><br><br>
	</form>
	</div>
	</center>
















	<footer class="page-footer">
        <div class="row">
            <div class="col">
                <a href="#"><img src="image/logo1-01.png" alt="Recruitment image" class="flogo"></a>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit repellat dolorem, ad hic tempora aperiam debitis voluptates ipsum non, aliquam in commodi, rerum iusto! Expedita ut autem minima corrupti natus?</p>
            </div>
            
            <div class="col">
                <h3>office <div class="underline"><span></span></office></div></h3>
                <p><br>"SLIIT"</p>
                <p>New Kandy Rd,</p>
                <p>Malabe,</p>
                <p>Sri Lanka</p>
                <p class="email">sliitmalabe@gmail.com</p>
                <h4>+94 71 241 3634</h4>
            </div>

            <div class="col">
                <h3>Links<div class="underline"><span></span></office></div></h3>
                <ul>
                    <li><a href=""><br>Home</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Contacts</a></li>
                </ul>
            </div>

            <div class="col">
                <h3>Newsletter<div class="underline"><span></span></office></div></h3>
                <form>
                    <br><input type="email" placeholder="Enter your email" required>
                    <input type="submit" value="submit">
                </form>
                <div class="social-icon">
                    <a href="https://www.facebook.com/"><img src="image/facebook.png"></a>
                    <a href="https://www.youtube.com/"><img src="image/youtube.png"></a>
                    <a href="https://www.whatsapp.com/"><img src="image/whatsapp.png"></a>
                    <a href="https://www.instagram.com/"><img src="image/instagram.png"></a>
                    <a href="https://www.teitter.com/"><img src="image/twitter.png"></a>
            </div>

            </div>
            <hr>
            <p class="cpy">Copyright © 2022 SLIIT All Rights Reserved</p>
    </footer>


</div>
</body>
<div style="margin-top: 100px;"></div>
</html>