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
				<th></th>

			</tr>
			</thead>
			<tbody>

			<?php foreach ($display_data as $key=>$inactive_passcard): ?>
				<?php echo '<tr>';?>
				<td><?php echo $key+1;?></td>
				<td><?php echo $inactive_passcard['serial'];?></td>
				<td><?php echo $inactive_passcard['customer'];?></td>
				<td><?php echo $inactive_passcard['issue_date'];?></td>
				<td><?php echo $inactive_passcard['last_use'];?></td>
				
                <td>
                    <a href="#" data-toggle="modal" data-target="#myModal<?php echo $key+1;?>">Activate</a>
                    <div id="myModal<?php echo $key+1;?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Remove</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt risus eget semper feugiat. Duis sit amet aliquam lacus. Nulla tellus massa, gravida at risus sed, interdum semper sapien.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Remove</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                </div>
                            </div>

                        </div>
                    </div>
                    <a href="<?php echo base_url();?>admin/pass_card_detail">Icon detail</a>
                </td>
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
