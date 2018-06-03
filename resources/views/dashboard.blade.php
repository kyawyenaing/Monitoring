@extends('master')
@section('title', 'Home')
@section('active_dash','active')
@section('content')
    <div class="content-wrapper">
        <div class="first">
            <h4 class="overview">Overview of E-Office & Server</h4>
            <hr class="hor-line">

            <div class="col-md-4 card4">
            <div class="up">
            <a href="{{url('e-office')}}">
            <div class="img-circle">
            <h4 class="img-text"><b>E-Office</b></h4>
            </div>
            </a>
            <h5>Show 'up' Monitor</h5>
            </div>
            </div>
            <div class="col-md-4 card4">
            <div class="up1">
            <a href="{{url('/web-portal')}}">
            <div class="img-circle">
            <h4 class="img-text1"><b>Web Portal</b></h4>
            </div>
            </a>
            <h5>Show 'up' Monitor</h5>
            </div>
            </div>
            <div class="col-md-4 card4">
            <div class="up">
            <a href="{{url('/server')}}">
            <div class="img-circle">
            <h4 class="img-text"><b>Server</b></h4>
            </div>
            </a>
            <h5>Show 'up' Monitor</h5>
            </div>
            </div>
        </div>
    </div>


@endsection