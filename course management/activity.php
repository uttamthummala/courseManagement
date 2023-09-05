<?php
$temp =file_get_contents("activity.html");
$temp1='<div class="card">
<div class="table-responsive">
  <table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">owner</th>
        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Submission</th>
       
      
      </tr>
    </thead>
    <tbody>
      #submissions#

      
    </tbody>
  </table>
</div>
</div>';
$temp2='<tr>
<td>
  <div class="d-flex px-2 py-1">
    
    <div class="d-flex flex-column justify-content-center">
      <h6 class="mb-0 text-xs">#author#</h6>
      
    </div>
  </div>
</td>
<td>
  <p class="text-xs font-weight-bold mb-0"><a href="upload/#file#" download>#about#</a></p>
  
</td>



</tr>';
SESSION_start();
$id=$_SESSION["id"];
$cid=$_SESSION["cid"];
$role=$_SESSION["role"];
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
$sql="select * from assignments where assignment_id= '$aid';";
$res= $connect -> query($sql);
$row = mysqli_fetch_assoc($res);
$name=$row["name"];
$mgrade=$row["max_grade"];
$desc=$row["ass_desc"];
$file=$row["attachments"];
$temp= str_replace("#name#",$name,$temp);
$temp= str_replace("#description#",$desc,$temp);
$temp= str_replace("#mgrade#",$mgrade,$temp);
$temp= str_replace("#file#",$file,$temp);
$temp= str_replace("#aid#",$aid,$temp);
$x="";
if($role==0){
  $sql="select * from submissions where course_id='$cid';";
  $res= $connect -> query($sql);
  if($res && $res->num_rows !=0){
  
    while($data = $res -> fetch_assoc()){
      $u_id=$data["User_id"];
      $submission=$data["submission"];
      $sql1="select * from credentials where User_id='$id';";
      $res1= $connect -> query($sql1);
$row1 = mysqli_fetch_assoc($res1);
$name_s=$row1["Name"];
$temp4=str_replace("#author#",$name_s,$temp2);
$temp4=str_replace("#about#",$file,$temp4);
$temp4=str_replace("#file#",$file,$temp4);
$x.=$temp4;
      
      
        
  
    }
    $temp1=str_replace("submissions",$x,$temp1);
    
  
  }
}
$temp=str_replace("#abc#",$temp1,$temp);
echo $temp;


?>