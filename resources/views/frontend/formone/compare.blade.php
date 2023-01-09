<link href="{{ url('public/front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ url('public/front/css/comparepage.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.hoverbutton {
	  padding: 4px 10px;
	  display: inline-block;
	  border-radius: 50px;
	  background-color: #00B1FF;
	  color: white;
	  border: 5px solid white;
	  transition: border 0.2s ease;
	}
	.hoverbutton:hover {
	  border: 5px solid #81D9FF;
	  cursor: pointer;
	  color: white;
	  text-decoration: none;
	}
	h2.title{
		font-weight: 700;
		text-transform: uppercase;
		font-size: 14px;
	}
    p.desc
    	{
    		font-size: 12px;
    	}
    .table>thead>tr>th
    {
    	vertical-align: middle;
    }
    .table>tbody>tr>td
    {
    	font-size: 13px;
    	max-width: 274px;
    }
    .martop10
    {
    	margin-top: 12px;
    }
    .block
    {
    	display: block; 
    	text-align: center;
    }
    tr td:first-of-type,tr th:first-of-type
    {
    	font-weight: 700;
    	color: #F0AD4E
    }
	.smallhead {
	text-transform: uppercase;
	color: #fff !important;
	background: #515d63;
	}
</style>
<div class="container-fluid">
	
<?php
$startdate = $request->departure_date;
$enddate = $request->return_date;

$dStart = new DateTime($request->departure_date);
$dEnd  = new DateTime($request->return_date);
$dDiff = $dStart->diff($dEnd);
$dDiff->format('%R'); // use for point out relation: smaller/greater
$num_of_days = $dDiff->days;
if($num_of_days > 365 || $num_of_days == 364){ $num_of_days = 365; }

$product_id = $request->product_id;
$product = DB::table('wp_dh_products')->where('pro_id' , $product_id)->first();
$product_name = $product->pro_name;
?>
<h1 style="font-size: 24px;font-weight: bold;color: #005d9a;">Compare and Buy <?php echo $product_name;?> Plans</h1>
<div class="row">
	<div class="col-md-6">
		<a href="{{ url('sendcompareemail') }}?email={{$request->email}}&product_id={{$request->product_id}}&ids={{$request->ids}}&default_value={{$request->default_value}}&price_value={{$request->price_value}}&rate={{$request->rate}}" class="hoverbutton">Get This Comperison on Email</a>
	</div>
</div>
<p>Please Note: The information and content of this site is intended for general informational purposes only,For most accurate information regarding rates, benefits, terms and conditions for travel insurance products, please refer directly to our insurance partners website.</p>
<?php
		$planid=explode(",", rtrim($_REQUEST['ids']));
