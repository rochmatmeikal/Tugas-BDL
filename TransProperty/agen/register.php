<?php
include('include/config.php');
error_reporting(0);
if(isset($_POST['register']))
{
  $file=$_FILES['file']['name'];
  $name=$_POST['name'];
  $nik=$_POST['nik'];
  $no_tlp=$_POST['no_tlp'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $gender=$_POST['gender'];
  $foto=$_POST['Foto'];
  $query=mysqli_query($con,"insert into agent(name,nik,no_tlp,email,password,address,gender,foto) values('$name','$nik','$no_tlp','$email','$password','$address','$gender','$file')");
   move_uploaded_file($_FILES['file']['tmp_name'],"images/agent_image".$_FILES['file']['name']);
  $msg="Registration successfull. Now You can login !";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register</title>
  <!-- Bootstrap core CSS-->
  <link href="../admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../admin/assets/css/sb-admin.css" rel="stylesheet">

  
  
</head>

<body class="bg-dark">

 
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register</div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data">
                  
          <div class="form-group">
            <label for="exampleInputName1">Nama</label>
            <input class="form-control" id="exampleInputName1" name="name" required type="name" aria-describedby="nameHelp" placeholder="Enter name">
          </div>

          <div class="form-group">
            <label for="exampleInputNik1">NIK</label>
            <input class="form-control" id="exampleInputNik1" name="nik" required type="nik" aria-describedby="nikHelp" placeholder="Enter nik">
          </div>

          <div class="form-group">
            <label for="exampleInputNo_tlp1">No Telpon/Hp</label>
            <input class="form-control" id="exampleInputNo_tlp1" name="no_tlp" required type="no_tlp" aria-describedby="no_tlpHelp" placeholder="Enter no_tlp">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" id="exampleEmail1" name="email" required type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" required type="password"  aria-describedby="passwordHelp" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="exampleInputAddress1">Alamat</label>
            <input class="form-control" id="exampleInputAddress1" name="address" required type="address" aria-describedby="addressHelp" placeholder="Enter address">
          </div>

          <div class="form-group">
            <label for="exampleInputGender1">Jenis Kelamin</label>
            <input class="form-control" id="exampleInputGender1" name="gender" required type="gender" aria-describedby="genderHelp" placeholder="Enter gender">
          </div>

           <div class="custom-file">
                                    <label class="form-label">Foto Agent</label>
                                    <input required name="file"  type="file" multiple />
                                    
                                </div>
          
            
          <input class="btn btn-primary btn-block" type="submit" value="Register" name="register"/>
          </br>
          <div><p>Sudah Punya Akun Agent?<a href="index.php">Login</a></p></div>
        </form>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../admin/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../admin/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  
 
</body>
    
</html>
