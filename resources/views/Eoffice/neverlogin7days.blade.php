@extends('master')
@section('title', 'Web Portal')
@section('active_web','active')
@section('content')

        <div class="outer">
            <div class="inner">
               <div class="print">
                <button class="print-btn" onclick="printDiv(printableArea)"> <i class="fa fa-print"></i> Print PDF</button>
                </div>
                <div id="printableArea">
                <table class="table table-bordered collapse_table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Login User Name</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                    </tr>
                    </thead>
                    <div id="table">
                        <?php $count = 1; ?>
                        @foreach($neverlogdatas as $neverlogdata)
                        
                    	<tr>
                    		<td><?php echo $count++; ?></td>
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
 