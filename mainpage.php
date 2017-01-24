<?php
/**
 * Created by PhpStorm.
 * User: alams
 * Date: 9/23/2016
 * Time: 7:00 PM
 */





include"connection.php";
//include"password_validation.php";
//include"registration.php";
//include"login.php";




session_start();
//echo $_SESSION['id'];
$query= "SELECT diary from USER where id= '".$_SESSION['id']."' Limit 1 ";
 $result=mysqli_query($link,$query);
    $row= mysqli_fetch_array($result);
    $diary=$row['diary'];
//print_r($diary);



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



        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="index.php?logout=1">Logout <span class="sr-only">(current)</span></a></li>


                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container" id="windowSize">
            <form method="post">
                <textarea class="form-control" name="diary"><?php echo $diary ; ?></textarea>

            </form>

        </div>









    </div>

</div>

<script src="js/secretstyle.js" ></script>
<script type="text/javascript">

    $("textarea").css("height",$(window).height()-100);

    /*$("textarea").keyup(function () {
        //alert("changed");
        //$.post("updateDiaryPost.php",{diary:("textarea").val()});
        $.post("updateDiaryPost.php",{diary:("textarea").val()});
    });

    */

    $('textarea').keyup(function () {
        $.post({
            url: 'updateDiaryPost.php',
            data: { diary: $("textarea").val() }
        });
    });

   /*
   //same work, call the updateDiary.php page and save the current content of the textarea to the database
    $(document).ready(function(){
        //alert("work");
        $("textarea").load("updateDiary.php");
    })

    */
</script>


</body>
</html>











