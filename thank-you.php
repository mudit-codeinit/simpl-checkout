<?php
//echo 'gfhg';
include('core/config.php');
//session_start();
include_once('includes/common.php');
include_once('includes/thank_you_header.php'); 


//session_start();

$products = array($_SESSION['product1_id'],$_SESSION['product2_id'],$_SESSION['upsell1_product_id'],$_SESSION['upsell2_product_id']);
$total = 0;
foreach($product_prices as $k=>$v){
	if(in_array($k, $products)){
		$total += $v;
	}
}

//print_r($_SESSION);  die;?>
   <body>

      <div class="container">
         <div class="row">
            <div class="header clearfix" style="border-bottom:1px solid #ccc;margin-bottom:15px;padding-bottom:5px;">
               <nav>
                  <ul class="nav nav-pills pull-right">
                     <li role="presentation">
                        <h3><a href="tel:(844) 303-6368">Customer Service Support: <span style="font-weight:bold;color:#000;" class="active">US: (844) 303-6368 </span>
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
                  <img src="app/desktop/images/checkmark.gif" width="92" height="91" alt=""/><br>
                  <img class="prdct_img" src="app/desktop/images/500-mg.png" width="" height="205" class="img-responsive" alt=""/><br>
                  <!-- ========================== savings block =========================== -->
                  <!-- <div style="padding:20px;border:1px dashed #ccc;">
                     <hr>
                     <span style="color: #D70306;">Order Total : <strong>$9.92</strong></span>
                     </div> -->
                  <div style="margin: 10px 0 0; padding:20px;border:1px dashed #ccc;">
                  <span style="color: #D70306;">Order Total : <strong>$<?php echo $total; ?></strong></span>
                  </div>
                  <!-- ========================== savings block ====================== -->
               </div>
               <div class="col-sm-5">
                  <h1><br>
                     Your Order is Confirmed
                  </h1>
                  <br><br>
		  Your Confirmation Number: <strong><?php echo (isset($_SESSION['order-data']['message']['orderId']) ? $_SESSION['order-data']['message']['orderId'] :'0.00'); ?></strong><br>
                  <br>
                  <b>We are happy you have chosen to achieve your weight loss goals with one of the most effective and hottest products on the market. </b>
                  <br><br>
                  Your order is currently being processed and will be shipped within 1 business day.  You’ll receive a shipping confirmation email with a tracking number once your product ships.  If for some reason you don’t receive that email, contact our customer service team immediately so we may investigate the issue – US: (844) 303-6368 <br><br>
                  <div class="newpic"><a href="#"><img src="app/desktop/images/productnew.png"></a></div>
                  <div style="    text-align: center;
                     width: 70%;
                     margin: 0 auto;
                     margin-top: 25px;
                     padding: 20px 0;">
                     <!-- <a href="profile.php" style="padding: 10px 5px; text-align: center; padding-left: 50px;  padding-right: 50px; background-color: #5cb85c;border-radius: 5px;color: #fff;cursor: pointer;position: relative;    white-space: nowrap;
                        z-index: 999;">

                        Create profile
                     </a> -->
                  </div>
               </div>
               <div class="col-sm-3">
                  <span class="lead">Customer Service Hours: 24/7 (excluding major holidays)</span><br><br>
                  Please feel free to contact customer service for any questions, comments or testimonials.<br><br>
                  <img src="app/desktop/images/secureicons_14.png" width="446" height="104" class="img-responsive" alt=""/><br><br>
                  <img src="app/desktop/images/5STAR-rating.png" width="130" height="131" class="center-block img-responsive" alt=""/>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="clearfix">&nbsp;</div>
            <br>
            <div class="clearfix">&nbsp;</div>
            <div class="panel panel-default col-sm-12" style="padding:0;">
               <div class="panel-heading col-sm-12">
                  <div class="col-sm-4"><img src="app/desktop/images/guarantee.png" width="140" height="99" class="center-block" alt=""/>
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
                     <img src="app/desktop/images/layla.png" width="78" height="79" alt="" class="center-block" /> <span class="h4">
                     <br>
                     "This product is amazing!"
                     </span>
                     <p class="small">"I am very impressed. When I got the product, I was already unsure about it but I was desperate to get rid of my belly. Turns out, it actually works! I'm down 6 lbs already and can't wait to lose 6 more..."
                        <br><br>
                        <img src="app/desktop/images/5-star.png" width="119" height="23" alt=""/>
                  </div>
                  <div class="col-sm-4 text-center">
                     <img src="app/desktop/images/ariela.png" width="79" height="80" alt="" class="center-block" /> <span class="h4">
                     <br>
                     "Who would have thought...!"
                     </span>
                     <p class="small">"Ok, let me just say that I love watching my body take shape! You know that guilty feeling you get every day thinking that maybe tomorrow I will try again? Well it's gone! Love Love Love it!..."
                        <br>
                        <br>
                        <img src="app/desktop/images/5-star.png" width="119" height="23" alt=""/>
                  </div>
                  <div class="col-sm-4 text-center">
                     <img src="app/desktop/images/mike.png" width="79" height="80" alt="" class="center-block" /> <span class="h4">
                     <br>
                     "Works as described A+++"
                     </span>
                     <p class="small">"Product works just like they said it would. I feel great, lost some pounds. I have even started going to the gym now that I am not embarassed to be around people who are in shape..."
                        <br>
                        <br>
                        <img src="app/desktop/images/5-star.png" width="119" height="23" alt=""/>
                  </div>
               </div>
            </div>
         </div>
         <div class="row marketing">
            <br><br><br>
            <div class="col-lg-7">
               <div class="catnav" style="padding:3px 0 0 0;">
                  <center>
                     <a href="#" onclick="alert('We are sorry, an error has occured. Please check back later.');"><img src="app/desktop/images/social.jpg" width="636" height="30" class="img-responsive" /></a>
                  </center>
               </div>
               <div class="commentBoxOutter">
                  <div class="commentBoxInner">
                     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                           <td width="11%" valign="top">
                              <img src="app/desktop/images/img_usercomment.jpg" width="54" height="54" style="border:1px solid #999;" />
                           </td>
                           <td width="89%" valign="top">
                              <textarea name="" cols="" rows="" class="form-control"></textarea>
                              <div>
                                 <div align="left" style="width:200px;font:11px arial;">
                                    Submit Your Comment
                                 </div>
                                 <div align="right" style="padding:5px 20px 0 0;float:right;width:150px;"> <span style="padding:5px 20px 0 0;float:right;width:150px;"><a href="#" onclick="alert('Your comments have been submitted for review');"><img src="app/desktop/images/Screen-shot-2013-09-12-at-9.55.12-PM.jpg" width="73" height="25" border="0" /></a></span> </div>
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
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     I am so excited to get my Cannabidiol CBD Oil, My friend bought it two weeks ago and says it's working! Happy dance :) <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">7 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Just ordered it, does this product have caffeine in it? I am very sensitive to caffeine and am hoping it doesnt. <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">26 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
                  <div class="clearfix">&nbsp;</div>
                  <div class="col-xs-2 col-xs-offset-1">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-9 small">
                     No, you do not need to worry about caffeine. It only has natural ingredients. This is my second time buying it and you won't feel anything strange on it. I had my doctor look at it and he said it looked like good stuff. <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">12 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Well here goes. I've seen this product before but wasnt sure about buying it. I finally made the decision and am very hopefull.. just need to lose 25lbs.. no pressure Cannabidiol CBD Oil lol <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">32 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Hey you will like it.. I lost 16 lbs using it. I just ordered 5 bottles! I was wondering why they offered so many bottles, but realize because it is actually something you would want to buy again and again... just makes it easier i guess.   <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">41 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Can you retun it if you don't like it? I just ordered the 1 month supply to see if it works. <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">1 hr ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
                  <div class="clearfix">&nbsp;</div>
                  <div class="col-xs-2 col-xs-offset-1">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-9 small">
                     Yea they have a good return policy, you can just call em up and they will take care of it. <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">33 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Hello from Cali! We love your product. thank you! <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">2 hr 6 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
               <div class="col-xs-12" style="border-bottom:1px dashed #ccc;padding:20px;">
                  <div class="col-xs-2">
                     <img src="app/desktop/images/img_usercomment.jpg" width="60" height="60" alt="" class="img-responsive"/>
                  </div>
                  <div class="col-xs-10 small">
                     Just ordered, cant wait!  <br><br>
                     <div class="comments" style="padding:10px 0 0 0;font-size:10px ;" align="right">2 hr 45 min ago | <a href="#" onclick="alert('Thank you, this person has been reported');">report</a></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <img src="app/desktop/images/customer-service_09.png" width="640" height="333" class="img-responsive" alt=""/>
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
               <img src="app/desktop/images/moneyback.png" width="152" height="152" class="center-block" alt=""/>
               <br>
               <br>

            </div>
         </div>
         <!---------------start-footer----------------- -->
         <div id="footer">
               <div class="container">
                   <!-- -->
                   <!-- onclick="javascript:openNewWindow('page-privacy.php','modal');" -->
                    <p class="frt-txt1"><a onclick="javascript:openNewWindow('page-terms.php','modal');"  href="javascript:void(0);" >Terms &amp; Conditions</a>&nbsp;
                      |&nbsp;<a onclick="javascript:openNewWindow('page-privacy.php','modal');" href="javascript:void(0);" >Privacy Policy</a>&nbsp;
                      |&nbsp;<a onclick="javascript:openNewWindow('page-contact.php','modal');" href="javascript:void(0);">Contact </a>
                      | <a href="unsubscribe.php" target="_blank">Unsubscribe</a><br><br>
                    * These statements have not been evaluated by the FDA. If you are pregnant, nursing, taking medications, or have
                    a medical condition, consult your physician before using this product. Representations regarding the efficacy
                    and safety of CBD have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods
                    and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat,
                    or cure any disease. <a href="https://www.ncbi.nlm.nih.gov/pubmed/18728714" target="_blank" style="color:#03F">Click here</a> to find evidence of a test, analysis, research, or study describing the benefits,
                    performance or efficacy of CBD based on the expertise of relevant professionals.
                      <br><br>
                      <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>
                     Copyright © - All Rights Reserved - Virginia Farms CBD Oil
                      </p>
               </div>
         </div>
      </div>

		      <script type="text/javascript">AJAX_PATH="ajax.php/index.html"; app_config={"valid_class":"no-error","error_class":"has-error","loading_class":"loading","offer_path":"\/special-offer\/v2\/","current_step":3,"cbtoken":"","dev_mode":"N","show_validation_errors":"modal","allowed_tc":"8\"m0l0d0J050k050O0lv8sm\"l[r0j0V0H0q0h0k0R0X|Niraj]","allowed_country_codes":["US"],"countries":{"US":{"name":"United States","states":{"AL":{"name":"Alabama"},"AK":{"name":"Alaska"},"AS":{"name":"American Samoa"},"AZ":{"name":"Arizona"},"AR":{"name":"Arkansas"},"AE":{"name":"Armed Forces Middle East"},"AA":{"name":"Armed Forces Americas"},"AP":{"name":"Armed Forces Pacific"},"CA":{"name":"California"},"CO":{"name":"Colorado"},"CT":{"name":"Connecticut"},"DE":{"name":"Delaware"},"DC":{"name":"District of Columbia"},"FM":{"name":"Federated States of Micronesia"},"FL":{"name":"Florida"},"GA":{"name":"Georgia"},"GU":{"name":"Guam"},"HI":{"name":"Hawaii"},"ID":{"name":"Idaho"},"IL":{"name":"Illinois"},"IN":{"name":"Indiana"},"IA":{"name":"Iowa"},"KS":{"name":"Kansas"},"KY":{"name":"Kentucky"},"LA":{"name":"Louisiana"},"ME":{"name":"Maine"},"MD":{"name":"Maryland"},"MA":{"name":"Massachusetts"},"MI":{"name":"Michigan"},"MN":{"name":"Minnesota"},"MS":{"name":"Mississippi"},"MO":{"name":"Missouri"},"MT":{"name":"Montana"},"NE":{"name":"Nebraska"},"NV":{"name":"Nevada"},"NH":{"name":"New Hampshire"},"NJ":{"name":"New Jersey"},"NM":{"name":"New Mexico"},"NY":{"name":"New York"},"NC":{"name":"North Carolina"},"ND":{"name":"North Dakota"},"MP":{"name":"Northern Mariana Islands"},"OH":{"name":"Ohio"},"OK":{"name":"Oklahoma"},"OR":{"name":"Oregon"},"PA":{"name":"Pennsylvania"},"PR":{"name":"Puerto Rico"},"MH":{"name":"Republic of Marshall Islands"},"RI":{"name":"Rhode Island"},"SC":{"name":"South Carolina"},"SD":{"name":"South Dakota"},"TN":{"name":"Tennessee"},"TX":{"name":"Texas"},"UT":{"name":"Utah"},"VT":{"name":"Vermont"},"VI":{"name":"Virgin Islands of the U.S."},"VA":{"name":"Virginia"},"WA":{"name":"Washington"},"WV":{"name":"West Virginia"},"WI":{"name":"Wisconsin"},"WY":{"name":"Wyoming"}}}},"country_lang_mapping":{"US":{"state":"State:","zip":"Zip Code:"},"GB":{"state":"County:","zip":"Postal Code:"},"CA":{"state":"Province:","zip":"Pin Code:"},"IN":{"state":"State:","zip":"Pin:"}},"device_is_mobile":false,"pageType":"thankyouPage","enable_browser_back_button":false,"disable_trialoffer_cardexp":false}</script><script type="text/javascript">app_lang={"error_messages":{"zip_invalid":"Please enter a valid zip code!","email_invalid":"Please enter a valid email id!","cc_invalid":"Please enter a valid credit card number!","cvv_invalid":"Please enter a valid CVV code!","card_expired":"Card seems to have expired already!","card_expire_soon":"Your credit card is about to expire, please update your card information.","common_error":"Oops! Something went wrong! Can you please retry?","not_checked":"Please check the agreement box in order to proceed.","ca_zip_invalid":"Invalid Canada state code","xv_invalid_shipping":"Your shipping address could not be verified","xv_email":"Your email address could not be verified","xv_phone":"Your phone number could not be verified"},"exceptions":{"config_error":"General config error","config_file_missing":"General config error","invalid_array":"Argument is not a valid array","empty_prospect_id":"Prospect ID is empty or invalid","curl_error":"Something went wrong with the request, Please try again.","generic_error":"Something went wrong with the request, Please try again."}};</script>
<script src="assets/js/promise.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/validator.js" type="text/javascript"></script>
<script src="assets/js/codebase.js" type="text/javascript"></script>
<script src="assets/js/form_handler.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/outro.js" type="text/javascript"></script>
      <script src="app/desktop/js/bootstrap.min.js"></script>
      <script>
         $(document).ready(function(){
            $("#success").delay(5000).slideDown("slow");
          });
      </script>
      <script>
         setTimeout(function()
           { $('#myModal').removeClass('fade');
           $('#myModal').addClass('show');
            }, 1000);

         $('.btn-default').click(function(){
           $('#myModal').removeClass('show');
         });
      </script>
   </body>
</html>
