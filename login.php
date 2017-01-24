<?php 
session_start();


if(isset($_POST['login'])){
	if(empty($_POST['email'])||empty($_POST['password'])){
		//echo "Enter an email address or Password ";
        $error="Enter an email address or Password ";
	}else {
		if(!(valid_pass($_POST['password']))){

			//echo "Please enter one Uppercase,lowercase,number, and 8 charachter";

		}else{
			
			$checkDataBaseID="SELECT id from user where email='".mysqli_escape_string($link,$_POST['email'])."' and password='".md5($_POST['email'].md5($_POST['password']))."'";
			
			$checkDataBaseResult= mysqli_query($link,$checkDataBaseID);
			$row= mysqli_fetch_assoc($checkDataBaseResult);
			
			if($row>0){
				echo "Login Successfull ";

				//echo $_SESSION['name']=$row['name'];
				$_SESSION['id']=$row['id'];
				$userName= "SELECT name from user where id='".$_SESSION['id']."'";
				$nameQuery= mysqli_query($link,$userName);
				//print_r($nameQuery);
				$nameRow= mysqli_fetch_array($nameQuery);
				//echo $_SESSION['email']=$row['email'];
				

				print_r($nameRow);
				//echo "Welcome back ".$nameRow." ";

                //redirect to Home page
                header("Location: mainpage.php");
                exit;

			}else{
				//echo "Email Password Dosen't match";
                $error="Email Password Dosen't match";

			}
		
		}

	}
	


}


?>