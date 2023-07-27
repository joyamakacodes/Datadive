<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "datadive";

  // $servername = "localhost";
  // $username = "daggrega_datadive";
  // $password = "?Ztqp9!NVzW,";
  // $db = "daggrega_datadive";


  $conn = mysqli_connect($servername, $username, $password,$db);
?>
<!DOCTYPE html>
<html lang="en">

<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="Datadive, consumer intelligence, social intelligence, consumer insights, consumer data, consumer behavior, 
consumer demographics, campaign evaluation, hashtag tracking, target ads, consumer engagement, consumer survey, 
consumer information,  data intelligence,  consumer preferences,  social media engagement, industry trends, marketing campaign evaluation,
brand health, competition tracking, real-time insights, consumer engagement, data-driven insights, marketing ROI, digital campaign analysis,
brand performance,  consumer engagement" />
<meta name="description" content="Datadive - Unlock valuable insights into consumer behavior and preferences with DataDive, a powerful suite of consumer intelligence and social intelligence tools. Track brand performance, analyze digital campaigns, and understand industry trends to 
drive sales and improve marketing ROI. Get a comprehensive understanding of consumer demographics, purchase patterns, and social media engagement with our data-driven solutions" />
<meta name="author" content="Datadive" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>Datadive - Combining The Power of Consumer & Social Intelligence to Help Companies Scale</title>

<!-- Favicon Icon -->

<!-- inject css start -->

<!--== bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== font -->
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<!--== animate -->
<link href="css/animate.css" rel="stylesheet" type="text/css" />

<!--== line-awesome -->
<link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl.carousel -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="css/base.css" rel="stylesheet" type="text/css" />


<!--== shortcodes -->
<link href="css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== spacing -->
<link href="css/spacing.css" rel="stylesheet" type="text/css" />

<!--== style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- inject css end -->

<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="./divedashboard/fontawesome/css/all.css">
<link href="css/wowanimate.css" rel="stylesheet" type="text/css" />


<style>
 #chooseUs{
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
   width: 100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(to right, #0d8744a4 20%,
    #0d87444d), url('pictures/databg.png');
 }

.progress {

margin: 20px auto;
text-align: center;
padding-bottom: 80px;

display: flex; /*add*/
flex-direction: column; /*add*/
align-items: center; /*add*/
justify-content: space-between; /*add*/
height: 355px;
}

.bar {

display: inline-block;

width: 40px;
height: 40px;
border-radius: 40px;
border: 1px solid #d5d5da;
vertical-align:top;
width: 80px;
height: 6px;
/*margin: 0 -5px 17px -5px;*/ /*remove*/
border-left: none;
border-right: none;
border-radius: 0;
/*top:16px;*/ /*remove*/
 /*add*/

transform: rotate(90deg); /*add*/
}
.progress .circle .label {
display: inline-block;
width: 32px;
height: 32px;
line-height: 32px;
border-radius: 32px;
margin-top: 3px;
margin-left: 3px; /*add*/
color: #b5b5ba;
font-size: 17px;
}
.progress .circle .title {
color: #b5b5ba;
font-size: 13px;
line-height: 18px;
/*margin-left: -30px;*/ /*remove*/
display: block;
width: 100px;
/*margin-top: 5px;*/ /*remove*/

 margin-left: 10px; /*add*/
 text-align: start; /*add*/
}
/* Done / Active */

.bar-vertical{
  border: 2px solid white; 
  width: 5px; 
  height: 30px; 
  background: #fff; 
  text-align: center; 
  margin: 0; 
  position: absolute; 
  top: 70%; 
  left: 2%;
}
.bar-horizontal{
  border: 2px solid #fff; 
  width: 20px; 
  height: 5px; 
  background: #fff; 
  position: absolute; 
  top: 39%; 
  left: 4%;
}
.modal-header {
    display: flex;
    flex-shrink: 0;
    align-items: center;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: none;
    border-top-left-radius: calc(0.3rem - 1px);
    border-top-right-radius: calc(0.3rem - 1px);
}
.serviceCon{
  background:  rgba(70, 211, 131, 0.3); 
  border-radius: 0px 20px 0px 20px;
  display: flex;
  align-items: center;
  padding: 20px 30px;
  height: 50vh;
  
}
 
  .arc{
    position: absolute;
    width: 50%;
    height: 50%;
    top:0;
    left: 0;
    background: rgba(70, 211, 131, 0.3);
    clip-path: circle(50% at 0 0)

  }
  /* #canvas {
  background:linear-gradient(315deg, #fff 15%, #000 74%);
  width: 100%;
  z-index: ;
} */
  .arc3{
    position: absolute;
    width: 40%;
    height: 40%;
    top:0;
    left: 0;
    background: rgba(70, 211, 131, 0.3);
    clip-path: circle(40% at 0 0)

  }
  .arc2{
    position: absolute;
    width: 50%;
    height: 50%;
    top:0;
    right: 0;
    background: rgba(70, 211, 131, 0.3);
    clip-path: ellipse(200px 200px at 750px 50px);

  }
  .heroImg1 {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: move1;
  animation-duration: 9s;
  
  animation-iteration-count: infinite;
}
.heroImg2 {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: move2;
  animation-duration: 9s;
  
  animation-iteration-count: infinite;
}
.heroImg3 {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: move4;
  animation-duration: 9s;
  
  animation-iteration-count: infinite;
}
.heroImg4 {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: move3;
  animation-duration: 9s;
  
  animation-iteration-count: infinite;
}
.serviceIcon{
  color: #198754;
 
}
.serviceIcon:hover{
animation: App-logo-spin 1s ease-out;
}
.secTitles{
  border-top: 3px solid #198754; 
  border-bottom: 3px solid #198754;
}
#Industries{
  color: #198754;
  background-color: white;
}

