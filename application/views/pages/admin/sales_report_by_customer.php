<h1>Sales report by customer</h1>
<div class="jumbotron general-information">
	<h5>THIS MONTH</h5>
	<p>3,000 USD</p>
	<div class="compare">
		<div class="insc"><span class="glyphicon glyphicon-triangle-top"></span>32.34%</div>
		<div class="desc"><span class="glyphicon glyphicon-triangle-bottom"></span>0.2%</div>
		<p>COMPARED TO LAST MONTH</p>
	</div>
	<div class="chart-group">
		<div class="form-inline select-chart">
			<h5 class="chart-title">TOP SPENDING CUSTOMER</h5>
			<a class="btn btn-default" data-toggle="tab" href="#colume-chart">Chart</a>
			<a class="btn btn-default" data-toggle="tab" href="#line-chart">Line</a>
			<a class="btn btn-default" data-toggle="tab" href="#pie-chart">Pie</a>
		</div>
		<div class="tab-content">
			<div class="tab-pane active" id="colume-chart">
				<div id="col_chart"></div>
			</div>
			<div class="tab-pane" id="line-chart">
				<div id="line_chart"></div>
			</div>
			<div class="tab-pane" id="pie-chart">
				<div id="pie_chart"></div>
				
			</div>
		</div>
	</div>
</div>
<div class="filter">
	<form method="POST" action="">
		<h4>Time Line</h4>
		<div class="form-inline filter-time-line">
			<div class="form-group">
				<div class="radio-inline"><input type="radio" name="date">Month</div>
				<select id="filterMonth">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</div>
			<div class="form-group">
				<div class="radio-inline"><input type="radio" name="date">Quater</div>
				<select id="filterQuater">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div class="radio-inline form-group"><input type="radio" name="date">Full year</div>
		</div>
		<h4>Year</h4>
		<div class="form-group filter-year">
			<select id="filterYear">
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
			</select>
		</div>
		<h4>Order value</h4>
		<div class="form-inline filter-access-time">
			<div class="form-group form-group-lg">
				<label>Form</label>
				<input class="form-control" type="text" name="fromTime">
				<span>USD</span>
			</div>
			<div class="form-group form-group-lg">
				<label>To</label>
				<input class="form-control" type="text" name="toTime">
				<span>USD</span>
			</div>
		</div>
		<h4>Payment method</h4>
		<div class="form-inline form-group form-group-lg filter-passcard">
			<div class="checkbox-inline checkbox-style">
				<input type="checkbox" name="">Credit card
			</div>
			<div class="checkbox-inline checkbox-style">
				<input type="checkbox" name="">Paypal
			</div>
			<div class="checkbox-inline checkbox-style">
				<input type="checkbox" name="">Stripe
			</div>
			
		</div>
		<div class="form-inline ">
			<input class="btn btn-lg filter-btn" type="submit" name="" value="Fliter">
			<a class="export-pdf"></a>
			<a class="export-excel"></a>
			<a class="export-word"></a>
		</div>
	</form>
</div>
<div class="table-responsive filtered-data">
	<table class="table table-striped data-table width-table">
		<tr>
			<th></th>
			<th>Customer</th>
			<th>Order</th>
			<th>Date</th>
			<th>Quantity</th>
			<th>Sub total</th>
			<th>Tax</th>
			<th>Total</th>
			<th>Discount</th>
			<th>Payment Method</th>
			<th>Payment ID</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Robert Kenny</td>
			<td>DS435SDAF</td>
			<td>20/02/2017</td>
			<td>1</td>
			<td>2000</td>
			<td>200</td>
			<td>2000</td>
			<td>0</td>
			<td>Credit card</td>
			<td>DFS435SDF</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Albert Ho</td>
			<td>REWQ23426</td>
			<td>20/02/2017</td>
			<td>2</td>
			<td>2000</td>
			<td>200</td>
			<td>2000</td>
			<td>10</td>
			<td>Credit card</td>
			<td>NHGT45FVD</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Albert Ho</td>
			<td>REWQ23426</td>
			<td>20/02/2017</td>
			<td>2</td>
			<td>2000</td>
			<td>200</td>
			<td>2000</td>
			<td>10</td>
			<td>Credit card</td>
			<td>NHGT45FVD</td>
		</tr>
	</table>

	<nav class="width-table">
        <ul class="page-direction">
            <li><a id="prev" href="#"><span class="glyphicon glyphicon-chevron-left left-arrow last-page"></span></a>
            </li>
            <li><a id="next" href="#"><span class="glyphicon glyphicon-chevron-right right-arrow"></span></a></li>
        </ul>
        <div class="pagin">
            <label>Page</label>
            <select class="selectpicker" id="pagination-page">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <label> of </label>
            <span id="total-page"> 7 </span>
        </div>


    </nav>
</div>
