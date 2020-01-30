<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include(__DIR__."/include/header.php");
include(__DIR__."/actions/dashboardAction.php");


?>
<link href="/admin/include/css/pricing.css" rel="stylesheet">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Scrubbing Tool</h5>
  <!-- <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Features</a>
    <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Enterprise</a>
    <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Support</a>
    <a class="p-2 text-dark" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Pricing</a>
  </nav> -->
  <a class="btn btn-outline-primary" href="<?php echo $_SERVER['PHP_SELF'];?>?logout=yes">Logout</a>
</div>

<!-- <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Welcome to</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div> -->

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Scrubbing Percentage</h4>
      </div>
      <div class="card-body">
        
      
        <form name="scrubbing_form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            
            <input type="hidden" name="scrubbing_form" value="yes"/>
            <input type="hidden" name="id" value="<?php echo $id;?>"/>

            <div class="form-group">
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Percentage" name="scrubbing_percentage" value="<?php echo $scrubbing_percentage;?>"/>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>

    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
     -->
    <!-- <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div> -->
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <!-- <img class="mb-2" src="./Pricing example · Bootstrap_files/bootstrap-solid.svg" alt="" width="24" height="24"> -->
        <small class="d-block mb-3 text-muted">© 2019</small>
      </div>
      <!-- <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Cool stuff</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Random feature</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Team feature</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Stuff for developers</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Another one</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Last time</a></li>
        </ul>
      </div> -->
      <!-- <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Resource</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Resource name</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Another resource</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Final resource</a></li>
        </ul>
      </div> -->
      <!-- <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Team</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Locations</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Privacy</a></li>
          <li><a class="text-muted" href="https://getbootstrap.com/docs/4.3/examples/pricing/#">Terms</a></li>
        </ul>
      </div> -->
    </div>
  </footer>
</div>
