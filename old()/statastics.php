<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
    
}


?>
<?php include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->

    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Document</title>
</head>
<body>
  <?php include 'navbar.php';  ?>

<div class="container my-4">
<div class="row">

  <?php
$sql = "SELECT * FROM `credits`";
$result = mysqli_query($conn, $sql);
$sno=0;
$totalcredit=0;
while($row = mysqli_fetch_assoc($result)){
    $totalcredit=$totalcredit+$row['amount'];
  }
    ?>
    
    <div class="col-sm-4">  
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Credit</div>
  <div class="card-body">
    <h5 class="card-title"><?php echo "Total credit : $totalcredit"; ?></h5>
    
  </div>
</div>
</div>






   <?php
$sql = "SELECT * FROM `contents`";
$result = mysqli_query($conn, $sql);
$sno=0;
$totalDedit=0;
while($row = mysqli_fetch_assoc($result)){
    $totalDedit=$totalDedit+$row['price'];
  }
    ?>
    
    <div class="col-sm-4">  
    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Debit</div>
  <div class="card-body">
    <h5 class="card-title"><?php
echo "Total Dedit : $totalDedit";
?></h5>
    
  </div>
</div>
</div>


<?php $balance=$totalcredit-$totalDedit?>


<div class="col-sm-4">  
<div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Balance</div>
  <div class="card-body">
    <h5 class="card-title"><?php
echo "Total Balance : $balance";
?></h5>
    
  </div>
</div>
</div>




</div>
</div>

<hr>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>
</html>