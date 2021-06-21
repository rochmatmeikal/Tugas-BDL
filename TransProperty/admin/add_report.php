
<?php 
   include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{
  
  $query="insert into report values('','$tanggal','$property','$pemilik','$agen','$harga','$keuntungan','$file')";  
  $r=mysqli_query($con,$query);
 

if($r)
{
  $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add successful.
  </div>';    
}
else
{
$msg='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Property Data Add Not successful.
  </div>';

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
                                Tambahkan Report
                                
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
                                                <input required type="text" name="tanggal" class="form-control">
                                                <label class="form-label">Tanggal</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="property" class="form-control">
                                                <label class="form-label">Nama Property</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="pemilik" class="form-control">
                                                <label class="form-label">Nama Pemilik</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="agen" class="form-control">
                                                <label class="form-label">Nama Agent</label>
                                            </div>
                                        </div>
                                     </div>
                                                                         
                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="harga" class="form-control">
                                                <label class="form-label">Harga Property</label>
                                            </div>
                                        </div>
                                     </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="keuntungan" class="form-control">
                                                <label class="form-label">Keuntungan</label>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                
                              
                                                                
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