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

 <script src="{{ asset('assets/plugins/jquery/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendor-all.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js')}}"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
   
    <!-- amchart js -->
    <script src="{{ asset('assets/plugins/amchart/js/amcharts.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/gauge.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/serial.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/light.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/pie.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/ammap.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/usaLow.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/radar.js')}}"></script>
    <script src="{{ asset('assets/plugins/amchart/js/worldLow.js')}}"></script>

    <!-- Float Chart js -->
    <!--<script src="{{ asset('assets/plugins/flot/js/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/curvedLines.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.tooltip.min.js')}}"></script>-->

<script src="{{ asset('assets/plugins/data-tables/js/datatables.min.js')}}"></script>
<script src="{{ asset('assets/js/pages/tbl-datatable-custom.js')}}"></script>
    <!-- dashboard-custom js -->
   <script src="{{ asset('assets/js/pages/dashboard-analytics.js')}}"></script>

    <!-- dashboard-custom js -->

   <!-- Smart Wizard Js -->
   <script src="{{ asset('assets/plugins/smart-wizard/js/jquery.smartWizard.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/wizard-custom.js')}}"></script>
    

<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>

<script src="{{ asset('assets/js/pages/form-validation.js')}}"></script>
   <!--<script src="{{ asset('assets/plugins/bootstrap-datetimepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ac-datepicker.js')}}"></script>-->
	<script src="{{ asset('assets/plugins/sweetalert/js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/js/pages/ac-alert.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
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
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<script>
  $(function() {
        $( "#datepicker2" ).datepicker({
            dateFormat : 'mm/dd/yy',
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
            dateFormat : 'mm/dd/yy',
            changeMonth : true,
            changeYear : true,
            yearRange: '-100y:c+nn',
            maxDate: '-1d'
        });
    });
</script>
       <script>
  $(function() {
        $( "#datepicker4" ).datepicker({
            changeMonth : true,
            changeYear : true,
            maxDate: '-1d'
        });
    });
</script>
<script>
    $(function () {
    $('#monthpik').monthpicker({changeYear:true, minDate: "-3 M", maxDate: "+2 Y" });
});
</script>
<script>
    $('input.number').keyup(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40) return;

  // format number
  $(this).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});
</script>
	
</body>
</html>