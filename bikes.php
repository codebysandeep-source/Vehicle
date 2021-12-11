<?php   
include "./config.php";
$sql = "SELECT * FROM bike";
$result = $conn->query($sql);
$count = $result->rowCount();
if($count > 0){
?>
<section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>BIKES</strong></h4>

    <div class="row">
<?php
    include "./function/products_function.php";
    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row){
      $front_img = $row['front_img'];
      $name = $row['vehicle_name'];
      $price = $row['price'];
      $category_location = $row['category_location'];
      $id = $row['id'];
      $year_of_manufacture = $row['year_of_manufacture'];
      $traveled_distance = $row['traveled_distance'];
      $model = $row['model'];
      $state = $row['state'];
      $city = $row['city'];
      $posting_date = $row['posting_date'];
                
      products_function($front_img,$name,$price,$state,$city,$category_location,$id,$year_of_manufacture,$traveled_distance,$model,$posting_date);
  }
}
else{
  echo"<h3>No Records Found!</h3>";
}
?>
</div>
  </div>
</section>