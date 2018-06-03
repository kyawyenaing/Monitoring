@extends('master')
@section('title', 'Server')
@section('active_server','active')
@section('content')
<?php
    $ser_cpu = array();
    $ser_time = array();
    $time = array();
    $memory = array();

?>
@foreach($servers as $server)
    <?php
    $server_cpu = $server->cpu;
    $server_memory = $server->used_memory / $server->total_memory * 100;
     
    $server_time = $server->created_at;
    $time = (string)$server_time;
    $date=date_create($time);
    $tt = date_format($date,"M-d H:i");
    array_push($ser_cpu,round($server_cpu));
    array_push($ser_time,$tt);
    array_push($memory,round($server_memory));
    
 
    $cpu_chart=Charts::create('line', 'highcharts')
          ->title('% of CPU Usage in last 7 days')
          ->elementLabel('Usage of CPU in %')
           
          ->labels($ser_time)
          ->values($ser_cpu)
          
          ->colors(['#42598C'])
          ->dimensions(1000,500)
          ->responsive(false);

     $memory_chart=Charts::create('line','highcharts')
                ->title('% of memory usage in last 7 days')
                ->elementLabel('Usage of memory in %')
                ->labels($ser_time)
                ->values($memory)
                ->dimensions(1000,500)
                ->responsive(false);
    ?>
    
@endforeach
    <div class="content-wrapper">
          
        <div class="panel panel-default">
            <div class="panel-heading">Chart for 7 days</div>
            <div class="panel-body">
                {!! $cpu_chart->html() !!}
              
            </div>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Memory Chart for 7 days</div>
            <div class="panel-body">
                {!! $memory_chart->html() !!}
            </div>

        </div>
    </div>

{!! Charts::scripts() !!}
{!! $cpu_chart->script() !!} 
{!! $memory_chart->script() !!}
@endsection