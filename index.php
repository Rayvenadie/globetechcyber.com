<?php
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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Globe Tech Cyber</title>
</head>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize the input data
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    // Store the ID in the session variable
    $_SESSION['user_id'] = $id;

    // Redirect to the new page
    header("Location: display_data.php");
    exit();
}
?>

<body>

<style>
    .subtitle {
    font-family: Lato;
    font-size: 18px;
    color: rgb(245, 123, 239);
    
}
.mycard {
    box-shadow: 5px 5px 5px rgb(202, 202, 202);
    border: 2px solid rgb(211, 211, 211);
    border-radius: 35px;
    color: rgb(71, 71, 71);
  }
   .monthead {
    font-family: montserrat;
    font-weight: bold;
   }
   .topmar {
    margin-top: 50px; 
   }
   .botmar {
    margin-bottom: 30px;
   }
</style>

    <div id="header" class="container-fluid p-3" style="background-color: #360b41;">
        <div class="d-flex justify-content-center">
                <img src="assets/images/globetechlogo.png" alt="globetech logo">
        </div>
    </div>

    <section class="header-img">
    <div class="container p-5">
    <div class="row" style="margin-top: 10%;">
        <div class="col-sm">
        <h1 style="text-transform:capitalize; font-family: montserrat; font-weight: bold; color: white;">
        We Make Wallet, and Crypto Funds Recovery seamless. <br>Never lose your assets again
        </h1>
        <p class="subtitle" style="text-align: left;">
        Locked funds, restricted wallet and other crypto related issues
        </p>
        <div class="">
<a href="#"> <button class="w3-btn w3-round-large w3-padding-large w3-left-align" style="color:white; background-color:#FD4E17; margin-bottom: 160px;">
Report A Case</button></a>
    </div>
        </div>
        
        <div class="col-sm" style="color:white; margin-bottom: 160px;">
        <h2 style="text-transform:capitalize; font-family: montserrat; color: white;" class="">
        Track Your Recovery Case
        </h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">Enter Your Case ID Here:</label>
        <input type="text" name="id" required class="form-control w3-padding-large"><br>

        <input type="submit" value="Submit" class="form-control w3-deep-purple w3-padding-large">
    </form>

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


  <div class="container-fluid bg-light p-5">
        <div class="justify-content-center">
        <h3 class="text-center monthead topmar botmar">You've been scammed?</h2>
        <p class="subtitle text-center" style="color:grey;">
        We offer a recovery service to bypass the decrypted stage of your stolen funds </p>
        <br><br>
        <p class="subtitle p-3" style="text-align: left; color:grey;">
        We have a comprehensive range of services tailored to address all your cryptocurrency-related concerns! When it comes to resolving issues pertaining to the intricate world of cryptocurrencies, rest assured that you can place your trust in our esteemed brand – the industry's most established and renowned blockchain recovery system.

With an unwavering commitment to excellence and a track record of successful retrievals, we take pride in providing effective solutions that cater to your unique needs. Our dedicated professionals possess a profound understanding of blockchain technology, coupled with extensive experience in handling various crypto-related scenarios.

Security and confidentiality lie at the core of our operations. 
<br>
<br>
When you avail yourself of our services, you can be certain that your sensitive information and assets are treated with the utmost respect and safeguarded with stringent measures. Your trust in us is of paramount importance, and we go to great lengths to maintain the highest standards of security and privacy.

Recovering lost funds or accessing locked wallets in the cryptocurrency realm requires an exceptional blend of technical prowess, tenacity, and a profound understanding of the underlying blockchain architecture. 
<br><br>
Our team is armed with cutting-edge tools and methodologies, enabling us to tackle even the most complex situations with utmost precision.

Moreover, we understand that each case is unique, and a one-size-fits-all approach won't yield the desired results. Therefore, we tailor our strategies to suit your specific situation, maximizing the chances of a successful recovery and resolution. Our client-centric approach ensures that you receive personalized attention and support throughout the entire process.

At our core, we are driven by a commitment to fostering trust and confidence in the world of cryptocurrencies. As such, we continuously invest in refining our techniques, staying updated with the latest industry trends, and developing new methodologies to enhance the quality of our services.
 </p>
        </div>
        
<div class="d-flex justify-content-center">
<a href="#"> <button class="w3-btn bg-primary w3-round-xxlarge w3-padding-large" style="color:white;">Track Your Recovery Case</button></a>
    </div>
    </div>
<!--
     Testimonial Slider 
<div id="testimonials" class="d-flex justify-content-center p-5">
<iframe src="testimonial/index.html" frameborder="0" id="testimonialframe" title="Testimonials"></iframe>

</div> -->
<!-- Footer -->

<section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Testimonials</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          See what some our raving clients are saying about us
        </p>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
            <img src="assets/images/stars.png"
                class="" width="100" />
            </div>
            <h5 class="font-weight-bold">Teresa May</h5>
            <h6 class="font-weight-bold my-3">CEO at ET Beverages</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>GlobeTech Cyber recovering my password after a good few months was too good to be true. 
              The team was very patient and understanding..."
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="assets/images/stars.png"
                class="" width="100" />
            </div>
            <h5 class="font-weight-bold">Maggie McLogan</h5>
            <h6 class="font-weight-bold my-3">Photographer at Autumn Studios</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>Great service, immediate responses and top notch customer support and I got my funds back (in 2 days!)."
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
            <img src="assets/images/stars.png"
                class="" width="100" />
            </div>
            <h5 class="font-weight-bold">Alexa Horwitz</h5>
            <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"I really thought I had lost all hope in recovering my lost crypto until my friend told me about
              GlobeTech's services and in less than a week I regained access to my assets"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div id="footer" class="container-fluid bg-dark p-3">
     <div class="d-flex justify-content-center">
     <p style="color:white;" class="pt-2"> ©Globe Tech Cyber 2023 </p>
     </div>
</div>
</body>
</html>