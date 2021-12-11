<!-- ============= Database Connection ============== -->
<?php include "./config.php" ?>
<!-- ============= //Database Connection ============== -->
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Vehicle Sale">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Vehicle">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vehicle Shop</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="./css/index_style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- =================== AOS =================== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- =================== //AOS =================== -->
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                               
</head>
<body>
<!-- Jquery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
  AOS.init();
</script>
<!-- ============= Navbar ============== -->
    <?php include "./PHP/navbar.php" ?> 
<!-- ============= //Navbar ============== -->

<!-- <div id="view_product"></div> -->
<!-- _____________________________________ Javascript and JQuery _____________________________________ -->

<!-- ============= View Products Details ============== -->
<script>
function product_view(event,location,id) { 
    $.ajax({
        url:'./product_view.php',
        type:'post',
        data:{loc:location,id:id},
        success:function (data){
            $("#view_product").html(data);
            $('body').css("background", "azure");
            $("#carousel_dnone,#products_dnone,#filter_dnone,#carousel_dnone").css("display","none");
            
        }
    });
 }
</script>
<!-- ============= //View Products Details ============== -->

<!-- ============= View Products Closed ============== -->
<script>
function pview_close() { 
    window.location.href="./index.php";
 }
</script>
<!-- ============= //View Products Closed ============== -->

<!-- ============= Ajax - Search ============== -->
<script>
    $(document).ready(function() { 
        $(document).on("keypress","#search",function () {
            $.ajax({
                url:'./search.php',
                method:'post',
                data:{search:$("#search").val()},
                success:function (data){
                    if(!($('#search').val()) == ""){
						$('#view_product').html(data);
						let $a = $('#products_dnone,#carousel_dnone,#login-dnone');
						$a.css('display','none');
						}
						else{}
                }
            });
        });
     });
</script>
<!-- ============= //Ajax - Search ============== -->

<!-- ============= Categoies ============== -->
<script>
$(document).ready(function(){
        $('input[type="checkbox"]').click(function(){
            if()
            if($(this).is(":checked")){
                alert("Checkbox is checked.");
            }
            else if($(this).is(":not(:checked)")){
                alert("Checkbox is unchecked.");
            }
        });
});

// function cars() {
//     $("#view_product").load("./cars.php");
//     $("#products_dnone").css("display","none"); 
// } 

function bikes() { 
   $("#view_product").load("./bikes.php");
   $("#carousel_dnone,#products_dnone").css("display","none");
}
</script>
<!-- ============= //Categoies ============== -->   
    
<!-- ============= Make Offer ============== -->    
<script>
    $(document).ready(function(){
        
        $(document).on("click touchend","#btn_makeoffer",function(){
            $("#view_offer").load("./PHP/make_offer.php");
            $("#vehicle_dnone").css("display","none");
        });
        $(document).on("click touchend","#make_cancel",function(){
            $("#d_viewproduct").css("display","none");
            window.location.href="./index.php";
        });
    });
    // function btn_makeoffer(){
    //         $("#view_offer").load("./PHP/make_offer.php");
    //         $("#vehicle_dnone").css("display","none");
    //     }
        // function make_cancel(){
        //     $("#vehicle_dnone").css("display","block");
        //     $("#view_offer").css("display","none");
        // }
</script>
<!-- ============= //Make Offer ============== -->    

<!-- ============= Login, Register and Sell ============== -->    
<script>
        function login(){
            $("#show_product").load("./login.php");
            $("#carousel_dnone,#products_dnone,#filter_dnone").css("display","none");
        }
        function login1(){
            $("#show_product").load("./login.php");
            $("#carousel_dnone,#products_dnone,#filter_dnone").css("display","none");
        }
        function register(){
            $("#show_product").load("./register.php");
            $("#carousel_dnone,#products_dnone,#filter_dnone").css("display","none");
        }
        function sansan(){
            $("#mobile-filter").css("display","block");
        }
</script>
<!-- ============= //Login and Sell ============== -->    


<!-- _____________________________________ //Javascript and JQuery _____________________________________ -->


				