<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
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
        @foreach($comp as $datas)
	<img class="img-responsive" src="{{asset($datas['image'])}}" alt="brand" width="200" />
		@endforeach
	
	<hr>
	<p style="font-family: Arial, Helvetica, sans-serif;">
	<h4>Company:@foreach($comp as $datas)
	{{ucfirst($datas['organization_name'])}}
	@endforeach
	</h4>
	
	</p>

	
	
	

					<hr>
				<h4 style="font-family: Arial, Helvetica, sans-serif;">Employees Payroll List Month Of {{$date}} </h4>
					<hr>
		<p>
		
    	<center >
		
		<table border="0" cellpadding="2" cellspacing="2" height="100%" width="100%" id="backgroundTable" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif;font-size: 12.8000001907349px; line-height: normal; border-collapse: collapse; " width="100%">
		<tr><th>Empoyee Id:</th><th>First Name </th><th>Last Name:</th><th>Personal relief: </th><th>Insurance relief: </th>
		
		<th>Pension: </th>
	
		<th>Nhif: </th>
		<th>Nssf: </th>
		<th>Occupier: </th>
		<th>Bonus: </th>
		<th>Hosp: </th>
		<th>Disability: </th>
		<th>Gross Pay: </th>
		<th>Salary after Tax: </th>
		<th>Deductions: </th>
			<th>Salary after Tax - Deductions </th>
		<th>NetPay+Bonus: </th>

		</tr>
			@foreach($data as $datas)
			<tr>
			<td>{{$datas->emp_id}}</td>
			<td>{{$datas->first_name}}</td>
			<td>{{$datas->last_name}}</td>
			<td>{{$datas->personal_relief}}.00</td>
			<td>{{$datas->insurance_relief}}.00</td>
			<td>{{$datas->pension_fund}}.00</td>
	
<td>{{$datas->nhif_deduction}}.00</td>
<td>{{$datas->nssf_deduct}}.00</td>

<td>{{$datas->occupier_interest}}.00</td>
<td>0.00</td>
<td>{{$datas->hosp}}.00</td>
<td>{{$datas->disability_excemption}}.00</td>
<td>{{$datas->salary}}.00</td>
<td>{{$datas->taxsal}}.00</td>
<td>{{$t=$datas->personal_relief+$datas->insurance_relief+$datas->pension_fund+$datas->nhif_deduction
+$datas->nssf_deduct+$datas->hosp+$datas->occupier_interest+$datas->disability_excemption}}.00</td>
<td>{{$x=$datas->taxsal- $t=$datas->personal_relief+$datas->insurance_relief+$datas->pension_fund+$datas->nhif_deduction
+$datas->nssf_deduct+$datas->hosp+$datas->occupier_interest+$datas->disability_excemption}}.00 </td>
<td><b>{{$x=$datas->taxsal - $t=$datas->personal_relief+$datas->insurance_relief+$datas->pension_fund+$datas->nhif_deduction
+$datas->nssf_deduct+$datas->hosp+$datas->occupier_interest+$datas->disability_excemption}}.00</b></td>
			</tr>	
			@endforeach
				<tr>
			<td colspan="15"> </td>
			<td> -</td>
				
			<td>
	-
			</td>
		
			</tr>
			<tr>
			<td colspan="14"> </td>
			<td colspan="2"> <b>Grand Total</b></td>
				
			<td>
		<b>{{$tot}}.00</b>
			</td>
		
			</tr>
			</table>
			<br>
			<hr>
			<center>www.easypay.co.ke</center>
			<hr>
		
	</center>
		
    </body>
</html>