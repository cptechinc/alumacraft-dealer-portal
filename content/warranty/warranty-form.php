<?php $boat = get_boat_info(urldecode($_GET['register']), false); ?>
<?php $invoicedate = date("m/d/Y", strtotime($boat['InvoiceDate']));  ?>
<div>
    <form id="warranty-form" action="redir/redir.php" novalidate method="post">	
        <input type="hidden" name="boat-serial" id="boat-serial" value="<?php echo $boat['SerialNbr']; ?>">
        <input type="hidden" name="invoice-date" value="<?php echo $boat['InvoiceDate']; ?>">
        <input type="hidden" name="order-nbr" value="<?php echo $boat['OrderNbr']; ?>">
        <input type="hidden" name="itemid" id="itemnbr" value="<?php echo $boat['ItemNbr']; ?>">
        <input type="hidden" name="custid" value="<?php echo $boat['CustId']; ?>">
        <input type="hidden" name="action" value="register-warranty">
        <?php $name = get_dealer_name_from_dplus($boat['CustId']); ?>
        <div class="row">
        	<div class="grid_6 grid">
				<p>Serial Number: <b><?php echo $boat['SerialNbr']; ?></b> </p>
				<p>Boat Description: <b><?php echo $boat['ItemDesc1']; ?></b> </p>
				<p>ItemID: <b><?php echo $boat['ItemNbr']; ?></b></p> 
				<p>Customer: <b><?php echo $name; ?></b></p> 
				<p>Invoice #:  <b><?php echo $boat['OrderNbr']; ?> - <?php echo $invoicedate; ?></b></p>
			</div>
       		<div class="grid_6 grid">
       			<?php $options = get_boat_optncodes($boat['ItemNbr'], false); ?>
				<?php foreach ($options->fetchAll() as $option) : ?>
					<p><?php echo $option['optioncode']; ?>:  <b><?php echo $option['description']; ?></b></p>
				<?php endforeach; ?>
			</div>
        </div>
        
        <div class="row">
        	<div class="grid_12 grid">
            	<hr>   
                <div id="before-form-hidden"></div>
                <div class="form-error hidden"> <h2></h2> </div>
                
                <div class="form-success hidden"> <h2></h2> </div>
                
                <div class="form-response">
                	<h3><a href="<?php echo $url; ?>#inventory" class="aluma-btn">Back to Inventory</a></h3>
                </div>
        
                <?php if (intval(get_boat_year($boat['ItemNbr'])) < $newest_register_year) : ?>
                    <br>
                    <h2>Sold, but unregistered?</h2>
                    
                    	<p> <input type="checkbox" name="sold-unreg" value="Y">Sold and Unregistered</p>
                   
                    
                <?php endif; ?>
                <br>
            </div>
        </div>
        
        <div class="row">
        
        	<div class="grid_4 grid">
                <h3>Contact for Warranty</h3>
                <p> <label>First Name<span class="red">*</span></label><br> <input type="text" class="required" name="firstname" id="firstname"> </p>
                <p> <label>Middle Name</label><br> <input type="text" class="" name="middlename" id="middlename"> </p>
                <p> <label>Last Name<span class="red">*</span></label><br> <input type="text" class="required" name="lastname" id="lastname"> </p> 
                <p> <label>Email<span class="red">*</span></label><br> <input type="text" class="required" name="email" id="email"> </p>
                <p><div id="phone-error" class="error-msg hidden"></div></p>
                <p> <label>Phone<span class="red">*</span></label><br> <input type="text" class="required" name="phone" id="phone"> </p> 
            </div>
            
            <div class="grid_4 grid">
                <h3>Address for Warranty</h3>
                <p> <label>Address<span class="red">*</span></label><br> <input type="text" class="required two-hundred" name="address"> </p>
                <p> <label>Address 2 </label><br> <input type="text" class="two-hundred" name="address2"> </p>
                <p><div id="zip-error" class="error-msg hidden"></div></p>
                <p> 
                    <label>Zip/Postal Code (will populate city/state)<span class="red">*</span></label><br> 
                    <input type="text" class="required zip" name="zip" id="zip" onkeyup="findcitystate(this.value, 'us', 1)"> 
                </p>
                <p> <label>City<span class="red">*</span></label><br> <input type="text" class="required" name="city"> </p>
                <p> 
                   <input type="hidden" id="country" name="country">
                    <label>State<span class="red">*</span></label><br> 
                    <select class="required" name="state" id="state-select">
                        <option value="">Choose State</option>
                        <?php $states = get_states('USA', false); ?>
                        <optgroup label="USA">
                        <?php foreach ($states->fetchAll() as $state) : ?>
                            <option value="<?php echo $state['abbreviation']; ?>"><?php echo $state['name'].' - '.$state['abbreviation']; ?></option>
                        <?php endforeach; ?>
                        </optgroup>
                        
                        <?php $provinces = get_states('Canada', false); ?>
                        <optgroup label="Canada">
                        <?php foreach ($provinces->fetchAll() as $province) : ?>
                            <option value="<?php echo $province['abbreviation']; ?>">
                                <?php echo $province['name'].' - '.$province['abbreviation']; ?>
                            </option>
                        <?php endforeach; ?>
                        </optgroup>
                        
                        <?php $countries = get_countries('North America'); ?>
                        <optgroup label="North America">
                        	<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                       
                        <?php $countries = get_countries('Europe'); ?>
                        <optgroup label="Europe">
                        	<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                       
                       <?php $countries = get_countries('South America'); ?>
                        <optgroup label="South America">
                        	<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                       
                       <?php $countries = get_countries('Oceania'); ?>
                        <optgroup label="Oceania">
                        	<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                      
                      <?php $countries = get_countries('Asia'); ?>
						<optgroup label="Asia">
							<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                       
                      
                       <?php $countries = get_countries('Africa'); ?>
                        <optgroup label="Africa">
                        	<?php foreach ($countries->fetchAll() as $country) : ?>
								<option value="<?php echo $country['code']; ?>">
									<?php echo $country['name'].' - '.$country['code']; ?>
								</option>
							<?php endforeach; ?>
						</optgroup>
                       
                        
                    </select>
                </p>    
            </div>
            
            <div class="grid_4 grid">
                <h3>Extra Boat Information</h3>
                <p><div id="date-error" class="error-msg hidden"></div></p>
                <p> <label>Date of Sale </label><br> <input type="text" class="required" id="saledate"> &nbsp; </p>
                <input type="hidden" name="saledate" value="" id="saledate-hidden"> 
                
                <p><div id="del-date-error" class="error-msg hidden"></div></p>
                <p> <label>Date of Delivery </label><br> <input type="text" class="required" id="deliverdate"> &nbsp; </p>
                <input type="hidden" name="delivery-date" value="" id="deliverdate-hidden"> 
                
                <div class="motor-info">
                    <h3>Motor Information</h3>
                    <div id="motor-error" class="error-msg hidden"></div>
                    <p>
                        <label>Serial Number</label><br> 
                        <input type="text" class="" name="motor-serial-number" id="motor-serial"> 
                    </p>
                    <p>
                        <label>Horsepower</label><br> 
                        <select name="motor-hp" id="motor-hp">
                            <option value="0.0">0.0</option>
                            <?php $horsepowers = get_horsepowers(false); ?>
                            <?php foreach ($horsepowers->fetchAll() as $horsepower) : ?>
                                <option value="<?php echo $horsepower['horsepower']; ?>"><?php echo $horsepower['horsepower']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>
                    <p>
                        <label>Model Year</label><br>
                        <select name="model-year" id="model-year">
                            <option value="">SELECT Year</option>
                            <?php $thisyear = intval(date('Y')) + 1 ; ?>
                            <?php for ($i = 0; $i < 7; $i++) : ?>
                                <option value="<?php echo ($thisyear - $i); ?>"><?php echo ($thisyear - $i); ?></option>
                            <?php endfor; ?>
                        </select>
                    </p>
                    <p><label>Desc</label><br> <input type="text" class="" name="motor-desc" > </p>
  
              			
                   			<input type="checkbox"  name="with-motor" value="N">Purchased without motor 
                   
                    	
        
                </div>
                
            </div>
           
          
               
           
        </div>
        <div class="row">
        	<div class="grid_4">
        		 <input type="submit" value="Submit">
        	</div>
        </div>
        
    </form>
