<?php
include 'connect.php';
//collect data from the form
//if(isset($_GET['updateid'])){
$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    //insert query
    $sql = " update `crud`
        set id=$id,name ='$name', email='$email', mobile='$mobile', password='$password'
         where id=$id;
  ";
    //execute the query
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "data updated successfuly";
        header('location:display.php');
    } else {
        die(mysqli_error());
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" class="my-5" autocomplete="off">
            <div class="mb-3">
                <label for="name" class="form-label">id</label>
                <input type="text" class="form-control" id="id" aria-describedby="id" name='id' value=<?php echo $id ?> disabled>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter Your name" name="name" value=<?php echo $name ?>>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile number</label>
                <input type="text" class="form-control" id="mobile" aria-describedby="mobile" placeholder="Enter Your name" name="mobile" value=<?php echo $mobile ?>>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value=<?php echo $email ?>>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password" value=<?php echo $password ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>