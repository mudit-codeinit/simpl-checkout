<?php
include_once('includes/common.php');
include_once('includes/checkout_header.php'); ?>

<body>
	<div id="container">
	<div class="chk-section1">
    	<div class="chk-contentWrap">
        	<div class="chk-hdr">
            	<img src="app/desktop/images/logo.png" alt="" class="chk-logo" />
            	<img src="app/desktop/images/chk-hdr.png" alt=""  class="chk-hdr-img"/>
                <img src="app/desktop/images/chk-seal.png" alt=""  class="chk-seal"/>
    		</div>
            <div class="chkmid">
            	<div class="chkmid-lft">
                    <div class="timer-box">
                        <p class="toptimer-txt">Your Special 40% OFF Savings with FREE Shipping discount expires in &nbsp; <b>
                        <span id="stopwatch">0:00</span></b></p>
                	</div>

                    <!-- new section -->
                    <div class="order-summary" id="o_s">Order Summary</div>
                    <div class="hero_checkout" id="togglebox">

                            <div class="hero_left"> <img style="display: block;margin:0 auto;" class="chk_double_bottle" src="app/desktop/images/500-mg.png"  alt="" title=""> </div>

                        <div class="hero_right">

                            <p><strong style="color: #32b567;">500MG Virginia Farms CBD Oil</strong>(500MG Mint Flavor)</p>

                            <ul>

                                <li class="price_chk"> <span>Price:</span>

                                    <p id="pri">$0.00</p>
                                    <div class="clear"></div>
                                </li>

                                <li> <span>Shipping &amp; Handling:</span>

                                    <p id="shipping">$6.95
                                    </p>

                                    <div class="clear"></div>

                                </li>

                                <li> <span><strong style="color: #000;"> TOTAL</strong></span>

                                    <p id="tot"></p>
                                    <p style="color: #000;font-weight: normal !important;">$6.95
                                    </p>
                                    <p></p>

                                    <div class="clear"></div>

                                </li>
                                <div class="che-ar-port">

                                </div>
                            </ul>
                            <img src="app/desktop/images/postal.png"  alt=""  style="float:left;margin-top:20px;"/>
                        </div>
                        <div class="clear"></div>
   											<div class="bo">
												</div>
 										</div>
                    <!--ends here  -->

                    <div class="prdbox1" style="display:none;">
                        <a href="javascript:void(0);" class="package-select" data-product="product_1">
                            <div class="pck-hding-bg">
                                <p class="pack-hding">Buy 3 month supply<span>+ get 3 free</span></p>
                            </div>
                            <div class="box-lft">
                                <img src="app/desktop/images/5pack.png" alt="" class="box1-product">
                                <div class="clearall"></div>
                            </div>
                            <div class="plus-box" style="    left: 157px;"></div>
                            <div class="box-rgt">
                                <p class="package-name2">BEST VALUE PACKAGE</p>
                                <p class="list-price">List Price: <span class="strikeout">$197.00</span></p>
                                <p class="prdct-price"><b><sup>$</sup></b>32<span>.83/ea</span></p>
                            </div>
                        </a>
                    </div>
                    <div class="prdbox2" style="display:none;">
                    	<a href="javascript:void(0);" class="package-select" data-product="product_2">
                        	<div class="pck-hding-bg">
                                <p class="pack-hding">Buy 2 month supply<span>+ get 1 free</span></p>
                            </div>
                            <div class="box-lft">
                                <img src="app/desktop/images/3pack.png" alt="" class="box1-product"/>
                                <div class="clearall"></div>
                            </div>
                            <div class="plus-box"></div>
                            <div class="box-rgt">
                                <p class="package-name2">moderate PACKAGE</p>
                                <p class="list-price">List Price: <span class="strikeout">$147.00</span></p>
                                <p class="prdct-price"><b><sup>$</sup></b>49<span>.00/ea</span></p>
                            </div>
                    	</a>
                	</div>
                	<div class="prdbox3" style="display:none;">
                    	<a href="javascript:void(0);" class="package-select picked" data-product="product_3">
                       		<div class="pck-hding-bg">
                                <p class="pack-hding">Buy 1 month supply</p>
                            </div>
                            <div class="box-lft">
                                <img src="app/desktop/images/1pack.png" alt="" class="box1-product"/>
                                <div class="clearall"></div>
                            </div>
                            <div class="box-rgt">
                                <p class="package-name2">starter PACKAGE</p>
                                <p class="list-price">List Price: <span class="strikeout">$79.99</span></p>
                                <p class="prdct-price"><b><sup>$</sup></b>79<span>.99/ea</span></p>
                            </div>
                    	</a>
                	</div>
                   </div>
                <div class="chkmid-rgt">
                    <div class="chkfrm-top"></div>
                    <div class="chkfrm-mid">
                         <form method="post" action="" name="checkout_form1" accept-charset="utf-8" enctype="application/x-www-form-urlencoded;charset=utf-8">
                         <input type="hidden" name="limelight_charset" id="limelight_charset" value="utf-8" />
                        <!--  <input type="hidden" name="prospectId" value="[[prospect_id]]" /> -->
                         <input type="hidden" name="dynamic_inputs" value="product_3" id="change">
                         <div class="frm-fields2">
                         <div class="sameas">
                            <span style="display: block;text-align: center;margin-bottom:8px;font-size:18px;">Is your billing address the same as your shipping address?</span>

                        <input type="radio" name="billingSameAsShipping" id="sameyes" value="yes" checked="checked" />
                            Yes
                            &nbsp;
                            <input type="radio" name="billingSameAsShipping" id="sameno" value="no"/>
                            No
                        </div>
                        <div id="billingDiv" class="billing-address billing-info" style="margin-top:10px; display:none; float:left; width:100%;">
                            <div class="frmElemts">
                            <label for="">First Name:</label>
                            <input type="text" name="billingFirstName" placeholder="Shipping First Name" data-error-message="Please enter your shipping first name!" />
                        </div>
                        <div class="frmElemts">
                            <label for="">Last Name:</label>
                            <input type="text" name="billingLastName" placeholder="Shipping Last Name" data-error-message="Please enter your shipping last name!" />
                        </div>
                        <div class="frmElemts">
                            <label for="">Address:</label>
                            <input type="text" name="billingAddress1" placeholder="Address" data-error-message="Please enter your shipping address!" />
                        </div>
                        <div class="frmElemts">
                            <label for="">Zip:</label>

                            <input type="text" name="billingZip" maxlength="5" placeholder="Shipping Zip Code" data-error-message="Please enter a valid shipping zip code!" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g, '');" />
                        </div>
                        <div class="form-input" style="display: none;">
                         <label>Billing Country: </label>
                          <select name="billingCountry" data-error-message="Please select your shipping country!">

                        <option value="">Select Country</option>
                    </select>
                        </div>
                        <div class="frmElemts">
                            <label for="">City:</label>
                            <input type="text" name="billingCity" placeholder="Shipping City" data-error-message="Please enter your shipping city!" />
                        </div>
                        <div class="frmElemts">
                            <label for="">State:</label>
                                                  <select id="billingState" name="billingState" class="" autocomplete="on"><option value="">-- Select --</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AO">AOL</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="GU">Guam</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="US">United States</option><option value="UT">Utah</option><option value="VT">Vermont</option> <option value="VA">Virginia</option><option value="WA">Washington</option><option value="WE">WebTV</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select>
                        </div>
                        </div>
                        <center>
                           <img src="app/desktop/images/we-accept.png"  alt="" style="display:inline-block; margin:5px 0;" />
                        </center>
                         <div style="display:block;" id="cardDiv">
                            <div class="frmElemts" style="display: none;">
                            <label>Card Type</label>
                            <select name="creditCardType" class="required" data-deselect="false" data-error-message="Please select valid card type!">
                                <option value="">Card Type</option>
                                                                <option value="visa">Visa</option>
                                                                <option value="master">Master Card</option>
                                                                <option value="discover">Discover</option>
                                                            </select>
                            </div>
                            <div class="frmElemts">
                            <label>Card Number</label>
                            <input type="text" placeholder="Card Number" name="creditCardNumber" class="required masked" onkeypress="return isNumberKey(event)" minlength="16" maxlength="16" data-error-message="Please enter a valid credit card number!" />
                            </div>
                            <div class="frmElemts">
                            <label>Expiry Date</label>
                                    <select name="expmonth" id="expmonth" class="required short" data-error-message="Please select a valid expiry month!">

                                        <option value="">Month</option><option value="01">(01) January</option><option value="02">(02) February</option><option value="03">(03) March</option><option value="04">(04) April</option><option value="05">(05) May</option><option value="06">(06) June</option><option value="07">(07) July</option><option value="08">(08) August</option><option value="09">(09) September</option><option value="10">(10) October</option><option value="11">(11) November</option><option value="12">(12) December</option>                                    </select>
                                    <select name="expyear" id="expyear" class="required short" data-error-message="Please select a valid expiry year!">

                                        <option value="">Year</option><option value="20">2020</option><option value="21">2021</option><option value="22">2022</option><option value="23">2023</option><option value="24">2024</option><option value="25">2025</option><option value="26">2026</option><option value="27">2027</option><option value="28">2028</option><option value="29">2029</option><option value="30">2030</option><option value="31">2031</option><option value="32">2032</option><option value="33">2033</option><option value="34">2034</option><option value="35">2035</option><option value="36">2036</option><option value="37">2037</option><option value="38">2038</option><option value="39">2039</option>                                    </select>
                                </div>
                        <div class="frmElemts">
                                <label>CVV</label>
                                <input type="text" placeholder="CVV" name="CVV" class="required short short2" data-validate="cvv" minlength="3" maxlength="3" data-error-message="Please enter a valid CVV code!" onkeypress="return isNumberKey(event)"/>
                                <a style="font-size: 12px; text-decoration: none; position: relative; top: 5px; margin-left: 10px;" href="javascript:void(0);" class="cvvTip" onClick="javascript:openNewWindow('app/desktop/images/cvv2-location.png','modal');"> Whats This?</a>
                           </div>
                            <div class="frmElemts expedited_process_chkbox">
																	<img src="app/desktop/images/expedited-process.png" />

                            <input type="checkbox" name="expedited_process_chkbox" value="1" checked="checked">
                           <p>Expedited Processing Fee $3.99</p>
                           </div>

                            <div class="clearall"></div>
                            <input type="submit" class="chkbtn pulse" value="" style="margin-top:5px;"/>
                         </div>
                      </div>
                      <p id="loading-indicator" style="display:none;">Processing...</p>
                  </form>
                    </div>
                    <div class="chkfrm-btm"></div>
                    <div class="clearall"></div>
                    <div class="moneyback">
                        <p class="moneyback-txt">
                            <b>100% Guaranteed</b> to meet or exceed your expectations.
                            If for ANY reason you are not thrilled with your results simply
                            return your order for 100% of your money back.</p>
                    </div>
                    <center><img src="app/desktop/images/security-logo.png" alt="" style="margin-top:8px;"/></center>
                </div>
            </div>
        </div>
    </div>
  	<?php include "./includes/footer.php";  ?>
