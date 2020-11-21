<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewsController extends Controller
{
    public function getData() {
        $client = new Client();
        $request = $client->get('https://newsapi.org/v2/top-headlines?country=in&apiKey=55006ff85b0f4d83b2d9fa528e4a817d');
        $response = $request->getBody();
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }

    public function searchData(Request $request) {
        $client = new Client();
        $query = $request->keyword;
        $req = $client->get('https://newsapi.org/v2/top-headlines?country=in&apiKey=55006ff85b0f4d83b2d9fa528e4a817d&q='.$query);
        $response = $req->getBody();
        
        $result = json_decode($response);
        return view('home',['artikel'=>$result->articles]);
    }
}
