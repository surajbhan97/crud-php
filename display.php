<?php 
// include('header/header.php');
 ?>

<table class="table text-center">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">gender</th>
      <th scope="col">DOB</th>
      <th scope="col">age</th>
      <th scope="col">email</th>
      <!-- <th scope="col">pass</th> -->
      <th scope="col">contact</th>
      <th colspan="2">operation</th>
    </tr>
  </thead>
  <?php
    include("connect.php");
    
    $sql_show = "select * from `crud`";

    $res = mysqli_query($conn,$sql_show);

    while($row = mysqli_fetch_array($res)){
        $id = $row['id'];
        $name= $row['name'];
        $gender= $row['gender'];
        $dob= $row['dob'];
        $age= $row['age'];
        $email= $row['email'];
        $contact= $row['contact'];

        //DB COLUMN = id	name	gender	dob	age	email	pass	contact	
        echo    '<tr>
                <td>'.$id.'</th>
                <td>'.$name.'</th>
                <td>'.$gender.'</th>
                <td>'.$dob.'</th>
                <td>'.$age.'</th>
                <td>'.$email.'</th>
                <td>'.$contact.'</th>
                <td><a class="btn btn-danger" href="delete.php?uid='.$id.'">delete</a></th>
                <td><a class="btn btn-dark" href="update.php?uid='.$id.'">edit</a></th>
                </tr>';

    }
  ?>
    
  </tbody>
</table>