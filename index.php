
<?php
/*
$link= mysqli_connect("localhost", "root", "", "secretDiary");



//insert data into database


$insert = "INSERT INTO user (`name`,`password`,`email`) VALUES ('Sgaon','".md5('test')."','test@gmail.com')";

//mysqli_query(link,insert);
$result= mysqli_query($link,$insert);
echo $result;
if($result){
	echo "worked";
}else{
	echo "Did no work worked";
}




//update database

$upDate= "UPDATE user SET name='updateName' WHERE id=2";
$rEsult = mysqli_query($link,$upDate);

//delete


$delEte= "delete from user WHERE id=2";
$rEsult = mysqli_query($link,$delEte);







// fetch data from database 

$fetch = "SELECT * FROM user";

$result =mysqli_query($link,$fetch);
if($result){
	
	while ($row=mysqli_fetch_array($result)) {

		
		print_r($row);
		
		# code...
	}
	
	


}else{
	echo "failed";
}









*/

?>


<?php

include"connection.php";
include"password_validation.php";
include"registration.php";
include"login.php";




//session_start();
if($_GET["logout"]==1){
    session_destroy();
    $message="Logout Successfully";

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/secretstyle.css">
    <!--script src="js/secretstyle.js" ></script!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>


</head>




<body>

<div class="container-fluid img-responsive img-fluid" id="main_container" alt="Responsive image">
    <div class="row">

        <div class="col-md-12 col-md-6-offset-3 center-block">

        <div id="header_div">
            <h1 class="font_color"id="header_title">Secret Diary</h1>
            <p class="lead font_color">Please Login to Mentain your Diary/p>
        </div>

        <form class="form-group center-block" id="search_box" method="post">
            
            <input class="form-control" type="text" name="name"value="<?php echo addslashes($_POST['name']); ?>"placeholder="Name"> </input>
			<input class="form-control"type="email" name="email"value="<?php echo addslashes($_POST['email']); ?>"placeholder="email"> </input>
			
			<input class="form-control" type="password" name="password" value="<?php echo addslashes($_POST['password']); ?>"placeholder="Password"> </input>
			<button type="submit" name="submit">Register</button>
			<button type="submit" name="login">Login</button>

            <!--button class="btn-group btn-success" type="submit" value="Search">Search</button!-->
            <!--button type="button" class="btn btn-info btn-circle btn-xl font_color" id="searchButtonClicked"><i class="glyphicon glyphicon-search"></i></button!-->


           


            <div id="errorDiv" class="alert-warning resultMargin">
                <?php if ($error)echo $error;?>

            </div>

            <div id="errorDiv" class="alert-success resultMargin"><?php if($message)echo $message;?></div>






        </form>

        <form method="post">
			



		</form>




        </div>




    </div>

</div>

<script src="js/secretstyle.js" ></script>
</body>
</html>









