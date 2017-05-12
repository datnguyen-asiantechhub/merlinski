jQuery(document).ready(function($) {
  $('select').select2();
//-----------------------Plugin datepicker----------------------------------
  $('#datepickerfrom').datepicker({
    	format: 'dd/mm/yyyy'
    }).on('changeDate', function() {
      $('#selectedFromDate').val($('#datepicker').datepicker('getFormattedDate'));
  });
  $('#datepickerto').datepicker({
  	format: 'dd/mm/yyyy'
  }).on('changeDate', function() {
    $('#selectedToDate').val($('#datepicker').datepicker('getFormattedDate'));
  });
//--------------------------------------------------------------------------

//----------------------Plugin Handler--------------------------------------
  $( "#spring" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#spring-percent" ).val( ui.value + "%" ); }
    });
  $( "#summer" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#summer-percent" ).val( ui.value + "%" ); }
    });
  $( "#autumn" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#autumn-percent" ).val( ui.value + "%" ); }
    });
  $( "#winter" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#winter-percent" ).val( ui.value + "%" ); }
    });
  $( "#low" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#low-percent" ).val( ui.value + "%" ); }
    });
  $( "#middle" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#middle-percent" ).val( ui.value + "%" ); }
    });
  $( "#high" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#high-percent" ).val( ui.value + "%" ); }
    });
  $( "#max" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#max-percent" ).val( ui.value + "%" ); }
    });
    $( "#spring-percent" ).val( $( "#spring" ).slider( "value" ) + "%" );
    $( "#autumn-percent" ).val( $( "#autumn" ).slider( "value" ) + "%" );
    $( "#summer-percent" ).val( $( "#summer" ).slider( "value" ) + "%" );
    $( "#winter-percent" ).val( $( "#winter" ).slider( "value" ) + "%" );
    $( "#low-percent" ).val( $( "#low" ).slider( "value" ) + "%" );
    $( "#middle-percent" ).val( $( "#middle" ).slider( "value" ) + "%" );
    $( "#high-percent" ).val( $( "#high" ).slider( "value" ) + "%" );
    $( "#max-percent" ).val( $( "#max" ).slider( "value" ) + "%" );
});

