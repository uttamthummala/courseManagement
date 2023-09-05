<?php
$temp1='<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain">
  <div class="position-relative">
    
  </div>
  <div class="card-body px-1 pb-0">
    <p class="text-gradient text-dark mb-2 text-sm">
      course #id# --#role#
    </p>
    <a href="javascript:;">
      <h5>#course#</h5>
    </a>
    <p class="mb-4 text-sm">
      #desc#
    </p>
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <button
        type="button"
        class="btn btn-outline-primary btn-sm mb-0"
      >
        View Course
      </button>
      <div class="avatar-group mt-2">
        <a
          href="javascript:;"
          class="avatar avatar-xs rounded-circle"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="Nick Daniel"
        >
          <img
            alt="Image placeholder"
            src="./assets/img/team-3.jpg"
          />
        </a>
        <a
          href="javascript:;"
          class="avatar avatar-xs rounded-circle"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="Peterson"
        >
          <img
            alt="Image placeholder"
            src="./assets/img/team-4.jpg"
          />
        </a>
        <a
          href="javascript:;"
          class="avatar avatar-xs rounded-circle"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="Elena Morison"
        >
          <img
            alt="Image placeholder"
            src="./assets/img/team-1.jpg"
          />
        </a>
        <a
          href="javascript:;"
          class="avatar avatar-xs rounded-circle"
          data-bs-toggle="tooltip"
          data-bs-placement="bottom"
          title="Ryan Milly"
        >
          <img
            alt="Image placeholder"
            src="./assets/img/team-2.jpg"
          />
        </a>
      </div>
    </div>
  </div>
</div>
</div>';
$temp2='<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card h-100 card-plain border">
  <div
    class="card-body d-flex flex-column justify-content-center text-center"
  >
    <a data-bs-toggle="modal" data-bs-target="#exampleModalSignUp">
      <i class="fa fa-plus text-secondary mb-3"></i>
      <h5 class="text-secondary">New Course</h5>
    </a>
    <div class="col-md-4">
      
      <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-primary text-gradient">Join us today</h3>
                    <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body pb-3">
                  <form role="form text-left">
                    <label>Name</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                    </div>
                    <label>Email</label>
                    <div class="input-group mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Password</label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-check-info text-left">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked="">
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascrpt:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn bg-gradient-primary btn-lg btn-rounded w-100 mt-4 mb-0">Sign up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-sm-4 px-1">
                  <p class="mb-4 mx-auto">
                    Already have an account?
                    <a href="javascrpt:;" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>';
$temp3='<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card h-100 card-plain border">
  <div
    class="card-body d-flex flex-column justify-content-center text-center"
  >
    <a data-bs-toggle="modal" data-bs-target="#modal-form">
      <i class="fa fa-plus text-secondary mb-3"></i>
      <h5 class="text-secondary">Join Course</h5>
    </a>
    <div class="col-md-4">
      <!-- <button type="button" class="btn btn-block btn-default mb-3" data-bs-toggle="modal" data-bs-target="#modal-form">Form</button> -->
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="card card-plain">
                <div class="card-header pb-0 text-left">
                  <!-- <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3> -->
                  <p class="mb-0">Enter Class Code To Join</p>
                </div>
                <div class="card-body">
                  <form role="form text-left">
                    
                    <label>Class Code</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Class Code" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    
                    <div class="text-center">
                      <input type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0"
                      name="Join"
                      value="Join Course"/>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
</div>';
$temp =file_get_contents("profile.html");
SESSION_start();
$id=$_SESSION["id"];
$role=$_SESSION["role"];
$connect = new mysqli("localhost","root","","coursemanagement");
$sql="SELECT * FROM credentials where User_id ='$id' ";
$res= $connect -> query($sql);
$row = mysqli_fetch_assoc($res);
$name=$row["Name"];
$email=$row["Email_id"];
$Department=$row["Department"];

$temp= str_replace("#name#",$name,$temp);
$temp= str_replace("#email#",$email,$temp);
$temp= str_replace("#department#",$Department,$temp);
if ($role==0) {
  $role="Instructor";
  $temp= str_replace("#role#","Instructor",$temp);
  $sql="SELECT * FROM teaches where User_id ='$id' ";
  
}
else{
  $role="Student";
  $temp= str_replace("#role#","Student",$temp);
  $sql="SELECT * FROM takes where User_id ='$id' ";
  

}
$x="";
$res= $connect -> query($sql);
if($res->num_rows !=0){
  
  while($data = $res -> fetch_assoc()){
    $course=$data["course_name"];
    $course_id=$data["course_id"];
    $desc=$data["course_desc"];
    
      $temp4= str_replace("#course#",$course,$temp1);
      $temp4= str_replace("#desc#",$desc,$temp4);
      $temp4= str_replace("#role#",$role,$temp4);
      $temp4= str_replace("#id#",$course_id,$temp4);
    $x.=$temp4;
      
      

  }

}






if ($role==0) {
  $x .= $temp2;
  $x.=$temp3;

}
else{
  $x.=$temp3;
}
$temp= str_replace("#courses#",$x,$temp);
echo $temp;
?>