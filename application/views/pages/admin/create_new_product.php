<h3><?php echo $title; ?></h3>
<div class="new-product">
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
						<td><div><input class="form-control base-price" type="text" name="price"> USD </div></td>
					</tr>
					<tr>
						<th></th>
						<td><input class="form-control btn btn-warning btn-md" type="submit" name="" value="Create"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="tab-pane" id="advance">
			<form method="POST" action="">
				<table class="table">
					<tr>
						<th>Name</th>
						<td><input class="form-control" type="text" name="Name"></td>
					</tr>
					<tr>
						<th>Code</th>
						<td><input class="form-control" type="text" name="Name"></td>
					</tr>
					<tr>
						<th>Description</th>
						<td><input class="form-control" type="text" name="Name"></td>
					</tr>
					<tr>
						<th>Base price</th>
						<td><input class="form-control" type="text" name="Name"></td>
					</tr>
					<tr>
						<th></th>
						<td><input class="form-control btn btn-warning btn-md" type="submit" name="" value="Create"></td>
					</tr>
				</table>
			</form>
		</div>
</div>