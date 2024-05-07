
<?php require "components/feedbackphp.php" ?>
<?php require "components/indexphp.php" ?>
<?php require "components/header.php" ?>
<?php require "components/nav.php" ?>
    <title>PYQ</title>
  </head>
  <body>
  <h2 class="text-center">Enter Feedback here</h2>
<form class="container" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="password" name="name"class="form-control" id="exampleInputPassword1">
  </div>

 <label for="feedback" class="form-label">feedback</label>
  <div class="mb-3">
<textarea name="feedback" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php require "components/footer.php" ?>


    

