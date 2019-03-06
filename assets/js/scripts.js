

jQuery(function() {
	
	jQuery( ".datepicker" ).datepicker({
		dateFormat: "mm/dd/yy",
		showOn: "button",
		buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
		buttonImageOnly: true,
		buttonText: "Select date"
	});
	
	jQuery( "#saledate" ).datepicker({
		dateFormat: "mm/dd/yy",
		showOn: "button",
     	buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
      	buttonImageOnly: true,
      	buttonText: "Select date",
		//altField: "#saledate-hidden",
      	//altFormat: "yymmdd"
	});
	
	jQuery( "#date-from" ).datepicker({
		dateFormat: "mm/dd/yy",
		showOn: "button",
     	buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
      	buttonImageOnly: true,
      	buttonText: "Select date",
		altField: "#date-from-actual",
      	altFormat: "yymmdd"
	});
	
	jQuery( "#date-through" ).datepicker({
		dateFormat: "mm/dd/yy",
		showOn: "button",
     	buttonImage: "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
      	buttonImageOnly: true,
      	buttonText: "Select date",
		altField: "#date-through-actual",
      	altFormat: "yymmdd"
	});
	
	jQuery( ".search-dates" ).change(function() {
		var date = moment(jQuery(this).val(), "MM-DD-YYYY");
		var id = jQuery(this).attr('id');
		jQuery("#"+id+"-actual").val(moment(date).format("YYYYMMDD"));
	});
	
	jQuery('#search_type').change(function(){
		jQuery('#ui-datepicker-div').css('z-index', 999999);
		if (jQuery(this).val() === 'InvoiceDate' || jQuery(this).val() === 'OehdArrvDate' || jQuery(this).val() === 'OehdOrdrDate') {
			jQuery('#date-from').parent().parent().removeClass('hidden');	
			jQuery('#date-through').parent().parent().removeClass('hidden');	
			jQuery('#key-search').parent().parent().addClass('hidden');
		} else {
			jQuery('#date-from').parent().parent().addClass('hidden');	
			jQuery('#date-through').parent().parent().addClass('hidden');	
			jQuery('#key-search').parent().parent().removeClass('hidden');
		
		}
	});
	
	jQuery('.open-mod').click(function(event) {
		var subset = jQuery(this).data('subset');
		jQuery('input[name="subset"]').val(subset);
	});
});


function postform(form, callback) {
	console.log('posting ' + form + ' form');
	var action = jQuery(form).attr('action');
	console.log(action);
	jQuery.post( action, jQuery( form ).serialize() ).done(callback());	
}

function wait(time, callback) {
	var timeoutID = window.setTimeout(callback, time);
}

function validdate(datestring) {
    // First check for the pattern
    if (!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(datestring))
        return false;

    // Parse the date parts to integers
    var parts = datestring.split("/");
    var day = parseInt(parts[1], 10);
    var month = parseInt(parts[0], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if (year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
};





