<div class="new-product">
	<h3><?php echo $title; ?></h3>
	<ul class="nav nav-tabs tabs-panel">
			<li class="active"><a data-toggle="tab" href="#basic">Basic</a></li>
			<li><a data-toggle="tab" href="#advance">Advance</a></li>
			<li><a data-toggle="tab" href="#pricing">Pricing Model</a></li>
			<li><a data-toggle="tab" href="#media">Media</a></li>
			<li><a data-toggle="tab" href="#extra">Extra</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="basic">
			<form method="POST" action="">
				<table class="table input-basic-table">
					<tr>
						<th>Name</th>
						<td><input class="form-control" type="text" name="name"></td>
					</tr>
					<tr>
						<th>Code</th>
						<td><input class="form-control" type="text" name="code"></td>
					</tr>
					<tr>
						<th>Description</th>
						<td><textarea class="form-control" name="description" rows="6" ></textarea></td>
					</tr>
					<tr>
						<th>Base price</th>
						<td><input class="form-control short-input" type="text" name="price"> USD </td>
					</tr>
					<tr>
						<th></th>
						<td><input class="form-control btn btn-warning btn-md create-btn" type="submit" name="" value="Create"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="tab-pane" id="advance">
			<form method="POST" action="">
				<table class="table input-advance-table">
					<tr class="row-name">
						<th>Name</th>
						<td>
							<div class="radio-inline"> <input type="radio" name="name"><label>Open</label></div>
							<div class="radio-inline single"><label>Single</label></div>

						</td>
					</tr>
					<tr>
						<th>User times</th>
						<td>
							<div class="radio"><input type="radio" name="times"><label>Unlimited</label></div>
							<div class="radio"><input type="radio" name="times"><label>Times</label></div>
							<input class="form-control short-input" type="text" name="times">
						</td>
					</tr>
					<tr>
						<th>Valid from</th>
						<td>
							<div class="radio"><input type="radio" name="validform"><label>Purchase date</label></div>
							<div class="radio"><input type="radio" name="validform"><label>The date after</label></div>
							<div class="radio"><input type="radio" name="validform"><label>Specific date</label></div>
							<div id="datepickerfrom"></div>
							<input type="hidden" id="selectedFromDate" name="selectedFromDate">
						</td>
					</tr>
					<tr>
						<th>Valid to</th>
						<td>
							<div class="radio"><input type="radio" name="validto"><label>End of year</label></div>
							<div class="radio"><input type="radio" name="validto"><label>1 year later</label></div>
							<div class="radio"><input type="radio" name="validto"><label>Specific date</label></div>
							<div id="datepickerto"></div>
							<input type="hidden" id="selectedToDate" name="selectedToDate">
						</td>
						</td>
					</tr>
					<tr>
						<th>Number of seat</th>
						<td><input class="form-control short-input" type="text" name="seat"></td>
					</tr>
					<tr>
						<th></th>
						<td><input class="form-control btn btn-warning btn-md create-btn" type="submit" name="" value="Create"></td>
					</tr>
				</table>
			</form>
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
							<input class="text-center" type="text" id="spring-percent" name="spring" readonly>
						</td>
					</tr>
					<tr>
						<th  class="season-seat">Summer</th>
						<td>
							<div id="summer"></div>
							<input class="text-center" type="text" id="summer-percent" name="summer" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">Autumn</th>
						<td>
							<div id="autumn"></div>
							<input class="text-center" type="text" id="autumn-percent" name="autumn" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">Winter</th>
						<td>
							<div id="winter"></div>
							<input class="text-center" type="text" id="winter-percent" name="winter" readonly>
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
							<input class="text-center" type="text" id="low-percent" name="low" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 25% to 50%</th>
						<td>
							<div id="middle"></div>
							<input class="text-center" type="text" id="middle-percent" name="middle" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 50% to 75%</th>
						<td>
							<div id="high"></div>
							<input class="text-center" type="text" id="high-percent" name="high" readonly>
						</td>
					</tr>
					<tr>
						<th class="season-seat">From 75% to 100%</th>
						<td>
							<div id="max"></div>
							<input class="text-center" type="text" id="max-percent" name="max" readonly>
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
					        <span class="btn btn-warning" type="button"><input type="file" id="imageFile" class="filePath" name="imageFile">Select File</span>
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
					        <span class="btn btn-warning" type="button"><input type="file" id="videoFile" class="filePath" name="videoFile">Select File</span>
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
					<tr>
						<td><input class="form-control btn btn-warning btn-md create-btn" type="submit" name="" value="Create"></td>
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
				<tr>
					<td>
						<form method="POST" action="">
							<input class="form-control btn btn-warning btn-md create-btn" type="submit" name="" value="Create"></td>
						</form>
				</tr>
			</table>
		</div>
	</div>	
</div>