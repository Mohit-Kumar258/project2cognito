<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;  // ✅ Import the correct Request class

Route::get('/', function (Request $request) {
    $grantcode=$request->get('code');
    $response=Http::asForm()->withheaders(['Content-Type'=>'application/x-www-form-urlencoded' ,
'Authorization'=> 'Basic M2FvaGdvbGNydGxhNjhuc2h1bGI5b2I2bXE6MW80bXIwMTA2cDRkZDJnZGMwcHVia3YyZmZoZW12MjM5ZGttMmlnZzE3ZnYyZGZqZ2c3Yw=='
 ])->post('https://us-west-1ayzfmupl7.auth.us-west-1.amazoncognito.com/oauth2/token',[
       'grant_type'=> 'authorization_code','code'=> $grantcode ,'redirect_uri'=>'http://localhost:8000/'
 ]);
 $decodedresponse=$response->json();
 $accesstoken=$decodedresponse['access_token'];
  $userinforesponse=Http::asForm()->withHeaders(['Content-Type'=>'application/x-www-form-urlencoded' ,
'Authorization'=> 'Bearer '.$accesstoken
 ])->get('https://us-west-1ayzfmupl7.auth.us-west-1.amazoncognito.com/oauth2/userInfo');
 $data=$userinforesponse->json();
   return view('index', ['data' => $data]);

});
