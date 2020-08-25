<?php
include 'dbconn.php';
$id = $_GET['id'];
$deletequery = "delete  from register where id=$id";

$query = mysqli_query($con,$deletequery);
$result =  mysqli_fetch_assoc($query);  
if($query){
    ?>
    <script type="text/javascript">
      alert ("Deleted successfull");
    </script>
    
    <?php 
  
    header('location:select.php');
  }else{
    ?>
    <script type="text/javascript">
  alert("No Deleted");
    </script>
    
    <?php 
  }
  
  ?> 