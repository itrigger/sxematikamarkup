<?php
header("Cache-Control: public");
header("Expires: " . date("r", time() + 1));
header('Content-type: application/json');


		require_once( explode( "wp-content" , __FILE__ )[0] . "wp-load.php" );		
		include_once('simple_html_dom.php');
		
		date_default_timezone_set("Europe/London");
	
		
	if ( false === ( $stocks = get_transient( 'stocks_data' ) ) ) {
		$curtime = date("YmdHi");
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
		
		$html = file_get_html('https://www.kitco.com/gold.londonfix.html', false, $context);

		$stocks_array = array(
			"gold" => $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',1)->plaintext,
			"silver" => $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',2)->plaintext,
			"platinum" => $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',5)->plaintext,
			"palladium" => $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',7)->plaintext,
			"rub" => $result["rates"]["RUB"],
			"eur" => $result["rates"]["EUR"],
			"date" => $curtime
		);
	
		$stocks = $stocks_array;
		
		set_transient( 'stocks_data', $stocks, 1000 * YEAR_IN_SECONDS );
		set_transient( 'old_stocks_data', $stocks, 1000 * YEAR_IN_SECONDS );
		echo json_encode(array(
		'success' => 1,
		'success_code' => 3,
		'message' => 'Данные загружены впервые',
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
	} else {
		$now = $_GET['date'];
		$curtime = date("YmdHi");
		$updatetime = date("Ymd")."0000";
		$old_stocks = get_transient('old_stocks_data');	
		
	
		
		$stocksArrayObject = new ArrayObject($stocks);
		$old_stocks = $stocksArrayObject->getArrayCopy();
		
		set_transient( 'old_stocks_data', $old_stocks, 1000 * YEAR_IN_SECONDS );
		
	
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
		
		$html = file_get_html('https://www.kitco.com/gold.londonfix.html', false, $context);
		
		
		if(strlen($html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',1)->plaintext) > 2){
			$stocks["gold"] = $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',1)->plaintext;
		};
		if(strlen($html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',2)->plaintext) > 2){
			$stocks["silver"] = $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',2)->plaintext;
		};
		if(strlen($html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',5)->plaintext) > 2){
			$stocks["platinum"] = $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',5)->plaintext;
		};
		if(strlen($html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',7)->plaintext) > 2){
			$stocks["palladium"] = $html->find('#content div.lf_prices',0)->find(' tr.even',0)->find('td',7)->plaintext;
		};
		if($result["rates"]["RUB"]>0){
			$stocks["rub"] = $result["rates"]["RUB"];
		};
		if($result["rates"]["EUR"]>0){
			$stocks["eur"] = $result["rates"]["EUR"];
		};
		$stocks["date"] = $curtime;
		

		set_transient( 'stocks_data', $stocks, 1000 * YEAR_IN_SECONDS );
		
		echo json_encode(array(
		'success' => 1,
		'success_code' => 2,
		'message' => 'Данные обновлены!',
		'old_stock_rub' => $old_stocks["rub"],
		'old_stock_eur' => $old_stocks["eur"],
		'old_stock_gold' => $old_stocks["gold"],
		'old_stock_silver' => $old_stocks["silver"],
		'old_stock_platinum' => $old_stocks["platinum"],
		'old_stock_palladium' => $old_stocks["palladium"],
		'old_stock_date' => $old_stocks["date"],
		'stock_rub' => $stocks["rub"],
		'stock_eur' => $stocks["eur"],
		'stock_gold' => $stocks["gold"],
		'stock_silver' => $stocks["silver"],
		'stock_platinum' => $stocks["platinum"],
		'stock_palladium' => $stocks["palladium"],
		'stock_date' => $stocks["date"]
		));
		
	}

?>