<?php
	require __DIR__ . '/../__admin/Scrub.php';

	error_reporting(E_ALL);
	session_start();


	$user_id= "sktbrn_simply_api";//"sktbrn_simply";
	$password="y2aNMZbNURojWdeeYghVvn9nhTfNoXivRgD";//"i_R6r.PMUTMCCCtL";
/*	$user_id="SketchBrainsAPI";
	$password="SketchBrainsAPI456";
*/
	//Normal sell
	$campaign_id= '3';
	$product_id= '36'; // 29
	$expedited_product_id = '62'; // 36
	$upsell1_product_id= '37'; // 5
	$upsell2_product_id= '38';



		//Normal sell preepaid : Done
		$prepaid_mc_campaign_id='6';
		$prepaid_mc_product_id='151';
		$prepaid_mc_expedited_product_id = '153'; // 36
		$prepaid_mc_upsell_product_id='127';
		$prepaid2_mc_upsell_product_id='152';

		//straight Sell : Done
		$straight_mc_campaign_id='3';
		$straight_mc_product_id='36';
		$straight_mc_upsell_product_id='37';
		$straight2_mc_upsell_product_id='38';


		//Normal sell scrape : Done
		$scrape_mc_campaign_id='7';
		$scrape_mc_product_id='179';
		$scrape_mc_expedited_product_id = '181'; // 36
		$scrape_mc_upsell_product_id = '155';
		$scrape2_mc_upsell_product_id = '180';

	$product_prices = array(
			"36"=>0.00,
			"62"=>3.99,
			"37"=>8.95,
			"38"=>39.95,
			"151"=>0.00,
			"153"=>3.99,
			"127"=>8.95,
			"152"=>39.95,
			"179"=>0.00,
			"181"=>3.99,
			"155"=>8.95,
			"180"=>39.95,
	);



	  $scrub = new Scrub();

	$kon_url="https://api.konnektive.com";
