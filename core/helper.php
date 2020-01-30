<?php
    function call_curl($params,$end_url){
        $Curl_Session = curl_init();
        curl_setopt($Curl_Session,CURLOPT_URL,$end_url);
        curl_setopt($Curl_Session, CURLOPT_POST, 2);
        curl_setopt($Curl_Session, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($Curl_Session, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($Curl_Session, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($Curl_Session);
        $err = curl_error($Curl_Session);

        curl_close($Curl_Session);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    function order_create_for_prepaid_mc(){
    	global $user_id,$password,$prepaid_mc_campaign_id,$prepaid_mc_expedited_product_id,$prepaid_mc_product_id,$kon_url,$scrub;

      if(isset($_SESSION['post-data']['expedited_process_chkbox']))
      {
        $params = array(
              'loginId' 		=> $user_id,
              'password' 		=> $password,
              'cardNumber'    => $_SESSION['post-data']['creditCardNumber'],
              'orderId'       => isset($_SESSION["prospect_id"])?$_SESSION["prospect_id"]:"",
              'paySource'     => "CREDITCARD",
              'cardMonth'     => $_SESSION['post-data']['expmonth'],
              'cardSecurityCode'    => $_SESSION['post-data']['CVV'],
              'cardYear'    => $_SESSION['post-data']['expyear'],
              'product1_id'    => $prepaid_mc_product_id,
              'product2_id'    	=> $prepaid_mc_expedited_product_id,
              'billShipSame'    => 1,
              'campaignId'     =>$prepaid_mc_campaign_id
          );

      }
      else {
        $params = array(
              'loginId' 		=> $user_id,
              'password' 		=> $password,
              'cardNumber'    => $_SESSION['post-data']['creditCardNumber'],
              'orderId'       => isset($_SESSION["prospect_id"])?$_SESSION["prospect_id"]:"",
              'paySource'     => "CREDITCARD",
              'cardMonth'     => $_SESSION['post-data']['expmonth'],
              'cardSecurityCode'    => $_SESSION['post-data']['CVV'],
              'cardYear'    => $_SESSION['post-data']['expyear'],
              'product1_id'    => $prepaid_mc_product_id,
              'billShipSame'    => 1,
              'campaignId'     =>$prepaid_mc_campaign_id
          );

      }




        $end_url=$kon_url."/order/import/";
        $response=call_curl($params,$end_url);
        $result_arr=json_decode($response,true);

        if($result_arr["result"]=="SUCCESS"){
    		$_SESSION['order-data']=$result_arr;

            if(isset($_SESSION['order_type']) && $_SESSION['order_type'] == 'Scrape'){
                $scrub->processDone();
            }


            echo "success";
        }else{
            $_SESSION["order_type"] = '';
    		echo $result_arr["message"];//"Something Went Wrong, Please Try Again";//$response;
        }
    }









	   function checkDevice() {
    // checkDevice() : checks if user device is phone, tablet, or desktop
    // RETURNS 0 for desktop, 1 for mobile, 2 for tablets
 
      if (is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"))) {
        return is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "tablet")) ? 2 : 1 ;
      } else {
        return 0;
      }
    }

?>
