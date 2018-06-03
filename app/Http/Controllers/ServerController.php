<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Server;
use Charts;
use Carbon\Carbon;

class ServerController extends Controller
{

    public function index(){  
        // $yesterday = Carbon::yesterday();
        // $server = Server::where('created_at', '>', $yesterday);
        // $server->delete();
        return view('server');

    }

    public function server($server_name){
        $cur_time = date('Y-m-d H:i:s');
        $date = Carbon::now();
       //$date->subWeek();
        $servers = Server::where('server_name','=',$server_name)
                       //  ->where('created_at', '>', $date->toDateTimeString()) 
                         ->get();
        return view('Server.chart',compact('servers'));
    }


 
}
