<h1>Access report</h1>
<div class="jumbotron">
	<h5>THIS MONTH</h5>
	<p class="report-time">1500 times</p>
	<div class="compare">

	</div>
	<div class="chart-group">
		
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
		<h4>Access Time</h4>
		<div class="form-inline filter-access-time">
			<div class="form-group form-group-lg">
				<label>Form</label>
				<input class="form-control" type="text" name="fromTime">
			</div>
			<div class="form-group form-group-lg">
				<label>To</label>
				<input class="form-control" type="text" name="toTime">
			</div>
		</div>
		<h4>Pass Card</h4>
		<div class="form-inline form-group form-group-lg filter-passcard">
			<input class="form-control" type="text" name="passCard">
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
	<table class="table table-striped data-table">
		<tr>
			<th></th>
			<th>Attraction</th>
			<th>Date</th>
			<th>Time</th>
			<th>Pass card</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Water Park</td>
			<td>20/02/2017</td>
			<td>23:12:00</td>
			<td>541asdf7612sas26fdsf4325</td>
		</tr>
	</table>
	<nav>
        <ul class="page-direction">
            <li><a id="prev" href="#"><span class="glyphicon glyphicon-chevron-left left-arrow last-page"></span></a>
            </li>
            <li><a id="next" href="#"><span class="glyphicon glyphicon-chevron-right right-arrow"></span></a></li>
        </ul>
        <div class="pagin">
            <label>Page</label>
            <select class="selectpicker" id="pagination-page">
                <option value="1">1</option>
                <option value="2">3</option>
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
