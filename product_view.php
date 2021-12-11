<?php 
include './config.php';
if(isset($_POST['loc'])){
    $loc = $_POST['loc'];
    $id = $_POST['id'];
    //print_r($loc);print_r($id);
    $sql = "SELECT * FROM $loc WHERE id=$id";
    $result = $conn->query($sql);

    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row){
    $front_img = $row['front_img'];
    $back_img = $row['back_img'];
    $left_img = $row['left_img'];
    $right_img = $row['right_img'];
    $inner_front_img = $row['inner_front_img'];
    $inner_back_img = $row['inner_back_img'];
    $name = $row['vehicle_name'];
    $price = $row['price'];
    $model = $row['model'];
    $year = $row['year_of_manufacture'];
    $fuel = $row['fuel'];
    $traveled_distance = $row['traveled_distance'];
    $owner = $row['owner'];
    $state = $row['state'];
    $city = $row['city'];
    $posting_date = $row['posting_date'];
    $description = $row['description'];
    $category_location = $row['category_location'];
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container-fluid img-thumbnail" style="border-radius: 0px;background: #fffafa;box-shadow:  39px 39px 78px #cfcbcb, -39px -39px 78px #ffffff;margin-top:20px;">
    <div class="row">

        <div class="col-md-3 order-md-1 order-2">
            <div class="project-info-box">
                <p><b>Model:</b> <?php echo $model; ?></p>
                <p><b>Year:</b> <?php echo $year; ?></p>
                <p><b>Fuel:</b> <?php echo $fuel; ?></p>
                <p><b>Owner:</b> <?php echo $owner; ?></p>
                <p class="mb-0"><b>Traveled Distrance:</b> <?php echo $traveled_distance; ?> Km</p>
            </div><!-- / project-info-box -->
            <div class="project-info-box mt-0">
                <h5>DETAILS</h5>
                <p class="mb-0"><?php echo $description ?></p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-9 order-md-2 order-1 mt-3" id="vehicle_dnone">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-thumbnail" src="./images/<?php echo $front_img ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="./images/<?php echo $back_img ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="./images/<?php echo $left_img ?>" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="./images/<?php echo $right_img ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>          <div class="project-info-box">
                <p><b>₹</b> <?php echo $price ?></p>
                <p><b>Brand:</b> <?php echo $name ?></p>
                <p><b>Location:</b> <?php echo $city ?>, <?php echo $state ?></p>
                <button class="btn_makeoffer" id="btn_makeoffer"> Make Offer</button>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-9 order-md-2 order-1 mt-3" id="view_offer"></div>
    </div>
</div>



<?php 

    }
}
?>