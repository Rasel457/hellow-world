<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<body>




	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<p>Basic Information:</p>
		<label for="firstname">First Name :</label> 
		<input type="txt" id="firstname" name="fname" value="<?php echo $firstName;?>">
		<br><br>
		<label for="lastname">Last Name :</label> 
		<input type="txt" id="lastname" name="lname">
		<br><br>
		<label>Gender:</label>
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="female">
		<label for="female">Female</label>
		<br><br>
		<label for="email">Email:</label>
        <input type="email" id="EmailId" name="email">
        <br><br>
		

		<p>User Account Information:</p>
		<label for="user">User Name :</label> 
		<input type="txt" id="username" name="uname">
		<br><br>
		<lable for="pass">Passwod :</lable>
		<input type="password" name="password" id="password">
		<br><br>
		<label for="email">Recovary Email:</label>
        <input type="email" id="recEmailId" name="recemail">
        <br><br>
        <input type="Submit" value="Submit">
        <br>
    </form>


    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
         if(empty ($_POST['fname']) || empty($_POST['lname'])||empty($_POST['gender'])||empty($_POST['email'])||empty($_POST['uname'])||empty($_POST['password'])||empty($_POST['recemail'])){
         	echo "<h2>Fill up the from properly</h2>";
         }
         else{
         	$firstName=$_POST['fname'];
	        $lastName=$_POST['lname'];
	        $gender=$_POST['gender'];
	        $email =$_POST['email'];
	        $user=$_POST['uname'];
	        $password=$_POST['password'];
	        $Remail=$_POST['recemail'];
	        echo "<h2>Successfull</h2>";
	        echo "Firset Name:  $firstName "."<br>";
	        echo "Last Name:  $lastName "."<br>";
	        echo"Gender:  $gender" ."<br>";
	        echo"Email:  $email" ."<br>";
	        echo"User Name:  $user" ."<br>";
	        echo "Password:  $password" ."<br>"; 
	        echo"Recovary Email:  $Remail" ."<br>";
	      /*  $W=fopen("Information.txt","a");
	        fwrite($W,$firstName ." " .$lastName ."\n" .$gender."\n");
	        fwrite($W,$email."\n");
	        fwrite($W,$user."\n");
	        fwrite($W,$password ."\n");
	        fwrite($W,$Remail."\n");*/
        }
		
	}?>


        

    

    

	

</body>
</html>