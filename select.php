<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">List of candidates for web developer job</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        
         <th>mobile</th>
         <th>degree</th>
        <th>refer</th>
         <th>post</th>
        <th colspan="2">Operation</th>
     
      </tr>
    </thead>
    <tbody>
<?php 
include 'dbconn.php';
$selectquery = "SELECT * from register";

$query = mysqli_query($con,$selectquery);
while($result =  mysqli_fetch_assoc($query)){

?>
  <tr>

<td><?php echo $result['id'];?></td>
<td><?php echo $result['name'];?></td>
<td><?php echo $result['email'];?></td>
<td><?php echo $result['mobile'];?></td>
<td><?php echo $result['degree'];?></td>
<td><?php echo $result['refer'];?></td>
<td><?php echo $result['lang'];?></td>
<td><a href="update.php?id=<?php echo $result['id'];?>" >edit</a></td>
<td><a href="delete.php?id=<?php echo $result['id'];?>" >delete</a></td>
  </tr>
  <?php
} ?>                                                                                         
    </tbody>
  </table>
</div>

</body>
</html>
