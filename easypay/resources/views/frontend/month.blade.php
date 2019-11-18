
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EasyPay - Admin Dashboard</title>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
         <!-- Smart Wizard css -->
       <link rel="stylesheet" href="{{ asset('assets/plugins/smart-wizard/css/smart_wizard.min.css')}}">
       <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/month.css')}}">


    <link href="{{ asset('assets/css/exa.css')}}" rel="stylesheet" type="text/css" />

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <style>
     body {
    font-size: 12px;
    font-family: Verdana, Arial, sans-serif;
}
.option-block {
    background-color: #e1e1e1;
    display: none;
    padding: 4px;
    border: solid 1px Black;
}
.option {
    margin: 20px;
    border: solid 1px Gray;
    padding: 4px;
}
.option-link {
    text-decoration: underline;
    color: Blue;
    cursor: pointer;
    font-weight: bold;
}
.option-link:hover {
    color: Red;
}
.option-type {
    margin: 0 25px;
}
.demo {
    background-color: #e1e1e1;
    padding: 8px;
    border: solid 1px Gray;
}

#always-show-demo {
  padding-bottom: 17em;   
}

#always-show-demo span {
    display: inline-block;
    margin-left: 2em;
}
    </style>


</head>





<div style="width: 650px;">
     <h1>Enhancements to the jQuery UI Month Picker Plugin</h1>
    
    <p>
        This page demonstrates four enhancements to the <a href="https://github.com/KidSysco/jquery-ui-month-picker">original jQuery UI Month Picker Plugin</a> (<a href="http://jsfiddle.net/kidsysco/JeZap/">demo page from which this page is forked</a>).
    </p><p>
        The enhancements are:
    </p>
    <ul>
        <li>The selected date is highlighted in green,</li>
        <li><code>EarliestMonthSelectable</code> and <code>LatestMonthSelectable</code> options are added so that the range of months that can be picked can be restricted. See the <b>Demonstration of Minimum and Maximum Date Limits</b> demo below,</li>
        <li>The <code>AlwaysShown</code> option, which keeps the picker displayed, allowing things like the month input field to be hidden, and an automatic submit on selection. See the <b>Option to Keep the Picker Visible</b> demo below, and</li>
        <li>To prevent confusion, the currently-selected year title is now hidden when years rather than months are being selected.</li>
    </ul>
    
    <p>
        The GitHub repository for these enhancements can be found <a href="https://github.com/mrj/jquery-ui-month-picker">here</a>.
    </p>
        
     <h2>Demonstration & Unit Testing</h2>

    <blockquote>
        <p class="demo"> <b>Month Input Demonstration</b>

            <br />This demonstrates how the plugin will work with the html 5 month input type. Try this in Chrome to see a Chrome specific comparison.
            <br />
            <br />Choose a Month:
            <input id="Html5Month" type="month" /> <input id="Html5MonthTest" type="month" />
        </p>
        <p class="demo"> <b>Icon Demonstration</b>

            <br />This demonstrates the default option for showing an icon.
            <br />
            <br />Choose a Month:
            <input id="IconDemo" type="text" />
        </p>
        <p class="demo"> <b>No Icon Demonstration</b>

            <br />This demonstrates setting options for removing the icon.
            <br />
            <br />Choose a month:
            <input id="NoIconDemo" type="text" />
        </p>
        <p class="demo"> <b>Start Year Demonstration</b>

            <br />This demonstrates how the plugin will default to the year specified in the text box. Changing the year in the text box will result in a new default year for the chooser and if no date is selected then the default year is the current year.
            <br />
            <br />Choose a month:
            <input id="StartYearDemo" type="text" value="01/2025" />
        </p>
        <p class="demo"> <b>Override Start Year Demonstration</b>

            <br />This demonstrates how the MonthPicker can be configured to override the start year default behavior. This MonthPicker will start on 2023 no matter which date is currently selected, even if no date is specified.
            <br />
            <br />Choose a month:
            <input id="OverrideStartYear" type="text" />
        </p>
        
        <p class="demo"> <b>Demonstration of Minimum and Maximum Date Limits</b>

            <br />This demonstrates the effect of the <code>EarliestMonthSelectable</code> and <code>LatestMonthSelectable</code> options that restrict the range of months that can be picked.
 Here only months between September 2000 and May 2015 can be picked.
            <br />
            <br />Choose a month:
            <input id="MinMaxDemo" type="text" value="03/2015" />
        </p>

        <p class="demo"> <b>Get Month/Year & Validation API Demonstration</b>

            <br />This demonstrates API usage for the GetSelectedMonthYear(), GetSelectedYear() and GetSelectedMonth() function calls which will also perform date validation. Clear() will clear the text field and any validation messages.
            <br />
            <br />Choose a month:
            <input id="GetYearDemo" class="GetYearDemo" type="text" value="02/2012" />
            <br />
            <br />
            <button type="button" onclick="alert($('.GetYearDemo').MonthPicker('GetSelectedYear'));">Get Year</button>
            <button type="button" onclick="alert($('#GetYearDemo').MonthPicker('GetSelectedMonth'));">Get Month</button>
            <button type="button" onclick="alert($('#GetYearDemo').MonthPicker('GetSelectedMonthYear'));">Get Month and Year</button>
            <button type="button" onclick="$('#GetYearDemo').MonthPicker('Clear');">Clear</button>
        </p>
        <p class="demo"> <b>Disable/Enable API Demonstration</b>

            <br />This demonstrates API usage for the Enable() and Disable().
            <br />
            <br />Choose a month:
            <input id="EnableDisableDemo" type="text" value="12/2009" />
            <br />
            <button type="button" onclick="$('#EnableDisableDemo').MonthPicker('option', 'Disabled', true);">Disable</button>
            <button type="button" onclick="$('#EnableDisableDemo').MonthPicker('option', 'Disabled', false);">Enable</button>
        </p>
        <p class="demo"> <b>Digital Bush Integration Demonstration</b>

            <br />This demonstrates how the MonthPicker plugin integrates with the <a href="http://digitalbush.com/" target="_new">Digital Bush Plugin for Input Masking</a> as well as the html 5 placeholder attribute to simulate watermarking. Try to type an invalid date and try the Get Month/Year button to fire off validation.
            <br />
            <br />Type in a month/year:
            <br />
            <input id="DigitalBush" type="text" class="digital-bush" />
            <br />
            <br />Type in a month/year::
            <br />
            <input id="DigitalBushBoth" type="text" class="digital-bush" placeholder="mm/yyyy" />
            <br />
            <br />
            <button type="button" onclick="$('.digital-bush').MonthPicker('Clear');">Clear All</button>
            <button type="button" onclick="alert($('#DigitalBushBoth').MonthPicker('GetSelectedMonthYear'));">Get Month/Year</button>
        </p>
        <p class="demo"> <b>jQuery UI Dialog Integration Demonstration</b>

            <br />This demonstrates the Month Picker running inside of the jQuery UI Modal Dialog.
            <br />
            <br />
            <button type="button" id="LaunchDialog" onclick="$('#Modal').dialog('open');">Launch Dialog</button>
        </p>
        <p class="demo"> <b>Error Checking</b>

            <br />This demonstrates what will happen if the MonthPicker is called on html elements other than a text input.
            <br />
            <br /> <span id="MySpan" style="border: solid 1px black; padding: 5px; margin: 5px; background-color: Gray;
                    color: White;">#MySpan</span>

            <button type="button" id="Button1" onclick="$('#MySpan').MonthPicker();">Call MonthPicker on span</button>
        </p>
        
         <p id="always-show-demo" class="demo"> <b>Option to Keep the Picker Visible</b>

            <br />This demonstrates the effect of the <code>AlwaysShown</code> option, used with an invisible input field.
            <br />
            <br />Choose a month:
            
             <span>
                <input id="AlwaysShownDemo" type="text" value="03/2015" style="display:none" />
             </span>
            
        </p>

    </blockquote>
