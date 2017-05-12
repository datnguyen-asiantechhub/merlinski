<div class="container"><h1><?php echo $display_data['basic']['name'];?></h1></div>
	 <div id="exTab1" class="container">	
		<ul  class="nav nav-tabs tabs-panel">
			<li class="active">
        		<a  href="#basic" data-toggle="tab">Basic</a>
			</li>
			<li>
				<a href="#advance" data-toggle="tab">Advance</a>
			</li>
			<li>
				<a href="#pricing" data-toggle="tab">Pricing model</a>
			</li>
			<li>
				<a href="#media" data-toggle="tab">Media</a>
			</li>
			<li>
				<a href="#extra" data-toggle="tab">Extra</a>
			</li>
		</ul>

		<div class="tab-content">
			<div class="tab-pane active" id="basic">
				<form method="POST" action="">
					<h3>Contact information</h3>
					<div class="form-group row">
						<div class="control-label col-sm-3">
							Name
						</div>
						<div class="control-group col-sm-9">
							<?php echo $display_data['basic']['name'];?>
						</div>
					</div>
					<div class="form-group row">
						<div class="control-label col-sm-3">
							Code
						</div>
						<div class="control-group col-sm-9">
							<?php echo $display_data['basic']['code'];?>
						</div>
					</div>
					<div class="form-group row">
						<div class="control-label col-sm-3">
							Description
						</div>
						<div class="control-group col-sm-9">
							<?php echo $display_data['basic']['description'];?>
						</div>
					</div>	
					<div class="form-group row">
						<div class="control-label col-sm-3">
							Base price
						</div>
						<div class="control-group col-sm-9">
							<p><?php echo $display_data['basic']['base_price'];?></p>
						</div>
					</div>					
				</form>
          
			</div>
			<div class="tab-pane" id="advance">
				<div class="form-group row">
					<div class="control-label col-sm-3">
						Ticket type
					</div>
					<div class="control-group col-sm-9">
						<?php echo $display_data['advance']['ticket_type'];?>
					</div>
				</div>
				<div class="form-group row">
					<div class="control-label col-sm-3">
						Valid from
					</div>
					<div class="control-group col-sm-9">
						<?php echo $display_data['advance']['valid_from'];?>
					</div>
				</div>
				<div class="form-group row">
					<div class="control-label col-sm-3">
						Valid to
					</div>
					<div class="control-group col-sm-9">
						<?php echo $display_data['advance']['valid_to'];?>
					</div>
				</div>
				<div class="form-group row">
					<div class="control-label col-sm-3">
						Use times
					</div>
					<div class="control-group col-sm-9">
						<?php echo $display_data['advance']['use_times'];?>
					</div>
				</div>
				<div class="form-group row">
					<div class="control-label col-sm-3">
						Number of seat
					</div>
					<div class="control-group col-sm-9">
						<?php echo $display_data['advance']['number_of_seats'];?>
					</div>
				</div>
         
			</div>
       		<div class="tab-pane" id="pricing">
       			<h3>Time</h3>
       			<?php foreach($display_data['pricing']['time'] as $index=>$time ):?>
       				
       				<div class="form-group row">
       					<div class="col-sm-3 control-label">
       						<?php echo $index;?>
       					</div>
       					<div class="col-sm-9 control-group">
       						<?php echo $time;?>
       					</div>
       				</div>
       			<?php endforeach;?>
       			<h3>Remaining seat</h3>
          		<?php foreach($display_data['pricing']['remaining_seat'] as $index=>$time ):?>
       				
       				<div class="form-group row">
       					<div class="col-sm-3 control-label">
       						<?php echo $index;?>
       					</div>
       					<div class="col-sm-9 control-group">
       						<?php echo $time;?>
       					</div>
       				</div>
       			<?php endforeach;?>
			</div>
			<div class="tab-pane" id="media">
				<h3>Image</h3>
				<div class="row">
					<?php foreach($display_data['media']['image'] as $index=>$image ):?>
					<div class="col-sm-3">
						<img src="<?php echo base_url();?>application/views/assets/images/admin/<?php echo $image;?>"/>
					</div>
					<?php endforeach;?>
				</div>
				<h3>Video</h3>
				<div class="row">
					<?php foreach($display_data['media']['video'] as $index=>$video ):?>
					<div class="col-sm-3">
						<img src="<?php echo base_url();?>application/views/assets/images/admin/<?php echo $video;?>"/>
					</div>
					<?php endforeach;?>
				</div>
			</div>
			<div class="tab-pane" id="extra">
			<h3>Related products</h3>
			<table class="table table-striped data-table add-table">
				<thead>
	            <tr>
	                <th>No.</th>
	                <th>Ticket</th>
	                <th>Price</th>
	                <th>Use times</th>
	                <th>Created on</th>
	                <th></th>
	            </tr>
	            </thead>
	             <tbody>
					<?php foreach ($display_data['related_products'] as $key => $related_products): ?>
						<?php echo '<tr>'; ?>
		                <td><?php echo $key + 1; ?></td>
		                <td><?php echo $related_products['ticket']; ?></td>
		                <td><?php echo $related_products['price']; ?></td>
		                <td><?php echo $related_products['use_times']; ?></td>
		                <td><?php echo $related_products['created_on']; ?></td>		 
		                <td><a href="#" class="detail"><span></span></a></td>               
						<?php echo '</tr>'; ?>
					<?php endforeach; ?>

		            </tbody>
			</table>
			</div>
		</div>
  </div>
