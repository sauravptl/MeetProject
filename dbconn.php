<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "crudyoutube";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
	?>
	
	<?php 

	
}else{
	?>
	<script type="text/javascript">
alert("No connection");
	</script>
	
	<?php 
}
?> 