<?php
// include('header/header.php'); 

include("connect.php");

$u_id= $_GET['uid'];

// for updation fetch data in form input field
if($u_id){
    $sql_show = "select * from `crud` where id = $u_id";
    
    $query = mysqli_query($conn,$sql_show);

while($row = mysqli_fetch_array($query))
{
        $id = $row['id'];
        $name= $row['name'];
        $gender= $row['gender'];
        $dob= $row['dob'];
        $age= $row['age'];
        $email= $row['email'];
        $contact= $row['contact'];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <title>Crud operation</title>
  </head>
  <body>
    <button type="button" class="btn btn-primary bg-dark"><a href="index.php">view</a></button>

    <form class="col-md-6" method="post" action="#">
    <div class="form p-5">

    <div class="reg text-center">
        <h2 class="bg-light">Registration</h2>
    </div>

    <div class="form-group">
      <label>Full Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
    </div>

    <div class="form-group">
    <label >GENDER</label><br>
    Male
    <input type="radio" class="form-control" name="gender" value="male">
    Female
    <input type="radio" class="form-control" name="gender" value="female">
  </div>
    
    <div class="form-group">
    <label >DOB </label>
    <input type="date" class="form-control"  name="dob" value="<?php echo $dob; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">AGE</label>
    <input type="number" class="form-control"  name="age" value="<?php echo $age; ?>">
  </div>

  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp"  name="email" value="<?php echo $email; ?>">
  </div>

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="pass" value="">
  </div> -->

  <div class="form-group">
    <label for="exampleInputPassword1">CONTACT</label>
    <input type="number" class="form-control"  name="contact" value="<?php echo $contact; ?>">
  </div>

    <div class="sub-btn text-center">
        <button type="submit" name="update" class="btn btn-primary" value="submit">Update</button>
    </div>

    </div>
</form> 
<!-- closing form -->
<?php 
} //closing of while
} //closing of if

$u_id= $_GET['uid']; 

if(isset($_POST['update']))
{
  
$name   =   $_POST['name'];
$gender =   $_POST['gender'];
$dob    =   $_POST['dob'];
$age    =   $_POST['age'];
$email  =   $_POST['email'];
$contact =  $_POST['contact'];

$sql_upd = "update `crud` set name='$name',gender='$gender',dob='$dob',age='$age',email='$email',contact='$contact' where id = '$u_id'";

$query = mysqli_query($conn,$sql_upd);

header('location:index.php');
}
?>

<hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>