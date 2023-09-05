<?php

SESSION_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$cid=$_SESSION["cid"];
$connect = new mysqli("localhost","root","","coursemanagement");
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
   
$url.= $_SERVER['HTTP_HOST'];   

 
$url.= $_SERVER['REQUEST_URI'];    
$url_components = parse_url($url);

parse_str($url_components['query'], $params);
$aid= $params["aid"];
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
$sql="insert into submissions values('$cid','$aid','$id','$file','0')";
$res= $connect->query($sql);
$ab='Location: activity.php?aid=';
$ab.=$aid;
header($ab);

?>