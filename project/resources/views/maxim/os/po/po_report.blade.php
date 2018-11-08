@extends('maxim.layouts.layouts')
@section('title','Production Order')
@section('print-body')

    <style type="text/css">
        .body-top .body-list label{
            font-size: 16px;
        }
        .body-top .body-list ul li {
            margin-left: -13px;
        }

        input[type=checkbox] {
            opacity: 0;
        }

        input[type=checkbox] + label {
            margin: 0 0 0 38px;
            position: relative;
            cursor: pointer;
            font-size: 16px;
            font-weight: normal;
        }

        input[type=checkbox] + label ~ label {
            margin: 0 0 0 40px;
        }

        input[type=checkbox] + label::before {
            content: ' ';
            position: absolute;
            left: -35px;
            top: -3px;
            width: 25px;
            height: 25px;
            display: block;
            background: white;
            border: 1px solid #A9A9A9;
        }
        input[type=checkbox] + label::after {
            content: ' ';
            position: absolute;
            left: -35px;
            top: -3px;
            width: 23px;
            height: 23px;
            display: block;
            z-index: 1;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjE4MS4yIDI3MyAxNyAxNiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAxODEuMiAyNzMgMTcgMTYiPjxwYXRoIGQ9Ik0tMzA2LjMgNTEuMmwtMTEzLTExM2MtOC42LTguNi0yNC04LjYtMzQuMyAwbC01MDYuOSA1MDYuOS0yMTIuNC0yMTIuNGMtOC42LTguNi0yNC04LjYtMzQuMyAwbC0xMTMgMTEzYy04LjYgOC42LTguNiAyNCAwIDM0LjNsMjMxLjIgMjMxLjIgMTEzIDExM2M4LjYgOC42IDI0IDguNiAzNC4zIDBsMTEzLTExMyA1MjQtNTI0YzctMTAuMyA3LTI1LjctMS42LTM2eiIvPjxwYXRoIGZpbGw9IiMzNzM3MzciIGQ9Ik0xOTcuNiAyNzcuMmwtMS42LTEuNmMtLjEtLjEtLjMtLjEtLjUgMGwtNy40IDcuNC0zLjEtMy4xYy0uMS0uMS0uMy0uMS0uNSAwbC0xLjYgMS42Yy0uMS4xLS4xLjMgMCAuNWwzLjMgMy4zIDEuNiAxLjZjLjEuMS4zLjEuNSAwbDEuNi0xLjYgNy42LTcuNmMuMy0uMS4zLS4zLjEtLjV6Ii8+PHBhdGggZD0iTTExODcuMSAxNDMuN2wtNTYuNS01Ni41Yy01LjEtNS4xLTEyLTUuMS0xNy4xIDBsLTI1My41IDI1My41LTEwNi4yLTEwNi4yYy01LjEtNS4xLTEyLTUuMS0xNy4xIDBsLTU2LjUgNTYuNWMtNS4xIDUuMS01LjEgMTIgMCAxNy4xbDExNC43IDExNC43IDU2LjUgNTYuNWM1LjEgNS4xIDEyIDUuMSAxNy4xIDBsNTYuNS01Ni41IDI2Mi0yNjJjNS4yLTMuNCA1LjItMTIgLjEtMTcuMXpNMTYzNC4xIDE2OS40bC0zNy43LTM3LjdjLTMuNC0zLjQtOC42LTMuNC0xMiAwbC0xNjkuNSAxNjkuNS03MC4yLTcxLjljLTMuNC0zLjQtOC42LTMuNC0xMiAwbC0zNy43IDM3LjdjLTMuNCAzLjQtMy40IDguNiAwIDEybDc3LjEgNzcuMSAzNy43IDM3LjdjMy40IDMuNCA4LjYgMy40IDEyIDBsMzcuNy0zNy43IDE3NC43LTE3Ni40YzEuNi0xLjcgMS42LTYuOS0uMS0xMC4zeiIvPjwvc3ZnPg==') no-repeat center center;
            -ms-transition: all .2s ease;
            -webkit-transition: all .2s ease;
            transition: all .3s ease;
            -ms-transform: scale(0);
            -webkit-transform: scale(0);
            transform: scale(0);
            opacity: 0;
        }

        input[type=checkbox]:checked + label::after {
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
    </style>

<center><a href="#" onclick="myFunction()"  class="print">Print & Preview</a></center>

@foreach($companyInfo as $value)
	<div class="row">
		<div class="col-md-2 col-sm-2 col-xs-2">
			@if($value->logo_allignment == "left")
				@if(!empty($value->logo))
					<div class="pull-left">
						<img src="{{ asset('upload')}}/{{$value->logo}}" width="160px" style="margin-top:  25px;" />
					</div>
				@endif
			@endif
		</div>
		<div class="col-md-10 col-sm-10 col-xs-10" >
			<h2 align="center" style="font-size: 27px;">{{ $value->header_title}}</h2>
			<div align="center">
				<p>Address :  {{$value->address1}} {{$value->address2}} {{$value->address3}}</p>
			</div>
		</div>
		<div class="col-md-2 col-sm-8 col-xs-8">
			@if($value->logo_allignment === "right")
				@if(!empty($value->logo))
					<div class="pull-right">
						<!-- <a href="{{ route ('dashboard_view') }}"> -->
							<img src="/upload/{{$value->logo}}" height="40px" width="150px" style="margin-top:  15px;" />
						<!-- </a> -->
					</div>
				@endif
			@endif
		</div>
	</div>
@endforeach

<div class="row">
	<div class="report-header">
		<h2 align="center" style=" padding:8px; font-weight: bold;">Purchase Order</h2>
	</div>
</div>

<div class="row body-top">
	<div class="col-md-8 col-sm-8 col-xs-7 body-list">
		<ul>
			<li>Date : </li>
			<li>Company Name : </li>
			<li>Company Address : </li>
			<li>Company Person : </li>
			<li>Delivery Address : </li>
		</ul>
	</div>
	
	<div class="col-md-4 col-sm-4 col-xs-5 valueGenarate">
		<table class="tables table-bordered" style="width: 100%;">
			<tr>
				<td colspan="2">
					<div class="pull-right">
						<p>PO No : </p>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="pull-right">
						<p>Requested Shipment Date : </p>
					</div>
				</td>
			</tr>
		</table>
	</div>
</div>

<div class="row body-top">
    <table class="table table-bordered">
        <tr>
            <thead>
	            <th>Job No.</th>
	        	<th>PO/Cat No.</th>
	        	<th>OOS No.</th>
	        	<th width="15%">Item / Code No.</th>
	        	<th width="25%" id="erp_code">ERP Code</th>
	        	<th width="5%">Season Code</th>
	        	<th>Description</th>
	        	<th>Style</th>
	        	<th>Sku</th>
	        	<th>GMTS Color</th>
	        	<th width="15%">Size</th>
	        	<th width="">Material</th>
	        	<th>Unit</th>
	        	<th>Order Qty</th>
	        	<th>Unit Price</th>
	        	<th>Total Price</th>
            </thead>
        </tr>

        <?php $TotalBookingQty = 0; ?>
        
        <tbody>
        	@foreach($ipoDetails as $details)
	        	<?php 
	        		$TotalBookingQty += $details->item_quantity; 
	        		$jobId = (8 - strlen($details->job_id));
	        		$p = (($details->item_quantity * $details->initial_increase)/100) + $details->item_quantity;
	        		$totalIncrease += $p;
	        	?>
	        	<tr>
	        		<td>{{ str_repeat('0',$jobId) }}{{ $details->job_id }}</td>
			    	<td width="20%">{{$details->erp_code}}</td>
                	<td width="10%">{{$details->item_code}}</td>
			    	<td width="5%">{{$details->season_code}}</td>
			        <td width="5%">{{$details->oos_number}}</td>
			    	<td width="5%">{{$details->style}}</td>
			    	<td>{{$details->poCatNo}}</td>
			    	<td>{{$details->item_description}}</td>
			    	<td width="17%">{{$details->gmts_color}}</td>
			    	<td width="17%">{{$details->item_size}}</td>
			        <td>{{$details->sku}}</td>
			        <td>{{$details->item_quantity}}</td>
					<td>{{ !empty($details->initial_increase)? $details->initial_increase.'%' : '' }}</td>
					<td>{{round($p)}}</td>
			        <td>PCS</td>
			        <td></td>
	        	</tr>
        	@endforeach
        	<tr style="height: 30px;">
        		<td colspan="11"><span style="font-weight: bold;" class="pull-right">Total Quantity</span></td>
        		<td> {{$TotalBookingQty}}</td>
				<td></td>
        		<td><?= floor($totalIncrease); ?></td>
        		<td></td>
        		<td></td>
        	</tr>
        </tbody>
    </table>
</div>

<div class="row body-top">
	<div class="col-md-9 col-sm-9 col-xs-9 body-list">
		<label >Special Requirements/Notes:</label>
		<ul>
			<li>1. This order is:
                <input id="normal" type="checkbox" name="normal" value="normal" disabled>
                <label for="normal">Normal order</label>
                <input id="urgent" type="checkbox" name="urgent" value="urgent" disabled>
                <label for="urgent">Urgent order</label>
                <input id="topurgent" type="checkbox" name="topurgent" value="topurgent" disabled>
                <label for="topurgent">Top Urgent order</label>
                <input id="exportgoods" type="checkbox" name="exportgoods" value="exportgoods" disabled>
                <label for="exportgoods">Export goods</label>
            </li>
			<li>2. Provide PPS PCS , Or provide production samples for sales _______PCS</li>
			<li>3. Special requirements for shipment:</li>
			<li style="margin-left: 6px;"></li>
			<li>4.</li>
			<li>5.</li>
			<li>6.</li>
			<li>7.</li>
			<li>8.</li>
			<li>9.</li>
		</ul>
	</div>

	<div class="col-md-3 col-sm-3 col-xs-3" style="border:1px solid #DCDCDC;height: 250px;">
		<label>Special requirements for production: </label>
	</div>
</div>

<div class="row body-top" style="margin-top: 35px;margin-bottom: 20px;">
	<div class="col-md-3 col-sm-3 col-xs-3">
		<span style="font-weight: bold;">CS:
			<div style="border-bottom: 2px solid black; "></div>
		</span>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-3">
		<span style="font-weight: bold;">CS Team Leader:
			<div style="border-bottom: 2px solid black; "></div>
		</span>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-3">
		<span style="font-weight: bold;">CS Manager:
			<div style="border-bottom: 2px solid black; "></div>
		</span>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-3">
		<span style="font-weight: bold;">Planing Team：
			<div style="border-bottom: 2px solid black;"></div>
		</span>
	</div>	
</div>

<div class="row body-top" style="margin-top: 25px;margin-bottom: 20px;">
	<div class="col-md-3 col-sm-3 col-xs-3"></div>
	<div class="col-md-3 col-sm-3 col-xs-3"></div>
	<div class="col-md-3 col-sm-3 col-xs-3"></div>
	<div class="col-md-3 col-sm-3 col-xs-3">
		<span style="font-weight: bold;">Order receiving Date：
			<div style="border-bottom: 2px solid black;"></div>
		</span>
	</div>
</div>
<script type="text/javascript">
    function myFunction() {

		$(".print").addClass("hidden");
        window.print();
    }
</script>
@endsection