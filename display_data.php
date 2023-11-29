<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Latest compiled Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Latest compiled W3CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Abel:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <title>Globe Tech Cyber</title>
    <style>
        body {
            background: url('assets/images/bg4.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-color: black;
        }

        .containerneon {
        background-color: #4158D0;
        background-image: linear-gradient(43deg, #4d0863 0%, #cc14c0 46%, #f0ad30 100%); 
        filter: brightness(120%);
        width: 50%;
        }

        .containerneon:before {
        z-index:-1;
        position: absolute;
        content:"";
        width:230px;
        height:230px;
        left:10px;
        top:0;
        background-image: linear-gradient(43deg, #3d1068 0%, #C850C0 46%, #d8951a 100%); 
        filter: blur(20px);
        
        }

        .card:before {
        z-index:-1;
        position: absolute;
        content:"";
        width:100%;
        height:100%;
        left:10px;
        top:0;
        background-image: linear-gradient(43deg, #3d1068 0%, #C850C0 46%, #d8951a 100%); 
        filter: blur(20px);
        
        }

        .gradient {
        background-color: #0b090a;
        color: white; 
        font-size: 35px;
        font-family: arial;
        text-align: left;
        padding-left: 35px;
        }
        .mobiledash {
            display: inline-flex;
        }
        .bgp {
            background: url('assets/images/popular.png');
            background-size: cover;
        }
    </style>
</head>
<?php
// Database connection details
$servername = "127.0.0.1";
$username = "globetechdb";
$password = "globeTech";
$dbname = "globetech";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID from the session variable
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];

    // SQL query to retrieve data from the "cases" table for the given ID
    $sql = "SELECT id, amount, platform, status, name FROM cases WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data in a table format
        $row = $result->fetch_assoc();
        echo '<div id="header" class="container-fluid p-3" style="background-color: #360b41;">
        <div class="d-flex justify-content-center">
            <img src="assets/images/globetechlogo.png" alt="globetech logo">
        </div>
    </div>
        <section id="dataheader" class="p-5">
        <div class="container">
            <div class="row d-flex justify-content-center p-2">
                <div class="row w3-black" style="background-color: #360b41;">
                    <h3 style="text-transform:capitalize; text-align: center; 
                    margin-top: 20px; margin-bottom: 30px; font-family: abel; color:#fafafa;">
                        globe tech cyber dashboard <i class="fa fa-university" style="font-size:20px;color:rgb(255, 255, 255);"></i>
                    </h3> 
                    <p style="text-align: center; font-family: abel;"> Welcome, ' . $row["name"] . ' <i class="fa fa-user" style="font-size:20px;color:rgb(255, 255, 255);"></i>
                    </p>
                </div>
                <div class="col-sm card m-2 gradient w3-dark-purple d-flex justify-content-center p-5 bgp">
                <h3 style="text-transform:capitalize; text-align: center; 
                margin-top: 20px; margin-bottom: 30px; font-family: abel; color:#fafafa;">
                    All assets are converted to USDT </h3> 
                    <img src="assets/images/teth.png" alt="USDT" width="65px" style="margin: auto;">
            </div>
                <div class="mobiledash">
                    <div class="col-sm card m-2  containerneon gradient" style="width: 50%;">
                        <h5 style="text-transform:capitalize; 
                        margin-top: 30px; margin-bottom: 30px; font-weight: bolder; font-family: abel;">Amount   
                        <i class="fa fa-credit-card" style="font-size:20px;color:rgb(255, 255, 255);"></i>
                        </h5> 
                        <p style="text-align:left; font-family: abel;"> $ ' . number_format($row["amount"]) . ' </p> 
                    </div>
                    <div class="col-sm card m-2 w3-black w3-hover-deep-purple" style="width: 50%; padding-left: 35px;">
                        <h5 style="text-transform:capitalize; text-align: left; 
                        margin-top: 30px; margin-bottom: 30px; font-weight: bolder; font-family: abel;">Case Id  
                        <i class="fa fa-address-card" style="font-size:20px;color:rgb(255, 255, 255);"></i>
                        </h5>
                        <p style="text-align:left; font-family: abel;"> ' . $row["id"] . '</p>
                    </div>
                </div>
                <div class="mobiledash">   
                    <div class="col-sm card m-2 w3-teal w3-hover-deep-purple" style="width: 50%; padding-left: 35px;">
                        <h5 style="text-transform:capitalize; text-align: left; 
                        margin-top: 30px; margin-bottom: 30px; font-weight: bolder; font-family: abel;">Platform
                        <i class="fa fa-window-restore" style="font-size:20px;color:rgb(255, 255, 255);"></i>
                        </h5>
                        <p style="text-align:left; font-family: abel;"> ' . $row["platform"] . '</p>
                    </div>
                    <div class="col-sm card m-2 w3-orange w3-hover-deep-purple" style="width: 50%; padding-left: 35px;">
                        <h5 style="text-transform:capitalize; text-align: left; 
                        margin-top: 30px; margin-bottom: 30px; font-weight: bolder; font-family: abel;">Status
                        <i class="fa fa-spinner fa-spin"></i>
                        </h5>
                        <p style="text-align:left; font-family: abel;"> ' . $row["status"] . ' 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3-sand">
    <div class="container p-5">
        <div class="row d-flex justify-content-center">
        <div class="col-sm botmar">
        <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,74,18579" currency="USD" theme="dark" transparent="false" show-symbol-logo="true"></div>        </div>
        </div>
</section>
<div id="footer" class="container-fluid bg-dark p-3">
     <div class="d-flex justify-content-center">
     <p style="color:white;" class="pt-2"> ©Globe Tech Cyber 2023 </p>
     </div>
</div>';
        
    } else {
        echo '  <div id="header" class="container-fluid p-3" style="background-color: #360b41;">
        <div class="d-flex justify-content-center">
            <img src="assets/images/globetechlogo.png" alt="globetech logo">
        </div>
    </div>
    <section id="dataheader" class="p-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="" style="background-color: #360b41;">
                <h3 style="text-transform:capitalize; text-align: center; 
                margin-top: 30px; margin-bottom: 30px; font-family: montserrat; color:#fafafa;">
                    DashBoard Access Denied 
                </h3>
                </div>
                <div class="col-sm card">
                    <h5 style="text-transform:uppercase; text-align: center; 
                    margin-top: 30px; margin-bottom: 30px; font-weight: bolder; font-family: montserrat; color:#c70202;">
                    Invalid Case ID Provided, Please Try again</h5>
                    <div class="d-flex justify-content-center">
                        <a href="index.php"> 
                            <button class="w3-btn bg-primary w3-round-xxlarge w3-padding-large " style="color:white; margin-bottom: 50px;">
                                GO BACK AND REENTER CASE ID
                            </button>
                        </a> <br>
                        
                    </div> ';  echo "No data found for the ID: $id";'
                </div>
                
            </div>
        </div>
    </section>';
    }
} else {
    echo "Please enter your ID on the previous page.";
}

// Close the database connection
$conn->close();
?>