#Industries:hover{
  background-color: #198754;
  color: white;
}
@keyframes App-logo-spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes move1 {
  0%   { top: -15%; left: 32.5%;}
  25%  {top: 21%; left:59%;}
  50%  { top: 56%; left: 32.5%;}
  75%  { top: 21%; left:7%;}
  100% { top: -15%; left: 32.5%;}
}
@keyframes move2 {
  0%   { top: 21%; left:59%;}
  25%  {top: 56%; left: 32.5%;}
  50%  { top: 21%; left:7%;}
  75%  { top: -15%; left: 32.5%;}
  100% { top: 21%; left:59%;}
}
@keyframes move3 {
  0%   { top: 56%; left: 32.5%;}
  25%  {top: 21%; left:7%;}
  50%  { top: -15%; left: 32.5%;}
  75%  { top: 21%; left:59%;}
  100% { top: 56%; left: 32.5%;}
}
@keyframes move4 {
  0%   { top: 21%; left:7%;}
  25%  {top: -15%; left: 32.5%;}
  50%  { top: 21%; left:59%;}
  75%  {top: 56%; left: 32.5%;}
  100% { top: 21%; left:7%;}
}

@keyframes App-logo-spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@media (max-width: 600px){
  .heroImages{
    display: none;
  }
  .serviceCon{
    display: block;
    height: 100%;
  }
  /* .modal-content .row{
    display: block;
  }
  .modal-content .row .col-5{
    margin: 0 0;
    width: 100%
  } */
}

</style>
</head>


<body style="background-color: #fff;">

<!-- page wrapper start -->

<div class="page-wrapper">
  
<!-- preloader start -->

<!-- <div id="ht-preloader">
  <div class="clear-loader d-flex align-items-center justify-content-center">
    <div class="loader"> <span>Stacht</span>
    </div>
  </div>
</div> -->

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,.1), 0 0 1px 0 rgba(0,0,0,.08);
">
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo mb-0" href="index.php">
              <img class="img-fluid" src="images/data_dive_logo.png" alt="Datadive logo" style="width: 170px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mx-auto">
                <!-- Home -->
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Solutions</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item " href="insight.php">Consumer Intelligence Insights  </a>
                    
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="social-intelligence.php">Social Intelligence Insights</a>
                      
                    </li>
                    
                  </ul>
                </li>

                <!-- <li> <a class="nav-link active" href="signup.php">Consumer Intelligence Insights</a>
                 
                </li>

                <li> <a class="nav-link" href="https://datadive-d-aggregate-pi7mv.ondigitalocean.app/">Social Intelligence Insights</a>
                 
                </li> -->
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Industry</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item " href="fmcg.php">FMCG</a>
                    
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="financialInstitution.php">Financial Institution</a>
                
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item " href="telcos.php">Telecommunications</a>
                
                </li>
                    
                  </ul>
                </li>

                <li>
                  <a  class="nav-link  " href="data.php"><i class="fa-sharp fa-solid fa-phone me-2"></i>Consult a data expert</a>
                </li>
                <li>
                  <a  class="nav-link  " href="contact-us.php">Contact Us</a>
                </li>
             </ul>
            </div>
            <div class="right-nav align-items-center d-flex justify-content-end">
              <div class="cart">
                <!-- <a href="#" id="header-cart-btn" data-bs-toggle="modal" data-bs-target="#cartModal"> <span class="bg-white rounded px-2 py-1 shadow-sm" data-cart-items="2">
                  <i class="las la-shopping-cart"></i>
                </span>
                </a> -->
              </div> 
              
              <!-- <a class="btn btn-white ms-md-4 d-xl-inline-block d-none" href="login.html">Login</a> -->

              <!-- <a class="btn btn-white ms-md-4 d-xl-inline-block d-none" href="contact-us.html">Contact Us</a> -->
              <a href="about-us.php" class="btn btn-success">
               Learn More
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>



<!--header end-->


<!--hero section start-->

<section class="hero-banner z-index-1 overflow-hidden">
<div class="arc">

</div>
<!-- <div style=" background: rgba(0,73,208); clip-path: circle(200px at 0 0); width: 200px;"></div> -->
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 mb-4 mb-lg-0 position-relative wow fadeInLeft text">
      <h2 style="font-size:45px" >
          
         Explore our world of Actionable Data Insight
                     
          </h2>
      <h6 class="my-4" style="font-size:27px; line-height: 40px;">Our consumer and social intelligence platform provides data about your brands and audience to facilitate informed decision making.</h6>
      
      <!-- Buttons --> <a href="about-us.php" class="btn btn-success me-2">
              Learn More
            </a>
        <!-- Image -->
       
      </div>
 
      <div class="col-12 col-lg-6 heroImages wow fadeInRight" style="position: relative;">
      <img class="heroImg1" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); width: 250px; height: 250px; position: absolute; bottom: 52%; left: 33%; background: linear-gradient(to right, #0d8744a4 20%, #0d87444d); opacity: 0.8;" src="pictures/heroImg1.svg" alt="data analysis">
      <img class="heroImg2" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); width: 250px; height: 250px; position: absolute; top: 25%; left:50%; opacity: 0.8;" src="pictures/heroImg3.jpg" alt="coding" >
      <img class="heroImg3" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); width: 250px; height: 250px; position: absolute; top: 25%; right:50%; opacity: 0.8;" src="pictures/heroImg4.png" alt="artificial intelligence" style="margin-top: -60px;">
      <img class="heroImg4" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); width: 250px; height: 250px; position: absolute; top: 58%; left: 33%; opacity: 0.8;" src="pictures/heroImg2.jpg" alt="laptop" style="margin-top: -60px;">
        <!-- <a href="#" class="btn btn-white ">
                Learn More
              </a> -->
      </div>
    </div>
  </div>
