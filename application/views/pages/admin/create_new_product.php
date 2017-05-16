<div class="new-product">
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
						<td><input class="form-control short-input" type="text" name="basprice"> USD </td>
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
							<div class="radio-inline"> <input id="radio-1" type="radio" name="name" value="1"><label for="radio-1">Open</label></div>
							<div class="radio-inline single"><input id="radio-2" type="radio" name="name" value="2"><label for="radio-2">Single</label></div>

						</td>
					</tr>
					<tr>
						<th>User times</th>
						<td>
							<div class="radio"><input id="radio-3" type="radio" name="times" value="-1"><label for="radio-3">Unlimited</label></div>
							<div class="radio"><input id="radio-4" type="radio" name="times" value="1"><label for="radio-4">Times</label></div>
							<input class="form-control short-input" type="text" name="val_usetimes">
						</td>
					</tr>
					<tr>
						<th>Valid from</th>
						<td>
							<div class="radio"><input id="radio-5" type="radio" name="validform"><label for="radio-5">Purchase date</label></div>
							<div class="radio"><input id="radio-6" type="radio" name="validform"><label for="radio-6">The date after</label></div>
							<div class="radio"><input id="radio-7" type="radio" name="validform"><label for="radio-7">Specific date</label></div>
							<div id="datepickerfrom"></div>
							<input type="hidden" id="selectedFromDate" name="specific_validfrom">
						</td>
					</tr>
					<tr>
						<th>Valid to</th>
						<td>
							<div class="radio"><input id="radio-8" type="radio" name="validto"><label for="radio-8">End of year</label></div>
							<div class="radio"><input id="radio-9" type="radio" name="validto"><label for="radio-9">1 year later</label></div>
							<div class="radio"><input id="radio-10" type="radio" name="validto"><label for="radio-10">Specific date</label></div>
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
					      <input type="text" class="form-control image-select" readonly>
					      <label class="input-group-btn">
					        <span class="btn btn-warning btn-file filePath"><input type="file" id="imageFile" name="image" multiple>Select File</span>
					      </label>
					    </div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="image-holder"></div>
						</td>
					</tr>
					<tr>
						<td>
							<span class="select-title">Video</span>
							<div class="input-group select-file">
					      <input type="text" class="form-control video-select" readonly>
					      <label class="input-group-btn">
					        <span class="btn btn-warning btn-file filePath"><input type="file" id="videoFile" name="video" multiple>Select File</span>
					      </label>
					    </div>
						</td>
					</tr>
					<tr>
						<td>
							<div id="video-holder"><span></span><div class="video-mask"></div></div>
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