@extends('master')
@section('title', 'Web Portal')
@section('active_web','active')
@section('content')

<?php
    $initlog = $initlogin->initial_login;

?>
    <div class="content-wrapper">
        <div class="second">
            <div class="inner-of">
                <h4 class="overview">Web Portal System Monitoring</h4>
                <hr class="hor-line">

                
                <div class="col-md-3 card2">
                    <div class="of">
                            <!-- <a href="{{url('/webportal-plogin')}}"> -->
                            <div class="img-circle-of live">
                                <h3 class="of-h3"><b> <i class="fa fa-sign-in" aria-hidden="true"></i><span id="clogin"> <?php echo $initlog->c_login; ?></span> </b></h3>
                            </div>
                            <p class="mm"> လက်ရှိလျောက်လွှာတင်နေသူ အရေအတွက် </p>
                            <!-- </a> -->
                    </div>
                </div>
                <div class="col-md-3 card2">
                    <div class="of">
                        <div class="img-circle-of live">
                            <h3 class="of-h3"><b><i class="fa fa-building-o" aria-hidden="true"></i> <span id="cdept"> <?php echo $initlog->c_dept; ?></span> </b></h3>
                        </div>
                        <p class="mm">ဌာနတွင်းမှအသုံးပြုနေသူ အရေအတွက်</p>
                    </div>
                </div>
                <div class="col-md-3 card2">
                    <div class="of">
                        <div class="img-circle-of live">
                            <h3 class="of-h3"><b><i class="fa fa-unlock-alt" aria-hidden="true"></i> <span id="cadmin"> <?php echo $initlog->c_admin; ?> </span></b></h3>
                        </div>
                        <p class="mm">စီမံခန့်ခွဲသူ</p>
                    </div>
                </div>

                <div class="col-md-3 card2">
                    <div class="of">
                        <a href="{{url('webportal/api/dept')}}">
                        <div class="img-circle-of link">
                            <h3 class="of-h3"><b><i class="fa fa-building-o" aria-hidden="true"></i>  </b></h3>
                        </div>
                        <p class="mm">ဌာန</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

@section('script')
 
<script src="{{url('assets/js/webportallogin.js')}}"></script>
<script src="{{url('assets/js/webportaladmin.js')}}"></script>
 
     @endsection
