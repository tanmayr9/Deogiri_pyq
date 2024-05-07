
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

$conn = mysqli_connect($servername,$username,$password,$database);

// if($conn){

//     echo("sucess");
// }else
// {
// echo("not_sucess");
// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
$source = $_POST["source"];
$amount = $_POST["amount"];

$sql = "INSERT INTO `credits` (`source`, `amount`) VALUES ('$source', '$amount')";
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

    <title>Add Credits</title>


   
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


<form action="./addcredits.php" method="POST">
    <div class="mb-9 container">
      <label for="source" class="form-label">Source of Credit</label>
      <input  class="form-control" id="source" name="source" aria-describedby="emailHelp">
      </div>

      <div class="mb-9 container">
      <label for="amount" class="form-label">Amount</label>
      <input  class="form-control" id="amount" name="amount">
    </div>



   

      

    <button type="submit" class="mb-9 my-3 btn btn-primary">Add</button>
  </form>
</div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>
