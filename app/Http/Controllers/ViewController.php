<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function test(){
  //   	$mytime = \Carbon\Carbon::now();
		// echo $mytime->toDateTimeString();
		//echo date('Y-m-d');
		$current = Carbon::now();
		echo $current->toDateString() . "<br>";
		echo $current->subDays(7)->toDateString();
		 
    }
   
}
