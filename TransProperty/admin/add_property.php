
<?php 
   include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

$file=$_FILES['file']['name'];
  
  $query="insert into property values('','$title','$bedroom','$hall','$kitchan','$bathroom','$balcony','$price','$sqr_price','$add','$video','$file','$description','$location','$property_owner','$property_type','$lot_size','$sold','$land_area',now())";  
  $r=mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 

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
                                Tambahkan Property
                                
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
                                                <input required type="text" name="title" class="form-control">
                                                <label class="form-label">Nama Property</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="property_owner" class="form-control">
                                                <label class="form-label">Pemilik Property</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="property_type" class="form-control">
                                                <label class="form-label">Type Property</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="lot_size" class="form-control">
                                                <label class="form-label">Luas Bangunan</label>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                 <label style="color:gray;">Terjual</label>
                                               
                                               <input name="sold" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" checked />
                                                <label for="radio_36">YES</label>

                                                <input name="sold" type="radio" id="radio_30" value="No" class="with-gap radio-col-red"  />
                                                <label for="radio_30">NO</label>
                                            </div>
                                        </div>
                                     </div>

                                     

                                     <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="text" name="land_area" class="form-control">
                                                <label class="form-label">Luas Tanah</label>
                                            </div>
                                        </div>
                                     </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="price" class="form-control">
                                                <label class="form-label">Harga</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="sqr_price" class="form-control">
                                                <label class="form-label">Harga meter persegi</label>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="add" class="form-control">
                                                <label class="form-label">Alamat</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea required name="description" class="form-control"></textarea>
                                                <label class="form-label">Keterangan</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="video">
                                                <label class="form-label">Tambahkan Link Video</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="location">
                                                <label class="form-label">Tambahkan Link Lokasi</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                
                                <div class="custom-file">
                                    <label class="form-label">Tambahkan Foto Property</label>
                                    <input required name="file"  type="file" multiple />
                                    
                                </div>
                           
                                            
                               </div>

                                <div class="header col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                                                 
                               <h4 style="text-align: center;">Fasilitas</h4>
                                                                                     
                                </div>



                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="kitchan" class="form-control">
                                                <label class="form-label">Dapur</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="hall" class="form-control">
                                                <label class="form-label">Ruang Tamu</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bedroom" class="form-control">
                                                <label class="form-label">Kamar Tidur</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bathroom" class="form-control">
                                                <label class="form-label">Kamar Mandi</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="balcony" class="form-control">
                                                <label class="form-label">Balkon</label>
                                            </div>
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