</section>

<!--hero section end--> 


<!--body content start-->

<div class="page-content">

<!-- survey start-->

<section class="hero-banner banner-2 position-relative overflow-hidden" id="chooseUs">
  <div class="arc2">

  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 order-lg-1 mb-lg-0 z-index-1 text-end wow fadeInLeft">
        <div class=" "></div>
        <!-- Image -->
        <img class="img-fluid mt-4" src="pictures/surveyWin.jpg" alt="fill and win" style="border-radius: 0px 10% 0px 10%; ">
      </div>
      <div class="col-12 col-lg-6 wow fadeInRight">
        
        <h1 class="mb-4 text-white">
          <p style="font-size:25px; font-weight:bold;">The DataDive App</p>
          <p style="font-size:25px;"> Earn internet data by sharing your views about your favorite brands with us.</p>         
            </h1>
        
        <!-- Buttons --> <a href="app.php" target="_blank" class="btn btn-white  me-2">
                JOIN NOW
              </a>

      </div>
    </div>
  </div>
</section>


<!-- survey ends -->


<!--services start-->

<section class="overflow-hidden position-relative pb-5 wow fadeInUp">
  <div class="arc3"></div>
  <div class="container-fluid px-lg-10">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-lg-8">
        <div class="mb-5">
          <h4 class="secTitles font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded box-shadow d-inline-block bg-white ">
            Services
              </h4>
          <!-- <h2 class="mb-0"><span class="font-w-5 d-block">checkout we provide</span> awesome and creative services</h2> -->
        </div>
      </div>
    </div>
    
    
        <div class="owl-carousel" data-items="4" data-xxl-items="2" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="1" data-autoplay="true">
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">
            
              <div class="serviceCon">
                <div>
                <h5 class="mb-3"> Improving Marketing Efforts</h5>
                <p class="mb-0" style="font-size: 12px;">Brands can use consumer intelligence to understand how consumers respond to different marketing strategies and channels. This information can be used to optimize marketing efforts and improve the return on investment.</p>
                </div>
                <i style="font-size: 160px;" class="serviceIcon fa-solid fa-money-bill-trend-up mx-2"></i>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">
            <div class="serviceCon">
                <div>
                <h5 class="mb-3">Product Development</h5>
                <p class="mb-0" style="font-size: 12px;">Consumer intelligence provides insights into the trends and patterns of consumer behavior, which can be used to inform product development decisions. Brands can use this information to create new products that better meet the needs of their consumer.</p>
                </div>
                <i style="font-size: 160px;" class="serviceIcon fa-brands fa-connectdevelop mx-2"></i>
              </div>
              
            </div>
          </div>
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">
              <div class="serviceCon">
                <div>
                <h5 class="mb-3">Customer Segmentation</h5>
                <p class="mb-0" style="font-size: 12px;">Consumer intelligence can be used to segment the customer base based on specific characteristics. This information can be used to create targeted marketing campaigns and improve the overall customer experience.</p> 
                </div>
                <i style="font-size: 160px;" class="serviceIcon fa-solid fa-puzzle-piece mx-2"></i>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">
              <div class="serviceCon">
                <div>
                <h5 class="mb-3">Competitive Analysis</h5>
                <p class="mb-0" style="font-size: 12px;">Brands can use consumer intelligence to understand the competition and their target audience's perception of competitors. This information can be used to inform strategic decisions and improve the brand's competitiveness.</p> 
                </div>
                <i style="font-size: 160px;" class="serviceIcon fa-solid fa-chart-bar mx-2"></i>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">
              <div class="serviceCon">
                <div>
                <h5 class="mb-3">Understanding Consumer Needs</h5>
                <p class="mb-0" style="font-size: 12px;">Consumer intelligence helps brands understand their target audience's needs, preferences, and behavior. This information can be used to create products and services that better meet the needs of consumers.</p> 
                </div>
                <i style="font-size: 160px;" class="serviceIcon fa-solid fa-users-line mx-2"></i>
              </div>
            </div>
          </div>
        </div>
      
    </div>
   
      
        <div class="owl-carousel" data-items="4" data-xxl-items="3" data-xl-items="2" data-lg-items="2" data-md-items="2" data-sm-items="1" data-autoplay="true">
           <!-- <?php 
            
            $query = "SELECT * FROM slider";
            $slider = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($slider)) {
                  
          ?>
        
          <div class="item">
            <div class="featured-item text-center overflow-hidden bg-transparent">

              <div class="featured-icon w-auto h-auto">
                <img style="width: 373px; height:210px" class="img-fluid" src="./divedashboard/<?php echo $row['images'] ?>" alt="image">
              </div>

              <div class="featured-desc mt-4">
                <h5 class="mb-3"><?php echo isset($row['header']) ? $row['header'] : '' ?></h5>
                <p class="mb-0"><?php echo isset($row['body']) ? substr($row['body'],0,250) : '' ?>...</p> 
                <a class="btn-link mt-4" href="article/<?php echo $row['body'] ?>/"><i class="las la-long-arrow-alt-right"></i></a>
              </div>

            </div>
          </div>
            <?php
              }
            ?> -->
        </div>
     
    
  </div>
