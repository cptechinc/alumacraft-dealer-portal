<div>
    <form id="orders-search-form" class="form_layout search_orders" action="ajax/json/get-orders-link.php" method="post">
    	<h3>Search Your Orders</h3>
    	<input type="hidden" name="action" value="search-orders">
        <input type="hidden" name="page" id="order-search-page" value="1">
        <?php if (isset($_GET['location']) || $role_type == 'DEALER') : ?>
        	<input type="hidden" name="custid" value="<?php echo $location_id; ?>">
        <?php else : ?>
        	<input type="hidden" name="custid" value="">
        <?php endif; ?>
        <?php if (isset($_GET['rep']) || $role_type == 'SREP') : ?>
        	<input type="hidden" name="rep" value="<?php echo $repid; ?>">
        <?php else : ?>
        	<input type="hidden" name="rep" value="">
        <?php endif; ?>
        <input type="hidden" name="subset" value="<?php echo $subset; ?>">
        <p>
            <label>What are you searching on?</label><br>
            <select name="search-type" id="search_type" style="margin-right:5px;" class="valid">
                <option value="all">All</option>
                <?php if ($role_type != 'DEALER' || (!isset($_GET['location']))) : ?><option value="ArcuCustId">Customer</option><?php endif; ?>
                <option value="InitItemNbr">Item #</option>
                <option value="OedtDesc">Boat Description</option>
                <option value="OehdArrvDate">Order Arrival Date</option>
                <option value="OehdOrdrDate">Order Date</option>
                <option value="SO_HEADER.OehdNbr">Order #</option>
                <option value="OehdUserCode2">Web #</option>
            </select>
        </p> 
    
    	<div><p> <label>Search </label><br> <input type="text" class="two-hundred" id="key-search" name="search"> </p></div>
       
        <div style="width:40%; display:inline-block; vertical-align: top;">
            <div class="hidden">
                <p> <label>Date From </label><br> <input type="text" class="two-hundred datepicker search-dates" id="date-from"> </p>
                <input type="hidden" name="date-from" id="date-from-actual">
            </div>	
        </div>
        <div style="width:5%; display:inline-block; vertical-align: top;">
        
        </div>
        <div style="width:40%; display:inline-block; vertical-align: top;">
            <div class="hidden">
                <p> <label>Date Through </label><br> 
                	<input type="text" class="two-hundred datepicker search-dates" id="date-through"> 
                	<input type="hidden" name="date-through" id="date-through-actual">
                </p>
            </div>	
        </div>
        <button type="submit">Search</button>
    </form>
</div>