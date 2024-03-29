<?php
// db connection 
require "db/connection.php";
// data insert 
$sql = "SELECT * FROM capabilities";
$capabilities = $conn->query($sql);

// print_r($result);exit;
?>
<!doctype html>
<html lang="en">

<head>

  <!-- meta -->

  <!-- icons -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <title>Abstractdg Website</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">

</head>

<body>

  <!-- header start here -->
  <?php

  include  'sections/header.php';

  ?>
  <!-- header end here -->

  <!-- overview section start here -->
  <?php

  include 'sections/overview.php';

  ?>
  <!-- overview section end here -->

  <!-- strategy start here  -->

  <?php

  include 'sections/strategy.php';

  ?>
  <!-- strategy end here  -->

  <!-- capabilities start here  -->
  <?php

  include 'sections/capabilities.php';

  ?>
  <!-- capabilities end here  -->


  <!-- success stories start here  -->
  <?php

  include 'sections/stories.php';

  ?>
  <!-- success stories end here  -->

  <!-- project select start here -->
  <?php

  include 'sections/project.php';

  ?>

  <!-- modal start here  -->

  <!--  Modal start from here-->

 
  <?php

  include 'sections/modal.php';

  ?>

<!-- 2nd model content  -->

  <!-- <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Hide this modal and show the first with the button below.
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div> -->
  


  <!-- modal end here  -->

  <!-- project select end here -->

  <!-- team start here  -->

  <?php

  include 'sections/team.php';

  ?>

  <!-- team end here  -->

  <!-- press start here  -->
  <?php

  include 'sections/press.php';

  ?>
  <!-- press end here  -->

  <!-- abstract start here  -->
  <?php

  include 'sections/abstract.php';

  ?>

  <div class="titlehome"><span> </span></div>

  <!-- abstract end here  -->

  <!-- footer start from here  -->

  <?php
  include 'sections/footer.php';
  ?>
  <!-- footer end here  -->

  <!-- js links -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>