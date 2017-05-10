jQuery(document).ready(function($) {
    $('select').select2();
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
});

