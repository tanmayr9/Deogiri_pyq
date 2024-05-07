<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}


?>
<?php
// $delete=0;
include 'connection.php';

if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $sql = "delete from `credits` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
}
if($result){
    // $delete = true;
    header('location:credits.php');


}
?>