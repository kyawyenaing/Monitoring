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
                <?php
                    $dept1 = $wpapidata->dept_one;
                    $newform1 = $dept1->new_forms;
                    $procform1 = $dept1->processed_forms;

                    $dept2 = $wpapidata->dept_two;
                    $newform2 = $dept2->new_forms;
                    $procform2 = $dept2->processed_forms;

                    $dept3 = $wpapidata->dept_three;
                    $newform3 = $dept3->new_forms;
                    $procform3 = $dept3->processed_forms;

                    $dept4 = $wpapidata->dept_four;
                    $newform4 = $dept4->new_forms;
                    $procform4 = $dept4->processed_forms;

                    $dept5 = $wpapidata->dept_five;
                    $newform5 = $dept5->new_forms;
                    $procform5 = $dept5->processed_forms;

                    $dept6 = $wpapidata->dept_six;
                    $newform6 = $dept6->new_forms;
                    $procform6 = $dept6->processed_forms;

                    $dept7 = $wpapidata->dept_seven;
                    $newform7 = $dept7->new_forms;
                    $procform7 = $dept7->processed_forms;

                    $dept8 = $wpapidata->dept_eight;
                    $newform8 = $dept8->new_forms;
                    $procform8 = $dept8->processed_forms;

                    $dept9 = $wpapidata->dept_nine;
                    $newform9 = $dept9->new_forms;
                    $procform9 = $dept9->processed_forms;

                    $dept10 = $wpapidata->dept_ten;
                    $newform10 = $dept10->new_forms;
                    $procform10 = $dept10->processed_forms;

                ?>
                <table class="table table-bordered collapse_table" style="border-collapse:collapse; width: 100%; ">
                    <col width="100px" />
                    <col width="280px" />
                    <col width="200px" />
                    <col width="200px" />
                    <thead>
                    <tr class="warning">
                        <th>No.</th>
                        <th>Department</th>
                        <th>Number of New Applied Forms</th>
                        <th>Number of Processed Forms</th>
                    </tr>
                    </thead>
                    <div id="table">
                    	<tr>
                    		<td>1.</td>
                    		<td class="mm">စီမံရေးရာဌာန</td>
                            <td><?php  echo $newform1; ?></td>
                            <td><?php  echo $procform1; ?></td>
                    	</tr>
                    	<tr>
                    		<td>2.</td>
                    		<td class="mm">အခွန်ဌာန</td>
                            <td><?php  echo $newform2; ?></td>
                            <td><?php  echo $procform2; ?></td>
                    	</tr>
                    	<tr>
                    		<td>3.</td>
                    		<td class="mm">ဈေးများဌာန</td>
                            <td><?php  echo $newform3; ?></td>
                            <td><?php  echo $procform3; ?></td>
                    	</tr>
                    	<tr>
                    		<td>4.</td>
                    		<td class="mm">တိရစ္ဆာန်ဆေးကုနှင့်သားသတ်ရုံများဌာန</td>
                            <td><?php  echo $newform4; ?></td>
                            <td><?php  echo $procform4; ?></td>
                    	</tr>
                    	<tr>
                    		<td>5.</td>
                    		<td class="mm">အင်ဂျင်နီယာဌာန(အဆောက်အအုံ)</td>
                            <td><?php  echo $newform5; ?></td>
                            <td><?php  echo $procform5; ?></td>
                    	</tr>
                    	<tr>
                    		<td>6.</td>
                    		<td class="mm">အင်ဂျင်နီယာဌာန(လမ်းတံတား)</td>
                            <td><?php  echo $newform6; ?></td>
                            <td><?php  echo $procform6; ?></td>
                    	</tr>
                    	<tr>
                    		<td>7.</td>
                    		<td class="mm">အင်ဂျင်နီယာဌာန(ရေနှင့်သန့်ရှင်းမှု)</td>
                            <td><?php  echo $newform7; ?></td>
                            <td><?php  echo $procform7; ?></td>
                    	</tr>
                    	<tr>
                    		<td>8.</td>
                    		<td class="mm">မြို့ပြစီမံကိန်းနှင့်မြေစီမံခန့်ခွဲမှုဌာန</td>
                            <td><?php  echo $newform8; ?></td>
                            <td><?php  echo $procform8; ?></td>
                    	</tr>
                    	<tr>
                    		<td>9.</td>
                    		<td class="mm">MICC</td>
                            <td><?php  echo $newform9; ?></td>
                            <td><?php  echo $procform9; ?></td>
                    	</tr>
                    	<tr>
                    		<td>10.</td>
                    		<td class="mm">မင်္ဂလာဗျူဟာသာသနာ့ဗိမာန်</td>
                            <td><?php  echo $newform10; ?></td>
                            <td><?php  echo $procform10; ?></td>
                    	</tr>
                    	 
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