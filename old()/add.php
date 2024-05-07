
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>
<?php 
$servername = "sql305.epizy.com";
$username = "epiz_33240667";
$password = "1WYuX6PvCL";
$database = "epiz_33240667_management";


$conn = mysqli_connect($servername , $username, $password,$database);

// if($conn){

//     echo("sucess");
// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
$iName = $_POST["iName"];
$specs = $_POST["specs"];
$price = $_POST["price"];
$sql = "INSERT INTO `contents` (`iName`, `specs`, `price`) VALUES ('$iName', '$specs', '$price')";
$result = mysqli_query($conn, $sql);
$insert=1;
// if($result){
// echo "inserted";

// }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Items</title>


   
  </head>
  <body>
  
  <?php include 'navbar.php';  ?>
  <?php 
if($insert==1){

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Item Added Sucessfully!!!</strong>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";

}

?>
<div class="my-4 container">


<form action="./add.php" method="POST">
    <div class="mb-9 container">
      <label for="iName" class="form-label">Item Name</label>
      <input  class="form-control" id="iName" name="iName" aria-describedby="emailHelp">
      </div>

      <div class="mb-9 container">
      <label for="specs" class="form-label">Specification</label>
      <input  class="form-control" id="specs" name="specs">
    </div>

 

    <div class="mb-9 container">
      <label for="price" class="form-label">price</label>
      <input  class="form-control" id="price"   name="price">
    </div>

   

      

    <button type="submit" class="mb-9 my-3 btn btn-primary">Add</button>
  </form>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
