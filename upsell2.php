<?php
include_once('includes/common.php');
include_once('includes/upsell2_header.php'); ?>
<body>
             <form name="is-upsell" class="is-upsell" id="is-upsell" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8">
          <input type="hidden" name="f_val" value="import_upsell2"/>
           <p id="loading-indicator" style="display:none;">Processing...</p>
        </form>
<div class="up-bg">
	<div class="container">
		<div class="up-mid-bg">
            <div class="up-top">
                <p class="up-top-txt">SPEICAL OFFER UNLOCKED: INSTANT SAVINGS FOR FIRST TIME CUSTOMERS</p>
            </div>
         	<div class="head-sec">
         		<img src="app/desktop/images/logo.png" alt="" class="logo upsell-logo"/>
                <div class="hd-arrow-bg">
                    <p class="hd-txt2 spl-top-offer">Special Offer 1<br><span>Virginia Farms Single<br>Full-Flower Hand Roll</span> </p>
                    <p class="hd-txt3">Special Offer 2<br><span>CBD GUMMIES</span> </p>
                    <img src="app/desktop/images/upsell1-img.jpg" width="51" height="90" alt="" class="hd-bootle3" />
                    <img src="app/desktop/images/300-mg.png" width="51" height="90" alt=""  class="hd-bootle4"/>
                </div>
         	</div>
            <div class="strip">
                <p class="strip-txt1">Wait! You Qualify For A Limited Time Discount</p>
                <p class="strip-txt2">93% of customers that purchases <span>Virginia Farms Oil</span> also purchased <span>Virginia Farms CBD Gummies</span> </p>
            </div>
         	<div class="up-bg1">
                <div class="up-bg1-left">
                	<img src="app/desktop/images/300-mg.png" width="400" height="500" alt="" />
                </div>
            	<div class="up-bg1-right">
                	<p class="up-bg1-right-txt1"><b>Amplify YOUR RESULTS</b><br><span>with</span>
					<br><b class="cog" style="text-transform:none;">Virginia Farms CBD Gummies</b><br>
                	<span>Natural Cannabidiol Complex</span>
                    </p>
                    <div class="upsell1-green-bg">
                        <p class="up-bg1-right-txt2">Get Your Exclusive Discounted Bottle</span><br />
    Just Pay a <span>Speical One Time Price</span><br /><span class="price">$39.95</span></p>
                        <p class="up-bg1-right-txt3">
                            <img src="app/desktop/images/arrow1.png" alt="" class="arrow1" />
                            You Save $69.99
                            <img src="app/desktop/images/arrow2.png"  alt="" class="arrow2" />
                        </p>
                    </div>
              		<center><button onclick="submit_form()" class="ck-btn pulse" style="background: transparent;"><img src="app/desktop/images/ck-btn.png" alt="" /></button></center>
             	</div>
         	</div>


  <div>
      <div class="container">
<img src="app/desktop/images/300-mg-desc.jpg"/><br><br>
      </div>
  </div>
            <div class="strip" style="height:99px;">
            	<p class="strip2-txt1">HOW <span>Virginia Farms CBD GUMMIES</span> WORK TO<br /><span>SUPPORT HEALTH & WELLNESS</span></p>
            </div>
         	<p class="clearall"></p>
            <div class="three-box">
                <div class="box1">
                	<img src="app/desktop/images/box1-img.jpg" />
                    <p class="box-txt1">Easy To Take Formula</p>
                    <p class="box-txt2">Virginia Farms CBD Gummies are available in form of tasty chewable, making it easy to integrate into your daily routine. </p>
                </div>
                <div class="box2">
                	<img src="app/desktop/images/box2-img.jpg" />
                    <p class="box-txt1">Supports Joint Health</p>
                    <p class="box-txt2">Virginia Farms CBD Gummies help support joint health and flexibility while also reducing muscle wear & tear. </p>
                </div>
                <div class="box3">
                	<img src="app/desktop/images/box3-img.jpg" />
                    <p class="box-txt1">Reduces Anxiety & Stress</p>
                    <p class="box-txt2">Virginia Farms CBD Gummies helps trigger a positive stress response to improve mood patterns. </p>
                </div>
                <p class=" clearall"></p>
                <center><button onclick="submit_form()" class="ck-btn pulse" style="background: transparent;"><img src="app/desktop/images/ck-btn.png" width="356" height="92" alt="" /></button></center>
                <a href="thank-you.php?<?php echo (isset($_SERVER["QUERY_STRING"]) ?  $_SERVER["QUERY_STRING"]:'');?>" class="cut-txt"><img src="app/desktop/images/cut.png" width="18" height="15" alt="" class="cut-txt">
                No, Thanks. I decline the offer</a>
           </div>
      </div>
        <div class="footer">
            <p class="ftrtxt">
            <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-terms.php','modal');">Terms &amp; Conditions</a> |
            <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-privacy.php','modal');">Privacy Policy</a> |
            <a href="javascript:void(0);" onclick="javascript:openNewWindow('page-contact.php','modal');">Contact </a> |
            <a target="_blank" href="unsubscribe.php">Unsubscribe</a><br />
           Copyright <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script>  © - All Rights Reserved - Virginia Farms CBD Oil</p>
        </div>
  	</div>