</section>

<!--services end-->


<!--who we are start-->

<section id="about" class=" custom-pt-1 pb-10 z-index-1 shape-sec bg-success">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6 mb-3 mt-5 mb-lg-0 wow fadeInLeft">
       <img src="pictures/explore.jpg" alt="explore Image" class="img-fluid" style="border-radius: 0px 10% 0px 10%">
      </div>
      <div class="col-12 col-lg-6 mt-3 wow fadeInRight">
        <div class="mb-3">
          <h4 class="font-w-5 mt-3 position-relative py-1 px-3 text-white rounded  box-shadow  d-inline-block" style="border-top: 3px solid white; 
  border-bottom: 3px solid white;">
            <span>About Us</span>
              </h4>
          <h3 class="mb-0 mt-3 text-white">Explore data Insights with DataDive</h3>
        </div>
        <p class="lead mt-3 text-light" style="font-size:22px; line-height: 35px;">
            DataDive is a product of D-Aggregate. D-Aggregate Technologies, a data intelligence
            company that focuses on aggregating data and building data-centric/AI technologies to help businesses scale. 
        </p>
        <!-- <a href="about-us.php" class="btn btn-white me-2">More</a> -->
      </div>
    </div>
  </div>
  <div class="curve-shape top-0 overflow-hidden" style="height: 200px;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="w-100 h-100"><path fill="#fff" fill-opacity="1" d="M0,192L24,202.7C48,213,96,235,144,224C192,213,240,171,288,144C336,117,384,107,432,133.3C480,160,528,224,576,218.7C624,213,672,139,720,122.7C768,107,816,149,864,144C912,139,960,85,1008,80C1056,75,1104,117,1152,160C1200,203,1248,245,1296,224C1344,203,1392,117,1416,74.7L1440,32L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
  </div>
</section>

<!--who we are end-->


<!--counter start-->

<!-- <section class="pt-0 pb-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xxl-10 col-xl-12">
        <div class="box-shadow p-5 bg-white rounded mt-n7 z-index-1">
          <div class="row">
      <div class="col-12 col-lg-3 col-sm-6">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/01.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="15" data-speed="1000">15</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Projects Executed</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-sm-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/02.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="73" data-speed="1000">73</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Data Analytics</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/03.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="88" data-speed="1000">88</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">People Loved</h6>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3 col-sm-6 mt-5 mt-lg-0">
        <div class="counter d-flex align-items-center style-2">
          <div class="me-3 flex-shrink-0">
            <img class="img-fluid" src="images/icon/counter/04.png" alt="">
          </div>
          <div class="counter-desc flex-grow-1 text-dark"> <span class="count-number h2" data-to="104" data-speed="1000">104</span>
            <span class="h2">+</span> 
            <h6 class="text-grey mb-0 font-w-5">Happy Customers</h6>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--counter end-->


<!--testimonial start-->

<!-- <section class="z-index-1">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-7 col-md-12">
        <div class="z-index-1 mb-5">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Testimonial</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Take a look our clients</span>
            feedback what you say?</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="testimonial-sec position-relative pb-lg-8 pt-lg-5 px-lg-6 p-3 bg-pos-rt" data-bg-img="images/bg/01.png">
          <div class="owl-carousel mt-xl-n10 mt-lg-n5 no-pb" data-dots="false" data-nav="true" data-items="1" data-autoplay="false">
            <div class="item">
              <div class="testimonial text-center">
                <div class="row align-items-end">
                  <div class="col-lg-7 px-lg-6">
                    <div class="testimonial-content py-5 px-4 rounded">
                      <div class="testimonial-caption mb-3">
                        <h5 class="text-white z-index-1 d-inline-block font-w-6">Mark Beele <label class="fst-italic text-light">- Ceo</label></h5>
                      </div>
                      <p class="mb-0 fst-italic text-light">Stacht Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="testimonial-img">
                      <img class="img-fluid rounded w-100" src="images/testimonial/01.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial text-center">
                <div class="row align-items-end">
                  <div class="col-lg-7 px-lg-6">
                    <div class="testimonial-content py-5 px-4 rounded">
                      <div class="testimonial-caption mb-3">
                        <h5 class="text-white z-index-1 d-inline-block font-w-6">Renow Karlo <label class="fst-italic text-light">- Manager</label></h5>
                      </div>
                      <p class="mb-0 fst-italic text-light">Stacht Amazing Landing Page All-in-one, clean code, Crative & Modern design Professional Recommended crofessional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit.</p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="testimonial-img">
                      <img class="img-fluid rounded w-100" src="images/testimonial/02.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--testimonial end-->


<!--portfolio start-->

