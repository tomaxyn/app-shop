<?php

return[
	'client_id' => env('PAYPAL_CLIENT_ID', ''),
	'secret' => env('PAYPAL_SECRET', ''),
	'settings' => array(

			'mode' => env('PAYPAL_MODE', ''),
			'http.ConectionTimeOut' => 30,
			'log.logEnabled' => true,
			'log.FileName' => storage_path() . '/logs/paypal.log',
			'log.logLevel' => 'ERROR',
			
	),
];