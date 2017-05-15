<h1>Create new voucher</h1>	

<form action="/action_page.php" class="form-horizontal">
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left label-inline" for="code">Code</label>
	      <div class="col-sm-9">
	      		<div class="radio">
	      			<div class="row">
	      			<div class="col-sm-5 label-inline">
	      				<label><input type="radio" name="option_code" value="1" checked >User defined</label>
	      			</div>
	      			<div class="col-sm-7">
	      				<input type="text" name="code" class="form-control" id="description">
	      			</div>
	      			</div>
	      			
	      		</div>	 
	      		           		
	      		
	      </div>
    </div>
    <div class="form-group">
    	 <label class="control-label col-sm-3 pull-left"></label>
	      <div class="col-sm-9">	      		 
	      		<div class="radio">
	      			<label><input type="radio" name="option_code" value="2"> Auto generation</label>	      			
	      		</div>	           		
	      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Mass creation:</label>
	      <div class="col-sm-9">
	      		<div class="row">
		      		<div class="col-sm-5">
		      			<input type="text" name="mass_create" class="form-control" id="mass_creation" placeholder="Enter email">
		      		</div>
		      		<span>To use mass creation, Code must be Auto generate</span>
		      	</div>
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Off percentage</label>
	      <div class="col-sm-9">	      		
      			<input type="text" name="discount_percentage" class="form-control" id="off_percent" placeholder="Off percentage">		      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3" for="email">Description</label>
	      <div class="col-sm-9">	      		
      			<input type="text" name="description" class="form-control" id="description" placeholder="Description">		      		
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left" for="code">Uses times</label>
	      <div class="col-sm-9">
	      		<input type="radio" name="gender" value="0" checked> Single      		
	      		<input type="radio" name="gender" value="1"> Unlimited
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left" for="code">Valid to</label>
	      <div class="col-sm-9">
	      		<div style="overflow: visible;">
				<div id="form_datetime"></div>
				<input type="hidden" id="useTime">
			</div>	
	      </div>
    </div>
    <div class="form-group">
	      <label class="control-label col-sm-3 pull-left"></label>
	      <div class="col-sm-9">
	      		<input class="btn btn-warning btn-lg" type="submit" value="Create">	
	      </div>
    </div>
   
</form>






