<?php
	require_once ('config.php');
?>


<!DOCTYPE html>
<html>
<head>	
	<title>Cloud Recruitment</title>
	<link rel="stylesheet" href="styles/register.css">

	<script src="js/register.js"></script>
</head>


<body>

<div>
		<?php
			if (isset($_POST['create'])) {
				
				$firstname 	 = $_POST['firstname'];
				$lastname 	 = $_POST['lastname'];
                $dob         = $_POST['dob'];
                $address     = $_POST['address'];                
				$email 		 = $_POST['email'];
				$phonenumber = $_POST['phonenumber'];
				$password 	 = $_POST['password'];
                $cnfrmpwd    = $_POST['cnfrmpwd'];



                /*$password 	 = $_POST['password'];
                $cnfrmpwd    = $_POST['cnfrmpwd'];*/

                if($password == $cnfrmpwd)
                {
                    echo "<script> alert('Password matched')</script>";
                }
                else
                {
                    echo "<script> alert('Password not matched')</script>";
                }


                /*$sql = "CREATE DATABASE user_details";
                $sql = "CREATE TABLE users (id PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(50), lastname VARCHAR(50), dateofbirth DATE, address VARCHAR(300), email VARCHAR(100), phonenumber NUMBER, password VARCHAR(50), confirmpassword VARCHAR(50));";*/
				$sql = "INSERT INTO users (firstname, lastname, dateofbirth, address, email, phonenumber, password, confirmpassword) VALUES(?,?,?,?,?,?,?,?)";
				$stmtinsert = $db -> prepare($sql);
				$result = $stmtinsert -> execute([$firstname, $lastname, $dob, $address, $email, $phonenumber, $password, $cnfrmpwd]);
                

				if($result)
				{
					echo "<script> alert('Successfully saved')</script>";
				}
				else
				{
					echo "<script> alert('There were errors while the data')</script>";
				}
	
			}
		?>
	</div>





<div>
    <?php
        /*$password 	 = $_POST['password'];
        $cnfrmpwd    = $_POST['cnfrmpwd'];

        if($password == $cnfrmpwd)
        {
            echo "<script> alert('matched')</script>";
        }
        else
        {
            echo "<script> alert('not matched')</script>";
        }*/
    ?>
</div>












	
	<nav>
        <a href="index.html"><img src="image/logo.png" alt="Recruitment image" class="logo"></a>
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Jobs</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About Us</a></li>
            <a href="#"><li class="btn">Sign Up</li></a>
        </ul>
    </nav>

    

<!--<div class="frm">
	<form class="reg" method="post" action="submit.php" onsubmit="return checkPassword()">
    
		<center><h2>Registration Form</h2></center><br>
	
		First Name<br>
		<input type="text" required placeholder="first name" name="firstname" value="First name"><br> <br>
	
		Last Name<br>
		<input type="text" required placeholder="last name" name="lastname" value="Last name"><br><br>
        Gender<br>
		<input type="radio" required name="gender" value="Male"> Male<br>
		<input type="radio" required name="gender" value="Female"> Female<br><br>
	
		Mobile Number<br>
		<input type="phone" required pattern="[0-9]{10}" title="enter 10 digits" name="mobile"><br><br>
	
		Email<br>
		<input type="email" name="email" required><br><br>
	
		Address<br>
		<textarea rows="8" cols="50" required name="address"></textarea><br><br>
	
		Date of Birth<br>
		<input type="date" min="1995-01-01" max="2005-12-31" required name="day"><br><br>
	
		Password<br>
		<input type="password" id="pwd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, at minimum 5 and maximum 10 characters "><br><br>
	
		Re-enter Password<br>
		<input type="password" id="cnfrmpwd" required><br><br>
	
		<input type="checkbox" id="chkTerms" onclick="AcceptTerms()" required> Accept privacy policy and terms
	
	
	
	
	
	
	
		<br><br><center><input type="submit" value="submit" id="subReg" disabled></center>
	</form>
</div>-->





<div class="regform">
		<form action="register.php" method="post">
			<div class="container">

				<div class="row">

					<div class="col-sm-3">

						<h1>Registration</h1>
						<p>Fill up the form with correct values</p>

						<hr class="mb-3"><br>

						<label for="firstname">First Name</label><br>
						<input class="form-control" type="text" name="firstname" required><br><br>

						<label for="lastname">Last Name</label><br>
						<input class="form-control" type="text" name="lastname" required><br><br>

                        <label for="address">Address</label><br>
                        <textarea class="form-control" rows="8" cols="50" required name="address"></textarea><br><br>

						<label for="email">Email</label><br>
						<input class="form-control" type="email" name="email" required><br><br>

						<label for="phonenumber">Phone Number</label><br>
                        <input class="form-control" type="phone" pattern="[0-9]{10}" title="enter 10 digits" name="phonenumber" required><br><br>
						
                        <label for="dob">Date of Birth</label><br>
                        <input class="form-control" type="date" min="1995-01-01" max="2005-12-31" required name="dob"><br><br>

						<label for="password">Password</label><br>
						<input class="form-control" type="password" name="password" required><br><br>

                        <label for="checkAgainPassword">Re-enter Password</label><br>
		                <input type="password" id="cnfrmpwd" name="cnfrmpwd" required><br><br>
	
		                <input type="checkbox" id="chkTerms" onclick="AcceptTerms()" required> Accept privacy policy and terms

						<hr class="mb-3"><br>

						<center><input class="btn-primary" type="submit" name="create" value="Submit" id="subReg" disabled></input></center>

					</div>

				</div>
			</div>
			
		</form>
	</div>
















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



</body>
<div style="margin-top: 100px;"></div>
</html>