<section class="position-relative overflow-hidden" >
  <div class="arc">

  </div>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 wow fadeInUp">
        <div class="mb-5">
          <h4 class="secTitles font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded box-shadow d-inline-block bg-white">
            <span>Portfolio</span>
              </h4>
          <h3 class="mb-0">Combining The Power of Consumer & Social Intelligence to Help Companies Scale</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid p-0 wow fadeInUp">
    <div class="row">
      <div class="col">
        <div class="owl-carousel center popup-gallery" data-center="true" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-autoplay="true">
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded active" >
              <img class="img-fluid " src="pictures/smart-diapers.jpg" alt="" style="height: 403px; width: 345px;">
              <a class="popup-img" href="pictures/smart-diapers.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Chloe Market Research</span>
                <h5><a id="card-title" type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modal1">
                        More</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded" >
              <img class="img-fluid w" src="pictures/AmbroseUni.jpeg" alt="" style="height: 403px; width: 345px;">
              <a class="popup-img" href="pictures/AmbroseUni.jpeg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Nigeria Infrastructure Debt Fund</span>
              <h5><a id="card-title" type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modal2">
                        More</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid " src="pictures/LAGOS-STATE.jpg" alt="" style="height: 403px; width: 345px;">
              <a class="popup-img" href="pictures/LAGOS-STATE.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Lagos State Campaign Research</span>
              <h5><a id="card-title" type="button" class="text-white" data-bs-toggle="modal" data-bs-target="#modal3">
                        More</a></h5>
              </div>
            </div>
          </div>
          <!-- <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/09.jpg" alt="">
              <a class="popup-img" href="images/project/large/04.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Insight</span>
                <h5><a href="portfolio-single.html">Consumer Insight</a></h5>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="portfolio-item position-relative overflow-hidden rounded">
              <img class="img-fluid w-100" src="images/project/10.jpg" alt="">
              <a class="popup-img" href="images/project/large/05.jpg"> <i class="las la-plus"></i>
              </a>
              <div class="portfolio-title"> <span>Data</span>
                <h5><a href="portfolio-single.html">Consumer Data</a></h5>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="position-relative overflow-hidden" style="padding-top: 0px !important;">
<div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 wow fadeInUp">
        <div class="mb-5">
          <h4 class="secTitles font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded box-shadow d-inline-block bg-white">
            <span>Industries</span>
              </h4>
          <h3 class="mb-0">Explore DataDive solutions for industries</h3>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-lg-4 col-md-12">
        <a href="fmcg.php">
        <div class="card " style="width: 18rem;" id="Industries">
        <div class="card-body">
          <h5 class="card-title fs-3 "><i class="fa-solid fa-store"></i></h5>
          <p class="card-text">FMCGs</p>
        </div>
      </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-12">
        <a href="financialInstitution.php">
        <div class="card" style="width: 18rem;" id="Industries">
        <div class="card-body">
          <h5 class="card-title fs-3"><i class="fa-solid fa-building-columns"></i></h5>
          <p class="card-text">Financial Institution</p>
        </div>
      </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-12">
        <a href="telcos.php">
        <div class="card" style="width: 18rem;" id="Industries">
        <div class="card-body">
          <h5 class="card-title fs-3"><i class="fa-solid fa-globe"></i></h5>
          <p class="card-text">Telecommunications</p>
        </div>
      </div>
        </a>
      </div>
    </div>
  </div>
</section>




<!-- Modal -->
<div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Chloe Market Research</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="row">
          <div class="col-5 py-3 px-5">
          <img src="pictures/smart-diapers.jpg" alt="women in a diaper store" style="height: 400px; width: 600px">
          </div>
          <div class="col-2"></div>
          <div class="col-5 py-3 px-3">
            <h5>Description</h5>
          <p class="">CHLOE Hygiene and Baby Products Limited, a visionary FMCG start-up company, is working towards the commencement of its operations, with KHLOE Baby Diapers as its flagship product.</p>
          <p>To learn and know more about the market, viz-a-viz the existing players, target customers, and the dynamics of demand and supply, the company is looking to engage a qualified and efficient market research company (with nationwide coverage) for the gathering of necessary market data and insights to aid CHLOE in its decision-making.</p>
          </div>
        </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Nigeria Infrastructure Debt Fund (Chapel Hill Denham) </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="row">
          <div class="col-5 py-3 px-5">
          <img src="pictures/AmbroseUni.jpeg" alt="university sign post" style="height: 400px; width: 600px">
          </div>
          <div class="col-2"></div>
          <div class="col-5 py-3 px-3">
            <h5>Description</h5>
          <p class="">Information (and knowledge) is key to decision making; in this case, considering the huge investment that will be involved in this venture - building hostels for students in Ambrose Ali University, Ekpoma, Edo. It was pertinent to gain the requisite information (and knowledge) that will aid proper decision making, hence, the commissioning of this study by Chapel Hill and Denham.</p>
          <p>This consumer research was commissioned to establish an understanding of the existing student accommodation market, Existing policies on hostel and accommodation operations in Ambrose Ali University, Ekpoma, Edo state, Nigeria and Insight into future disposition to university accommodation through datadive consumer intelligense surveys.</p>
          </div>
        </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="modal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">LAGOS STATE CAMPAIGN ANALYTICS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="row">
          <div class="col-5 py-3 px-5">
          <img src="pictures/LAGOS-STATE.jpg" alt="university sign post" style="height: 400px; width: 600px">
          </div>
          <div class="col-2"></div>
          <div class="col-5 py-3 px-3">
            <h5>Description</h5>
          <p class="">
          Social intelligence analytics on the opinion of the publics concerning the running government and upcoming election 
          </p>
          
          </div>
        </div>
      
    </div>
  </div>
</div>
<!--portfolio end-->


<!--tab start-->


