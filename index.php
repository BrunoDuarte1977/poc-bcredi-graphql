<?php

require "vendor/autoload.php";

use EUAutomation\GraphQL\Client;

$client = new Client("http://api.bcredi-stag.ateliware.com/graphql");

$headers = ['Authorization' => 'Bearer basic'];

$query = '{
			contacts {
						name
					 }
		}';
		
$variables = "";		

$response = $client->response($query, $variables, $headers);

var_dump($response);