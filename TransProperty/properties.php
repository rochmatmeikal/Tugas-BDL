<?php include('include/header.php');?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Kami</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active"> Iklan Property </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">Iklan Property</span>
                    </h4>
                </div>
                <!--<div class="col-xl-8 col-lg-7 col-md-7 col-sm-7">
                    <div class="sorting-options clearfix">
                        <a href="properties-list-fullwidth.html" class="change-view-btn"><i class="fa fa-th-list"></i></a>
                        <a href="properties-grid-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="search-area">
                        <select class="selectpicker search-fields" name="location">
                            <option>High to Low</option>
                            <option>Low to High</option>
                        </select>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="subtitle">
             Result Found
        </div>
        <div class="row">
        <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from property");
        $agent=mysqli_fetch_array($query1);
        

$query=mysqli_query($con,"select * from property");
while($res=mysqli_fetch_array($query))
{
$id=$res['id'];
$img=$res['image'];

        ?>    
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="property-img">
                            <div class="tag button alt featured">For Sale</div>
                            <div class="price-ratings-box">
                                <p class="price">
                                    Rp. <?php echo $res['price'];?>
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <img src="admin/images/property_image/<?php echo $img;?>" alt="property-1" class="img-fluid">
                        </a>
                        <div class="property-overlay">
                            <a href="properties-details.php?id=<?php echo $id;?>" class="overlay-link">
                                <i class="fa fa-link"></i>
                            </a>
                           <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                            <div class="property-magnify-gallery">
                                <a href="admin/images/property_image/<?php echo $img;?>" class="overlay-link">
                                    <i class="fa fa-expand"></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="properties-details.php?id=<?php echo $id;?>"><?php echo $res['title'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="fa fa-map-marker"></i><?php echo $res['address'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-bed"></i> <?php echo $res['bedroom'];?> : Kamar Tidur
                            </li>
                            <li>
                                <i class="flaticon-theatre-masks"></i> <?php echo $res['hall'];?> : Ruang Tamu
                            </li>
                            <li>
                                <i class="flaticon-bath"></i><?php echo $res['bathroom'];?> : Kamar Mandi 
                            </li>
                            <li>
                                <i class="fa fa-coffee"></i> <?php echo $res['kichan'];?> : Dapur
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
</ul>
                        <a href="#">
                            <i class="flaticon-user"></i> <?php echo $res['nama_agent']?>
                        </a>
                            <span>
                                <i class="fa fa-calendar-o"></i> <?php echo $res['date'];?>
                            </span>
                    </div>
                    <center><a class="btn btn-info" href="https://api.whatsapp.com/send?phone=<?php echo $res['no_tlp'];?>&text=Apakah%20Property%20<?php echo $res['title']; ?>%20Masih%20Tersedia%3F">Beli</a></center>
                </div>
            </div>
<?php } ?>
            
        </div>
    </div>
</div>
<!-- Properties list fullwidth end -->

<!-- Footer start -->
<?php include('include/footer.php');?>