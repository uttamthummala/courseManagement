<?php

session_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$connect = new mysqli("localhost","root","","coursemanagement");
if(isset($_POST["join"])){
  $code=$_POST["classcode"];
  $sql="select * from teaches where code='$code';";
  $res= $connect->query($sql);
  if($res && $res->num_rows !=0) {
    $row = mysqli_fetch_assoc($res);
    $courseid=$row["course_id"];
    $coursename=$row["course_name"];
    $coursedesc=$row["course_desc"];
    $sdate=$row["start_date"];
    $edate=$row["end_date"];
    $sql="INSERT into takes values('$courseid','$id','$coursename','$coursedesc','$sdate','$edate') ;";
    $res= $connect -> query($sql);
    echo $res;
    
  }
}
header('Location: dashboard.php');

?>