

<?php
include_once "header.php"
?>

<!--hero section end--> 


<!--body content start-->



<!--checkout start-->

<section>
  <div class="container">
  
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="checkout-form box-shadow p-4 rounded">
          <h4 class="mb-5">Billing details</h4>
          <form class="row">
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">First Name</label>
                <input type="text" id="fname" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">Last Name</label>
                <input type="text" id="lname" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">E-mail Address</label>
                <input type="text" id="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">Phone Number</label>
                <input type="text" id="phone" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">Company Name</label>
                <input type="text" id="companyname" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3">
                <label class="mb-2">Select Country</label>
                <select class="form-control form-select">
                  <option value="#">Select country</option>
                  <option value="#">Alaska</option>
                  <option value="#">China</option>
                  <option value="#">Japan</option>
                  <option value="#">Korea</option>
                  <option value="#">Philippines</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2">Address</label>
                <input type="text" id="address" class="form-control">
              </div>
              <div class="mb-3">
                <input type="text" id="address2" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2">Town/City</label>
                <input type="text" id="towncity" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3 mb-md-0">
                <label class="mb-2">State/Province</label>
                <input type="text" id="statename" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="mb-3 mb-md-0">
                <label class="mb-2">Zip/Postal Code</label>
                <input type="text" id="zippostalcode" class="form-control">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
        <div class="rounded p-4 bg-light">
          <h3 class="mb-3">Basic</h3>
          <a href="product-checkout.php">
          <span class="badge badge-secondary mb-3 text-success">Pro</span></a>
          <a href="product-checkout.php">
          <span class="badge badge-secondary mb-3 text-success">Premium</span></a>
          <a href="product-checkout.php">
          <span class="badge badge-secondary mb-3 text-success">Licence</span></a>

          <ul class="list-unstyled">
            <li class="mb-3 border-bottom pb-3">$ 750.00</li>
          </ul>
        </div>
        <div class="">
          <h3 class="mb-3">Payment Method</h3>
          <div class="mb-3">
            <div class="form-check">
              <input type="radio" id="customRadio1" name="customRadio" class="form-check-input">
              <label class="form-check-label" for="customRadio1">Direct Bank Tranfer</label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
              <label class="form-check-label" for="customRadio2">Check Payment</label>
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="radio" id="customRadio3" name="customRadio" class="form-check-input">
              <label class="form-check-label" for="customRadio3">Paypal Account</label>
            </div>
          </div>
          <div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="customCheck1">
              <label class="form-check-label" for="customCheck1">I have read and accept the terms and conditions</label>
            </div>
          </div>
        </div>
        <a href="#payment">
        <button class="btn btn-primary">Proceed to Payment</button>
        </a>
        
      </div>
    </div>
  </div>
</section>

<section id="payment">
  <div class="container">
  
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="col-3">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">
        <i class="fa-regular fa-credit-card mx-2"></i>Credit Card
        </label>
        </div>

        </div>
        <div class="checkout-form box-shadow p-4 rounded">
          <h4 class="mb-5">Payment Overview</h4>
          <form class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2">Name on Card</label>
                <input type="text" id="companyname" class="form-control">
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2"><i class="fa-regular fa-credit-card"></i> Card Number</label>
                <input type="text" id="address" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2">Contact Address Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                  
                </textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="mb-2">Billing Details</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>  
          </form>
        <div class="btn btn-success">Suscribe Now</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
      </div>
    </div>
  </div>
</section>


<!--checkout end-->


<!--newsletter start-->



<!--newsletter end-->



<!--body content end--> 


<!--footer start-->

<?php
include_once "header.php"
?>

<!--footer end-->

