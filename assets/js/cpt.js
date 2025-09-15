$(function() {

	jQuery(".page-section").on("click", ".paginate-link", function(e) {
		e.preventDefault();
		var href = jQuery(this).attr('href');
		var column = jQuery(this).data('subset');
		loadpage(column, href);

	} );

	jQuery(".page-section").on("click", ".open-mod", function(event) {
		var subset = jQuery(this).data('subset');
		jQuery('input[name="subset"]').val(subset);

	} );

	jQuery(".page-section").on("click", "#list_build_tab_headers .ui-tabs-anchor", function(event) {
		var subset = jQuery(this).attr('href');
		subset = subset.replace('#', '');
		jQuery('form#rep-form').find('input[name=subset]').val(subset);
		jQuery('form#dealer-form').find('input[name=subset]').val(subset);
	});

	jQuery(".page-section").on("click", ".open-mod", function(event) {
		event.preventDefault();
		console.log(jQuery(this).attr('href'));
	});

	jQuery(".page-section").on("click", "#dealer-quotes-link", function(event) {
		var addon = jQuery(this).data('addon');
		window.location='https://dealer.alumacraft.com/Boat-Builder.php?action=list'+addon+'#dealer_quotes';
	});

	jQuery(".page-section").on("click", ".get-document", function(event) {
		event.preventDefault();
		var ordn = jQuery(this).data('ordn');
		send_for_documents(ordn);
	});

	jQuery("body").on("click", ".so-ack", function(event) {
		//event.preventDefault();
		var ordn = jQuery(this).data('ordn');
		var docname = jQuery(this).data('docname');
		log_acknowledgement_view(ordn, docname);
	});

	jQuery("body").on("click", ".page-section .approve-order", function(event) {
		event.preventDefault();
		var ordn = jQuery(this).data('ordn');
		var roletype = jQuery(this).data('role');

		console.log(ordn);

		if (roletype !=='DEALER') {
			//jQuery.get("/reg/ajax/load/non-dealer-approve-order.php?ordn="+ordn, function(html) {
			jQuery.get("/reg/ajax/load/order-approve.php?ordn="+ordn, function(html) {
				jQuery('#order-approve-modal').html(html);
				jQuery('#order-approve-modal').modal();
				jQuery('#approve-order').focus();
			});
		} else {
			jQuery.get("/reg/ajax/load/order-approve.php?ordn="+ordn, function(html) {
				jQuery('#order-approve-modal').html(html);
				jQuery('#order-approve-modal').modal();
				jQuery('#approve-order').focus();
			});
		}
	});


	jQuery('#inventory-search').submit(function(e) {
		e.preventDefault();
		var form = '#inventory-search';
		console.log('posting ' + form + ' form');
		var action = jQuery(form).attr('action');
		var column = jQuery( "input[name='subset']" ).val();
		console.log(action);
		jQuery.post( action, jQuery( form ).serialize() ).done(function(json) {
			var uri = URI(json.href);
			console.log(uri.toString());
			jQuery( "#"+column ).load( json.href+"#load-"+column, function() {
				jQuery.modal.close();
			});

		});
	});


	jQuery('#orders-search-form').submit(function(e) {
		e.preventDefault();
		var form = '#orders-search-form';
		console.log('posting ' + form + ' form');
		var action = jQuery(form).attr('action');
		var column = jQuery( "input[name='subset']" ).val();
		console.log(action);
		jQuery.post( action, jQuery( form ).serialize() ).done(function(json) {
			console.log(json.href);
			jQuery( "#"+column ).load( json.href+"#load-"+column, function() {
				jQuery.modal.close();
			});

		});
	});

	jQuery("body").on("submit",'#boats-only-form', function(e) {
		e.preventDefault();
		var form = '#boats-only-form';
		console.log('posting ' + form + ' form');
		var action = jQuery(form).attr('action');
		var column = jQuery( form+ " input[name='subset']" ).val();
		console.log(action);
		jQuery.post( action, jQuery( form ).serialize() ).done(function(json) {
			console.log(json.href);
			jQuery( "#"+column ).load( json.href+"#load-"+column, function() {
				jQuery.modal.close();
			});

		});
	});

	jQuery(".page-section").on("submit", "#show-unregistered-boats-form", function(e) {
		e.preventDefault();
		var form = '#show-unregistered-boats-form';
		console.log('posting ' + form + ' form');
		var action = jQuery(form).attr('action');
		var column = jQuery( form + " input[name='subset']" ).val();
		console.log(action);
		jQuery.post( action, jQuery( form ).serialize() ).done(function(json) {
			console.log(json.href);
			jQuery( "#"+column ).load( json.href+"#load-"+column, function() {
				jQuery.modal.close();
			});

		});

	} );


	jQuery("body").on("submit", "#approve-order-form", function(e) {
		e.preventDefault();
		var form = '#approve-order-form';
		var action = jQuery(form).attr('action');
		var ordn = jQuery(form +" input[name='ordn']").val();
		var answer = jQuery('#approve-order').val();
		if (answer.toUpperCase() === "YES") {
			jQuery(form + " .action").val('approve-order');

				postform(form, function() {
					var n = noty({
					text: 'Your approval of order #' + ordn + " has been sent",
					theme: 'relax', // or 'relax'
					type: 'success',
					timeout: 4000,
					animation: {
						open: {height: 'toggle'}, // jQuery animate function property object
						close: {height: 'toggle'}, // jQuery animate function property object
						easing: 'swing', // easing
						speed: 500 // opening & closing animation speed
					}

				});
				jQuery.modal.close();
			});

		} else if (answer.toUpperCase() === "NO") {
			if (jQuery('#not-approved-reason .reason').val().length < 1) {
				jQuery(form + " .action").val('cancel-approval');
				jQuery('#not-approved-reason').removeClass('hidden');
			} else {
				postform(form, function() {
					var n = noty({
						text: '<h2>Your sales rep has been emailed</h2>',
						theme: 'relax', // or 'relax'
						type: 'success',
						timeout: 4000,
						animation: {
							open: {height: 'toggle'}, // jQuery animate function property object
							close: {height: 'toggle'}, // jQuery animate function property object
							easing: 'swing', // easing
							speed: 500 // opening & closing animation speed
						}
					});
				});
				jQuery.modal.close();
			}
		}

	} );

	jQuery("body").on("submit", "#admin-approve-order-form", function(e) {
		e.preventDefault();
		var form = "#"+jQuery(this).attr('id');
		var ordn = jQuery(form +" input[name='ordn']").val();
		var answer = jQuery('#approve-order').val();
		if (answer.toUpperCase() === "YES") {

			postform(form, function() {
				noty({
					text: 'Your approval of order #' + ordn + " has been sent",
					theme: 'relax', // or 'relax'
					type: 'success',
					timeout: 4000,
					animation: {
						open: {height: 'toggle'}, // jQuery animate function property object
						close: {height: 'toggle'}, // jQuery animate function property object
						easing: 'swing', // easing
						speed: 500 // opening & closing animation speed
					}
				});
				jQuery.modal.close();
			});

		} else if (answer.toUpperCase() === "NO") {
			noty({
					text: 'You have declined to approve order #' + ordn,
					theme: 'relax', // or 'relax'
					type: 'warning',
					timeout: 4000,
					animation: {
						open: {height: 'toggle'}, // jQuery animate function property object
						close: {height: 'toggle'}, // jQuery animate function property object
						easing: 'swing', // easing
						speed: 500 // opening & closing animation speed
					}
				});
		}
	} );

	jQuery("body").on("change", ".unhide-approve-form", function(e) {
		e.preventDefault();
		var ready = false;
		var form = '#approve-order-form';
		if (jQuery('#viewed-web-order').is(':checked')) {
			ready = true;
		} else {
			ready = false;
		}

		if (jQuery('#viewed-ack').is(':checked')) {
			ready = true;
		} else {
			ready = false;
		}


		if (ready) {
			jQuery(form).removeClass('hidden');
		}
	} );

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

	jQuery( "#deliverdate" ).datepicker({
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

	jQuery('.load-ajax').click(function(event) {
		event.preventDefault();
		jQuery.get(this.href, function(html) {
			jQuery(html).appendTo('body').modal();
		});
	});



});
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



function postform(form, callback) {
	console.log('posting ' + form + ' form');
	var action = jQuery(form).attr('action');
	console.log(action);
	jQuery.post( action, jQuery( form ).serialize() ).done(callback());
}
function wait(time, callback) {
	var timeoutID = window.setTimeout(callback, time);
}

function clearsearch(namespace, dir) {
	jQuery( "#"+namespace ).load( "ajax/load/"+dir+"/"+namespace+".php#load-"+namespace);
}

function loadpage(namespace, href) {
	jQuery( "#"+namespace ).load( href+"#load-"+namespace);
}

function send_for_documents(ordn) {
	console.log('send');
	jQuery('#loading').show();
	
	jQuery.get("/reg/ajax/load/show-documents2.php?ordn="+ordn, function(html) {
		jQuery('#loading').hide();
		jQuery('#documents-modal').html(html);
		jQuery('#documents-modal').modal();
	});


// 	jQuery.ajax({
// 		type: "GET",
// 		url: "/reg/redir/redir.php?action=load-document&ordn="+ordn,
// 		dataType: "html",
// 		beforeSend: function() {
// 			 jQuery('#loading').show();
// 		},
// 		complete: function(){
// 			 jQuery('#loading').hide();
// 		  },
// 		success: function(json) {
// 			console.log('reg.alumacraft.com/reg/ajax/load/show-documents.php?ordn='+ordn);
// 			jQuery.get("/reg/ajax/load/show-documents.php?ordn="+ordn, function(html) {
// 				jQuery('#documents-modal').html(html);
// 				jQuery('#documents-modal').modal();
// 				//var url = jQuery('#selected').attr('href');
// 				//var w=window.open(url, '_blank');
//   // w.focus();
// 			});
// 		},
// 		error: function() {
// 			alert("The order documents JSON File could not be processed correctly.");
// 		}
// 	});
}



function log_acknowledgement_view(ordn, docname) {
	console.log("redir/redir.php?action=log-acknowledge-view&ordn="+ordn+"&doc="+docname);
	jQuery.ajax({
		type: "GET",
		url: "redir/redir.php?action=log-acknowledge-view&ordn="+ordn+"&doc="+docname,
		success: function() {
			jQuery(".document-response").addClass("form-success").html("<h4>You may now Approve this order</h4>");
			jQuery(".approve-"+ordn).removeClass('hidden');
		},
		error: function() {
			alert("The order documents JSON File could not be processed correctly.");
		}
	});
}




(function($) {
    "use strict";
    $.fn.openSelect = function()
    {
        return this.each(function(idx,domEl) {
            if (document.createEvent) {
                var event = document.createEvent("MouseEvents");
                event.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
                domEl.dispatchEvent(event);
            } else if (element.fireEvent) {
                domEl.fireEvent("onmousedown");
            }
        });
    }
}(jQuery));
