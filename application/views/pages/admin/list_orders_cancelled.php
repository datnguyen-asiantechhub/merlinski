<div class="data-search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for ZXY">
        <button class="btn search-data" value=""></button>
    </div>
</div>
<div class="table-responsive">
    <h1><?php echo $title; ?></h1>
        <table class="table table-striped data-table">
            <thead>
            <tr>
                <th>No.</th>
                <th>Order No</th>
                <th>Customer</th>
                <th>Date time</th>
                <th>Cancelled date</th>
                <th>Reason</th>
                <th>Value</th>
                <th>Payment method</th>
                <th></th>

            </tr>
            </thead>
            <tbody>

			<?php foreach ($display_data as $key => $list_orders_cancelled): ?>
				<?php echo '<tr>'; ?>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $list_orders_cancelled['order_no']; ?></td>
                <td><?php echo $list_orders_cancelled['customer']; ?></td>
                <td><?php echo $list_orders_cancelled['date_time']; ?></td>
                <td><?php echo $list_orders_cancelled['cancel_date']; ?></td>
                <td><?php echo $list_orders_cancelled['reason']; ?></td>
                <td><?php echo $list_orders_cancelled['value']; ?></td>
                <td><?php echo $list_orders_cancelled['payment_method']; ?></td>
                <td><a class="detail" href="<?php echo base_url(); ?>admin/order_detail"><span></span></a></td>
				<?php echo '</tr>'; ?>
			<?php endforeach; ?>

            </tbody>
        </table>
        <nav>
            <ul class="page-direction">
                <li><a id="prev" href="#"><span
                                class="glyphicon glyphicon-chevron-left left-arrow last-page"></span></a>
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
