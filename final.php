<?php require "components/connect.php" ?>

<?php require "components/finalphp.php" ?>

<?php require "components/header.php" ?>
<?php require "components/nav.php" ?>
<title>PYQ</title>
<style>
  body {
    color: rgb(169, 101, 233);
  }
  
  a {
    text-decoration: none;
    color: darkorchid;
    font-size: larger;
  }
</style>
</head>

<body>

  <div class="container" style=" margin-top: 130px;">
    <div class="shadow p-2 mb-5 bg-white rounded row">
      <h3 class="text-center col-8 mt-auto mb-auto">Class Test 1</h3>

      <div class="text-center col-3">
        <?php
        $sql1 = "SELECT * FROM `2021` WHERE subjects='{$subject}' AND years= '{$year1}' AND paper=1";
        $result = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_assoc($result)) {
          $link = $row['link']; ?>
          <a href="<?php echo "$link"; ?>">Get paper
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z" />
            </svg>
        </a><br>
        <?php } ?>

      </div>

    </div>


    <div class="shadow p-3 mb-5 bg-white rounded row">
      <h3 class="text-center col-8">Mid Sem</h3>
      <div class="text-end col-3">
        <?php
        $sql2 = "SELECT * FROM `2021` WHERE subjects='{$subject}' AND years= '{$year1}' AND paper=2";
        $result = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_assoc($result)) {
          $link = $row['link']; ?>

          <a href="<?php echo "$link"; ?>">Get paper <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z" />
            </svg> </a><br>
        <?php } ?>
      </div>

    </div>

    <div class="shadow p-3 mb-5 bg-white rounded row">
      <h3 class="text-center col-8">Class Test 1</h3>
      <div class="text-center col-3">
        <?php
        $sql3 = "SELECT * FROM `2021` WHERE subjects='{$subject}' AND years= '{$year1}' AND paper=3";
        $result = mysqli_query($conn, $sql3);
        while ($row = mysqli_fetch_assoc($result)) {
          $link = $row['link']; ?>
          <a href="<?php echo "$link"; ?>">Get paper <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z" />
            </svg></a><br>
        <?php } ?>
      </div>

    </div>


    <div class="shadow p-3 mb-5 bg-white rounded row">
      <h3 class="text-center col-8">End Sem Regular</h3>
      <div class="text-center col-3">
        <?php
        $sql4 = "SELECT * FROM `2021` WHERE subjects='{$subject}' AND years= '{$year1}' AND paper=4";
        $result = mysqli_query($conn, $sql4);
        while ($row = mysqli_fetch_assoc($result)) {
          $link = $row['link']; ?>
          <a href="<?php echo "$link"; ?>">Get paper<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z" />
            </svg></a><br>
        <?php } ?>
      </div>

    </div>

    <div class="shadow p-3 mb-5 bg-white rounded row">
      <h3 class="text-center col-8">End Sem Improvement</h3>
      <div class="text-center col-3">
        <?php
        $sql4 = "SELECT * FROM `2021` WHERE subjects='{$subject}' AND years= '{$year1}' AND paper=5";
        $result = mysqli_query($conn, $sql4);
        while ($row = mysqli_fetch_assoc($result)) {
          $link = $row['link']; ?>
          <a href="<?php echo "$link"; ?>">Get paper<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-square-fill" viewBox="0 0 16 16">
              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5a.5.5 0 0 1 1 0z" />
            </svg></a><br>
        <?php } ?>
      </div>

    </div>


  </div>




  <?php require "components/footer.php" ?>