<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <a  href="user.php" > 
            <button class="btn btn-primary my-5">Add User</button>
        </a>

        <table class="table">
  <thead>
    <tr>
      
      <th scope="col">SI No</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
     <th scope="col">Email</th>
     <th scope="col">Password</th>
     <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `crud`";
    $result=mysqli_query($con,$sql);//Procedural style
    if($result){
      //$row=mysqli_fetch_assoc($result);
      
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $password=$row['password'];
        echo '
        <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td> 
        <button class="btn btn-secondary">
        <a class="text-light" href="update.php?updateid='.$id.'">update</a>
        </button>
        <button class="btn btn-danger">
        <a class="text-light" href="delete.php?deleteid='.$id.'">delete</a>
        </button>
      </td>
       </tr>';
      }
    }
    ?>

    
     
    
    </tbody>
</table>
    <!--
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
-->
    </div>
</body>
</html>