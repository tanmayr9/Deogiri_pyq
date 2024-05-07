
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
    
}


?>
<?php include 'connection.php';  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


    <title>Credits</title>

  </head>
  <body>

  <?php include 'navbar.php';  ?>
<div class="container my-3">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">source</th>
      <th scope="col">Amount</th>
     
      <th scope="col">DATE</th>
      
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    
    
    <?php
$sql = "SELECT * FROM `credits`";
$result = mysqli_query($conn, $sql);
$sno=0;
$totalcredit=0;
while($row = mysqli_fetch_assoc($result)){
    // $sno=$sno+1;
    $sno=$row['sno'];
  echo "<tr>
  
      <th scope='row'>".$row['sno']."</th>
      <td>".$row['source']."</td>
      <td>".$row['amount']."</td>
      <td>".$row['dt']."</td>
      
    <td>
<button class='text-light btn btn-primary edit'><a>Update</a></button>
<button class='btn btn-danger'><a href='delete1.php?delete=$sno'class='text-light' style='text-decoration:none'>Delete</a></button>

    </td>
      </tr>";
      $totalcredit=$totalcredit+$row['amount'];
  }
    ?>
    </tbody>
    </table>

</div>
<div class="container text-center">
<?php
echo "Total Credit : $totalcredit";
?>
</div>
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
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
    

  </body>
</html>
