<h1><?php echo $display_data['contact']['name']; ?></h1>
<ul class="nav nav-tabs">

    <li class="active"><a data-toggle="tab" href="#contact">Contact</a></li>
    <li><a data-toggle="tab" href="#billing">Billing</a></li>
    <li><a data-toggle="tab" href="#pass_card">Pass card</a></li>
    <li><a data-toggle="tab" href="#family_member">Family members</a></li>
    <li><a data-toggle="tab" href="#history">Access history</a></li>
</ul>

<div class="tab-content">
    <div id="contact" class="tab-pane fade in active">
        <h3>Contact information</h3>
        <img src="<?php echo base_url(); ?>application/views/assets/images/<?php echo $display_data['contact']['image']; ?>"/>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-2"><label>Name</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['name']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>Email</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['email']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>Phone</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['phone']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>Country</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['country']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>City</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['city']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>Address</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['address']; ?></div>
            <div class="clearfix"></div>
            <div class="col-sm-2"><label>Postal code</label></div>
            <div class="col-sm-10"><?php echo $display_data['contact']['postal_code']; ?></div>
        </div>

    </div>
    <div id="billing" class="tab-pane fade">
        <h3>Billing information</h3>
        <h4>Billing address</h4>
        <div class="flex-container">
            <div class="flex-item">
                <label>Country</label>
            </div>
            <div class="flex-item item2">
				<?php echo $display_data['billing_information']['country']; ?>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <label>City</label>
            </div>
            <div class="flex-item item2">
				<?php echo $display_data['billing_information']['city']; ?>
            </div>
        </div>
        <div class="flex-container">
            <div class="flex-item">
                <label>Address</label>
            </div>
            <div class="flex-item item2">
				<?php echo $display_data['billing_information']['address']; ?>
            </div>
        </div>
        <h4>Payment method</h4>
		<?php foreach ($display_data['payment_method'] as $payment): ?>
            <div class="flex-container">
                <span class="<?php if ($payment['active'] == '1'): echo 'active'; endif; ?>"></span>
				<?php echo $payment['payment_method_cardnumber']; ?>
                <div class="flex-container">
                    <div class="flex-item">
                        <label>Name on</label>
                    </div>
                    <div class="flex-item item2">
						<?php echo $payment['payment_method_name']; ?>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="flex-item">
                        <label>Expiry on card</label>
                    </div>
                    <div class="flex-item item2">
						<?php echo $payment['payment_method_expired_date']; ?>
                    </div>
                </div>

            </div>
		<?php endforeach; ?>
    </div>
    <div id="pass_card" class="tab-pane fade">
        <h3>Pass Card</h3>
        <p>Pass Card serial number is <?php echo $display_data['pass_card_data']['pass_card_serial_no']; ?></p>
        <p>Issued on <?php echo $display_data['pass_card_data']['expried_date']; ?></p>
    </div>
    <div id="family_member" class="tab-pane fade">
        <h3>Family members</h3>
        <div class="table-responsive">
            <table class="table">
                <table class="table data-table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date of birth</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

					<?php
					foreach ($display_data['family_members_list'] as $key => $family_members): ?>
						<?php echo '<tr>'; ?>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $family_members['name']; ?></td>
                        <td><?php echo $family_members['email']; ?></td>
                        <td><?php echo $family_members['date_of_birth']; ?></td>
                        <td><?php echo $family_members['country']; ?></td>
                        <td><?php echo $family_members['city']; ?></td>
                        <td><?php echo $family_members['address']; ?></td>
                        <td><?php echo $family_members['phone']; ?></td>
                        <td><a class="detail" href="<?php echo base_url(); ?>admin/customer_detail"><span></span></a></td>
						<?php echo '</tr>'; ?>
					<?php endforeach; ?>

                    </tbody>
                </table>
            </table>
        </div>
    </div>
    <div id="history" class="tab-pane fade">
        <h3>Access history</h3>
        <div class="table-responsive">
            <table class="table">
                <table class="table">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Place</th>
                        <th>Status</th>
                        <th>Date time</th>
                    </tr>
                    </thead>
                    <tbody>

					<?php foreach ($display_data['access_history'] as $key => $family_members): ?>
						<?php echo '<tr>'; ?>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $family_members['place']; ?></td>
                        <td><?php echo $family_members['status']; ?></td>
                        <td><?php echo $family_members['date']; ?></td>
						<?php echo '</tr>'; ?>
					<?php endforeach; ?>

                    </tbody>
                </table>
            </table>
        </div>
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

</div>