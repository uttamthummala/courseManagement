<?php
session_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$cid=$_SESSION["cid"];
$connect = new mysqli("localhost","root","","coursemanagement");

if(isset($_POST["addannouncement"])){
  $desc=$_POST["adesc"];
  $name=$_POST["about"];
  $sql="INSERT into announcements (User_id,course_id,name,announcement_desc) values ('$id','$cid','$name','$desc');";
  $res= $connect->query($sql);
  echo $res;
  echo $sql;
}
header('Location: announcements.php');

?>