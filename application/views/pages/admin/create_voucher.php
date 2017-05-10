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
			<form>
				<label class="radio-inline">
					<input type="radio" name="optradio"> Single
				</label>
				<label class="radio-inline">
					<input type="radio" name="optradio"> Unlimited
				</label>
			</form>
		</td>
	</tr>
	<tr class="border">
		<td></td>
		<td>
						<div id="calendar">
						<div class="clasp hole-left"></div>
						<div class="clasp hole-right"></div>
						<div class="hole hole-left"></div>
						<div class="hole hole-right"></div>
						<div id="month">« April 2017 »</div>
						<div id="days">
							<table class="days">
							<tr>
								<td>S</td>
								<td>M</td>
								<td>T</td>
								<td>W</td>
								<td>T</td>
								<td>F</td>
								<td>S</td>
							</tr>
							</table>
						</div>
						<table class="day">
							<tr>
								<td class="old-month">28</td>
								<td class="old-month">29</td>
								<td class="old-month">30</td>
								<td class="old-month">31</td>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>
							<tr>
								<td>4</td>
								<td class="appoint">5</td>
								<td>6</td>
								<td>7</td>
								<td>8</td>
								<td>9</td>
								<td>10</td>
							</tr>
							<tr>
								<td>11</td>
								<td>12</td>
								<td>13</td>
								<td>14</td>
								<td>15</td>
								<td>16</td>
								<td>17</td>
							</tr>
							<tr>
								<td class="selected">18</td>
								<td>19</td>
								<td>20</td>
								<td>21</td>
								<td class="appoint">22</td>
								<td class="appoint">23</td>
								<td>24</td>
							</tr>
							<tr>
								<td>25</td>
								<td>26</td>
								<td>27</td>
								<td>28</td>
								<td>29</td>
								<td>30</td>
								<td>1</td>
							</tr>
						</table>
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