<section class=" position-relative overflow-hidden" id="chooseUs">
<div class="arc2">
</div>
  <div class="container-fluid z-index-1 text-white">
    
    <div class="row">
      <div class="col">
        <div class="tab">
              <h2 class="text-center fw-bold mb-5 text-white wow fadeInUp">
                Why You Should Use DataDive
              </h2>
            <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">

              <div class="row align-items-center">
                <div class="col-lg-1 col-md-12">
                <!-- <i class="fa-solid fa-chart-column" style="font-size: 100px"></i> -->
               
                </div>

                <div class="col-lg-5 col-md-12 mt-4 mt-lg-0 wow fadeInUp">
                <!--  -->
                  
                  <h4 class="mb-4 text-white" style="font-size:23px;">Brand Health Check & Competition Tracking</h4>
                  
                  <div class="d-flex align-items-center  mb-3 position-relative">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    
                    <div>
                      <p class="mb-0  ms-2">Real-time brand performance versus competition.</p>
                    </div>
                  </div>
                 
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Why consumer patronize competition</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot" style="background: "><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Consumer next purchase point for competition product</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Understand consumer perception about new or existing brands</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Expand you consumer database to drive sales and target ads</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-1 col-md-12">
                <!-- <i class="fa-solid fa-bullseye" style="font-size: 100px"></i> -->
                </div>
                <div class="col-lg-5 col-md-12 mt-5 mt-lg-0 wow fadeInUp">
                <!--  -->
                  <h4 class="mb-4 text-white" style="font-size:23px;">Marketing Campaigns Evaluation and Trends</h4>
                
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Pre/Post social media campaign evaluation and measures</p>
                    </div>
                  </div>
          
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Explore Industry Trends</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Identify consumers influencing your brands and competition</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    <div  class="rounded bar-vertical"></div>
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Location recommendation for target ads</p>
                    </div>
                  </div>

                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="me-2"> <span class="list-dot"><i class="las la-check-circle"></i></span> 
                    
                    </div>
                    <div class="rounded bar-horizontal"></div>
                    <div>
                      <p class="mb-0 ms-2">Historical analysis of your social media campaign</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!--price table start-->

<section id="pricing" class="shape-1 right position-relative">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 col-12 wow fadeInUp">
        <div class="mb-6">
          <h4 class="secTitles font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded box-shadow d-inline-block bg-white">
                  <span>Pricing</span>
              </h4>
          <h3 class="mb-0">Choose the plan that works best for you.</h3>
        </div>
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="col-lg-3 col-md-3">
        <div class="price-table rounded bg-white box-shadow ">
          <div class="price-title ps-5 " style="background: #7ddfae7e; -webkit-clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);
          clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);"><h2>Basic</h2>
          <div class="price-value">
            <h3 class=" text-primary pb-3">$750 <span class="fs-6">Monthly</span></h3>   
          </div>
        </div>
         
          <div class="price-list p-5">
            <ul class="list-unstyled">
              <li class="mb-2">1 Brand Tracking</li>
              <li class="mb-2">1 Campaign Hashtag</li>
              <li class="mb-2">500 Consumer Audience</li>
              <li class="mb-2">Report Dashboard</li>
              <li>Duration- 1 Month</li>
            </ul>
          </div>
          <a class="btn btn-success mt-5 ms-5" href="product-checkout.php"> <span>Get Started</span> 
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 position-relative">
        <div style="position: absolute; left: 27%; top: -3%;" class="bg-dark text-white rounded-pill py-2 px-3">
        Recommended
        </div>
        <div class="price-table rounded box-shadow" style="background: #7ddfae7e;">
          <div class="price-title ps-5 text-success " style="background: white; -webkit-clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);
          clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);"><h2>Pro</h2>
          <div class="price-value">
            <h3 class="text-success pb-3">$1,250 <span class="fs-6">Monthly</span> </h3>  
            </div>
          </div>
          <div class="price-list p-5">
            <ul class="list-unstyled text-dark">
              <li class="mb-2">5 Brand Tracking</li>
              <li class="mb-2">1 Campaign Hashtag and Industry Trend</li>
              <li class="mb-2">1000 Consumer Audience</li>
              <li class="mb-2">Report Dashboard</li>
              <li>Duration- 2 Month</li>
            </ul>
          </div>
          <a class="btn btn-success mt-4 ms-5" href="product-checkout.php"> <span>Get Started</span> 
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 mt-5 mt-lg-0">
      <div class="price-table rounded bg-white box-shadow ">
          <div class="price-title ps-5" style="background: #7ddfae7e; -webkit-clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);
          clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);"><h2>Premium</h2>
          <div class="price-value">
            <h3 class=" text-primary pb-3">$3,750 <span class="fs-6">Monthly</span></h3>   
          </div>
        </div>
          <div class="price-list p-5">
            <ul class="list-unstyled">
              <li class="mb-2">10 Brand Tracking</li>
              <li class="mb-2">5 Campaign Hashtag and Industry Trend</li>
              <li class="mb-2">5000 Consumer Audience</li>
              <li class="mb-2">Report Dashboard</li>
              <li>Duration- 6 Months</li>
            </ul>
          </div>
          <a class="btn btn-success mt-4 ms-5" href="product-checkout.php"> <span>Get Started</span> 
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 mt-5 mt-lg-0">
      <div class="price-table rounded bg-white box-shadow ">
          <div class="price-title ps-5" style="background: #7ddfae7e; -webkit-clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);
          clip-path: polygon(50% 0, 100% 0, 100% 82%, 50% 100%, 0% 85%, 0 0);"><h2>License</h2>
          <div class="price-value">
            <h3 class=" text-primary pb-3">$5,700 <span class="fs-6">Monthly</span></h3>   
          </div>
        </div>
          <div class="price-list p-5">
            <ul class="list-unstyled">
              <li class="mb-2">Unlimited Brands</li>
              <li class="mb-2">Unlimited Campaign Hashtag and Industry Trend</li>
              <li class="mb-2">5000 Consumer Audience</li>
              <li class="mb-2">Report Dashboard</li>
              <li>Duration- 9 Months</li>
            </ul>
          </div>
          <a class="btn btn-success mt-3 ms-5" href="product-checkout.php"> <span>Get Started</span> 
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="row"> -->
    <!-- <?php
         $query = "SELECT * FROM plans";
         $plan = mysqli_query($conn, $query);
         
         while ($row = mysqli_fetch_assoc($plan)) {
                
                $myplan = $row['plan_name'];

                if($myplan == 'pro' || $myplan == 'license'){

                   ?>

                          <div class="col-lg-3 col-md-3 mt-5">
                            <div class="price-table rounded bg-success">
                              <div class="price-title ps-5 text-white" style="border-left: 20px solid white; border-right: 20px solid white;"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                              <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                                <h2 class="mb-0 me-3 text-light"  style="font-size:30px;"><span>$</span>
                                  <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                                </h2>  
                                <span class="bg-light px-3 py-2 rounded-start">
                                    <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                                </span> 
                              </div>
                              <div class="ps-5 text-white">

                                <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                              </div>
                              <a class="btn btn-light mt-5 ms-5" href="signup.php"> <span>Get Started</span> 
                              </a>
                            </div>
                          </div>

                   <?php


                }else{

                  ?>
                      <div class="col-lg-3 col-md-3 mt-5 mt-lg-0">
                        <div class="price-table rounded bg-white box-shadow">
                          <div class="price-title ps-5" style="border-left: 20px solid rgba(0, 128, 55, 0.7); border-right: 20px solid rgba(0, 128, 55, 0.7);"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                          <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                            <h2 class="mb-0 me-3 text-primary" style="font-size:30px;"><span>$</span>
                                <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                            </h2>  
                            <span class="bg-success px-3 py-2 rounded-start text-white">
                                <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                            </span> 
                          </div>
                          <div class=" ps-5">

                            <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                          </div>
                          <a class="btn btn-success mt-5 ms-5" href="signup.php"> <span>Get Started</span> 
                          </a>
                        </div>
                      </div>
           <?php


                }
          
          } 

        ?>-->
