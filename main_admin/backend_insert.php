<?php

include '../config.php';

if(isset($_POST['insert_submit'])){
    $vehicle_type = $_POST['vehicle_type'];

    // $front_image = $_POST['front_image'];
    // $back_image = $_POST['back_image'];
    // $left_image = $_POST['left_image'];
    // $right_image = $_POST['right_image'];
    // $front_inner_image = $_POST['front_inner_image'];
    // $back_inner_image = $_POST['back_inner_image'];

    $name = $_POST['name'];
    $model = $_POST['model'];
    $price = $_POST['price'];

    $owner_type = $_POST['owner_type'];

    $fuel_type = $_POST['fuel_type'];

    $year_manufacture = $_POST['year_manufacture'];
    $traveled = $_POST['traveled'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $description = $_POST['description'];

    $p_date = date('d/m/y');

    if($vehicle_type == "Car"){

        $front_image = "../images/cars/";  
        $front_image = $front_image.basename( $_FILES['front_image']['name']);  
          if(move_uploaded_file($_FILES['front_image']['tmp_name'], $front_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Front_Image not Inserted');</script>");}
        
          $back_image = "../images/cars/";  
        $back_image = $back_image.basename( $_FILES['back_image']['name']);  
          if(move_uploaded_file($_FILES['back_image']['tmp_name'], $back_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Back_Image not Inserted');</script>");}
        
          $left_image = "../images/cars/";  
        $left_image = $left_image.basename( $_FILES['left_image']['name']);  
          if(move_uploaded_file($_FILES['left_image']['tmp_name'], $left_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Left_Image not Inserted');</script>");}
        
          $right_image = "../images/cars/";  
        $right_image = $right_image.basename( $_FILES['right_image']['name']);  
          if(move_uploaded_file($_FILES['right_image']['tmp_name'], $right_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Right_Image not Inserted');</script>");}
        
          $front_inner_image = "../images/cars/";  
        $front_inner_image = $front_inner_image.basename( $_FILES['front_inner_image']['name']);  
          if(move_uploaded_file($_FILES['front_inner_image']['tmp_name'], $front_inner_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Front_Inner_Image not Inserted');</script>");}
        
          $back_inner_image = "../images/cars/";  
        $back_inner_image = $back_inner_image.basename( $_FILES['back_inner_image']['name']);  
          if(move_uploaded_file($_FILES['back_inner_image']['tmp_name'], $back_inner_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Back_Inner_Image not Inserted');</script>");}
    
        $result = $conn->query("INSERT INTO car(front_img,back_img,left_img,right_img,inner_front_img,inner_back_img,vehicle_name,price,model,year_of_manufacture,fuel,traveled_distance,owner,state,city,posting_date,description)
         VALUES('$front_image','$back_image','$left_image','$right_image','$front_inner_image','$back_inner_image','$name','$price','$model','$year_manufacture','$fuel_type','$traveled','$owner_type','$state','$city','$p_date','$description')");
        echo "<script> alert('Data Inserted Successfully!'); window.location.href='./index.php'; </script>";
    }

    else if($vehicle_type == "Bike"){

        $front_image = "../images/bikes/";  
        $front_image = $front_image.basename( $_FILES['front_image']['name']);  
          if(move_uploaded_file($_FILES['front_image']['tmp_name'], $front_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Front_Image not Inserted');</script>");}
        
          $back_image = "../images/bikes/";  
        $back_image = $back_image.basename( $_FILES['back_image']['name']);  
          if(move_uploaded_file($_FILES['back_image']['tmp_name'], $back_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Back_Image not Inserted');</script>");}
        
          $left_image = "../images/bikes/";  
        $left_image = $left_image.basename( $_FILES['left_image']['name']);  
          if(move_uploaded_file($_FILES['left_image']['tmp_name'], $left_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Left_Image not Inserted');</script>");}
        
          $right_image = "../images/bikes/";  
        $right_image = $right_image.basename( $_FILES['right_image']['name']);  
          if(move_uploaded_file($_FILES['right_image']['tmp_name'], $right_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Right_Image not Inserted');</script>");}
        
          $front_inner_image = "../images/bikes/";  
        $front_inner_image = $front_inner_image.basename( $_FILES['front_inner_image']['name']);  
          if(move_uploaded_file($_FILES['front_inner_image']['tmp_name'], $front_inner_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Front_Inner_Image not Inserted');</script>");}
        
          $back_inner_image = "../images/bikes/";  
        $back_inner_image = $back_inner_image.basename( $_FILES['back_inner_image']['name']);  
          if(move_uploaded_file($_FILES['back_inner_image']['tmp_name'], $back_inner_image)) { } 
          else{ echo ("<script LANGUAGE='JavaScript'>window.alert('Back_Inner_Image not Inserted');</script>");}
    
        $result = $conn->query("INSERT INTO bike(front_img,back_img,left_img,right_img,inner_front_img,inner_back_img,vehicle_name,price,model,year_of_manufacture,fuel,traveled_distance,owner,state,city,posting_date,description)
         VALUES('$front_image','$back_image','$left_image','$right_image','$front_inner_image','$back_inner_image','$name','$price','$model','$year_manufacture','$fuel_type','$traveled','$owner_type','$state','$city','$p_date','$description')");
        echo "<script> alert('Data Inserted Successfully!'); window.location.href='./index.php'; </script>";
    }

}

?>