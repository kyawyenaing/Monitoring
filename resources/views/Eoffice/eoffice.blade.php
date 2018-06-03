@extends('master')
@section('title', 'E-Office')
@section('active_eoffice','active')
@section('content')
<?php
    $nevcount = count($neverlogdata);
    //$eoffcount = count($eofficedatas);
    $noactioncount = 1;
?>
@foreach($eofficedatas as $eofficedata)
    @if($eofficedata->DocAction == 'null')
        <?php $noaction = $noactioncount++ ?>
    @endif
@endforeach
    <div class="content-wrapper">
        <div class="second">
            <div class="inner-of">
                <h4 class="overview">E-Office System Monitoring</h4>
                  
                <hr class="hor-line">
                <div class="moni">

                    <div class="col-md-3 card2 ">
                        <div class="of">
                            <div class="img-circle-of live">
                                <h3 class="of-h3"><b><i class="fa fa-sign-in" aria-hidden="true"></i> <span id="office-login"> </span></b></h3>
                            </div>
                            <p>Current Login Users</p>
                        </div>
                    </div>

                    <div class="col-md-3 card2">
                        <div class="of">
                            <a href="{{url('e-office/no-action-for-today')}}">
                            <div class="img-circle-of link">
                                <h3 class="of-h3"><b><i class="fa fa-book" aria-hidden="true"></i> <span id="docnum"></span> <?php //echo $noaction; ?> </b></h3>
                            </div>
                            
                            <p>No any actions</p></a>   
                        </div>
                    </div>

                    <div class="col-md-3 card2">
                        <div class="of">
                            <a href="{{url('/e-office/never-login-users-for-today')}}">

                            <div class="img-circle-of link">
                                <h3 class="of-h3"><b><i class="fa fa-sign-in" aria-hidden="true"></i> <span id="active"></span> <?php //echo $nevcount; ?></b></h3>
                            </div>
                            
                            <p>Never Login Users</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-3 card2">
                        <div class="of">
                            <a href="{{url('/e-office/documentation-process-for-today')}}">
                            <div class="img-circle-of link">
                                <h3 class="of-h3"><b> <i class="fa fa-bar-chart" aria-hidden="true"></i>/<i class="fa fa-book" aria-hidden="true"></i></b></h3>
                            </div>
                           <p> Document Open/View </p></a>
                        </div>
                    </div>
                </div>

                <div class="tab-row">
                     <div class="tab-row-head">
                          <table class="table-tab-row">
                              <col width="150px">
                              <col width="150px">
                              <col width="150px">
                              <col width="150px">
                              <col width="450px">
                              <!-- <col width="120px">
                              <col width="70px">
                              <col width="120px">
                              <col width="100px"> -->
                              
                                  
                            <thead>
                                <tr>
                                    <th >Action</th>
                                    <th >For Today</th>
                                    <th >For a Week</th>
                                    <th>For a Month</th>
                                    <th colspan="5">Custom</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Never Login Users</td>
                                    <td><a href="{{url('e-office/never-login-users-for-today')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/never-login-users-for-last-7days')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/never-login-users-for-a-month')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td colspan="5">
                                        <form action="{{url('/e-office/never-login-users-custom')}}" method="post">
                                            {{csrf_field()}}
                                            Start Date<input type="text" id="start_date_neverlogin" name="start_date_neverlogin"  style="width:100px; font-size: 14px;"> 
                                            End Date<input type="text" id="end_date_neverlogin" name="end_date_neverlogin"  style="width:100px; font-size: 14px;">
                                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                                        </form>
                                    </td>
                                     
                                </tr>
                                <tr>
                                    <td>No Any Action Users</td>
                                    <td><a href="{{url('e-office/no-action-for-today')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/no-action-for-last-7days')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/no-action-for-a-month')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td colspan="5">
                                    <form action="{{url('/e-office/no-action-custom')}}" method="post">
                                          {{csrf_field()}}
                                            Start Date<input type="text" id="start_date_noaction" name="start_date_noaction"  style="width:100px; font-size: 14px;"> 
                                        End Date<input type="text" id="end_date_noaction" name="end_date_noaction"  style="width:100px; font-size: 14px;">
                                            <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                                        </form>
                                    </td>
                                </tr>
                                 
                                 
                                 
                                 <tr>
                                    <td>Document Processing</td>
                                    <td><a href="{{url('e-office/documentation-process-for-today')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/documentation-process-for-last-7days')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td><a href="{{url('e-office/documentation-process-for-a-month')}}"><button class="btn-view"> <i class="fa fa-eye"></i> View</button></a></td>

                                    <td colspan="5">
                                    <form action="{{url('/e-office/documentation-process-custom')}}" method="post">
                                          {{csrf_field()}}
                                        Start Date<input type="text" id="start_date_docs" name="start_date_docs"  style="width:100px; font-size: 14px;"> 
                                        End Date<input type="text" id="end_date_docs" name="end_date_docs"  style="width:100px; font-size: 14px;">
                                        <button class="btn-view"><i class="fa fa-eye"></i> View</button>
                                    </form>
                                    </td>
                                </tr>
                                
                                 
                            </tbody>
                          </table>
                     </div>
                </div>
               

            </div>
        </div>

        
@endsection

@section('script')
    <script src="{{url('assets/js/eoffice.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#start_date_noaction').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#end_date_noaction').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#start_date_neverlogin').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#end_date_neverlogin').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#start_date_docs').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            $('#end_date_docs').datepicker({
                autoclose: true,
                todayHighlight: true
            })

       });

    </script>

    @endsection


 