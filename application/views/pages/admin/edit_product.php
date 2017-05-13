<form class="form-horizontal">
<div class="new-product edit_product">
	<h1><?php echo $title; ?></h1>
	<ul class="nav nav-tabs tabs-panel">
			<li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
			<li><a data-toggle="tab" href="#advance">Advance</a></li>
			<li><a data-toggle="tab" href="#pricing">Pricing Model</a></li>
			<li><a data-toggle="tab" href="#media">Media</a></li>
			<li><a data-toggle="tab" href="#extra">Extra</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="basic">
			<div class="form-group">
			    <label class="control-label col-sm-3 pull-left label-inline" for="code">Name</label>
			    <div class="col-sm-9">
			      	<input class="form-control" type="text" name="name" value="<?php echo $display_data['basic']['name'];?>">
			    </div>
	    	</div>
	    	<div class="form-group">
			    <label class="control-label col-sm-3 pull-left label-inline" for="code">Code</label>
			    <div class="col-sm-9">
			      	<input class="form-control" type="text" name="code" value="<?php echo $display_data['basic']['code'];?>">
			    </div>
	    	</div>
	    	<div class="form-group">
			    <label class="control-label col-sm-3 pull-left label-inline" for="code">Description</label>
			    <div class="col-sm-9">
			      	<textarea class="form-control" name="description" rows="6" >
								<?php echo $display_data['basic']['description'];?>
						</textarea>
			    </div>
	    	</div>
	    	<div class="form-group ">
			    <label class="control-label col-sm-3 pull-left label-inline" for="code">Base price</label>
			    <div class="col-sm-9">
			      	<input class="form-control short-input" type="text" name="basprice" value="<?php echo $display_data['basic']['base_price'];?>"> <span>USD </span>
			    </div>
	    	</div>			
		</div>
		<div class="tab-pane" id="advance">
			<div class="form-group row-name">
			    <label class="control-label col-sm-4 pull-left label-inline" for="code">Name</label>
			    <div class="col-sm-8">
			      	<div class="radio-inline"> <input type="radio" name="name" value="1"><label>Open</label></div>
					<div class="radio-inline single"><input type="radio" name="name" value="2"><label>Single</label></div>
			    </div>
	    	</div>
	    	<div class="form-group row-name">
			    <label class="control-label col-sm-4 pull-left label-inline" for="code">User times</label>
			    <div class="col-sm-8">
			      		<div class="radio"><input type="radio" name="times" value="-1"><label>Unlimited</label></div>
						<div class="radio"><input type="radio" name="times" value="1"><label>Times</label></div>
						<input class="form-control short-input" type="text" name="val_usetimes">
			    </div>
	    	</div>
				<table class="table input-advance-table">					
					<tr>
						<th>Valid from</th>
						<td>
							<div class="radio"><input type="radio" name="validform"><label>Purchase date</label></div>
							<div class="radio"><input type="radio" name="validform"><label>The date after</label></div>
							<div class="radio"><input type="radio" name="validform"><label>Specific date</label></div>
							<div id="datepickerfrom"></div>
							<input type="hidden" id="selectedFromDate" name="specific_validfrom">
						</td>
					</tr>
					<tr>
						<th>Valid to</th>
						<td>
							<div class="radio"><input type="radio" name="validto"><label>End of year</label></div>
							<div class="radio"><input type="radio" name="validto"><label>1 year later</label></div>
							<div class="radio"><input type="radio" name="validto"><label>Specific date</label></div>
							<div id="datepickerto"></div>
							<input type="hidden" id="selectedToDate" name="Specific_validto">
						</td>
						</td>
					</tr>
					<tr>
						<th>Number of seat</th>
						<td><input class="form-control short-input" type="text" name="numbeofseat"></td>
					</tr>
					<tr>
						<th></th>
						<td><input class="form-control btn btn-warning btn-md create-btn" type="submit" name="" value="Create"></td>
					</tr>
				</table>
			
		</div>
		<div class="tab-pane" id="pricing">
			<form method="POST" action="">
				<table class="table input-pricing-table">
					<tr>
						<th><span>Time</span></th>
						<td></td>
					</tr>
					<tr>
						<th class="season-seat">Spring</th>
						<td>
							<div id="spring"></div>
							<input class="text-center" type="text" id="spring-percent" name="val_spring" readonly>
						</td>
					</tr>
					<tr>
						<th  class="season-seat">Summer</th>
						<td>
							<div id="summer"></div>
							<input class="text-center" type="text" id="summer-percent" name="val_summer" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">Autumn</th>
						<td>
							<div id="autumn"></div>
							<input class="text-center" type="text" id="autumn-percent" name="val_autumn" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">Winter</th>
						<td>
							<div id="winter"></div>
							<input class="text-center" type="text" id="winter-percent" name="val_winter" readonly>
						</td>
					</tr>
					<tr>
						<th><span>Remaining seat</span></th>
						<td></td>
					</tr>
					<tr>
						<th class="season-seat">Under 25%</th>
						<td>
							<div id="low"></div>
							<input class="text-center" type="text" id="low-percent" name="25" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 25% to 50%</th>
						<td>
							<div id="middle"></div>
							<input class="text-center" type="text" id="middle-percent" name="25-50" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 50% to 75%</th>
						<td>
							<div id="high"></div>
							<input class="text-center" type="text" id="high-percent" name="50-75" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 75% to 100%</th>
						<td>
							<div id="max"></div>
							<input class="text-center" type="text" id="max-percent" name="75-100" readonly>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<div class="tab-pane" id="media">
			<form method="POST" action="">
				<table class="table input-file-table">
					<tr>
						<td>
							<span class="select-title">Image</span>
							<div class="input-group select-file">
					      <input type="text" class="form-control" readonly>
					      <a class="input-group-btn">
					        <span class="btn btn-warning" type="button"><input type="file" id="imageFile" class="filePath" name="image">Select File</span>
					      </a>
					    </div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="thumbnail"><img src="<?php echo base_url();?>application/views/assets/images/18.jpg" alt="images" ></div>
					    <div class="thumbnail"><img src="<?php echo base_url();?>application/views/assets/images/17.jpg" alt="images" ></div>
					    <div class="thumbnail"><img src="<?php echo base_url();?>application/views/assets/images/16.jpg" alt="images" ></div>
						</td>
					</tr>
					<tr>
						<td>
							<span class="select-title">Video</span>
							<div class="input-group select-file">
					      <input type="text" class="form-control" readonly>
					      <a class="input-group-btn">
					        <span class="btn btn-warning" type="button"><input type="file" id="videoFile" class="filePath" name="video">Select File</span>
					      </a>
					    </div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="thumbnail"><span></span><div class="video-mask"></div><img src="<?php echo base_url();?>application/views/assets/images/21.jpg" alt="images" ></div>
					    <div class="thumbnail"><span></span><div class="video-mask"></div><img src="<?php echo base_url();?>application/views/assets/images/20.jpg" alt="images" ></div>
					    <div class="thumbnail"><span></span><div class="video-mask"></div><img src="<?php echo base_url();?>application/views/assets/images/19.jpg" alt="images" ></div>
						</td>
					</tr>
					
				</table>
			</form>
		</div>
		<div class="tab-pane" id="extra">
			<table class="table extra-table">
				<tr>
					<td>
						<table class="table table-striped data-table add-table">
					    <tr>
					      <th>No.</th>
					      <th>Voucher</th>
					      <th>Price</th>
					      <th>User times</th>
					      <th>Created on</th>
					      <th></th>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Robert Kenedy</td>
					      <td>abd@gmail.com</td>
					      <td>+8555555555</td>
					      <td>Australia</td>
					      <td><a class="detail"><span></span></a></td>
					    </tr>
					  </table>
					</td>
				</tr>
				<tr>
					<td>
						<table class="table table-striped data-table subtract-table">
					    <tr>
					      <th>No.</th>
					      <th>Voucher</th>
					      <th>Price</th>
					      <th>User times</th>
					      <th>Created on</th>
					      <th></th>
					    </tr>
					    <tr>
					      <td>1</td>
					      <td>Robert Kenedy</td>
					      <td>abd@gmail.com</td>
					      <td>+8555555555</td>
					      <td>Australia</td>
					      <td><a class="detail"><span></span></a></td>
					    </tr>
					  </table>
					</td>
				</tr>
				
			</table>
		</div>
	</div>	
</div>
	<div class="center">
		<input class="btn btn-warning btn-lg create-btn" type="submit" name="" value="Update"></td>
	</div>
</form>