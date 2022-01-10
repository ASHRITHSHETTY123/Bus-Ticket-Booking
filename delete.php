<?php  
   include 'connect.php';
   if(isset($_GET['deleteid'])){
       $EMP_ID=$_GET['deleteid'];



       $sql="DELETE FROM employee WHERE EMP_ID=$EMP_ID";
       $result=mysqli_query($con,$sql);
       if($result){
        header('location:display.php');
       }
    }
       ?>