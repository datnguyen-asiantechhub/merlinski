<div>
	<h1>Create new voucher</h1>
	<img src="<?php echo base_url();?>application/views/assets/images/underline_03.png" alt="" id="" />
</div>
<table class="table">
	<tr class="border">
		<td>
			<h4>Code</h4>
		</td>
		<td>
			<table>
				<tr>
					<td class="style">
						<input type="radio" name="gender" value="userdefined"> User defined
					</td>	
					<td>
						<input type="text" class="form-control" id="description">
					</td>
				</tr>
				<tr>
					<td class="style">
						<input type="radio" name="gender" value="autogeneration"> Auto generation

					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr class="border">
		<td class="style">
			<h4>Mass creation</h4>
		</td>
		<td>
			<table>
				<tr>
					<td><input type="text" class="form-control" id="email"></td>
					<td class="font"> To use mass creation, Code must be Auto generate</td>
				</tr>
			</table>
			
		</td>
	</tr>
	<tr class="border">
		<td class="style">
			<h4>Off percentage</h4>
		</td>
		<td>
			<input type="text" class="form-control" id="off_percent">
		</td>
	</tr>
	<tr class="border">
		<td class="style">
			<h4>Description</h4>
		</td>
		<td>
			<input type="text" class="form-control" id="description">
		</td>
	</tr>

	<tr class="border">
		<td class="style">
			<h4>Use times</h4>
		</td>
		<td class="style">
			
			<table>
				<tr>
					<td> 
						 <input type="radio" name="gender" value="username"> Single
					</td>
					<td>
						 <input type="radio" name="gender" value="username"> Unlimited
					</td>
					
				</tr>
			</table>
					
				
			
		</td>
	</tr>
	<tr class="border">
		<td></td>
		<td>
			<div style="overflow: visible;">
				<div id="form_datetime"></div>
				<input type="hidden" id="useTime">
			</div>			
		</td>
	</tr>
	<tr class="border">
		<td></td>
		<td>
			<input class="btn btn-warning btn-lg" type="submit" value="Create">
		</td>
	</tr>
</table>