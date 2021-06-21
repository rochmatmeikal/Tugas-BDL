<?php 
require_once("include/config.php");
if(!empty($_POST["iduser"])) {
	$iduser= $_POST["iduser"];
	$result =mysqli_query($con,"SELECT idUser FROM users WHERE idUser='$iduser'");
	$count=mysqli_num_rows($result);
	if($count>
		0) { echo "<span style='color:red'>iduser already exists .</span>"; echo "
		<script>$('#submit').prop('disabled',true);</script>
		"; } else{ echo "<span style='color:green'>iduser available for Registration .</span>"; echo "
		<script>$('#submit').prop('disabled',false);</script>
		";
	}
}

?>