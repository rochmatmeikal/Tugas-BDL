
<?php 
include('include/header.php');
include'include/config.php';
extract($_REQUEST);

$id=$_REQUEST['id'];

$query=mysqli_query($con,"select * from agent where id_agent='$id'");
$res=mysqli_fetch_array($query);




if(isset($submit))
{

  $file=$_FILES['file']['name'];

  if($file=="")
  {

  $query="update agent set name='$name',nik='$nik',no_tlp='$no_tlp',email='$email',password='$password',address='$address',gender='$gender',file='$file' where id_agent='$id_agent'";
  mysqli_query($con,$query); 

  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Update successful.
  </div>';
    echo"<script>window.location.href='view_agent.php';</script>";
  }
  else
  {


  
  $query="update agent set name='$name',nik='$nik',no_tlp='$no_tlp',email='$email',password='$password',address='$address',gender='$gender',file='$file' where id_agent='$id_agent'";
  mysqli_query($con,$query);
  
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 


   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Update successful.
  </div>';

echo"<script>window.location.href='update_agent.php';</script>";

   }          
}

         ?>        

    <!-- Header -->
    
    <section>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Add Agent
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row clearfix">

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="name" value="<?php echo $res['name'];?>" class="form-control">
                                                <label class="form-label">Nama</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="nik" value="<?php echo $res['nik'];?>" class="form-control">
                                                <label class="form-label">NIK</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="no_tlp" value="<?php echo $res['no_tlp'];?>" class="form-control">
                                                <label class="form-label">No Telpon/Hp</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="email" name="email" value="<?php echo $res['email'];?>" class="form-control">
                                                <label class="form-label">Email</label>
                                            </div>
                                        </div>
                                     </div>
                                     

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="password" name="password" value="<?php echo $res['password'];?>" class="form-control">
                                                <label class="form-label">Password</label>
                                            </div>
                                        </div>
                                     </div>
                                    
                                                                       
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="add" value="<?php echo $res['address'];?>" class="form-control">
                                                <label class="form-label">Address</label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="gender" value="<?php echo $res['gender'];?>" class="form-control">
                                                <label class="form-label">Jenis Kelamin</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">                                       
                                     <div class="custom-file">
                                    <label class="form-label">Add Property Image</label>
                                    <input  name="file"  type="file" multiple />                                   
                                     </div>                                            
                                      </div>

                                      <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">                                       
                                     <div class="custom-file">
                                    <label class="form-label">foto Agent</label>
                                    <img src="images/property_image/<?php echo $img;?>" width="200">                              
                                     </div>                                            
                                      </div>

                               
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                     
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <?php include'include/footer.php';?>