
<?php 

include'include/config.php';

$sid=$_GET['x'];


$query1=mysqli_query($con,"select * from agent where id_agent='$sid'");
$foto=mysqli_fetch_array($query1);
$img=$foto['foto'];



$query2=mysqli_query($con,"select * from foto where agent_id_agent='$sid'");


$img1=$foto1['foto1'];
$img2=$foto1['foto2'];
$img3=$foto1['foto3'];
$img4=$foto1['foto4'];

unlink("../agen/images/property_image/$img1");
unlink("../agen/images/property_image/$img2");
unlink("../agen/images/property_image/$img3");
unlink("../agen/images/property_image/$img4");

mysqli_query($con,"delete from agent where id_agent='$sid'");
mysqli_query($con,"delete from foto where agent_id='$sid'");
echo"<script>window.location.href='view_agent.php';</script>";		
	

?>