</section>

<!--price table end-->


<!--team start-->

<!-- <section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>What We Do</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Watch about creating your</span> success with Stacht.</h2>
        </div>
        <div class="position-relative overflow-hidden">
          <img class="img-fluid w-100 rounded" src="images/about/01.jpg" alt="">
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube mr-3" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="las la-play"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 ps-lg-8 mt-5 mt-lg-0">
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/01.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Nathan Davi</a></h5>
                <span>Manager</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5 mt-sm-0">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/02.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Cherie White</a></h5>
                <span>Ceo</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/03.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Layna Paul</a></h5>
                <span>Co-Founder</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 mt-5">
            <div class="team-member">
              <div class="team-images">
                <img class="img-fluid" src="images/team/04.jpg" alt="">
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">John Riad</a></h5>
                <span>Developer</span> 
              </div>
              <ul class="team-social-icon list-inline">
                <li><a href="#"><i class="lab la-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="lab la-twitter"></i></a>
                </li>
                <li><a href="#"><i class="lab la-pinterest-p"></i></a>
                </li>
                <li><a href="#"><i class="lab la-linkedin-in"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--team end-->


<!--blog start-->

<!-- <section class="position-relative skew-shape overflow-hidden">
  <div class="container">
    <div class="row justify-content-center ">
      <div class="col-lg-8 col-md-10 col-12">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Blogs</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Our blog</span> Latest feed</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-5 mb3lg-0">
       
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/01.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">Grow your business insights with inspiring news
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
       
      </div>
      <div class="col-md-6 col-lg-3 mb-5 mb3lg-0">
        
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/02.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">Stacht is a big milestone for your business success
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-lg-3">
    3  
        <div class="card post-card rounded border-0">
          <img class="rounded img-fluid" src="images/blog/03.jpg" alt="Image">
          <div class="card-body p-4">
            <ul class="list-inline">
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="lar la-user-circle me-1"></i> Admin</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-grey"><i class="las la-eye me-1"></i> 05 Jan, 2022</a>
              </li>
            </ul>
            <h2 class="h4 my-3">New ideas for a lowest cost Design Service better
              </h2>
            <a class="post-btn float-end" href="blog-single.html"><i class="las la-long-arrow-alt-right"></i></a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section> -->




<!--newsletter start-->

