<script>
	jQuery(document).ready(function() {
		var n = noty({
			text: '<?php echo $text; ?>',
			theme: 'relax', // or 'relax'
			type: '<?php echo $type; ?>',
			timeout: 4000, 
			animation: {
				open: {height: 'toggle'}, // jQuery animate function property object
				close: {height: 'toggle'}, // jQuery animate function property object
				easing: 'swing', // easing
				speed: 500 // opening & closing animation speed
			}
		}); 
	}); 
</script>