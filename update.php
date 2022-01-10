

<?php
   include 'connect.php';
       $EMP_ID=$_GET['updateid'];
       $sql="SELECT * FROM employee WHERE EMP_ID=$EMP_ID";
       $result=mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($result);
       $EMP_ID=$row['EMP_ID'];
       $NAME=$row['NAME'];
       $PHONE=$row['PHONE'];
       $ROLE=$row['ROLE'];
       $ADDRESS=$row['ADDRESS'];
       $BUS_ID=$row['BUS_ID'];


     
   if(isset($_POST['submit'])){
     $EMP_ID=$_POST['EMP_ID'];
     $NAME=$_POST['NAME'];
     $PHONE=$_POST['PHONE'];
     $ROLE=$_POST['ROLE'];
     $ADDRESS=$_POST['ADDRESS'];
     $BUS_ID=$_POST['BUS_ID'];

     $sql="UPDATE employee SET EMP_ID='$EMP_ID',NAME='$NAME',PHONE='$PHONE',ROLE='$ROLE',ADDRESS='$ADDRESS',BUS_ID='$BUS_ID' WHERE EMP_ID=$EMP_ID";
     $result=mysqli_query($con,$sql);
     if($result)
     { 
        // echo "updated successfully";
      header('location:display.php');
     }
     else{
      die(mysqli_error($con));
     
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
     placeholder="Enter employee id" name="EMP_ID" autocomplete="off" 
     value=<?php echo $EMP_ID;?>>
</div>

  <div class="form-group">
    <label>EMPLOYEE NAME</label>
    <input type="text" class="form-control" 
     placeholder="Enter employee name" name="NAME" autocomplete="off" 
     value=<?php echo $NAME;?>>
</div>
 
<div class="form-group">
    <label>PHONE NO</label>
    <input type="text" class="form-control" 
     placeholder="Enter your phone no" name="PHONE" autocomplete="off" 
     value=<?php echo $PHONE;?>>
</div>

<div class="form-group">
    <label>ROLE</label>
    <input type="text" class="form-control" 
     placeholder="Enter the role" name="ROLE" autocomplete="off" 
     value=<?php echo $ROLE;?>>
</div>
    
<div class="form-group">
    <label>ADDRESS</label>
    <input type="text" class="form-control" 
     placeholder="Enter the address" name="ADDRESS" autocomplete="off" 
     value=<?php echo $ADDRESS;?>>
</div>

<div class="form-group">
    <label>BUS ID</label>
    <input type="text" class="form-control" 
     placeholder="Enter the BUS ID" name="BUS_ID" autocomplete="off" 
     value=<?php echo $BUS_ID;?>>
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</body>
</html>