</div>

<script>
	jQuery(document).ready(function() {
		/*var $motorselect = jQuery("#motor-hp");

		jQuery('#motor-hp').select2({
    	// Initialisation here
		}).data('select2').listeners['*'].push(function(name, target) { 
			if(name == 'focus') {
				jQuery(this.$element).select2("open");
			}
		});
		$motorselect.on("select2:close", function (e) { 
			jQuery('#model-year').openSelect();

		
		});*/
	});
	var regex = new RegExp("^[a-zA-Z0-9]{4,10}$");
	var regexnumber = new RegExp('^\\d+$');
	
	
	jQuery('#phone').change(function() {
		console.log(jQuery('#phone').val());
		if (regexnumber.test(jQuery('#phone').val())) {
			jQuery('#phone-error').text('');
			jQuery('#phone-error').addClass('hidden');
		} else { //DOESNT MATCH SO NEEDS TO CATCH
			jQuery('#phone-error').text('Please remove all spaces and/or special characters, also must be numeric only');
			jQuery('#phone-error').removeClass('hidden');
			jQuery('#phone-error').focus();
		}
	});
	
	jQuery('#state-select').change(function() {
		var label = jQuery('#state-select :selected').parent().attr('label');
		$('#country').val(label);

	})
	
	jQuery('#motor-serial').change(function() {
		if (regex.test(jQuery('#motor-serial').val())) {
			jQuery('#motor-error').text('');
			jQuery('#motor-error').addClass('hidden');
		} else { // Show errors
			
			jQuery('#motor-error').text('Please remove all spaces and/or special characters');
			jQuery('#motor-error').removeClass('hidden');
			jQuery('#motor-serial').focus();
		}
	});
	
	
	jQuery('input[name="sold-unreg"]').change(function() {
		if (jQuery(this).attr('checked')) {
			jQuery('.form-column').addClass('hidden');
		} else {
			jQuery('.form-column').removeClass('hidden');
		}
	});
	
	jQuery('#saledate').change(function() {
		var date = jQuery(this).val();
		if (validdate(date)) {
			var formatteddate = moment(date).format('YYYYMMDD');
			jQuery('#saledate-hidden').val(formatteddate);
			jQuery('#date-error').text('');
			jQuery('#date-error').addClass('hidden');
		} else {
			jQuery('#date-error').text('Please use the date format MM/DD/YYYY');
			jQuery('#date-error').removeClass('hidden');
		}
	});
	
	jQuery('#deliverdate').change(function() {
		var date = jQuery(this).val();
		if (validdate(date)) {
			var formatteddate = moment(date).format('YYYYMMDD');
			jQuery('#deliverdate-hidden').val(formatteddate);
			jQuery('#del-date-error').text('');
			jQuery('#del-date-error').addClass('hidden');
		} else {
			jQuery('#del-date-error').text('Please use the date format MM/DD/YYYY');
			jQuery('#del-date-error').removeClass('hidden');
		}
	});
	
	jQuery('input[name="with-motor"]').change(function() {
		if (jQuery(this).attr('checked')) {
			jQuery('.motor-info').addClass('hidden');
		} else {
			jQuery('.motor-info').removeClass('hidden');
		}
	});
	
	jQuery('#warranty-form').submit(function(e) {
		e.preventDefault();
		var errors_exist = false;
		var missinginputs = checkinputs('#warranty-form');
		if (jQuery('input[name="sold-unreg"]').prop( "checked" )) {
			
		} else {
			jQuery('.form-error').html('');
			if (missinginputs.length > 0) {
				errors_exist = true;
				
				jQuery("<h2></h2>").text('The following have errors : ').appendTo('.form-error');
				
				for (var i = 0; i < missinginputs.length; i++) {
					jQuery('<p></p>').html(missinginputs[i]).appendTo('.form-error');
				}
			}
			
			if (!validdate(jQuery('#saledate').val())) {
				errors_exist = true;
				jQuery('<p></p>').html('Sale Date is in an invalid format').appendTo('.form-error');
			}
		}
		
		if (errors_exist) {
			jQuery('.form-error').removeClass('hidden');
			jQuery('#before-form-hidden').offset().top;
			jQuery('html, body').animate({
				scrollTop: jQuery("#before-form-hidden").offset().top
			}, 2000);
			
		} else {
			postform('#warranty-form', function() {
				wait(2000, function() {
					check_if_registered();
				});
			})
		}
	});
	
	/*jQuery('#motor-serial').change(function() {
		var serial = jQuery(this).val();
		if (jQuery('#from-aluma').attr('checked')) {
			validate_motorserial(serial);
		} else {
			jQuery('.form-error').addClass('hidden');
		}
	});*/
	
	jQuery('#model-year').change(function() {
		var year = parseInt(jQuery(this).val());
		if (year > 1700 && year < 2100) {
			jQuery('.form-error').addClass('hidden');
		} else {
			jQuery('<p></p>').html('Check your motor year').appendTo('.form-error');
			jQuery('.form-error').removeClass('hidden');
		}
		
	});
	
	jQuery('#motor-hp').change(function() {
		var horsepower = jQuery(this).val();
		if (!isNaN(horsepower)) {
			
		} else {
			jQuery('<p></p>').html('Horse Power is not numeric').appendTo('.form-error');
			jQuery('.form-error').removeClass('hidden');
		}
	});
	
	
	
	
	function checkinputs(form) {
		var missinginputs = [];
		jQuery('#warranty-form .required').each(function() {
            if (jQuery(this).val() === '') {
				//console.log(jQuery(this).closest("p").find("label").text());
				missinginputs.push(jQuery(this).closest("p").find("label").text());
			}
        });
		return missinginputs;
	}
	
	function findcitystate(zip, country, tried) {
		if (zip.length > 4) {
			jQuery('#zip-error').text('');
			jQuery('#zip-error').addClass('hidden');
			console.log("//api.zippopotam.us/"+country+"/"+encodeURIComponent(zip));
			jQuery.ajax({
				  type: "GET",
				  url: "//api.zippopotam.us/"+country+"/"+encodeURIComponent(zip),
				  dataType: "json",
				  success: function(json) {
					  var city = '';
					  var abbrev = '';
					  jQuery.each(json.places, function(index, result) {
						  city = result['place name'];
						  abbrev = result['state abbreviation'];
						  console.log(abbrev);
						  state = result['state'];
					  })
					  jQuery('input[name="city"]').val(city);
					  jQuery("<option value='"+abbrev+"'><option>").html(abbrev + " - " + state).appendTo(jQuery("select[name='state']"));
					  jQuery('select[name="state"]').val(abbrev);
				  },
				  error: function() {
					  if (tried === 1) {
						 findcitystate(zip, 'CA', 2)
					  } else {
						//jQuery('#zip-error').text("We could not find a city/state for the zipcode " + zip);
						//jQuery('#zip-error').removeClass('hidden');
						//jQuery('#zip').focus();
					  }
				  }
			  }); 
		} else {
			//jQuery('#zip-error').text("We could not find a city/state for the zipcode " + zip);
			//jQuery('#zip-error').removeClass('hidden');
			//jQuery('#zip').focus();
		}
	}
	
	
	
	
	function validate_motorserial(serial) {
		jQuery.ajax({
		  type: "GET",
		  url: "ajax/xml/check-serial-exists.php",
		  dataType: "xml",
		  success: function(xml) {  
		  	var response = jQuery(xml).find('response');
			var status = response.find('status').text(); 
			if (status === 'false') {
				jQuery('.form-error h2').text('The serial number doesn\'t match anything at Alumacraft ');
				jQuery('.form-error').removeClass('hidden');
			} else {
				jQuery('.form-error h2').text('');
				jQuery('.form-error').addClass('hidden');
			}
		  },
		  error: function() {
			  alert('The check serial XML file ran into an error');
    	  }
	  });
		
	}
	
	function check_if_registered() {
		var serialnumber = jQuery('#boat-serial').val();
		var itemnbr = jQuery('#itemnbr').val();
		console.log("ajax/xml/was-boat-registered.php?serialnbr="+serialnumber+"&itemnbr="+itemnbr);
		jQuery.ajax({
		  type: "GET",
		  url: "ajax/xml/was-boat-registered.php?serialnbr="+serialnumber+"&itemnbr="+itemnbr,
		  dataType: "xml",
		  success: function(xml) {  
		  	var response = jQuery(xml).find('response');
			var status = response.find('status').text(); 
			if (status === 'false') {
				jQuery('<h2></h2>').html('This Boat wasn\'t registered ').appendTo('.form-error');
				jQuery('.form-error').removeClass('hidden');
				jQuery('.form-success').addClass('hidden');
				var n = noty({
					text: '<h2>Boat Was Not Registered</h2>',
					theme: 'relax', // or 'relax'
					type: 'error',
					timeout: 4000, 
					animation: {
						open: {height: 'toggle'}, // jQuery animate function property object
						close: {height: 'toggle'}, // jQuery animate function property object
						easing: 'swing', // easing
						speed: 500 // opening & closing animation speed
					}
				}); 
			} else {
				jQuery('.form-success h2').text('');
				jQuery('<h2></h2>').text('Boat Was Registered').appendTo('.form-success');
				jQuery('.form-error').addClass('hidden');
				jQuery('.form-success').removeClass('hidden');
				//window.location = '.form-success';
				jQuery('html, body').animate({
					scrollTop: jQuery(".form-success").offset().top
				}, 2000);
				
				var n = noty({
					text: '<h2>Boat Was Registered</h2>',
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
			}
		  },
		  error: function() {
			  alert('Checking if boat got registered ran into an issue. Please go to inventory and validate.');
    	  }
			  
	  });
			
	}
		
</script>