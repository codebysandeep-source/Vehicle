<?php 

 function products_function($front_img,$name,$price,$state,$city,$category_location,$id,$year_of_manufacture,$traveled_distance,$model,$posting_date){
    $elements = "
    <div class=\"col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1\" id=\"productcards\">
    <div class=\"card rounded img-thumbnail\">
        <div class=\"card-image\">
            <a href=\"#view_product\" onclick=\"product_view(event,'$category_location','$id')\" >
            <img class=\"img-fluid imgsan\" src=\"./images/$front_img\" alt=\"Image\" style=\"width:100%;height:200px;max-height:150px;\" />
            </a>
        </div>
        <h5>₹$price</h5>
        <h6>$name - $model</h6>
        <p>$traveled_distance Km , $year_of_manufacture</p>
        <div style=\"height:1px;background:lightgray;width:100%;\"></div>
        <div class=\"d-flex \">
        <p style=\"width:70%;\">$city, $state</p>
        <p>$posting_date</p>
        </div>
    </div>
    </div>
    ";
    echo $elements;
 }

?>