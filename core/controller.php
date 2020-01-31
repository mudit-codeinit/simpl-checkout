<?php
	$_SESSION['post-data'] = $_POST;
	$func_selection=$_POST["f_val"];
	switch ($func_selection) {
	    case "prospect_creation":

	        $params = array(
	            'loginId' 		=> $user_id,
	            'password' 		=> $password,
	            'firstName'    	=> $_SESSION['post-data']['firstName'],
	            'lastName'    	=> $_SESSION['post-data']['lastName'],
	            'address1'    	=> $_SESSION['post-data']['shippingAddress1'],
	            // 'address2'    	=> $_SESSION['post-data']['shippingAddress2'],
	            'postalCode'    => $_SESSION['post-data']['shippingZip'],
	            'city'    		=> $_SESSION['post-data']['shippingCity'],
	            'state'    		=> $_SESSION['post-data']['shippingState'],
	            'country'   	=> "US",
	            'emailAddress'  => $_SESSION['post-data']['email'],
	            'phoneNumber'   => $_SESSION['post-data']['phone'],
	            'billShipSame'  => 1,
	            'campaignId'    => $campaign_id
	        );

	        $end_url=$kon_url."/leads/import/";
	        $response=call_curl($params,$end_url);
	        $result_arr=json_decode($response,true);

	        // print_r($result_arr); die;

	        if($result_arr["result"]=="SUCCESS"){

	            $_SESSION["prospect_id"]=$result_arr["message"]["orderId"];
	            $_SESSION["prospect_email"] = $_SESSION['post-data']['email'];
	            //        $result_arr=json_decode($response,true);
	            echo "success";
	        }else{
	    		$err_str="";
	    		if (is_array($result_arr["message"])) {
	    			foreach($result_arr["message"] as $key => $item){
		    			$err_str=$item;
		    		}
	    		}else{
	    			$err_str=$result_arr["message"];
	    		}
	    		echo $err_str;//"Something Went Wrong, Please Try Again";//$response;
	        }
	        break;

	    case "order_create":

	    	// $product_radio = $_SESSION['post-data']['product_radio'];

	    	$boolean =  $scrub->decide();

	        $_SESSION['scrape'] = $boolean;


	        if(isset($_SESSION['post-data']['expedited_process_chkbox']))
	        {
		        $params = array(
		            'loginId' 			=> $user_id,
		            'password' 			=> $password,
		            'cardNumber'   		=> $_SESSION['post-data']['creditCardNumber'],
		            'orderId'    		=> isset($_SESSION["prospect_id"])?$_SESSION["prospect_id"]:"",
		            'paySource'    		=> "CREDITCARD",
		            'cardMonth'    		=> $_SESSION['post-data']['expmonth'],
		            'cardSecurityCode' 	=> $_SESSION['post-data']['CVV'],
		            'cardYear'    		=> $_SESSION['post-data']['expyear'],
		            'product1_id'    	=> $product_id,
		            'product2_id'    	=> $expedited_product_id,
		            'billShipSame'    	=> 1,
		            'campaignId'     	=> $campaign_id
		        );
	        }
	        else
	        {
		        $params = array(
		            'loginId' 			=> $user_id,
		            'password' 			=> $password,
		            'cardNumber'   		=> $_SESSION['post-data']['creditCardNumber'],
		            'orderId'    		=> isset($_SESSION["prospect_id"])?$_SESSION["prospect_id"]:"",
		            'paySource'    		=> "CREDITCARD",
		            'cardMonth'    		=> $_SESSION['post-data']['expmonth'],
		            'cardSecurityCode' 	=> $_SESSION['post-data']['CVV'],
		            'cardYear'    		=> $_SESSION['post-data']['expyear'],
		            'product1_id'    	=> $product_id,
		            'billShipSame'    	=> 1,
		            'campaignId'     	=> $campaign_id
		        );
	        }
	        $_SESSION['product1_id'] = $product_id;
	       if(isset($_SESSION['post-data']['expedited_process_chkbox'])){
	        		$_SESSION['product2_id'] = $expedited_product_id;
	    	}
	        // print_r($params) die;

		 if($_SESSION['post-data']['billingSameAsShipping'] =='no'){
                         $params['billShipSame'] = 0;
                         $params['shipFirstName'] = $_SESSION['post-data']['billingFirstName'];
                         $params['shipLastName'] = $_SESSION['post-data']['billingLastName'];
                         $params['shipAddress1'] = $_SESSION['post-data']['billingAddress1'];

                        $params['shipPostalCode'] = $_SESSION['post-data']['billingZip'];
                        $params['shipCity'] = $_SESSION['post-data']['billingCity'];
                        $params['shipState'] = $_SESSION['post-data']['billingState'];
                        $params['shipCountry'] = 'US';
                }

	        $creditCardType = isset($_SESSION['post-data']['creditCardType']) ? $_SESSION['post-data']['creditCardType'] :'';
	        //for scrape only
	        if($boolean){

	            $prepaid_mc_campaign_id= $scrape_mc_campaign_id;
	            $prepaid_mc_product_id=$scrape_mc_product_id;
	            $prepaid_mc_expedited_product_id=$scrape_mc_expedited_product_id;
	            $_SESSION['product1_id'] = $scrape_mc_product_id;
		       	if( $expedited_product_id){
		        		$_SESSION['product2_id'] = $scrape_mc_expedited_product_id;
		    	}

	            $_SESSION["order_type"] = 'Scrape';
	            order_create_for_prepaid_mc();
	        }else{


	            //for other
	            $end_url=$kon_url."/order/import/";
	            $response=call_curl($params,$end_url);
	            $result_arr=json_decode($response,true);
	            if($result_arr["result"]=="SUCCESS"){
	                $_SESSION['order-data']=$result_arr;
	                 // $data= $scrub->processDone(); // complete the scrape process

	                echo "success";
	            }
	            else{

	                if(strpos($result_arr["message"], 'Prepaid') !== false){
	                    $_SESSION["order_type"] = 'Prepaid';
	                    order_create_for_prepaid_mc();
	                }else{
	                    $_SESSION["order_type"] = '';
	                    echo $result_arr["message"];//"Something Went Wrong, Please Try Again";//$response;
	                }
	            }
	        }
	        break;

	    case "order_w_prospect":
	        call_curl($params,$end_url);
	        break;
	    case "import_upsell1":
	        $order_type = isset($_SESSION["order_type"]) ? $_SESSION["order_type"] : '';

	        if($order_type == 'Prepaid'){
	            $upsell1_product_id = $prepaid_mc_upsell_product_id;
	        }

	        if($order_type == 'Master'){
	            $upsell1_product_id = $straight_mc_upsell_product_id;
	        }

	        if($order_type == 'Scrape'){
	            $upsell1_product_id = $scrape_mc_upsell_product_id;
	        }
	        $_SESSION['upsell1_product_id']=$upsell1_product_id;
	        $params = array(
	            'loginId' 		=> $user_id,
	            'password' 		=> $password,
	            'orderId'    => $_SESSION['order-data']['message']['orderId'],
	            'productId'    => $upsell1_product_id,
	            'productQty' => 1
	        );

	        $end_url=$kon_url."/upsale/import/";
	        $response=call_curl($params,$end_url);
	        $result_arr=json_decode($response,true);

	        if($result_arr["result"]=="SUCCESS"){

	          // $_SESSION["order_type"] ='';
	           $_SESSION['order-data']=$result_arr;
	            echo "success";
	        }else{
	            $err_str="Something Went Wrong, Please Try Again";
				foreach($result_arr["message"] as $key => $item){
					$err_str=$item;
					}
					echo $err_str;//"Something Went Wrong, Please Try Again";//$response;
	        }
	        break;
	    case "import_upsell2":
	        $order_type = isset($_SESSION["order_type"]) ? $_SESSION["order_type"] : '';

	        if($order_type == 'Prepaid'){
	            $upsell2_product_id = $prepaid2_mc_upsell_product_id;
	        }

	        if($order_type == 'Master'){
	            $upsell2_product_id = $straight2_mc_upsell_product_id;
	        }

	        if($order_type == 'Scrape'){
	            $upsell2_product_id = $scrape2_mc_upsell_product_id;
	        }
	        $_SESSION['upsell2_product_id']=$upsell2_product_id;
	        $params = array(
	            'loginId' 		=> $user_id,
	            'password' 		=> $password,
	            'orderId'    => $_SESSION['order-data']['message']['orderId'],
	            'productId'    => $upsell2_product_id,
	            'productQty' => 1
	        );

	        $end_url=$kon_url."/upsale/import/";
	        $response=call_curl($params,$end_url);
	        $result_arr=json_decode($response,true);

	        if($result_arr["result"]=="SUCCESS"){

	           $_SESSION["order_type"] ='';
	           $_SESSION['order-data']=$result_arr;
	            echo "success";
	        }else{
	            $err_str="Something Went Wrong, Please Try Again";
				foreach($result_arr["message"] as $key => $item){
					$err_str=$item;
					}
					echo $err_str;//"Something Went Wrong, Please Try Again";//$response;
	        }
	        break;

	    case "full_checkout":
	        $params = array(
	            'loginId'         => $user_id,
	            'password'         => $password,
	            'billShipSame'    => 1,
	            'paySource'    => "CREDITCARD",
	            'cardNumber'    => $_SESSION['post-data']['creditCardNumber'],
	            'cardMonth'    => $_SESSION['post-data']['expmonth'],
	            'cardYear'    => $_SESSION['post-data']['expyear'],
	            'cardSecurityCode'    => $_SESSION['post-data']['CVV'],
	            'product1_id'    => $straight_mc_product_id,
	            'billShipSame'    => 1,
	            'campaignId'     =>$straight_mc_campaign_id,
	        );

	        //Logic for validaing the pre order ID for one page checkout
	        $prospect_email = isset($_SESSION["prospect_email"]) ? $_SESSION["prospect_email"] :'';
	        $prospect_id = isset($_SESSION["prospect_id"]) ? $_SESSION["prospect_id"] :'';
	        if( strcasecmp($prospect_email,$_SESSION['post-data']['email']) >-1 && !empty($prospect_id)){
	            $params['orderId'] = $prospect_id;
	        }else{
	            $params['firstName']=  $_SESSION['post-data']['firstName'];
	            $params['lastName']    = $_SESSION['post-data']['lastName'];
	            $params['address1']    = $_SESSION['post-data']['shippingAddress1'];
	            $params['address2']    = $_SESSION['post-data']['shippingAddress2'];
	            $params['postalCode']   = $_SESSION['post-data']['shippingZip'];
	            $params['city']    = $_SESSION['post-data']['shippingCity'];
	            $params['state']    = $_SESSION['post-data']['shippingState'];
	            $params['country']    = "US";
	            $params['emailAddress']  = $_SESSION['post-data']['email'];
	            $params['phoneNumber']    = $_SESSION['post-data']['phone'];
	            $params['phoneNumber']    = $_SESSION['post-data']['phone'];
	        }
	        //End of logic


	        $end_url=$kon_url."/order/import/";
	        $response=call_curl($params,$end_url);
	        $result_arr=json_decode($response,true);


	        if($result_arr["result"]=="SUCCESS"){
	            $_SESSION["order_type"] = 'Master';
	            $_SESSION['order-data']=$result_arr;
	            echo "success";
	        }else{
	            $_SESSION["order_type"] = '';
	            echo $result_arr["message"];
	        }
	        break;

	    case "order_view":

	        $end_url=$kon_url."/order/query/";
	        call_curl($params,$end_url);
	        break;
	    default:
	        echo "Please try again with a different option";
	}
?>
