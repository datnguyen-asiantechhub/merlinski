<div class="row">
	<div class="col-sm-6">
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="col-sm-6">
		<form>
			<div class="form-group">

				<input type="email" class="form-control" id="search">
			</div>
			<button type="submit" id="search_btn" class="btn btn-default">Search button</button>
		</form>
	</div>
	<p>Used vouchers are not displayed in this list</p>
	<div class="clearfix"></div>
	<p></p>
	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Voucher</th>
				<th>Issued date</th>
				<th>Order</th>
				<th>Off percentage</th>
				<th>Valid to</th>
				<th>Type</th>

			</tr>
			</thead>
			<tbody>

			<?php foreach ($display_data as $key=>$normal_vouchers): ?>
				<?php echo '<tr>';?>
				<td><?php echo $key+1;?></td>
				<td><?php echo $normal_vouchers['voucher'];?></td>
				<td><?php echo $normal_vouchers['issue_date'];?></td>
				<td><?php echo $normal_vouchers['order'];?></td>
				<td><?php echo $normal_vouchers['off_percent'];?></td>
				<td><?php echo $normal_vouchers['valid_to'];?></td>
				<td><?php echo $normal_vouchers['type'];?></td>
				<?php echo '</tr>';?>
			<?php endforeach; ?>

			</tbody>
		</table>
	</div>
	<select id="pagination-select">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
	</select>
	<ul class="pager">
		<li><a href="#"><i class="fa  fa-angle-left"></i></a></li>
		<li><a href="#"><i class="fa  fa-angle-right"></i></a></li>
	</ul>
</div>
