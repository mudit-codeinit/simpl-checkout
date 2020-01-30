<?php

include('../core/config.php');
//session_start();

$products = array($_SESSION['product1_id'],$_SESSION['product2_id'],$_SESSION['upsell1_product_id'],$_SESSION['upsell2_product_id']);
$total = 0;
foreach($product_prices as $k=>$v){
	if(in_array($k, $products)){
		$total += $v;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Thank You</title>
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width,user-scalable=no"/>
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
<link rel="stylesheet" href="../assets/css/app5e1f.css?v=2" />
<link rel="stylesheet" href="assets/css/bootstrap.css">

<style>
	 .commentBoxOutter{background:#f2f2f2;border-bottom:1px solid #999;}
	 .commentBoxInner{padding:20px;}
	 .notebar{
	 border-top:1px solid #ccc;
	 border-bottom:1px solid #ccc;
	 padding:5px 5px;
	 }
	 .row{margin:0px;}
	 .h2, h2 {
		 font-size: 22px;
	 }
</style>
</head>
<body>
<div class="container">
 <div class="row">
    <div class="header clearfix" style="border-bottom:1px solid #ccc;margin-bottom:15px;padding-bottom:5px;">
       <nav>
          <ul class="nav nav-pills pull-right">
             <li role="presentation">
                <h3><a href="tel:(888) 654-9301">Customer Service Support: <span style="font-weight:bold;color:#000;" class="active">US: (888) 654-9301 </span>
                   </a>
                </h3>
             </li>
          </ul>
       </nav>
    </div>
 </div>
 <div class="row">
    <div id="success" class="alert alert-success" role="alert">
       <span class="lead text-center">
       <strong>Thank You!</strong> Your order will be shipped within 1 business day!  You can expect it to arrive in 3-5 days after shipment.
       </span>
    </div>
    <div class="col-sm-12">
       <div class="col-sm-4 text-center">
          <br>
          <img src="assets/images/checkmark.gif" width="92" height="91" alt=""/><br>
          <img class="prdct_img" src="assets/images/500-mg.png" width="" height="300" />
          <br>

          <div style="margin: 10px 0 0; padding:20px;border:1px dashed #ccc;">
              <span style="color: #D70306;">Order Total : <strong>$<?php echo $total;?></strong></span>
          </div>
          <!-- ========================== savings block ====================== -->
       </div>
       <div class="col-sm-5">
          <h1><br>
             Your Order is Confirmed
          </h1>
          <br><br>
          Your Confirmation Number: <strong><?php isset( $_SESSION['order-data']['message']['orderId']) ?  $_SESSION['order-data']['message']['orderId'] : "" ?></strong><br>
          <br>
          <b>We are happy you have chosen to achieve your weight loss goals with one of the most effective and hottest products on the market. </b>
          <br><br>
          Your order is currently being processed and will be shipped within 1 business day.  You’ll receive a shipping confirmation email with a tracking number once your product ships.  If for some reason you don’t receive that email, contact our customer service team immediately so we may investigate the issue – US: (888) 654-9301 <br><br>
          <div class="newpic"><a href="#"><img src="assets/images/productnew.png"></a></div>
          <!-- <div style="    text-align: center;
             width: 70%;
             margin: 0 auto;
             margin-top: 25px;
             padding: 20px 0;">
             <a href="http://app.onthego.health/" style="padding: 10px 5px; text-align: center; background-color: #5cb85c;border-radius: 5px;color: #fff;cursor: pointer;position: relative;    white-space: nowrap;
                z-index: 999;">Login to Onthego Health</a>
          </div> -->
       </div>
       <div class="col-sm-3">
          <span class="lead">Customer Service Hours: 24/7 (excluding major holidays)</span><br><br>
          Please feel free to contact customer service for any questions, comments or testimonials.<br><br>
          <img src="assets/images/secureicons_14.png" width="446" height="104" class="img-responsive" alt=""/><br><br>
          <img src="assets/images/5STAR-rating.png" width="130" height="131" class="center-block img-responsive" alt=""/>
       </div>
    </div>
 </div>
 <div class="row">
    <div class="clearfix">&nbsp;</div>
    <br>
    <div class="clearfix">&nbsp;</div>
    <div class="panel panel-default col-sm-12" style="padding:0;">
       <div class="panel-heading col-sm-12">
          <div class="col-sm-4"><img src="assets/images/guarantee.png" width="140" height="99" class="center-block" alt=""/>
          </div>
          <div class="col-sm-8">
             <h4>We are 100% committed to your product satisfaction and weight loss goals</h4>
             <br>
             Call us if you have any problems with your purchase – Customer Service Number: US: (844) 303-6368 . Customer Service hours can be reached 24/7!
          </div>
       </div>
       <div class="panel-body col-sm-12">
          <div class="col-sm-12 clearfix">
             &nbsp;
          </div>
          <div class="col-sm-4 text-center">
             <img src="assets/images/layla.png" width="78" height="79" alt="" class="center-block" /> <span class="h4">
             <br>
             "This product is amazing!"
             </span>
             <p class="small">"I am very impressed. When I got the product, I was already unsure about it but I was desperate to get rid of my belly. Turns out, it actually works! I'm down 6 lbs already and can't wait to lose 6 more..."
                <br><br>
                <img src="assets/images/5-star.png" width="119" height="23" alt=""/>
          </div>
          <div class="col-sm-4 text-center">
             <img src="assets/images/ariela.png" width="79" height="80" alt="" class="center-block" /> <span class="h4">
             <br>
             "Who would have thought...!"
             </span>
             <p class="small">"Ok, let me just say that I love watching my body take shape! You know that guilty feeling you get every day thinking that maybe tomorrow I will try again? Well it's gone! Love Love Love it!..."
                <br>
                <br>
                <img src="assets/images/5-star.png" width="119" height="23" alt=""/>
          </div>
          <div class="col-sm-4 text-center">
             <img src="assets/images/mike.png" width="79" height="80" alt="" class="center-block" /> <span class="h4">
             <br>
             "Works as described A+++"
             </span>
             <p class="small">"Product works just like they said it would. I feel great, lost some pounds. I have even started going to the gym now that I am not embarassed to be around people who are in shape..."
                <br>
                <br>
                <img src="assets/images/5-star.png" width="119" height="23" alt=""/>
          </div>
       </div>
    </div>
 </div>
 <div class="row marketing">
    <br><br><br>
    <div class="col-lg-7">
       <div class="catnav" style="padding:3px 0 0 0;">
          <center>
             <a href="#" onclick="alert('We are sorry, an error has occured. Please check back later.');"><img src="assets/images/social.jpg" width="636" height="30" class="img-responsive" /></a>
          </center>
       </div>
       <div class="commentBoxOutter">
          <div class="commentBoxInner">
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                   <td width="11%" valign="top">
                      <img src="assets/images/img_usercomment.jpg" width="54" height="54" style="border:1px solid #999;" />
                   </td>
                   <td width="89%" valign="top">
                      <textarea name="" cols="" rows="" class="form-control"></textarea>
                      <div>
                         <div align="left" style="width:200px;font:11px arial;">
                            Submit Your Comment
                         </div>
                         <div align="right" style="padding:5px 20px 0 0;float:right;width:150px;"> <span style="padding:5px 20px 0 0;float:right;width:150px;"><a href="#" onclick="alert('Your comments have been submitted for review');"><img src="assets/images/Screen-shot-2013-09-12-at-9.55.12-PM.jpg" width="73" height="25" border="0" /></a></span> </div>
                      </div>
                   </td>
                </tr>
             </table>
          </div>
       </div>
       <br>
       <div class="notebar">
          <strong>Comments</strong> (showing 7 of 231)
       </div>
       <br>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             I am so excited to get my Cannabidiol CBD Oil, My friend bought it two weeks ago and says it's working! Happy dance :) <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">7 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Just ordered it, does this product have caffeine in it? I am very sensitive to caffeine and am hoping it doesnt. <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">26 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
          <div class="clearfix">&nbsp;</div>
          <div class="col-xs-2 col-xs-offset-1">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-9 small">
             No, you do not need to worry about caffeine. It only has natural ingredients. This is my second time buying it and you won't feel anything strange on it. I had my doctor look at it and he said it looked like good stuff. <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">12 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Well here goes. I've seen this product before but wasnt sure about buying it. I finally made the decision and am very hopefull.. just need to lose 25lbs.. no pressure Cannabidiol CBD Oil lol <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">32 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Hey you will like it.. I lost 16 lbs using it. I just ordered 5 bottles! I was wondering why they offered so many bottles, but realize because it is actually something you would want to buy again and again... just makes it easier i guess.   <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">41 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Can you retun it if you don't like it? I just ordered the 1 month supply to see if it works. <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">1 hr ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
          <div class="clearfix">&nbsp;</div>
          <div class="col-xs-2 col-xs-offset-1">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-9 small">
             Yea they have a good return policy, you can just call em up and they will take care of it. <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">33 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Hello from Cali! We love your product. thank you! <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">2 hr 6 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
       <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
          <div class="col-xs-2">
             <img src="assets/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
          </div>
          <div class="col-xs-10 small">
             Just ordered, cant wait!  <br><br>
             <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">2 hr 45 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
          </div>
       </div>
    </div>
    <div class="col-lg-5">
       <img src="assets/images/customer-service_09.png" width="640" height="333" class="img-responsive" alt=""/>
       <h4>FAQ<br>
          <br>
       </h4>
       <h4>Q: How many milligrams of Cannabidiol CBD Oil does it contain?</h4>
       <p>A: Each pill contains the recommended  800 MG of 3 types of Cannabidiol CBD Oil Salts - the most available from any company! &nbsp;This is the recommended dosage by experts.</p>
       <h4>Q: How do I know this works?</h4>
       <p>A: We have numerous clients who can attest to how well the products work. But, if you decide it's not for you, simply call customer service!</p>
       <h4>Q: Can men take this?</h4>
       <p>A: Of course. &nbsp;For both men and women, Cannabidiol CBD Oil is designed to stimulate the release of stored fat from fat cells.<br>
       </p>
       <img src="assets/images/moneyback.png" width="152" height="152" class="center-block" alt=""/>
       <br>
       <br>

    </div>
 </div>
 <footer>

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
</body>
</html>
<script> var app_config  = []</script>
<script src="../assets/js/promise.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="../assets/js/validator.js" type="text/javascript"></script>
<script src="../assets/js/codebase.js" type="text/javascript"></script>
<script src="../assets/js/form_handler.js" type="text/javascript"></script>
<script src="../assets/js/app.js" type="text/javascript"></script>
<script src="../assets/js/outro.js" type="text/javascript"></script>
<script type="text/javascript" src="../app/desktop/js/bookmarkscroll.js"></script>
<script type="text/javascript" src="../app/desktop/js/jquery.placeholder.js"></script>
