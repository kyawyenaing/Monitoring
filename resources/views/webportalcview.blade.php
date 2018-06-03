@extends('master')
@section('title', 'Web Portal')
@section('active_web','active')
@section('content')
        <div class="outer">
                <div class="inner">
                        <table class="table table-bordered collapse_table">
                    <tr class="warning">
                        <th>No.</th>
                        <th>Department</th>
                        <th>Number of New Applied Forms</th>
                        <th>Number of Processed Forms</th>
                    </tr>
                    <div id="table">
                    	<tr>
                    		<td>1.</td>
                    		<td>စီမံေရးရာဌာန</td>
                    	</tr>
                    	<tr>
                    		<td>2.</td>
                    		<td>အခြန္ဌာန</td>
                    	</tr>
                    	<tr>
                    		<td>3.</td>
                    		<td>ေဈးမ်ားဌာန</td>
                    	</tr>
                    	<tr>
                    		<td>4.</td>
                    		<td>တိရစၦာန္ေဆးကုႏွင့္သားသတ္႐ံုမ်ားဌာန</td>
                    	</tr>
                    	<tr>
                    		<td>5.</td>
                    		<td>အင္ဂ်င္နီယာဌာန (အေဆာက္အအံု)</td>
                    	</tr>
                    	<tr>
                    		<td>6.</td>
                    		<td>အင္ဂ်င္နီယာဌာန (လမ္းတံတား)</td>
                    	</tr>
                    	<tr>
                    		<td>7.</td>
                    		<td>အင္ဂ်င္နီယာဌာန (ေရႏွင့္သန္႔ရွင္းမႈ)</td>
                    	</tr>
                    	<tr>
                    		<td>8.</td>
                    		<td>ၿမိဳ႕ျပစီမံကိန္းႏွင့္ေျမစီမံခန္႔ခြဲမႈဌာန</td>
                    	</tr>
                    	<tr>
                    		<td>9.</td>
                    		<td>MICC</td>
                    	</tr>
                    	<tr>
                    		<td>10.</td>
                    		<td>မဂၤလာဗ်ဴဟာသာသနာ့ဗိမာန္</td>
                    	</tr>
                    	 
                    </div>
                </table>
                </div>
        </div>
     
@endsection
@section('script')
    <script src="{{url('assets/js/webportalcview.js')}}"></script>
    <script>
        
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
           
            document.getElementById("demo").innerHTML = aa;
        }
    };
    xmlhttp.open("GET", "webportal/api/request", true);
    xmlhttp.send();
    </script>
@endsection