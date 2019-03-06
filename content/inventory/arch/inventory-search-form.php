<div style="padding-left:5px; padding-top:10px;">
	<div style="width:33%; display:inline-block; vertical-align: top;">
        <form class="form_layout search_boat_inventory" >
            <p>
                <label>What are you searching on?</label><br>
                <select name="search_type" id="search_type" style="margin-right:5px;" class="valid">
                    <option value="all">All</option>
                    <option value="serial">Serial Number</option>
                    <option value="item">Item</option>
                    <option value="boat">Boat</option>
                    <option value="date">Date</option>
                    <option value="date">Invoice #</option>
                </select>
            </p>
        </form>
    </div>
    <div style="width:33%; display:inline-block; vertical-align: top;">
    	<p> 
        	<label id="search1-label">Search </label><br> <input type="text" class="required two-hundred" id="search1" name="search"> 
        </p>	
    </div>
    <div style="width:33%; display:inline-block; vertical-align: top;">
    	<div class="hidden">
            <p> 
                <label>Date Through </label><br> <input type="text" class="required two-hundred" id="search2" name="date-through"> 
            </p>
        </div>	
    </div>
</div>