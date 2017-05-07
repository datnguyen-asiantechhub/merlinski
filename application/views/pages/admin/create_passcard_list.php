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
	<p>Only customers who do not have Pass Card yet appear on this list</p>
	<div class="clearfix"></div>
	<p></p>
	<div class="table-responsive">
		<table class="table">
			<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Country</th>
				<th>City</th>
				<th>Address</th>
				<th>Registered on</th>
				<th></th>
			</tr>
			</thead>
			<tbody>

			<?php foreach ($display_data as $key=>$created_pass_card): ?>
				<?php echo '<tr>';?>
				<td><?php echo $key+1;?></td>
				<td><?php echo $created_pass_card['name'];?></td>
				<td><?php echo $created_pass_card['email'];?></td>
				<td><?php echo $created_pass_card['phone'];?></td>
				<td><?php echo $created_pass_card['country'];?></td>
				<td><?php echo $created_pass_card['city'];?></td>
				<td><?php echo $created_pass_card['address'];?></td>
				<td><?php echo $created_pass_card['registered_on'];?></td>
				<td><a href="<?php echo base_url();?>admin/customer_detail">Generate</a></td>
				<?php echo '</tr>';?>
			<?php endforeach; ?>

			</tbody>
		</table>
	</div>
	<nav aria-label="Page navigation">
		<ul class="pagination">

			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>

		</ul>
		<div class="clearfix"></div>
		<ul class="pagination">
			<li>
				<a href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
				</a>
			</li>
			<li>
				<a href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
			</li>
		</ul>
	</nav>
</div>
