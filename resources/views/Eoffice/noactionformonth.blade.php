@extends('master')
@section('title', 'E-Office No action users')
@section('active_eoffice','active')
@section('content')
	<div class="outer">
            <div class="inner">
                <div class="print">
                <button class="print-btn" onclick="printDiv(printableArea)"> <i class="fa fa-print"></i> Print PDF</button>
                </div>
                <div id="printableArea">
               <?php $count = 1; ?>
                <table class="table table-bordered collapse_table">
                    <thead>
                    <tr>

                        <th>No.</th>
                        <th>Login User Name</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Documents Action</th>
                        <th>Login-out</th>
                        <th>Action Date Time</th>

                    </tr>
                    </thead>
                    <div id="table">
                        
                        @foreach($noactiondatas as $noactiondata)
                        	@if($noactiondata->DocAction == 'null')
                       
                                <?php 
                                    $str = $noactiondata->ActionDateTime;
                                    preg_match('/Date\((\d+)\)/', $str, $date);
                                    $timestamp = $date[1]/1000;
                                    $operator = "+";
                                    $hours = 63*36;  
                                    $datetime = new DateTime();
                                    $datetime->setTimestamp($timestamp);
                                    $datetime->modify($operator . $hours . ' seconds');
                                    $datte = $datetime->format('Y-m-d H:i:s');
                                ?>
	                            <tr>
		                            <td><?php echo $count++; ?></td>
		                            <td class="mm"><?php echo $noactiondata->LoginUserName; ?></td>
		                            <td class="mm"><?php echo $noactiondata->Name;  ?></td>
		                            <td class="mm"><?php echo $noactiondata->Position; ?></td>
		                            <td class="mm"><?php echo $noactiondata->Office; ?></td>
		                            <td class="mm"><?php echo $noactiondata->DocAction; ?></td>
		                            <td class="mm"><?php echo $noactiondata->Loginout; ?></td>
		                            <td class="mm"><?php echo $datte; ?></td>
	                        	</tr>
                                 
                        	@endif
                        @endforeach
                        
                    	 
                    	 
                    </div>
                </table>
            </div>
            </div>
        </div>
   @endsection
@section('script')
    
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