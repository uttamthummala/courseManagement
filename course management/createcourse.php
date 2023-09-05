<?php
session_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$connect = new mysqli("localhost","root","","coursemanagement");
if(isset($_POST["createclass"])){
  $course=$_POST["coursename"];
  $code=$_POST["joincode"];
  $sdate=$_POST["startdate"];
  $edate=$_POST["enddate"];
  $sdate = date("Y-m-d",strtotime($sdate));
  $edate = date("Y-m-d",strtotime($edate));
  $desc=$_POST["desc"];
  $sql="INSERT into teaches ( User_id,course_name, course_desc, start_date,end_date,code) VALUES ('$id','$course','$desc', '$sdate','$edate','$code');";
  $res= $connect -> query($sql);
  echo $res;
  echo $edate;
  echo $sdate;
  header('Location: dashboard.php');
}

?>