?>
<table class="table table-bordered table-striped">
	<tbody>
	<tr style="background:#239b7a;">
		<td rowspan="2" style="text-align:center;color: #FFF;font-size: 16px;"><h3 style="background:#45bd9c; padding:3px; font-size:41px; text-align:center;color:#FFF;margin: 0;margin-bottom: 10px;"><?php echo count($planid);?></h3>Plans Selected for Comparison
		<button type="button" style="display: block;margin: 5px auto 0px auto;font-weight: bold;" class="hoverbutton" onclick="javascript:window.print()"><i class="fa fa-print"></i> Print Plans</button>
		</td>
		<?php 
		for($i=0;$i<count($planid);$i++){
			$plan = DB::table('wp_dh_insurance_plans')->where('id' , $planid[$i])->first();
			$planname = $plan->plan_name;
		?>
			<th style="color:#FFF; text-align:center; font-weight:bold; font-size:18px;"><?php echo $planname;?></th>
		<?php } ?>
	</tr>
	<tr>
		<?php 
		$planid=explode(",", rtrim($request->ids));
		$rate=explode(",", rtrim($request->rate));
		for($i=0;$i<count($planid);$i++){
		$compy = DB::select("SELECT * FROM `wp_dh_companies` WHERE `comp_id`= (SELECT `insurance_company` FROM `wp_dh_insurance_plans` WHERE `id`='".$planid[$i]."')");
		?>
			<td align="center"><img src="{{ url('public/images') }}/{{ $compy[0]->comp_logo }}" alt="{{ $compy[0]->comp_name }}" class="img-responsive" height="70" width="200" style="width:200px"></td>
		<?php } ?>
	</tr>
		<tr>
			<td class="smallhead">PREMIUM</td>
			<?php for($i=0;$i<count($planid);$i++){?>
			<td style="text-align: center;font-size: 28px;font-weight: bold;color: #C00;">$ <?php echo number_format($rate[$i],2); ?></td>
			<?php } ?>
		</tr>
		<tr>
			<td class="smallhead"></td>
			<?php for($i=0;$i<count($planid);$i++){
			$plan = DB::table('wp_dh_insurance_plans')->where('id' , $planid[$i])->first();
			$planname = $plan->plan_name;
			
			$compy = DB::select("SELECT * FROM `wp_dh_companies` WHERE `comp_id`= (SELECT `insurance_company` FROM `wp_dh_insurance_plans` WHERE `id`='".$planid[$i]."')");
			$companyName = $compy[0]->comp_name;
			?>
			<td><?php $buynow_url = "tab_buy.php?coverage=".$rate[$i]."&traveller=1&companyName=$companyName&comp_id=$plan->insurance_company&planname=$planname&tripdate=".$request->departure_date."&tripend=".$request->return_date."&premium=".$rate[$i]."&cdestination=&product_name=$product_name&country=$request->primary_destination&visitor_visa_type=$product_name&tripduration=$num_of_days";
			?>
			<button disabled type="button" style="display: block;margin: 5px auto 0px auto;font-weight: bold;" class="btn btn-success" onclick="window.location='<?php echo $buynow_url;?>'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
			</td>
			<?php }?>
		</tr>
		<tr>
			<td class="smallhead">Coverage Amount</td>
			<?php for($i=0;$i<count($planid);$i++){?>
			<td style="text-align: center;font-size: 16px;font-weight: bold;">$ <?php echo number_format($request->sum_insured2); ?></td>
			<?php } ?>
		</tr>
		<tr>
			<td class="smallhead">Sample PDF Policy</td>
			<?php for($i=0;$i<count($planid);$i++){
				$pdf = DB::table('wp_dh_insurance_plans_pdfpolicies')->where('plan_id',$planid[$i])->first();
			?>
				<td>
					@if($pdf)
					<a href="{{ url('public/images') }}/{{ $pdf->pdfpolicy }}" target="_blank"><i class="fa fa-file-pdf-o text-danger"></i> View PDF Policy</a>
					@endif
				</td>
			<?php } ?>
		</tr>
			<?php
			$feat = DB::select("SELECT * FROM `wp_dh_insurance_plans_benefits` WHERE `plan_id` IN (".$_REQUEST['ids'].") GROUP BY `benefits_head`");
			foreach($feat as $feature){
			$benefits_head = $feature->benefits_head;
			
			?>
		<tr>
			<td class="smallhead"><?php echo $benefits_head; ?></td>
			<?php for($i=0;$i<count($planid);$i++){
            
          	 $feades_q = DB::table('wp_dh_insurance_plans_benefits')->where('plan_id' , $planid[$i])->where('benefits_head' , $benefits_head)->first();
			
			?>
			<td>
				@if($feades_q)

				{{$feades_q->benefits_desc;}}

				@endif
				</td>
			<?php } ?>
		</tr>
			<?php } ?>
				
		<tr>
			<td class="smallhead"></td>
			<?php for($i=0;$i<count($planid);$i++){
			$plan = DB::table('wp_dh_insurance_plans')->where('id' , $planid[$i])->first();
			$planname = $plan->plan_name;
			
			$compy = DB::select("SELECT * FROM `wp_dh_companies` WHERE `comp_id`= (SELECT `insurance_company` FROM `wp_dh_insurance_plans` WHERE `id`='".$planid[$i]."')");
			$companyName = $compy[0]->comp_name;
			?>
			<td><?php $buynow_url = "tab_buy.php?coverage=".$rate[$i]."&traveller=1&companyName=$companyName&comp_id=$plan->insurance_company&planname=$planname&tripdate=".$request->departure_date."&tripend=".$request->return_date."&premium=".$rate[$i]."&cdestination=&product_name=$product_name&country=$request->primary_destination&visitor_visa_type=$product_name&tripduration=$num_of_days";
			?>
			<button disabled type="button" style="display: block;margin: 5px auto 0px auto;font-weight: bold;" class="btn btn-success" onclick="window.location='<?php echo $buynow_url;?>'"><i class="fa fa-shopping-cart"></i> Buy Now</button>
			</td>
			<?php }?>
		</tr>	

	</tbody>
</table>

</div>