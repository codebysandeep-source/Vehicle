
<!-- products section -->
<section id="products">
    <div class="container">
        <div class="d-flex flex-row">
            <div class="text-muted m-2" id="res">HOME</div>
            <div class="ml-auto mr-lg-4">
                <div id="sorting" class="border rounded p-1 m-1"> <span class="text-muted">Location : </span> 
                    <select name="sort" id="sort">
                        <option value="popularity"><b>Sikkim</b></option>
                        <option value="prcie"><b>West Bengal</b></option>
                        <option value="rating"><b>Utter Pradesh</b></option>
                    </select> 
                </div>
            </div>
        </div>



        <!-- ================ CARS ============== -->
        <div class="row" style="background: #ffffff;box-shadow: inset 5px 5px 15px #e6e6e6,inset -5px -5px 15px #ffffff;">
            <div class="col-11 ml-3 d-flex m-1 mt-3" style="border-bottom: 1px solid #000;">  
            <h5 style="width: 95%;">CARS</h5>
            <button class="btn">View All <i class="fa fa-external-link"></i></button>
            </div>
        <?php
            $sql = "SELECT * FROM car";
            $result = $conn->query($sql);
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
        </div>
        <!-- ================ //CARS ============== -->

        <!-- ================ BIKES ============== -->
        <div class="row" style="background: #ffffff;box-shadow: inset 5px 5px 15px #e6e6e6,inset -5px -5px 15px #ffffff;">
            <div class="col-11 ml-3 d-flex m-1 mt-3" style="border-bottom: 1px solid #000;">  
            <h5 style="width: 95%;">BIKES</h5>
            <button class="btn">View All <i class="fa fa-external-link"></i></button>
            </div>
        <?php
            $sql1 = "SELECT * FROM bike";
            $result1 = $conn->query($sql1);
            foreach($result1->fetchAll(PDO::FETCH_ASSOC) as $row){
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
        </div>
        <!-- ================ //BIKES ============== -->








        </div>
    </div>
</section>

     


      
   