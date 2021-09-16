<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class apiconnect extends Controller
{
    public function getData(){
        $client = new Client();
        $response = $client->get('https://dog.ceo/api/breeds/image/random');

        return  $response; 
    }
}

?>