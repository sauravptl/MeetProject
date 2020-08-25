<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Crud Youtube</title>
  </head>
  <body>
  <div class="container mt-4">
  <h1 style="text-align: center">Apply for Company Placement</h1>
  <hr /> 
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="user">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Qualification</label>
      <input type="text" class="form-control" name="degree" >
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">mobile No.</label>
      <input type="number" class="form-control" name="mobile" >
    </div>
    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email">
    </div>
     <div class="form-group col-md-6">
      <label for="inputEmail4">Any Reference</label>
      <input type="text" class="form-control" name="refer" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prefered Language</label>
      <input type="text" class="form-control" name="lang">
    </div>
  </div>
  
    <button type="submit"><a href="select.php">Check Form</a></button>

  <button type="submit" name="submit" class="btn btn-primary">Register</button>
</form>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include 'dbconn.php';

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($con,$_POST['user']);
   $email = mysqli_real_escape_string($con,$_POST['email']);
    $mobile =mysqli_real_escape_string( $con,$_POST['mobile']);
     $degree = mysqli_real_escape_string($con,$_POST['degree']);
       $refer = mysqli_real_escape_string($con,$_POST['refer']);
      $lang = mysqli_real_escape_string($con,$_POST['lang']);

      $insertQuery = "INSERT into register(name,email,mobile,degree,refer,lang) values('$name','$email','$mobile','$degree','$refer','$lang')";

      $query = mysqli_query($con,$insertQuery);
if($query){
  ?>
  <script type="text/javascript">
    alert ("Inserted successfull");
  </script>
  
  <?php 

  
}else{
  ?>
  <script type="text/javascript">
alert("No Inserted");
  </script>
  
  <?php 
}

}
?> 