
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
    
}


?>
<?php include 'connection.php';  ?>
<?php 

// $insert = false;
// $update = false;
// $delete = true; 



  // if($delete){
  //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  //   <strong>Success!</strong> Your note has been deleted successfully
  //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  //     <span aria-hidden='true'>×</span>
  //   </button>
  // </div>";
  // }
  
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
// if (isset( $_POST['snoEdit'])){
//   // Update the record
//     $sno = $_POST["snoEdit"];
//     $title = $_POST["titleEdit"];
//     $description = $_POST["descriptionEdit"];

//   // Sql query to be executed
//   $sql = "UPDATE `` SET `title` = '$title' , `description` = '$description' WHERE ``.`sno` = $sno";
//   $result = mysqli_query($conn, $sql);
//   if($result){
//     $update = true;
// }
// else{
//     echo "We could not update the record successfully";
// }
// }
// }
// ?>
<!-- 
<?php
  if($insert){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been inserted successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?>
  
  <?php
  if($update){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>×</span>
    </button>
  </div>";
  }
  ?> -->
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


    <title>Editing</title>

  </head>
  <body>
    <!-- edit modal modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="edit">
  Update
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="#editModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editlable">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form action="/PROJECT/edit.php" method="POST">
    <div class="mb-9 container">
      <label for="iName" class="form-label">Item Name</label>
      <input  class="form-control" id="iNameEdit" name="iNameEdit" aria-describedby="emailHelp">
      </div>

      <div class="mb-9 container">
      <label for="specs" class="form-label">Specification</label>
      <input  class="form-control" id="specsEdit" name="specsEdit">
    </div>

  

    <div class="mb-9 container">
      <label for="price" class="form-label">price</label>
      <input  class="form-control" id="priceEdit"  name="priceEdit">
    </div>

   
<div class="my-3">
    <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
    <!-- <button type="submit" class="mb-9 my-3 btn btn-primary">Add</button> -->
  </form>






      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
  <?php include 'navbar.php';  ?>
<div class="container my-3">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Item name</th>
      <th scope="col">Specification</th>
     
      <th scope="col">Price</th>
      
      <th scope="col">Date</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    
    
    <?php
$sql = "SELECT * FROM `contents`";
$result = mysqli_query($conn, $sql);
$sno=0;
$totalDredit=0;
while($row = mysqli_fetch_assoc($result)){
    // $sno=$sno+1;
    $sno=$row['id'];
  echo "<tr>
  
      <th scope='row'>".$row['id']."</th>
      <td>".$row['iName']."</td>
      <td>".$row['specs']."</td>
     
      <td>".$row['price']."</td>
      <td>".$row['dt']."</td>
      
    <td>
<button class='text-light btn btn-primary edit'><a>Update</a></button>
<button class='btn btn-danger'><a href='delete.php?delete=$sno'class='text-light' style='text-decoration:none'>Delete</a></button>

    </td>
      </tr>";
      $totalDredit=$totalDredit+$row['price'];
  }
    ?>
    </tbody>
    </table>

</div>
<div class="container text-center">
<?php
echo "Total Dedit : $totalDredit";
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <script>

edits = document.getElementsByClassName('edit');
Array.from(edits).forEach((element)=>{
element.addEventListener("click",(e)=>{
console.log("edit",);
tr = e.target.parentNode.parentNode;
itemName = tr.getElementsByTagName("td")[0].innerText;
Specifications = tr.getElementsByTagName("td")[1].innerText;

price = tr.getElementsByTagName("td")[3].innerText;

// console.log(itemName);
iNameEdit.value = itemName;
specsEdit.value = Specifications;

priceEdit.value = price;

$('#editModal').modal('toggle');
})

})


// deletes = document.getElementsByClassName('delete');
//     Array.from(deletes).forEach((element) => {
//       element.addEventListener("click", (e) => {
//         console.log("edit");
//         sno = e.target.id.substr(1);

//         if (confirm("Are you sure you want to delete this note!")) {
//           console.log("yes");
//           window.location = `/project/edit.php?delete=${sno}`;
//           // TODO: Create a form and use post request to submit a form
//         }
//         else {
//           console.log("no");
//         }
//       })
//     })

</script>


  </body>
</html>