</div>



<div id="error_handler_overlay_new" style="display: none;">
  <div class="error_handler_body">
    <a href="javascript:void(0);"  id="error_handler_overlay_close">X</a>
    <ul id="custom_error_div">
    </ul>
  </div>
</div>


        <script src="app/desktop/js/jquery.min.js"></script>
        <script type="text/javascript">
 // console.log('test');
 $("#o_s").click(function(){
            // console.log('test');
        $(this).toggleClass("dnArrow");
        $("#togglebox").slideToggle();
    });
</script>
        <script>
            function toggleCardType(cardType) {
                var cardLogos = $('ul.all-card-types li');

                if (cardType && cardType.length > 0) {
                    cardLogos.each(function () {
                        if ($(this).hasClass(cardType)) {
                            $(this).removeClass('off').show();
                        } else {
                            $(this).addClass('off').hide();
                        }
                    });
                } else {
                    cardLogos.removeClass('off').show();
                }
            }


        </script>
<script type="text/javascript" src="app/desktop/js/jquery.fancybox.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
		$("#sameno").click(function(){
			$("#billingDiv").slideDown("slow");
		});

		$("#sameyes").click(function(){
			$("#billingDiv").slideUp("slow");
		});

		// $('.fancybox').fancybox();

});


	var spd = 100;
	var spdVal = 10;
	var cntDown = 5 * 60 * spdVal;
	setInterval(function () {
		var mn, sc, ms;
		cntDown--;
		if(cntDown < 0) {
			return false;
		}
		mn = Math.floor((cntDown / spdVal) / 60 );
		mn = (mn < 10 ? '0' + mn : mn);
		sc = Math.floor((cntDown / spdVal) % 60);
		sc = (sc < 10 ? '0' + sc : sc);
		ms = Math.floor(cntDown % spdVal);
		ms = (ms < 10 ? '0' + ms : ms);
		var result = mn + ':' + sc;
		document.getElementById('stopwatch').innerHTML = result;
	}, spd);
