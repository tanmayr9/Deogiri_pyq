<?php require "components/validate.php" ?>
<?php require "components/connect.php" ?>
<?php require "components/indexphp.php" ?>
<?php require "components/header.php" ?>
<?php require "components/adminnav.php" ?>
    <title>PYQ</title>
  </head>
  <body>


<div class="container my-3">
  <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Feedback</th>    
      
    </tr>
  </thead>
  <tbody>
    
    
    <?php
$sql = "SELECT * FROM `feedback`";
$result = mysqli_query($conn, $sql);
$sno=0;
while($row = mysqli_fetch_assoc($result)){
    $sno=$sno+1;
    
  echo "<tr>
  
      <th scope='row'>".$sno."</th>
      <td>".$row['name']."</td>
      <td>".$row['email']."</td>
      <td>".$row['feedback']."</td>
    </tr>";
  }
    ?>
    </tbody>
    </table>

</div>

<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">

</script>

    <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php require "components/footer.php" ?>


    

