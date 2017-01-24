<?php 

//session_start();
if(isset($_POST['submit'])){
	if(empty($_POST['email'])||empty($_POST['password'])){
		echo "Enter an email address or Password ";
	}else {
		if(!(valid_pass($_POST['password']))){

			//echo "Please enter one Uppercase,lowercase,number, and 8 charachter";

		}else{
			//echo "Congrates, comple";
			//$query= "INSERT into email, from user WHERE email=$_POST['email']";


			$checkEmailAddress="SELECT * from user where email='".mysqli_escape_string($link,$_POST['email'])."'";
			
			$checkEmailAddressResult= mysqli_query($link,$checkEmailAddress);
			$row= mysqli_fetch_assoc($checkEmailAddressResult);
			
			// Below code do the same thing as the upper code 
			//echo $checkEmailAddressResult= mysqli_num_rows(mysqli_query($link,$checkEmailAddress));


			//print_r($row);
			//echo $checkEmailAddressResult;
			

			if($row>0){
				echo "Email already exits ";

			}else{
				//echo "no match found";
				$insert = "INSERT INTO user (`name`,`password`,`email`) VALUES 
							('".$_POST['name']."',
							'".md5(mysqli_escape_string($link,$_POST['email']).md5($_POST['password']))."',
							'".mysqli_escape_string($link,$_POST['email'])."')";
		
				$result=mysqli_query($link,$insert);
				echo("Successfully Registered");
				$_SESSION['id']=mysqli_insert_id($link);
				//print_r($_SESSION);

				//Redirect to the main page
                header("Location: mainpage.php");
                exit;


			}
		
		}

	}

}

?>