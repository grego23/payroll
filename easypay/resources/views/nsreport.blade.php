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
	
	
	
		
    	<center >
		
		<table border="0" cellpadding="2" cellspacing="2" height="100%" width="100%" id="backgroundTable" style="color: rgb(34, 34, 34); font-family: Arial, Helvetica, sans-serif;font-size: 12.8000001907349px; line-height: normal; border-collapse: collapse; " width="100%">
		<tr><th>First Name:</th><th> Middle Name </th><th> Last Name </th><th> Idnumber </th><th> Nhssf Number </th><th> Amount </th></tr>
				<tr><td>{{$first}}</td>
				<td>{{$middle}}</td>
				<td>{{$last}}</td>
				<td>{{$id}}</td>
			  <td>{{$nssf}}</td>
				<td>{{$nssf_deduct}}.00</td></tr>
						
			</table>
			<br>
			<hr>
			<center>www.easypay.co.ke</center>
			<hr>
		
	</center>
		
    </body>
</html>