<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BestSeller extends Controller
{
    public function index(){


    	$curl = curl_init();

    	curl_setopt_array($curl, [
    	  CURLOPT_URL => "https://api.nytimes.com/svc/books/v3/lists/current/Combined%20Print%20and%20E-Book%20Fiction.json?api-key=rs7H11YFuW67Pz847trhgfGVGMn3soSt",
    	  CURLOPT_RETURNTRANSFER => true,
    	  CURLOPT_ENCODING => "",
    	  CURLOPT_MAXREDIRS => 10,
    	  CURLOPT_TIMEOUT => 30,
    	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	  CURLOPT_CUSTOMREQUEST => "GET",
    	  CURLOPT_POSTFIELDS => "",
        ]);

    	$response = curl_exec($curl);
    	$err = curl_error($curl);

    	curl_close($curl);

    	if ($err) {
    	  echo "cURL Error #:" . $err;
    	}

        $responseFic = json_decode($response);



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.nytimes.com/svc/books/v3/lists/current/Combined%20Print%20and%20E-Book%20Nonfiction.json?api-key=rs7H11YFuW67Pz847trhgfGVGMn3soSt",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        }
        $responseNonFic = json_decode($response);
        return view('welcome',['responseFic' => $responseFic,'responseNonFic' => $responseNonFic]);

    }



}
