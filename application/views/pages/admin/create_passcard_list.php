<div class="data-search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for ZXY">
        <button class="btn search-data" value=""></button>
    </div>
</div>

<div class="table-responsive">
    <h1><?php echo $title; ?></h1>

        <p>Only customers who do not have Pass Card yet appear on this list</p>
        <table class="table table-striped data-table">
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

			<?php foreach ($display_data as $key => $created_pass_card): ?>
				<?php echo '<tr>'; ?>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $created_pass_card['name']; ?></td>
                <td><?php echo $created_pass_card['email']; ?></td>
                <td><?php echo $created_pass_card['phone']; ?></td>
                <td><?php echo $created_pass_card['country']; ?></td>
                <td><?php echo $created_pass_card['city']; ?></td>
                <td><?php echo $created_pass_card['address']; ?></td>
                <td><?php echo $created_pass_card['registered_on']; ?></td>
                <td><a href="<?php echo base_url(); ?>admin/customer_detail">Generate</a></td>
				<?php echo '</tr>'; ?>
			<?php endforeach; ?>

            </tbody>
        </table>
        <nav>
            <ul class="page-direction">
                <li><a id="prev" href="#"><span
                                class="fa fa-angle-left left-arrow last-page"></span></a>
                </li>
                <li><a id="next" href="#"><span class="fa fa-angle-right right-arrow"></span></a></li>
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
