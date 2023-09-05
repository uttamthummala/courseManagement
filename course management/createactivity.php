<?php
session_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$cid=$_SESSION["cid"];
$connect = new mysqli("localhost","root","","coursemanagement");
if(isset($_POST["createactivity"])){
  $desc=$_POST["activitydescription"];
  $name=$_POST["activityname"];
  $mgrade=$_POST["mgrade"];
  if (($_FILES['my_file']['name']!="")){
    // Where the file is going to be stored
      $target_dir = "upload/";
      $file = $_FILES['my_file']['name'];
      $path = pathinfo($file);
      $filename = $path['filename'];
      $ext = $path['extension'];
      $temp_name = $_FILES['my_file']['tmp_name'];
      $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
     echo "Sorry, file already exists.";
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo "Congratulations! File Uploaded Successfully.";
     }
    }
    $file=$filename.".".$ext;
  $sql="INSERT into assignments (course_id,name,max_grade,ass_desc,attachments) values ('$cid','$name','$mgrade','$desc','$file');";
  $res= $connect->query($sql);
  echo $res;
  echo $sql;
}
$ab='Location: activities.php?cid=';
$ab.=$cid;
header($ab);

?>