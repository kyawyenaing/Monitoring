@extends('master')
@section('title', 'Web Portal')
@section('active_web','active')
@section('content')
    <div class="outer">
        <div class="inner">
            <div class="cv_bar"><h3>Webportal Public Login Users Chart</h3></div>
            <div id="plogin_chart"></div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{url('assets/js/webportalplogin.js')}}"></script>
@endsection