</script>
<script type="text/javascript">AJAX_PATH="ajax.php/index.html"; app_config={"valid_class":"no-error","error_class":"has-error","loading_class":"loading","crm_type":"konnektive","exit_popup_enabled":false,"exit_popup_element_id":"","exit_popup_page":"","offer_path":"\/special-offer\/v2\/","current_step":1,"cbtoken":"","dev_mode":"N","show_validation_errors":"modal","allowed_tc":"8\"m0l0d0J050k050O0lv8sm\"l[r0j0V0H0q0h0k0R0X|Niraj]","allowed_country_codes":["US"],"countries":{"US":{"name":"United States","states":{"AL":{"name":"Alabama"},"AK":{"name":"Alaska"},"AS":{"name":"American Samoa"},"AZ":{"name":"Arizona"},"AR":{"name":"Arkansas"},"AE":{"name":"Armed Forces Middle East"},"AA":{"name":"Armed Forces Americas"},"AP":{"name":"Armed Forces Pacific"},"CA":{"name":"California"},"CO":{"name":"Colorado"},"CT":{"name":"Connecticut"},"DE":{"name":"Delaware"},"DC":{"name":"District of Columbia"},"FM":{"name":"Federated States of Micronesia"},"FL":{"name":"Florida"},"GA":{"name":"Georgia"},"GU":{"name":"Guam"},"HI":{"name":"Hawaii"},"ID":{"name":"Idaho"},"IL":{"name":"Illinois"},"IN":{"name":"Indiana"},"IA":{"name":"Iowa"},"KS":{"name":"Kansas"},"KY":{"name":"Kentucky"},"LA":{"name":"Louisiana"},"ME":{"name":"Maine"},"MD":{"name":"Maryland"},"MA":{"name":"Massachusetts"},"MI":{"name":"Michigan"},"MN":{"name":"Minnesota"},"MS":{"name":"Mississippi"},"MO":{"name":"Missouri"},"MT":{"name":"Montana"},"NE":{"name":"Nebraska"},"NV":{"name":"Nevada"},"NH":{"name":"New Hampshire"},"NJ":{"name":"New Jersey"},"NM":{"name":"New Mexico"},"NY":{"name":"New York"},"NC":{"name":"North Carolina"},"ND":{"name":"North Dakota"},"MP":{"name":"Northern Mariana Islands"},"OH":{"name":"Ohio"},"OK":{"name":"Oklahoma"},"OR":{"name":"Oregon"},"PA":{"name":"Pennsylvania"},"PR":{"name":"Puerto Rico"},"MH":{"name":"Republic of Marshall Islands"},"RI":{"name":"Rhode Island"},"SC":{"name":"South Carolina"},"SD":{"name":"South Dakota"},"TN":{"name":"Tennessee"},"TX":{"name":"Texas"},"UT":{"name":"Utah"},"VT":{"name":"Vermont"},"VA":{"name":"Virginia"},"WA":{"name":"Washington"},"WV":{"name":"West Virginia"},"WI":{"name":"Wisconsin"},"WY":{"name":"Wyoming"}}}},"country_lang_mapping":{"US":{"state":"State:","zip":"Zip Code:"},"GB":{"state":"County:","zip":"Postal Code:"},"CA":{"state":"Province:","zip":"Pin Code:"},"IN":{"state":"State:","zip":"Pin:"}},"device_is_mobile":false,"pageType":"checkoutPage","enable_browser_back_button":false,"disable_trialoffer_cardexp":false}</script><script type="text/javascript">app_lang={"error_messages":{"zip_invalid":"Please enter a valid zip code!","email_invalid":"Please enter a valid email id!","cc_invalid":"Please enter a valid credit card number!","cvv_invalid":"Please enter a valid CVV code!","card_expired":"Card seems to have expired already!","card_expire_soon":"Your credit card is about to expire, please update your card information.","common_error":"Oops! Something went wrong! Can you please retry?","not_checked":"Please check the agreement box in order to proceed.","ca_zip_invalid":"Invalid Canada state code","xv_invalid_shipping":"Your shipping address could not be verified","xv_email":"Your email address could not be verified","xv_phone":"Your phone number could not be verified"},"exceptions":{"config_error":"General config error","config_file_missing":"General config error","invalid_array":"Argument is not a valid array","empty_prospect_id":"Prospect ID is empty or invalid","curl_error":"Something went wrong with the request, Please try again.","generic_error":"Something went wrong with the request, Please try again."}};</script>
<script src="assets/js/promise.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/validator.js" type="text/javascript"></script>
<script src="assets/js/codebase.js" type="text/javascript"></script>
<script src="assets/js/form_handler.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/outro.js" type="text/javascript"></script></body>



