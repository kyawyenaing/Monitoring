@extends('master')
@section('title', 'Servers')
@section('active_server','active')
@section('content')

    <div class="content-wrapper">
        <br>


        <div class="group">

            <h3 class="ser_h3">Server</h3>
                <div id="arr">

                </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{url('assets/js/server.js')}}"></script>
@endsection
