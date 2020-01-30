<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=640">
<title>Virginia Farms CBD Oil</title>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
<link href="assets/css/upsell.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../assets/css/app5e1f.css?v=2" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
</head>

<body>
<div id="container">
  	<div class="getheight">
        <div class="blu-strip">
        	<p class="blu-strip-txt1">Wait! You Qualify For A Limited Time Discount</p>
        </div>
        <div class="sec1-bg">
         <p class="s1-txt1">93% of customers that purchases<br /> <span>Virginia Farms Oil</span> also purchased<br /><span>Virginia Farms CBD Gummies</span></p>

          <img src="assets/images/up2-prod.png" alt=""  class="product" style="max-width:80%;"/>
          <p class="result-txt">AMPLIFY YOUR RESULTS<br><span>with</span><br>Virginia Farms CBD Gummies<br /><span>Natural cannabidiol complex</span></p>

          <div class="price-bx">
          	  <p class="price-bx-hding">Get Your Exclusive Discounted Bottle<br /> Just Pay a <span>Speical One Time Price</span> of</p>
              <p class="prc-txt">$39.95</p>
              <div class="clearall"></div>
              <p class="you-save">You Save $69.99 </p>
          </div>
     </div>
     <div id="section2">
       <a onclick="submit_form()"   href="javascript:;"><img src="assets/images/up-btn.png" alt=""  class="up-btn pulse"/></a>
        <div class="clearall"></div>
        <div class="blu-strip2">
        	<p class="blu-strip2-txt1">HOW <span>Virginia Farms CBD GUMMIES</span> WORK TO <span>SUPPORT HEALTH & WELLNESS</span></p>
        </div>
    </div>
    <div id="section3">
    	<div class="s3-box1">
   	    	<img src="assets/images/up1-box1.png" alt=""  class="box-img"/>
            <p class="box-p1">Easy To Take Formula</p>
            <p class="box-p2">Virginia Farms CBD Gummies are available in form of tasty chewable, making it easy to integrate into your daily routine. </p>
        </div>
        <div class="s3-box2">
        	<img src="assets/images/up1-box2.png" alt=""  class="box-img"/>
            <p class="box-p1">Supports Joint Health</p>
            <p class="box-p2">Virginia Farms CBD Gummies help support joint health and flexibility while also reducing muscle wear & tear. </p>
        </div>
        <div class="s3-box3">
        	<img src="assets/images/up1-box3.png" alt=""  class="box-img"/>
            <p class="box-p1">Reduces Anxiety & Stress</p>
            <p class="box-p2">Virginia Farms CBD Gummies helps trigger a positive stress response to improve mood patterns. </p>
        </div>
    </div>
    <div id="section2"  style="padding-bottom:40px;">
        <a onclick="submit_form()"  href="javascript:;"><img src="assets/images/up-btn.png" alt=""  class="up-btn pulse"/></a>
        <div class="clearall"></div>
        <a href="thankyou.php?<?php echo (isset($_SERVER["QUERY_STRING"]) ?  $_SERVER["QUERY_STRING"]:'');?>" class="no-thank"><img src="assets/images/cross.png" alt="">
                No, Thanks. I decline the offer</a>
    </div>
    <footer>

        <p class="clearall"></p>
        <div class="legal">
            <p class="ftrtxt2">
        <a onclick="javascript:openNewWindow('../page-terms.php','modal');" href="javascript:void(0);" class="">TERMS AND CONDITIONS</a>&nbsp;
           | &nbsp; <a onclick="javascript:openNewWindow('../page-privacy.php','modal');" href="javascript:void(0);" class=""> PRIVACY POLICY  </a>&nbsp;
           |&nbsp; <a onclick="javascript:openNewWindow('../page-contact.php','modal');" class="">CONTACT US</a>
           | <a href="../unsubscribe.php" target="_blank">Unsubscribe</a><br><br>
           * These statements have not been evaluated by the FDA. If you are pregnant, nursing, taking medications, or have a medical condition, consult your physician before using this product. Representations regarding the efficacy and safety of CBD have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. <a href="https://www.ncbi.nlm.nih.gov/pubmed/18728714" target="_blank" style="color:#03F">Click here</a> to find evidence of a test, analysis, research, or study describing the benefits,
           performance or efficacy of CBD based on the expertise of relevant professionals.
             <br><br>
             Copyright <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>
             © - All Rights Reserved - Virginia Farms<br></p>
       </div>
    </footer>
</div>
</div>
<form name="is-upsell" class="is-upsell" id="is-upsell" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8">
<input type="hidden" name="f_val" value="import_upsell2"/>
<p id="loading-indicator" style="display:none;">Processing...</p>
</form>
<script> var app_config  = []</script>
<script src="../assets/js/promise.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="../assets/js/validator.js" type="text/javascript"></script>
<script src="../assets/js/codebase.js" type="text/javascript"></script>
<script src="../assets/js/form_handler.js" type="text/javascript"></script>
<script src="../assets/js/upsell.js" type="text/javascript"></script>
<!--script src="../assets/js/app.js" type="text/javascript"></script-->
<script src="../assets/js/outro.js" type="text/javascript"></script>
<script type="text/javascript" src="../app/desktop/js/bookmarkscroll.js"></script>
<script type="text/javascript" src="../app/desktop/js/jquery.placeholder.js"></script>

<script>
          function submit_form() {
          var fdata=$('form').serialize();
          $.ajax({
              type:'POST',
              url:'../core/core.php',
              data:pdata=fdata,
              beforeSend: function() {
                  $("#loading-indicator").show();
              },
              success:function(msg){
                  $("#loading-indicator").hide();
                  if(msg=="success"){
                      var url_prm=location.search;
                      window.location.href = "thankyou.php"+url_prm;
                  }
                  else{
                      $("#loading-indicator").hide();
                      alert(msg);
                  }
              }
          });

          }
        </script>
      </body>
</html>
