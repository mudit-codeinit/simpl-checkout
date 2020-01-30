
<?php include_once('includes/index_header.php'); ?>
<meta property="al:ios:url" content="my-app://path" />
<meta property="al:android:url" content="my-app://path">
<meta property="al:ios:app_store_id" content="apple-app-id" />
<meta property="al:android:package" content="google-app-package">
<meta property="al:android:app_name" content="My App">
<meta property="al:ios:app_name" content="My App" />
<meta property="og:title" content="Profile page" />
<meta property="og:type" content="website" />
<script type="text/javascript">
    setTimeout(function(){

    window.location = 'intent:/'+$("meta[property='al:android:url']").attr("content").split(':/')[1]+'#Intent;package='+$("meta[property='al:android:package']").attr("content")+';scheme='+$("meta[property='al:android:url']").attr("content").split(':/')[0]+';launchFlags=268435456;end;';


     }, 30000);
 </script>
<body>
  <div class="top">
    <div class="container">
     <p class="top-txt"><b>WARNING:</b> Due to extremely high media demand, there is limited supply of
     <strong>Virginia Farms CBD</strong> in stock as of &nbsp; <span style="font-weight:700">
	 <script type="text/javascript">getDate(0);</script></span></span></p>
    </div>
</div>

<style>
.pw-50 {
width: 50%;
float: left;
}
.pw-100{width: 100%; float: left;}
.profile-page {
    width: 100%;
    height: auto;
    float: left;
    background-size: cover!important;
    margin-bottom:30px;
    text-align: center;
    display: block;
}
.user-pic {
    width: 120px;
    height:120px;
    margin: 0 auto;
    margin-bottom: 0px;
    border: solid 2px #dd0735;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0px 3px 5px #646464;
    margin-bottom: 10px;
}
.user-pic img{
    max-width: 100%;
    max-height:100%;
}
.profile-form {
    width: calc(100% - 80px);
    height: auto;
    margin: 30px 0px;
    padding: 40px;
    box-shadow: 0px 0px 20px #313131ed;
    background: #ffffff9c;
    max-width: 500px;
    display: inline-block;
}
.user-info {
    width: calc(100% - 40px);
    height: auto;
    float: left;
    box-shadow: 0px 2px 5px #dfdfdf;
    padding: 10px 15px;
    margin: 5px 5px;
    background:#fff;
}
.user-info h2 {
    font-size: 24px;
    color: #000;
    font-weight: bold;
}

.user-info h4 {
    font-size: 18px;
    color: #dd0707;
    font-weight: 500;
}
.user-info p {
    font-size: 16px;
    color: #333;
    line-height: 20px;
}

.download_app_now {
    width: 100%;
    height: auto;
    float: left;
    margin-top: 20px;
}
.download_app_now h4 {
    padding-bottom: 10px;
    font-size: 24px;
    text-transform: uppercase;
    color: #dd0707;
}
.download_app_now img {
    max-width: 170px;
    margin: 5px;
}

@media(max-width: 575px){
    .pw-50 {width: 100%;}

.profile-form {
    width: calc(100% - 20px);
    padding:10px;
}
}
</style>
<!------------start-sec1------------------>
<div class="profile-page" style="background: url(app/desktop/images/profile-bg.jpg)">
    <div class="container">
        <div class="profile-form">
            <div class="pw-100">
                <div class="user-pic">
                    <img src="app/desktop/images/user.png">
                </div>
            </div>
            <div class="pw-100">
                <div class="user-info">
                    <h2>Harshit Kumar</h2>
                </div>
            </div>
            <div class="pw-50">
                <div class="user-info">
                    <h4>ZIP</h4>
                    <p>257858</p>
                </div>
            </div>
            <div class="pw-50">
                <div class="user-info">
                    <h4>City</h4>
                    <p>Jaipur</p>
                </div>
            </div>
            <div class="pw-50">
                <div class="user-info">
                    <h4>State</h4>
                    <p>Rajasthan</p>
                </div>
            </div>
            <div class="pw-50">
                <div class="user-info">
                    <h4>Phone</h4>
                    <p>987 654 3210</p>
                </div>
            </div>
            <div class="pw-100">
                <div class="user-info text-left">
                    <h4>Email</h4>
                    <p>demo@gmail.com</p>
                </div>
            </div>
            <div class="pw-100">
                <div class="user-info text-left">
                    <h4>Address</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>


            <div class="pw-100">
                <div class="download_app_now">
                    <h4>Download App Now</h4>
                    <a href="#"><img src="app/desktop/images/android-store.png"></a>
                    <a href="#"><img src="app/desktop/images/apple-store.png"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>var app_config = [];</script>
<!---------------start-footer----------------- -->
<script src="assets/js/promise.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="assets/js/validator.js" type="text/javascript"></script>
<script src="assets/js/codebase.js" type="text/javascript"></script>
<script src="assets/js/form_handler.js" type="text/javascript"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
<script src="assets/js/outro.js" type="text/javascript"></script>
<script type="text/javascript" src="app/desktop/js/bookmarkscroll.js"></script>
<script type="text/javascript" src="app/desktop/js/jquery.placeholder.js"></script>
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
<!---------------end-footer----------------- -->

<script src="assets/js/jquery.min.js" type="text/javascript"></script>
</body>
</html>
