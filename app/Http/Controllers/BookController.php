<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
   public function index($name,$title){
       $curl = curl_init();

       curl_setopt_array($curl, array(
           CURLOPT_URL => "https://api.nytimes.com/svc/books/v3/lists/current/{$name}.json?api-key=rs7H11YFuW67Pz847trhgfGVGMn3soSt",
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
       $responseBook = json_decode($response);
       return view('book',['title'=>$title,'responseBook' => $responseBook]);

   }
}
