<?php require "components/validate.php" ?>
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "components/connect.php";
    $subject = $_POST["subject"];
    $year = $_POST["year"];
    $paper = $_POST["paper"];
    $link = $_POST["link"];


 
$sql = "INSERT INTO `2021` ( `subjects`, `years`,`paper`,`link`) VALUES ('$subject','$year', '$paper','$link')";
$result = mysqli_query($conn, $sql);
    
}

?>

<?php require "components/indexphp.php" ?>
<?php require "components/header.php" ?>
<?php require "components/adminnav.php" ?>
    <title>PYQ Manager</title>
  </head>
  <body>
    <h1 class="text-center m-2">Welcome Administrator</h1>

    <div class="shadow p-3 mb-5 bg-body rounded">
        
    <form action="admin.php" method="get" id="form1" class="container">
<label for="" class="text-dark">Select Subject</label>
<select class="form-select c" aria-label="Default select example" name="branch">

  <option value="1">Civil Engineering</option>
  <option value="2">Mechanical Engineering</option>
  <option value="3">Electronics & Telecommunication Engineering</option>
  <option value="4">Computer Science & Engineering</option>
  <option value="5">Computer Science & Engineering (AI & ML)</option>
</select>


<label for="" class="text-dark">Select Year</label>
<select class="form-select c" aria-label="Default select example" name="year">

  <option value="1">First Year</option>
  <option value="2">Second Year</option>
  <option value="3">Third Year</option>
  <option value="4">Fourth Year</option>
</select>

<label for="" class="text-dark font-weight-bold">Select semester</label>
<select class="form-select" aria-label="Default select example" name="semester">

  <option value="1">First Semester</option>
  <option value="2">Second Semester</option>
</select>

<button type="submit"name="submit" class="my-3 btn btn-primary">Get Subjects</button>
</form>



<form action="admin.php" id="form2" style="display:none;" class="container" method="POST">

<label for="" class="text-dark font-weight-bold">Select Subject</label>
<select class="form-select" aria-label="Default select example" name="subject">
<?php 
 foreach ($subject as $value) { ?>
    <option value="<?php   echo "$value"; ?>"><?php   echo "$value"; ?></option>
    <?php }?>
  </select>

  <label for="" class="text-dark">Select Exam</label>
<select class="form-select c" aria-label="Default select example" name="paper">

  <option value="1">CT1</option>
  <option value="2">Midsem</option>
  <option value="3">CT2</option>
  <option value="4">Endsem_Regular</option>
  <option value="5">Endsem_improvement</option>
</select>



  <label for="" class="text-dark">Select Year</label>
<select class="form-select c" aria-label="Default select example" name="year">

  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
</select>

<label for="link">Enter Link Here</label>
<input type="text" name="link" class="form-control">


    

<button type="submit" name="addlink" class="my-3 btn btn-primary">Add Link</button>
 
 </form>




<?php require "components/footer.php" ?>