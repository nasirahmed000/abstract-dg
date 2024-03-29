<section class="capabilities " id="capabilities">

<div class="container capab ">
  <h3 class="capbilities_heading">CAPABILITIES</h3>
  <p class="capbilities_para">Our team reflects a breadth and depth of experience that underpins our success. <br>
    Our areas of expertise include:</p>
    <div class="row icons">

  <?php 
  if($capabilities->num_rows > 0) {
    while($row = $capabilities->fetch_assoc()) {

  ?>

    <div class="col-lg-3 icon_border icon">
      <img class="img-fluid rocket" src="<?=$row['icon'] ?? ''?>" alt="img">
      <p class="icon_p"><?=$row['title'] ?? ''?></p>
    </div>

  <?php          
    }
  }


  
  ?>

  </div>
  <!-- 1st row start  -->
  <div class="row icons">

    <div class="col-lg-3 col-md-3  icon_border icon">
      <img class="img-fluid rocket" src="images/rocket.svg" alt="img">
      <p class="icon_p">Development Process</p>
    </div>

    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 24.png" alt="img">
      <p class="icon_p">Acquisitions & Assemblages</p>
    </div>

    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 5.png" alt="img">
      <p class="icon_p">Financial Structuring</p>
    </div>
    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 3.png" alt="img">
      <p class="icon_p">Financial Analysis </p>
    </div>

  </div>
  <!-- 1st row end  -->
  <!-- 1st row start  -->
  <div class="row icons">

    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 12.png" alt="img">
      <p class="icon_p">Capital Markets</p>
    </div>
    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Path 86.png" alt="img">
      <p class="icon_p">Investment Evaluation</p>
    </div>
    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 21.png" alt="img">
      <p class="icon_p">Design Process</p>
    </div>
    <div class="col-lg-3   col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 18.png" alt="img">
      <p class="icon_p">Zoning & Entitlements</p>
    </div>

  </div>
  <!-- 1st row end  -->
  <!-- 1st row start  -->
  <div class="row icons">

    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 26.png" alt="img">
      <p class="icon_p">Construction & Consultant Coordination</p>
    </div>
    <div class="col-lg-3  col-md-3 icon_border icon">
      <img class="img-fluid rocket" src="images/Group 23.png" alt="img">
      <p class="icon_p">Marketing & Leasing</p>
    </div>
    <div class="col-lg-3 col-md-3  icon_border icon">
      <img class="img-fluid rocket" src="images/Group 14.png" alt="img">
      <p class="icon_p">Public-Private Relationships</p>
    </div>


  </div>
  <!-- 1st row end  -->
</div>
</section>