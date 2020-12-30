<?php
header("Cache-Control: public");
header("Expires: " . date("r", time() + 1));
header('Content-type: application/json');


		require_once( explode( "wp-content" , __FILE__ )[0] . "wp-load.php" );		
		include_once('simple_html_dom.php');
		
		date_default_timezone_set("Europe/London");
	
		
		$curtime = date("YmdHi");
		// Get any existing copy of our transient data
		
		
		
			//$url = "https://www.kitco.com/gold.londonfix.html";
			
			$context = stream_context_create(
				array(
					"http" => array(
						"header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
					)
				)
			);
			

			$url = 'https://api.exchangeratesapi.io/latest?base=USD';
			$curl = curl_init($url);
		
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, [
			  'X-RapidAPI-Host: https://api.exchangeratesapi.io',
			  'Content-Type: application/json'
			]);
			$response = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($response, true);
			
		
			$url2 = 'https://prices.lbma.org.uk/json/today.json';
			$curl2 = curl_init($url2);
			curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl2, CURLOPT_HTTPHEADER, [
			  'X-RapidAPI-Host: hhttps://prices.lbma.org.uk',
			  'Content-Type: application/json'
			]);
			$response2 = curl_exec($curl2);
			curl_close($curl2);
			$result2 = json_decode($response2, true);
			
			
			$html = file_get_html('https://www.kitco.com/gold.londonfix.html', false, $context);

			$stocks_array = array(
				"gold" => $result2["gold"]["pm"]["usd"],
				"silver" => $result2["silver"]["usd"],
				"platinum" => $result2["platinum"]["pm"]["usd"],
				"palladium" => $result2["palladium"]["pm"]["usd"],
				"rub" => $result["rates"]["RUB"],
				"eur" => $result["rates"]["EUR"],
				"date" => $curtime
			);
		
			$stocks = $stocks_array;
				
		
		echo json_encode(array(
		'success' => 1,
		'success_code' => 3,
		'message' => 'Данные обновлены',
		'old_stock_rub' => $stocks["rub"],
		'old_stock_eur' => $stocks["eur"],
		'old_stock_gold' => $stocks["gold"],
		'old_stock_silver' => $stocks["silver"],
		'old_stock_platinum' => $stocks["platinum"],
		'old_stock_palladium' => $stocks["palladium"],
		'old_stock_date' => $stocks["date"],
		'stock_rub' => $stocks["rub"],
		'stock_eur' => $stocks["eur"],
		'stock_gold' => $stocks["gold"],
		'stock_silver' => $stocks["silver"],
		'stock_platinum' => $stocks["platinum"],
		'stock_palladium' => $stocks["palladium"],
		'stock_date' => $stocks["date"]
		));
	 

?>