<section class="pb-0" >
  <div class="container">
    <div class="row">
      <div class="col">
        <div class=" box-shadow py-4 px-4 px-lg-8 py-lg-8 text-center rounded z-index-1 bg-success position-relative" id="chooseUs">
          <div class="arc2"></div>
          <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-10 col-lg-12 wow fadeInUp">
              <div class="mb-5">
                <h2 class="mb-0 text-white"><span class="font-w-5">Earn Data and Airtime</span>
                  <p style="font-size:30px;">Unlock credits and airtime by Sharing your Consumer Insights with the DataDive App</p>
              </h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-9">
                 
                    <a href="app.php" target="_blank" class="btn btn-white me-2">
                      JOIN NOW
                    </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--newsletter end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="custom-pt-2 pb-5 position-relative mt-n8 shape-sec bg-success text-white" >
  
  <div class="footer-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="rgba(70, 211, 131, 0.3)" fill-opacity="1" d="M0,224L20,224C40,224,80,224,120,208C160,192,200,160,240,165.3C280,171,320,213,360,213.3C400,213,440,171,480,154.7C520,139,560,149,600,176C640,203,680,245,720,234.7C760,224,800,160,840,149.3C880,139,920,181,960,170.7C1000,160,1040,96,1080,90.7C1120,85,1160,139,1200,181.3C1240,224,1280,256,1320,245.3C1360,235,1400,181,1420,154.7L1440,128L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
    </svg>
    
  </div>
  <div class="primary-footer z-index-1 text-white">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 col-xl-4">
          <a class="footer-logo" href="index.html">
            <img class="img-fluid" src="images/White Datadive.png" alt="" style="width: 130px;">
          </a>
          <p class="my-4">Consumer,Social Intelligence and Recommendation AI for businesses and Multinationals.</p>
          <div class="social-icons social-colored footer-social">
            <ul class="list-inline">
              <li><a href="https://www.facebook.com/datadive.insight?mibextid=ZbWKw" target="_blank"><i class="lab la-facebook-f"></i></a>
              </li>
              <li><a href="https://twitter.com/Unique_DataDive?t=GBU8qQYeGtolM66yoCfo3Q&s=09" target="_blank"><i class="lab la-twitter"></i></a>
              </li>
              <li><a href="https://instagram.com/datadive_insight?igshid=ZGUzMzM3NWJiOQ==" target="_blank"><i class="lab la-instagram" ></i></a>
              </li>
             
              <li><a href="https://www.linkedin.com/company/datadive-insight/" target="_blank"><i class="lab la-linkedin-in"></i></a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-12 col-lg-6 col-xl-4 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">Quick Link</h5>
          <ul class="list-unstyled mb-0 text-white">
            <li class="mb-3"><a class="list-group-item-action" href="#">Consumer Intelligence</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="https://datadive-d-aggregate-pi7mv.ondigitalocean.app/">Social Intelligence</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="#about">About Us</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" target="_blank" href="policy.php">Privacy policy</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="#pricing">Pricing</a>
            </li>
            <!-- <li class="mb-3"><a class="list-group-item-action" href="faq.html">Faq</a>
            </li> -->
            <!-- <li class="mb-3"><a class="list-group-item-action" href="#contact">Contact Us</a>
            </li> -->
            <!-- <li class="mb-3"> <a class="list-group-item-action" href="terms-and-conditions.html">
                  Term Of Service
                </a>
            </li> -->
            <!-- <li> <a class="list-group-item-action" href="privacy-policy.html">
                  Privacy Policy
                </a>
            </li> -->
          </ul>
        </div>
        <!-- <div class="col-12 col-sm-6 col-lg-3 col-xl-2 mt-6 mt-lg-0 footer-list">
          <h5 class="mb-4 text-white">Our Services</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-3"><a class="list-group-item-action" href="data-science.html">Data Science</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="data-visualization.html">Data Visualization</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="computer-vision.html">Computer Vision</a>
            </li>
            <li class="mb-3"><a class="list-group-item-action" href="machine-learning.html">Machine Learning</a>
            </li>
            <li><a class="list-group-item-action" href="data-analytics.html">Data Analytics</a>
            </li>
          </ul>
        </div> -->
        <div class="col-12 col-lg-6 col-xl-4 mt-6 mt-xl-0">
          <h5 class="mb-4 text-white">Get In Touch</h5>
          <ul class="media-icon list-unstyled font-w-5 ">
              <li> <i class="las la-map-pin"></i>
                <p class="mb-0">50, Awolowo Road,Ikoyi, Lagos Nigeria.</p>
              </li>
              <li><i class="las la-envelope-open-text"></i> <p>info@d-aggregate.com</p> 
              </li>
              <li><i class="las la-phone-volume"></i> <p> +234 (0)8178 32 9565 | +234 (0)8032 67 9331</p>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer mt-8 border-top border-rgba pt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col text-white">Copyright&copy 2023 All rights reserved
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->

</div>

<!-- page wrapper end -->


<!-- Cart Modal -->


 
<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="fa-regular fa-circle-up fs-2"></i></a></div>

<!--back-to-top end-->


<!-- inject js start -->

<!--== jquery -->
<script src="js/jquery.min.js"></script>

<!--== bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>

<!--== modernizr -->
<script src="js/modernizr.min.js"></script>

<!--== owl-carousel -->
<script src="js/owl.carousel.min.js"></script> 

<!--== magnific-popup --> 
<script src="js/jquery.magnific-popup.min.js"></script>

<!--== counter -->
<script src="js/counter.js"></script> 

<!--== countdown -->
<script src="js/jquery.countdown.min.js"></script>

<!--== skill bars -->
<script src="js/skill.bars.jquery.js"></script> 

<!--== canvas -->
<!-- <script src="js/canvs"></script> -->

<!--== theme-script -->
<script src="js/theme-script.js"></script>
<script src="js/wowanimate.js"></script>
<script src="js/connectDot.js"></script>

<script>
new WOW().init();
</script>
<!-- inject js end -->

</body>



</html>