</div>
 <h2>
        Unit Test Results</h2>

<div id="qUnitOutput" style="margin-bottom: 25px;">
     <h1 id="qunit-header">
            qUnit Testing Output</h1>

     <h2 id="qunit-banner">
        </h2>

    <div id="qunit-testrunner-toolbar"></div>
     <h2 id="qunit-userAgent">
        </h2>

    <ol id="qunit-tests"></ol>
    <div id="qunit-fixture">test markup</div>
</div>
 
<div>&nbsp;
    <br />
    <br />
</div>
<div id="Modal">Test:
    <input id="DialogDemo" type="text" />
</div>


<script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>


    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdn.rawgit.com/digitalBush/jquery.maskedinput/1.4.1/dist/jquery.maskedinput.min.js"></script>

    <script src="{{ asset('assets/js/month.js')}}"></script>
    

   
 


   
    <!-- amchart js -->
    

    <!-- Float Chart js -->
    <!--<script src="{{ asset('assets/plugins/flot/js/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/curvedLines.js')}}"></script>
    <script src="{{ asset('assets/plugins/flot/js/jquery.flot.tooltip.min.js')}}"></script>-->



  <!--  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>-->

<script>
   
$(document).ready(function() {
    // Default functionality.
    $('.Default').MonthPicker();

    // Hide the icon and open the menu when you
    // click on the text field.
    $('#NoIconDemo').MonthPicker({ Button: false });

    // Create jQuery UI Datepicker's default button.
    $("#PlainButton").MonthPicker({
        Button: '<button>...</button>'
    });

    // Create a button out of an image.
    // for details on handeling the disabled state see:
    // https://github.com/KidSysco/jquery-ui-month-picker#button
    $("#ImageButton").MonthPicker({
        Button: '<img class="icon" src="images/icon.gif" />'
    });

    // Creates a button out an a JQuery UI button. See:
    // http://github.com/KidSysco/jquery-ui-month-picker#button
    // for details on handeling internationalization.
    $("#JQButton").MonthPicker({
        Button: function() {
            return $("<button>Open</button>").button();
        }
    });

    // Allows 1 months from today (future months only).
    $('#FutureDateDemo').MonthPicker({ MinMonth: 1 });

    // Allows at most 1 month from today (past months only).
    $('#PastDateDemo').MonthPicker({ MaxMonth: -1 });

    // Don't allow this month and at most 18 months from today.
    // For detaild on the datatyps you can pass see:
    // http://github.com/KidSysco/jquery-ui-month-picker#minmonth
    $('#YearAndAHalfDeom').MonthPicker({
        MinMonth: 0,
        MaxMonth: '+2y -6m' // Or you could just pass 18.
    });

    // Start on the year 2023 no matter what date is selected.
    $("#OverrideStartYear").MonthPicker({ StartYear: 2023 });

    // Display an error message if the date is not valid.
    $('#GetYearDemo').MonthPicker({
        ValidationErrorMessage: 'Invalid Date!'
    });

    // Apply an input mask which mkase sure the user
    // limits the user to typing a month in the
    //fromat specified in the MonthFormat option.
    $('#DigitalBush').MonthPicker({ UseInputMask: true });
    $('#DigitalBushBoth').MonthPicker({
        UseInputMask: true,
        ValidationErrorMessage: 'Invalid Date!'
    });

    // The plugin supports the HTML 5 month type out of the box
    // no special setup required.
    $('#Html5').MonthPicker({
        ShowIcon: false,
        StartYear: 2027
    });

    // You can control the menu's positioning
    // and collision handeling by passing options to the
    // jQuery UI .position() plugin.
    $('#PositionDemo').MonthPicker({
        ShowIcon: false,
        Position: {
            collision: 'fit flip'
        }
    });

    // Create an inline menu by calling
    // .MonthPicker(); on a <div> or <span> tag.
    $("#InlineMenu").MonthPicker({
        SelectedMonth: '04/' + new Date().getFullYear(),
        OnAfterChooseMonth: function(selectedDate) {
            // Do something with selected JavaScript date.
            // console.log(selectedDate);
        }
    });

    $("#FormatSelect").change(function() {
       $("#MonthFormat").MonthPicker('option', 'MonthFormat',$(this).val());
    });

    $('#Modal').dialog({
        autoOpen: false,
        title: 'MonthPicker Dialog Test',
        modal: true
    });
    
    $('#AltMonthField').MonthPicker({
        SelectedMonth: 'Jan, 2016',
        MonthFormat: 'M, yy', // Short month name, Full year.
        AltFormat: '@', // Unix time stamp.
        AltField: '#serverValue' // Selector for hidden input.
    });

    $('#AltMonthField2').MonthPicker({
        SelectedMonth: 'Jan, 2016',
        MonthFormat: 'M, yy', // Short month name, Full year.
        AltFormat: 'yy-dd-mm', // ODBC time stamp.
        AltField: '#serverValue2' // Selector for hidden input.
    });

    $("h1").text( $("h1").text().replace('@VERSION', $.MonthPicker.VERSION) );
});
</script>


</body>
</html>