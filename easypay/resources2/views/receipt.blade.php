<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
	
    <style>
 



  body {
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
    font-style: normal;
    font-variant: normal;
	color:#1b79c3;
  }
  table {
    border-collapse: collapse;
	color:#1b79c3;
}
td, th {
    border: 1px solid #1b79c3;
	
td{
	color:#1b79c3;
}
}
hr{
	color:#1b79c3;
}
  </style>
       </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" style="font-family: Arial, Helvetica, sans-serif !important;" >
	<img class="img-responsive" src="{{asset('assets/images/elogo.png')}}" alt="brand" width="200" />
	
	<hr>
	<p style="font-family: Arial, Helvetica, sans-serif;">
	@foreach($comp as $cmp)<h3>Company Name:&nbsp;
	{{ucfirst($cmp['organization_name'])}}</h3>
	@endforeach
	</p>
	<hr>
	
	
	<p>
		<h5 style="font-family: Arial, Helvetica, sans-serif;">Employee Names:&nbsp; <small style="text-decoration:underline;">{{ucfirst($first)}}&nbsp;{{ucfirst($last)}}</small></h5>
		<h5 style="font-family: Arial, Helvetica, sans-serif;">Employement Number:&nbsp;<small style="text-decoration:underline;">{{$emp}}</small></h5>
		<h5 style="font-family: Arial, Helvetica, sans-serif;">Date of pay:&nbsp; <small style="text-decoration:underline;">{{$date}} </small></h5>
					<hr>
				<h4 style="font-family: Arial, Helvetica, sans-serif;">Employee Payslip Month Of  {{$date2}} </h4>
					<hr>
		<p>
		
    	<center >
		
		<table border="0" cellpadding="2" cellspacing="2" height="100%" width="100%" id="backgroundTable" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif;font-size: 12.8000001907349px; line-height: normal; border-collapse: collapse; " width="100%">
		<tr><th>Earnings:</th><th> </th><th align="right">Deductions:</th><th align="right">Amounts: </th></tr>
				<tr><td><b>Basic Salary:</b></td><td align="right"><b style="text-decoration:underline;">Kshs&nbsp;{{$sal}}.00</b></td><td align="right">Personal Relief</td><td  align="right">{{$pas}}.00</td></tr>
						<tr><td></td><td align="right">-</td><td align="right">Insurance Relief</td><td align="right">{{$insure}}.00</td></tr>
								<tr><td></td><td align="right">-</td><td align="right">Hosp</td><td align="right">{{$hosp}}.00 </td></tr>
										<tr><td></td><td align="right">-</td><td align="right">Occupier Interest</td><td align="right">{{$occ}}.00 </td></tr>
										<tr><td></td><td align="right">-</td><td align="right">Disability Excemption</td><td align="right">{{$dis}}.00 </td></tr>
										
										
										<tr><td></td><td align="right">-</td><td align="right">Nhif</td><td align="right">{{$nhif}}.00 </td></tr>
										<tr><td></td><td align="right">-</td><td align="right">Nssf</td><td align="right">{{$nssf_deduct}}.00</td></tr>
									<tr><td></td><td align="right">-</td><td align="right">Total Deductions</td><td align="right">Kshs&nbsp;{{$dix}}.00 </td></tr>
									<tr><td><b>Total Additions</b></td><td align="right"><b style="text-decoration:underline;">Kshs&nbsp;{{$sal}}.00</b></td><td align="right">Salary after tax.</td><td  align="right">Kshs&nbsp;{{$tax}}.00 </td></tr>
																		<tr><td><b></b></td><td align="right"><b style="text-decoration:underline;"></b></td><td align="right">Salary after tax - deductions </td><td  align="right">Kshs&nbsp;{{$finDuct}}.00 </td></tr>
																<tr><td></td><td></td><td align="right"><b>Net Salary</b></td><td  align="right"><b style="text-decoration:underline;">Kshs&nbsp;{{$total}}</b> </td></tr>
			</table>
			<br>
			<hr>
			<center>www.easypay.co.ke</center>
			<hr>
		
	</center>
		
    </body>
</html>