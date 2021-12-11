<?php 
include "./config.php";
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $sql = "SELECT * FROM car WHERE vehicle_name like '%{$search}%'
    UNION SELECT * FROM bike WHERE vehicle_name like '%{$search}%'
    ";
    $result = $conn->query($sql);
    $count = $result->rowCount(); 
if($count > 0){
?>

<!-- products section -->
<!-- <section id="products"> -->
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">Searched Products - Showing <?php echo $count ?> results</div>
        </div>
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
        ?>
        <?php }
        else{ ?>
        <h4 class="notfound"></h4>
        <script>
        $(document).ready(function() { 
          $("#filter_dnone").css("display","none");
        });
        </script> 

        <?php }
          }
        ?>
        </div>
        </div>
    </div>
<!-- </section> -->
