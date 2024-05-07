<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "components/connect.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];
   


 
$sql = "INSERT INTO `feedback` ( `name`, `email`,`feedback`) VALUES ('$name','$email', '$feedback')";
$result = mysqli_query($conn, $sql);
    
}

?>