<script type="text/javascript">
            $('form').submit(function(e){
        var billingSameAsShipping1 = '',
            creditCardType1 = '',
            creditCardNumber1 ='',
            billingFirstName1 ='',
            billingLastName1 ='',
            billingAddress11 ='',
            billingCity1 ='',
            billingState = '',
            billingZip1 = '',
            expmonth1 = '',
            expyear1 = '',
            CVV1 = '';

            // billingSameAsShipping1   = $('input[name="billingSameAsShipping"]:checked').val();
            creditCardType1         = $('#creditCardType option:selected').val();
            creditCardNumber1       = $('input[name="creditCardNumber"]').val();
            expmonth1               = $('#expmonth option:selected').val();
            expyear1                = $('#expyear option:selected').val();
            CVV1                    = $('input[name="CVV"]').val();

            billingFirstName1       = $('input[name="billingFirstName"]').val();
            billingLastName1        = $('input[name="billingLastName"]').val();
            billingAddress11        = $('input[name="billingAddress1"]').val();
            billingZip1             = $('input[name="billingZip"]').val();
            billingState           = $('#billingState option:selected').val();
            billingCity1            = $('input[name="billingCity"]').val();


        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var check_status = 0;
        $("#custom_error_div").html('');

        if(creditCardType1 == '') {
            $("#custom_error_div").append('<li>Please select valid card type!</li>');
            check_status = 1;
        }

        if(creditCardNumber1 == '') {
            $("#custom_error_div").append('<li>Enter a valid credit card number</li>');
            check_status = 1;
        }

        if(expmonth1 == '') {
            $("#custom_error_div").append('<li>Enter a valid expiry month</li>');
            check_status = 1;
        }

        if(expyear1 == '') {
            $("#custom_error_div").append('<li>Enter a valid expiry year</li>');
            check_status = 1;
        }

        if(CVV1 == '') {
            $("#custom_error_div").append('<li>Enter a valid CVV</li>');
            check_status = 1;
        }
      if($('input[name="billingSameAsShipping"]:checked').val() == 'no'){

            if(billingFirstName1 == '') {
                $("#custom_error_div").append('<li>Enter a valid billing first name</li>');
                check_status = 1;
            }

            if(billingLastName1 == '') {
                $("#custom_error_div").append('<li>Enter a valid billing last name</li>');
                check_status = 1;
            }

            if(billingAddress11 == '') {
                $("#custom_error_div").append('<li>Enter a valid billing address</li>');
                check_status = 1;
            }

            if(billingCity1 == '') {
                $("#custom_error_div").append('<li>Enter a valid billing city</li>');
                check_status = 1;
            }

            if(billingState == '') {
                $("#custom_error_div").append('<li>Enter a valid billing state</li>');
                check_status = 1;
            }

            if(billingZip1 == '') {
                $("#custom_error_div").append('<li>Enter a valid biiling zip</li>');
                check_status = 1;
            }
        }

        if(check_status==1)
        {
            $("#error_handler_overlay_new").show();
            return false;
        }
        else
        {
            //console.log('Working Final');
            e.preventDefault();
            var fdata=$('form').serialize();
            $.ajax({
                type:'POST',
                url:'core/core.php',
                data:pdata=fdata+'&f_val=order_create',
                beforeSend: function() {
                    $("#loading-indicator").show();
                },
                success:function(msg){
                    $("#loading-indicator").hide();
                    if(msg=="success"){
                        var url_prm=location.search;
                        window.location.href = "upsell1.php"+url_prm;
                    } else {
                        $("#loading-indicator").hide();
                        alert(msg);
                    }
                }
            });
        }
        });


            $('#error_handler_overlay_close').click(function(){
                $("#error_handler_overlay_new").hide();
            });

function isNumberKey(evt)
{
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 31 && (charCode < 48 || charCode > 57))
 {
    return false;
 }
 return true;
}

</script>
</html>