</div>

        <p id="loading-indicator" style="display:none;">Processing...</p>
                <script type="text/javascript">AJAX_PATH="ajax.php/index.html"; app_config={"valid_class":"no-error","error_class":"has-error","loading_class":"loading","crm_type":"konnektive","exit_popup_enabled":false,"exit_popup_element_id":"","exit_popup_page":"","offer_path":"\/special-offer\/v2\/","current_step":3,"cbtoken":"","dev_mode":"N","show_validation_errors":"modal","allowed_tc":"8\"m0l0d0J050k050O0lv8sm\"l[r0j0V0H0q0h0k0R0X|Niraj]","allowed_country_codes":["US"],"countries":{"US":{"name":"United States","states":{"AL":{"name":"Alabama"},"AK":{"name":"Alaska"},"AS":{"name":"American Samoa"},"AZ":{"name":"Arizona"},"AR":{"name":"Arkansas"},"AE":{"name":"Armed Forces Middle East"},"AA":{"name":"Armed Forces Americas"},"AP":{"name":"Armed Forces Pacific"},"CA":{"name":"California"},"CO":{"name":"Colorado"},"CT":{"name":"Connecticut"},"DE":{"name":"Delaware"},"DC":{"name":"District of Columbia"},"FM":{"name":"Federated States of Micronesia"},"FL":{"name":"Florida"},"GA":{"name":"Georgia"},"GU":{"name":"Guam"},"HI":{"name":"Hawaii"},"ID":{"name":"Idaho"},"IL":{"name":"Illinois"},"IN":{"name":"Indiana"},"IA":{"name":"Iowa"},"KS":{"name":"Kansas"},"KY":{"name":"Kentucky"},"LA":{"name":"Louisiana"},"ME":{"name":"Maine"},"MD":{"name":"Maryland"},"MA":{"name":"Massachusetts"},"MI":{"name":"Michigan"},"MN":{"name":"Minnesota"},"MS":{"name":"Mississippi"},"MO":{"name":"Missouri"},"MT":{"name":"Montana"},"NE":{"name":"Nebraska"},"NV":{"name":"Nevada"},"NH":{"name":"New Hampshire"},"NJ":{"name":"New Jersey"},"NM":{"name":"New Mexico"},"NY":{"name":"New York"},"NC":{"name":"North Carolina"},"ND":{"name":"North Dakota"},"MP":{"name":"Northern Mariana Islands"},"OH":{"name":"Ohio"},"OK":{"name":"Oklahoma"},"OR":{"name":"Oregon"},"PA":{"name":"Pennsylvania"},"PR":{"name":"Puerto Rico"},"MH":{"name":"Republic of Marshall Islands"},"RI":{"name":"Rhode Island"},"SC":{"name":"South Carolina"},"SD":{"name":"South Dakota"},"TN":{"name":"Tennessee"},"TX":{"name":"Texas"},"UT":{"name":"Utah"},"VT":{"name":"Vermont"},"VI":{"name":"Virgin Islands of the U.S."},"VA":{"name":"Virginia"},"WA":{"name":"Washington"},"WV":{"name":"West Virginia"},"WI":{"name":"Wisconsin"},"WY":{"name":"Wyoming"}}}},"country_lang_mapping":{"US":{"state":"State:","zip":"Zip Code:"},"GB":{"state":"County:","zip":"Postal Code:"},"CA":{"state":"Province:","zip":"Pin Code:"},"IN":{"state":"State:","zip":"Pin:"}},"device_is_mobile":false,"pageType":"upsellPage2","enable_browser_back_button":false,"disable_trialoffer_cardexp":false}</script><script type="text/javascript">app_lang={"error_messages":{"zip_invalid":"Please enter a valid zip code!","email_invalid":"Please enter a valid email id!","cc_invalid":"Please enter a valid credit card number!","cvv_invalid":"Please enter a valid CVV code!","card_expired":"Card seems to have expired already!","card_expire_soon":"Your credit card is about to expire, please update your card information.","common_error":"Oops! Something went wrong! Can you please retry?","not_checked":"Please check the agreement box in order to proceed.","ca_zip_invalid":"Invalid Canada state code","xv_invalid_shipping":"Your shipping address could not be verified","xv_email":"Your email address could not be verified","xv_phone":"Your phone number could not be verified"},"exceptions":{"config_error":"General config error","config_file_missing":"General config error","invalid_array":"Argument is not a valid array","empty_prospect_id":"Prospect ID is empty or invalid","curl_error":"Something went wrong with the request, Please try again.","generic_error":"Something went wrong with the request, Please try again."}};</script>
<script src="assets/js/promise.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/validator.js" type="text/javascript"></script>
<script src="assets/js/codebase.js" type="text/javascript"></script>
<script src="assets/js/form_handler.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/outro.js" type="text/javascript"></script>          <script>
            function submit_form() {
            var fdata=$('form').serialize();
            $.ajax({
                type:'POST',
                url:'core/core.php',
                data:pdata=fdata,
                beforeSend: function() {
                    $("#loading-indicator").show();
                },
                success:function(msg){
                    $("#loading-indicator").hide();
                    if(msg=="success"){
                        var url_prm=location.search;
                        window.location.href = "thank-you.php"+url_prm;
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
