     <style>
		i{
			color:white;
		}
		
	 </style>

     <?php
     session_start();
$email=$_POST['email'];
$query=mysqli_query($con,"select * from admin where email='$email'");
$res1=mysqli_fetch_array($query);
@$name=$res1['name'];
     ?>

		<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $name;?></div>
                    <div class="email"><?php echo $email;?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../index.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="dashboard.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="view_property.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Lihat Property</span>
                        </a>
                    </li>

                     <li>
                        <a href="view_agent.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Lihat Agent</span>
                        </a>
                    </li>
									                    
                    <li>
                        <a href="report.php" class="menu-toggle">
                            <i class="material-icons">home</i>
                            <span>Report</span>
                        </a>
                    </li>
                    
                        </ul>
                    </li>
             
                </ul>
            </div>
            <!-- #Menu -->
            
			<!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">Admin - Trans Property</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 3.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>