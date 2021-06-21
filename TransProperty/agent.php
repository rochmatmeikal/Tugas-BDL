<?php include('include/header.php');?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Agent Kami</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Agent</li>
                <center><a style="margin-top: 2%;" class="btn btn-primary btn-lg btn-round btn-white-lg-outline" href="agen/index.php" role="button">Login</a></center>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
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
                        <span class="heading"> Agent Property</span>
                    </h4>
                </div>
 			</div>
        </div>
<div class="subtitle">
            10 Result Found
        </div>
        <div class="row">
        <?php 
        include'include/config.php';
        $query1=mysqli_query($con,"select * from agent");
        $agent=mysqli_fetch_array($query1);
        
        $u_name=ucfirst($agent['name']);

$query=mysqli_query($con,"select * from agent");
while($res=mysqli_fetch_array($query))
{
$id_agent=$res['id_agent'];
$img=$res['foto'];

        ?>    
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="property-box">
                    <div class="property-thumbnail">
                        <a href="properties-details.html" class="agent-img">
                            <div class="price-ratings-box">
                                <p class="price">
                                    <?php echo $res['name'];?>
                                </p>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                            </div>
                            <img src="assets/img/avatar/avatar0.jpeg" alt="property-1" class="img-fluid">
                        </a>
                        <div class="">
                            
                           <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                            <div class="agent-magnify-gallery">
                                <a href="assets/img/avatar/avatar0.jpeg<?php echo $img;?>" class="overlay-link">
                                    <i class=""></i>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title">
                            <a href="#"><?php echo $res['name'];?></a>
                        </h1>
                        <div class="location">
                            <a href="properties-details.php?id=<?php echo $id;?>">
                                <i class="flaticon-chat"></i><?php echo $res['email'];?>
                            </a>
                        </div>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="fa fa-map-marker"></i> <?php echo $res['address'];?>
                            </li>
                            
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="fa fa-user"></i> <?php echo $res['gender'];?>
                            </li>
                            
                        </ul>
                    </div>
                       <center><a class="btn btn-info" href="https://api.whatsapp.com/send?phone=<?php echo $res['no_tlp'];?>&text=Hallo..%20Apakah%20ini%20Agen%20<?php echo $res['name']; ?>%3F%20Saya%20mau%20menjual%20Property!">Hubungi Agent</a></center>
                </div>
            </div>
<?php } ?>
            
        </div>
    </div>
</div>

<?php include('include/footer.php');?>