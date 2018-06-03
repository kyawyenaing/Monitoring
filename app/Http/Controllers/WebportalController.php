<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class WebportalController extends Controller
{
    public function webportal(){
        $client = new Client();
        $body = $client->request('GET','http://192.168.1.247/NPTDC/api/initial_login')->getBody();
        $initb = (string) $body;
        $initlog = json_decode($initb);
        $initlogin = $initlog->data;
        return view('webportal',compact('initlogin'));
    }
     public function webpotralcview(){
        return view('webportalcview');
    }
     public function webportalplogin(){
        return view('webportalplogin');
     }

      public function apidept(){  
        $client = new Client();
        $body = $client->request('GET','http://192.168.1.247/NPTDC/api/form_count')->getBody();
        $contents = (string) $body;
        $datta = json_decode($contents);
        $wpapidata = $datta->data; 
        return view('Webportal.webportaldept',compact('wpapidata'));


        
         
    }

}
