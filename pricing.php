<?php 
  
  
  include_once "header.php"; 

  if (isset($_GET['plan'])) {

    $myplan = $_GET['plan'];
   
    
  } else {

      // header('Location: pricing.php');
  }
  
  ?>

<!--hero section-->

<!-- <section class="page-title position-relative overflow-hidden shape-1 right ">
  <div class="container ">
    <div class="row mb-5">
      <div class="col-lg-8">
        <div class="bg-white p-md-5 p-3 d-inline-block">
          <h1 class="font-w-3 mb-4"><span class="text-primary font-w-5">Pricing</span></h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php"><i class="las la-home me-1"></i>Home</a>
              </li>
             
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <canvas id="canvas-1" width="400" height="256"></canvas>
</section> -->



<!--hero section-->

<section id="pricing" class="shape-1 right position-relative mb-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 col-12">
        <div class="mb-6">
          <h4 class="secTitles font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded box-shadow d-inline-block bg-white">
                  <span>Pricing</span>
              </h4>
          <h3 class="mb-0">Choose the best plan we offer</h3>
        </div>
      </div>
    </div>
    <div class="row">
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
          <a class="btn btn-success mt-5 ms-5" href="#"> <span>Get Started</span> 
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
          <a class="btn btn-success mt-4 ms-5" href="#"> <span>Get Started</span> 
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
          <a class="btn btn-success mt-4 ms-5" href="#"> <span>Get Started</span> 
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
          <a class="btn btn-success mt-3 ms-5" href="#"> <span>Get Started</span> 
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

<!--price table start-->
<!-- 
<section id="pricing" class="shape-1 right position-relative">
  <div class="container mb-5">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-10 col-12">
        <div class="mb-6">
          <h6 class="font-w-5 mb-3 position-relative py-1 px-3 text-primary rounded subtitle-effect box-shadow d-inline-block bg-white">
                  <span>Pricing</span>
              </h6>
          <h2 class="mb-0"><span class="font-w-5">Choose the best</span> plan we offer</h2>
        </div>
      </div>
    </div>

    <div class="row">

      <?php
         $query = "SELECT * FROM plans";
         $plan = mysqli_query($conn, $query);
         
         while ($row = mysqli_fetch_assoc($plan)) {
                
                $myplan = $row['plan_name'];

                if($myplan == 'pro' || $myplan == 'license'){

                   ?>

                          <div class="col-lg-3 col-md-3 mt-5">
                            <div class="price-table rounded bg-dark">
                              <div class="price-title ps-5 text-white"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                              <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                                <h2 class="mb-0 me-3 text-primary"  style="font-size:30px;"><span>$</span>
                                  <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                                </h2>  
                                <span class="bg-secondary px-3 py-2 rounded-start text-white">
                                    <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                                </span> 
                              </div>
                              <div class="ps-5 text-white">

                                <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                              </div>
                              <a class="btn btn-dark mt-5 ms-5" href="pricing.php?plan=<?php echo isset($row['plan']) ? $row['plan'] : '' ?>" data-bs-toggle="modal" data-bs-target="#signup"> <span>Get Started</span> 
                              </a>
                            </div>
                          </div>

                   <?php


                }else{

                  ?>
                      <div class="col-lg-3 col-md-3 mt-5 mt-lg-0">
                        <div class="price-table rounded bg-white box-shadow">
                          <div class="price-title ps-5"><?php echo isset($row['plan_name']) ? ucfirst($row['plan_name']) : '' ?></div>
                          <div class="price-value my-5 ps-5 d-flex justify-content-between align-items-center">
                            <h2 class="mb-0 me-3 text-primary" style="font-size:30px;"><span>$</span>
                                <span><b><?php echo isset($row['price']) ? number_format($row['price']) : '' ?></b></b></span>
                            </h2>  
                            <span class="bg-dark px-3 py-2 rounded-start text-white">
                                <?php echo isset($row['package']) ? ucfirst($row['package']) : '' ?>
                            </span> 
                          </div>
                          <div class=" ps-5">

                            <?php echo isset($row['body']) ? substr($row['body'],0) : '' ?>
                            
                          </div>
                          <a class="btn btn-dark mt-5 ms-5" href="pricing.php?plan=<?php echo isset($row['plan']) ? $row['plan'] : '' ?>" data-bs-toggle="modal" data-bs-target="#signup"> <span>Get Started</span> 
                          </a>
                        </div>
                      </div>
           <?php


                }
          
          }

        ?>
     
    </div>
  </div>
</section> -->

<!--price table end-->

<!-- Modal -->
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php
                   
                   if ($myplan == 'basic') {
                    echo "This is basic";
                  }elseif ($myplan == 'pro' ) {
                    echo "This is pro";
                  }elseif ($myplan == 'premium' ) {
                    echo "This is premium";
    
                  }elseif ($myplan == 'license' ) {
                    echo "This is license";
                  }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php 
  
  include_once "footer.php"; 
?>