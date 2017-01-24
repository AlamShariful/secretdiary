<?php
/**
 * Created by PhpStorm.
 * User: alams
 * Date: 9/23/2016
 * Time: 9:57 PM
 */

session_start();
include ("connection.php");
$query= "UPDATE user set diary='".mysqli_real_escape_string($link,$_POST['diary'])."' where id= '".$_SESSION['id']."' Limit 1 " ;
mysqli_query($link,$query);
print_r($_SESSION);

?>
<!--<form method="post">-->
<!--    <input type="text" name="diary">-->
<!--    <button type="submit" name="click">Click</button>-->
<!--</form>-->
