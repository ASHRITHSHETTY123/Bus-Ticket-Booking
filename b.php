<?php
   include 'connect.php';
   if(isset($_POST['submit'])){
    
     $NAME=$_POST['NAME'];
     $PHONE=$_POST['PHONE'];
     $ROLE=$_POST['ROLE'];
     $ADDRESS=$_POST['ADDRESS'];
     $BUS_ID=$_POST['BUS_ID'];

     $sql="INSERT INTO employee (NAME,PHONE,ROLE,ADDRESS,BUS_ID)
     values('$NAME','$PHONE','$ROLE','$ADDRESS','$BUS_ID')";
     $result=mysqli_query($con,$sql);
     if($result){
      //echo "data inserted successfully";
        header('location:display.php');
     }
     else{
      die(mysql_error($con));
     }
     
   }


?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>BUS TICKET MANAGEMENT SYSTEM</title>
  </head>
  <body>
    <div class="container my-5">
     <form method="post">
  <div class="form-group">
    <label>EMPLOYEE ID</label>
    <input type="text" class="form-control" 
     placeholder="Enter employee id" name="EMP_ID" autocomplete="off">
</div>

  <div class="form-group">
    <label>EMPLOYEE NAME</label>
    <input type="text" class="form-control" 
     placeholder="Enter employee name" name="NAME" autocomplete="off">
</div>
 
<div class="form-group">
    <label>PHONE NO</label>
    <input type="text" class="form-control" 
     placeholder="Enter your phone no" name="PHONE" autocomplete="off">
</div>

<div class="form-group">
    <label>ROLE</label>
    <input type="text" class="form-control" 
     placeholder="Enter the role" name="ROLE" autocomplete="off">
</div>
    
<div class="form-group">
    <label>ADDRESS</label>
    <input type="text" class="form-control" 
     placeholder="Enter the address" name="ADDRESS" autocomplete="off">
</div>

<div class="form-group">
    <label>BUS ID</label>
    <input type="text" class="form-control" 
     placeholder="Enter the BUS ID" name="BUS_ID" autocomplete="off">
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</body>
</html>