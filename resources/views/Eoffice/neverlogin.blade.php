@extends('master')
@section('title', 'Web Portal')
@section('active_web','active')
@section('content')
     <div class="menu" style="position:fixed;
     height: 40px; background-color: #ddd; margin-top: 45px; margin-left: 200px; width: 100%; z-index: 2;">
        <ul>
            <li style="display: inline; ">aa</li>
            <li style="display: inline;"><button class="print-btn" onclick="printDiv(printableArea)"> <i class="fa fa-print"></i> PDF</button></li>
        </ul>
     
    </div>
        <div class="content-wrapper">
             

           
            <div id="printableArea">
                <h4 class="center">ယနေ့အထိ အသုံးမပြုသေးသူများ</h4>
                <table class="table table-bordered collapse_table table-responsive">
                    <thead>
                    <tr>
                        <th class="mm">စဉ်</th>
                        <th class="mm">Login ဝင်သည့်အမည်</th>
                        <th class="mm">အမည်</th>
                        <th class="mm">ရာထူး</th>
                        <th class="mm">ရုံး/ဌာန</th>



                        


                    </tr>
                    </thead>
                    <div id="table">
                        <?php $count = 1; ?>
                        @foreach($neverlogdatas as $neverlogdata)
                        
                    	<tr>
                    		<td><?php 
                                 // $strcount = (string)$count++;
                                 
                                    //echo str_replace("1","၁",$strcount);

                            ?></td>
                    		<td class="mm"> <?php echo $neverlogdata->LoginUserName; ?></td>
                            <td class="mm"><?php echo $neverlogdata->Name;  ?></td>
                            <td class="mm"><?php  echo $neverlogdata->Position; ?></td>
                            <td class="mm"><?php  echo $neverlogdata->Office; ?></td>
                    	</tr>
                    	@endforeach
                    	 
                    	 
                    </div>
                </table>
            </div>
            </div>
        </div>
     
@endsection
@section('script')
    <script src="{{url('assets/js/webportalcview.js')}}"></script>
    <script>
        function printDiv(printableArea) {
            var printContents = document.getElementById("printableArea").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection