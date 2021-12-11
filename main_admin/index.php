<!doctype html>
    <html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>MAIN ADMIN (Vehicle)</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
  rel="stylesheet"
/>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
  <body oncontextmenu='return false' class='snippet-body'>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
></script>
  <div class="container-fluid px-0">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-12">
            <div class="card card0">
                <div class="d-flex" id="wrapper">
                    <!-- Sidebar -->
                    <div class="bg-light border-right" id="sidebar-wrapper">
                        <div class="sidebar-heading pt-5 pb-4"><strong>VEHICLE - MAIN ADMIN </strong></div>
                        <div class="list-group list-group-flush"> 
                            <a data-toggle="tab" href="#menu2" id="tab2" class="tabs list-group-item bg-light ">
                                <div class="list-div my-2">
                                    <div class="fa fa-home"></div> &nbsp;&nbsp; Home
                                </div>
                            </a>
                            <a data-toggle="tab" href="#menu1" id="tab1" class="tabs list-group-item active1 bg-light ">
                                <div class="list-div my-2">
                                    <div class="fa fa-database"></div> &nbsp;&nbsp; Insert Products
                                </div>
                            </a> 
                             <a data-toggle="tab" href="#menu3" id="tab3" class="tabs list-group-item bg-light">
                                <div class="list-div my-2">
                                    <!-- <div class="fa fa-qrcode"></div> &nbsp;&nbsp;&nbsp; Visa QR <span id="new-label">NEW</span> -->
                                </div>
                            </a> </div>


                    </div> <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="row pt-3">
                            <div class="col-12">
                                <button class="btn btn-success right-3" id="menu-toggle">Menu</button>                                
                            </div>
                        </div>
                        <br/><br/>

                        <div class="tab-content">
                            <div id="menu1" class="tab-pane in active">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <h3 class="mt-0 mb-4 text-center">Insert Products</h3>
                                            <form action="backend_insert.php" enctype='multipart/form-data' method="POST">
                                                <div class="row p-2 pb-3" style="border:1px solid lightgrey;">
                                                    <div class="col-12">
                                                <b>Select the Vehicle </b>
                                                <select name="vehicle_type" class="mdb-select md-form form-control" searchable="Search here..">
                                                    <option selected disabled>Select the Vehicle</option>
                                                    <option value="Car">Car</option>
                                                    <option value="Bike">Bike</option>
                                                </select> 
                                                    </div>
                                                </div>

                                                <div class="row mt-5" style="border:1px solid lightgrey;">
                                                <b>Upload the Images </b>
                                                <?php include './upload_img.php'; ?> 
                                                </div>

                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Vehicle Name </b>
                                                <input type="text" name="name" class="form-control" placeholder="Enter the Vehicle Name"/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Vehicle Model </b>
                                                <input type="text" name="model" class="form-control" placeholder="Enter the Vehicle Model"/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Price </b>
                                                <input type="text" name="price" class="form-control" placeholder="Enter the Price"/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Select the Owner </b>
                                                <select name="owner_type" class="mdb-select md-form form-control" searchable="Search here..">
                                                    <option selected disabled>Select the Owner</option>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
                                                    <option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
                                                </select>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Select the Fuel </b>
                                                <select name="fuel_type" class="mdb-select md-form form-control" searchable="Search here..">
                                                    <option selected disabled>Select the Fuel</option>
                                                    <option value="Petrol">Petrol</option>
                                                    <option value="Diesel">Diesel</option>
                                                </select>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Year of Manufacture </b>
                                                <input type="text" name="year_manufacture" class="form-control" placeholder="Enter the Year of Manufacture"/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Vehicle Traveled (Km)  </b>
                                                <input type="text" name="traveled" class="form-control" placeholder="Enter the Vehicle Traveled (Km) "/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>State </b>
                                                <input type="text" name="state" class="form-control" placeholder="Enter the State"/>
                                                </div>
                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>City </b>
                                                <input type="text" name="city" class="form-control" placeholder="Enter the City"/>
                                                </div>

                                                <div class="row mt-5 pb-0" style="border:1px solid lightgrey;">
                                                <b>Description </b>
                                                <textarea class="form-control" name="description" placeholder="Enter the description" rows="3"></textarea>
                                                </div>

                                                <div class="row mt-5 pb-0" style="float:right;">
                                                <input type="submit" name="insert_submit" class="btn btn-success " style="width:100px;height:40px;line-height:-2px;" value="Submit"/>
                                                </div>
                                                
                                            </form>
    <br/><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="menu2" class="tab-pane in">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <div class="form-card">
                                            <div><b>HOME</b></div>
                                            <!-- <h3 class="mt-0 mb-4 text-center">Enter your card details to pay</h3>
                                            <form onsubmit="event.preventDefault()">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-group"> <input type="text" name="" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>CARD NUMBER</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> <label>CARD EXPIRY</label> </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group"> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12"> <input type="submit" value="Pay $ 100" class="btn btn-success placeicon"> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="text-center mb-5" id="below-btn"><a href="#">Use a test card</a></p>
                                                    </div>
                                                </div>
                                            </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div id="menu3" class="tab-pane">
                                <div class="row justify-content-center">
                                    <div class="col-11">
                                        <h3 class="mt-0 mb-4 text-center">Scan the QR code to pay</h3>
                                        <div class="row justify-content-center">
                                            <div id="qr"> <img src="https://i.imgur.com/DD4Npfw.jpg" width="200px" height="200px"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'>$(document).ready(function(){
//Menu Toggle Script
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});

// For highlighting activated tabs
$("#tab1").click(function () {
$(".tabs").removeClass("active1");
$(".tabs").addClass("bg-light");
$("#tab1").addClass("active1");
$("#tab1").removeClass("bg-light");
});
$("#tab2").click(function () {
$(".tabs").removeClass("active1");
$(".tabs").addClass("bg-light");
$("#tab2").addClass("active1");
$("#tab2").removeClass("bg-light");
});
$("#tab3").click(function () {
$(".tabs").removeClass("active1");
$(".tabs").addClass("bg-light");
$("#tab3").addClass("active1");
$("#tab3").removeClass("bg-light");
});
})</script>
                                </body>
                            </html>