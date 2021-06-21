
<?php 

include'include/config.php';

$sid=$_GET['x'];


$query1=mysqli_query($con,"select * from report where id_report='$sid'");


mysqli_query($con,"delete from report where id_report='$sid'");
echo"<script>window.location.href='report.php';</script>";		
	

?>