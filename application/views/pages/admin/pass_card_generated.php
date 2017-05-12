<form>
<h1><?php echo $title; ?></h1>
<p>New Pass Card <span class="number_generated"><?php echo $number;?></span> has been generated and associated to customer <span class="customer_generated"><?php echo $customer;?></span></p>
<img src="<?php echo base_url();?>application/views/assets/images/admin/image_passcard_generated.jpg"/>
<p>Please insert a empty card to writter and click Write button</p>
<input class="btn btn-warning btn-lg" type="submit" value="Write">	
</form>