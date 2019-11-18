 <!-- [ Main Content ] end -->

    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <!--<script src="{{ asset('assets/plugins/jquery/js/jquery.min.js')}}"></script>-->
   <!-- <script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>-->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--<script src="{{ asset('assets/js/pcoded.min.js')}}"></script>-->


   
    <!-- amchart js -->
    <!--<script src="{{ asset('assets/plugins/amchart/js/amcharts.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/gauge.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/serial.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/light.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/pie.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/ammap.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/usaLow.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/radar.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/worldLow.js')}}"></script>-->

    <!-- Float Chart js -->
    <!--<script src="{{ asset('assets/plugins/flot/js/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/curvedLines.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.tooltip.min.js')}}"></script>-->

<script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/tbl-datatable-custom.js')}}"></script>
    <!-- dashboard-custom js -->
  <!-- <script src="{{ asset('assets/js/pages/dashboard-analytics.js')}}"></script>-->

    <!-- dashboard-custom js -->

   <!-- Smart Wizard Js -->
  <!-- <script src="{{ asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js')}}"></script>-->
    <!--<script src="{{ asset('assets/js/pages/wizard-custom.js')}}"></script>-->
    

<!--<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/form-validation.js')}}"></script>-->
   <!--<script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ac-datepicker.js')}}"></script>-->
	<!--<script src="{{ asset('assets/plugins/sweetalert/js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ac-alert.js')}}"></script>-->



<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdn.rawgit.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>

<script src="{{ asset('assets/js/month.js')}}"></script>

	<script>
  $(document).ready(function() {
	 
	      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
  


      $('#submit').click(function(e){

        e.preventDefault();


        var organization = $("#organization").val();

        var kra = $("#kra").val();
        var addressone = $("#addressone").val();

        var postal = $("#postal").val();
	 var email = $("#email").val();

        var phone = $("#phone").val();
        
      var currency = $("#currency").val();

        var info = $("#info").val();
		  var emp = $("#emp").val();

               $.ajax({
              url:"{{route('postajax')}}",
              type:'POST',
           data:{_token:CSRF_TOKEN,organization:organization,kra:kra,email:email,addressone:addressone,postal:postal,phone:phone,
		   currency:currency,info:info,emp:emp},
		   dataType: 'JSON',
		    success: function (data) {
                    
                       $("#suc").show();
                        $(".writeinfo").append(data.message); 

                  
                  				
			       
                    }

        });

      });

  });
	</script>
	
		<script>
  $(document).ready(function() {
	  $("#suc").hide();
  });
  </script>
  
  		<script>
      
	      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {
  $('#sub').click(function(e){
  

    e.preventDefault();


    var title = $("#title").val();

    var rate= $("#rate").val();
    
           $.ajax({
          url:"{{route('testAjax')}}",
          type:'POST',
       data:{_token:CSRF_TOKEN,title:title,rate:rate},
       dataType: 'JSON',
        success: function (data) {
                
                   $("#suc").show();
                    $(".writeinfo").append(data.message); 

              
                              
               
                }

    });


});
});

	</script>
	<script>
	 // Select all tabs
$('.nav-tabs a').click(function(){
  $(this).tab('show');
})

// Select tab by name
$('.nav-tabs a[href="#home"]').tab('show')

// Select first tab
$('.nav-tabs a:first').tab('show')

// Select last tab
$('.nav-tabs a:last').tab('show')

// Select fourth tab (zero-based)
$('.nav-tabs li:eq(3) a').tab('show')   
	    
	    
	    
	</script>
	
	   <script>
         $(document).ready(function(){
            $('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{ url('/chempionleague') }}",
                  method: 'post',
                  data: {
                     name: $('#name').val(),
                     club:$('#club').val(),
                     country: $('#country').val(),
                     score: $('#score').val(),
                  },
                  success: function(result){
                  	if(result.errors)
                  	{
                  		$('.alert-danger').html('');

                  		$.each(result.errors, function(key, value){
                  			$('.alert-danger').show();
                  			$('.alert-danger').append('<li>'+value+'</li>');
                  		});
                  	}
                  	else
                  	{
                  		$('.alert-danger').hide();
                  		$('#open').hide();
                  		$('#myModal').modal('hide');
                  	}
                  }});
               });
            });
      </script>
<script>

$(".selectall").click(function(){
$(".individual").prop("checked",$(this).prop("checked"));
});
</script>
<script> 
$("input[name='case[]']").click(function(){
 var values = new Array();
       $.each($("input[name='case[]']:checked"), function() {
           var data = $(this).parents('tr:eq(0)');
           values.push({ 'firstname':$(data).find('td:eq(1)').text(), 'lastname':$(data).find('td:eq(2)').text() , 'salary':$(data).find('td:eq(3)').text(),'taxsal':$(data).find('td:eq(4)').text(),
           'personalrelief':$(data).find('td:eq(5)').text(),'insurancerelief':$(data).find('td:eq(6)').text()
           ,'pensionfund':$(data).find('td:eq(7)').text()
           ,'hosp':$(data).find('td:eq(8)').text()
           ,'occupierinterest':$(data).find('td:eq(9)').text()
           ,'disability':$(data).find('td:eq(10)').text()
           ,'nhif':$(data).find('td:eq(11)').text()
           ,'nssf':$(data).find('td:eq(12)').text()
           ,'employeeid':$(data).find('td:eq(13)').text()
           ,'bonus':$(data).find('td:eq(14)').text()
           });             
       });

        
       console.log(values);
 });
     </script>  
       <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
  $(function() {
        $( "#datepicker2" ).datepicker({
            dateFormat : 'mm',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
</script>
<script>
  $(function() {
        $( "#datepicker3" ).datepicker({
            dateFormat : 'mm',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
</script>
<script>
 
 $(document).ready(function() {
    // Default functionality.
    $('.Default').MonthPicker();

    // Hide the icon and open the menu when you
    // click on the text field.
    $('#NoIconDemo').MonthPicker({ Button: false ,MonthFormat: 'MM',});

    // Create jQuery UI Datepicker's default button.
    $("#PlainButton").MonthPicker({
        Button: '<button>...</button>'
    });
});
</script>


</body>
</html>