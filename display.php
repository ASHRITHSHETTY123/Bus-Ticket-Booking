<?php
include 'connect.php';
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS TICKET MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
 <div class="container">
 <button class="btn btn-primary my-5"><a href="b.php"class="text-light">ADD EMPLOYEE</a>
     </button>
     <button class="btn btn-primary my-5"><a href="b.php"class="text-light">ADD BUS DETAIL</a>
     </button>
     <button class="btn btn-primary my-5"><a href="b.php"class="text-light">ADD ROUTE DETAIL</a>
     </button>
     <button class="btn btn-primary my-5"><a href="b.php"class="text-light">ADD PAYMENT DETAIL</a>
     </button>
     <button class="btn btn-primary my-5"><a href="b.php"class="text-light">ADD CUSTOMER DETAIL</a>
     </button>

     <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">EMP_ID</th>
      <th scope="col">NAME</th>
      <th scope="col">PHONE</th>
      <th scope="col">ROLE</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">BUS_ID</th>
    </tr>
  </thead>
  <tbody>

<?php
 
 $sql="SELECT * FROM employee";
 $result=mysqli_query($con,$sql);
 if($result){
     while($row=mysqli_fetch_assoc($result)) {
             $EMP_ID=$row['EMP_ID'];
             $NAME=$row['NAME'];
             $PHONE=$row['PHONE'];
             $ROLE=$row['ROLE'];
             $ADDRESS=$row['ADDRESS'];
             $BUS_ID=$row['BUS_ID'];
            echo '<tr>
            <th scope="row">'.$EMP_ID.'</th>
            <td>'.$NAME.'</td>
            <td>'.$PHONE.'</td>
            <td>'.$ROLE.'</td>
            <td>'.$ADDRESS.'</td>
            <td>'.$BUS_ID.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$EMP_ID.'" class="text-light">UPDATE</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$EMP_ID.'" class="text-light">DELETE</a></button>
            </td>
          </tr>';
     }
         
     }
 
?>











   
  </tbody>
</table>
</div>   
</body>
</html>