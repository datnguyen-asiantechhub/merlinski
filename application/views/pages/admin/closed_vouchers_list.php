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
                <th>Voucher</th>
                <th>Issued date</th>
                <th>Order</th>
                <th>Off percentage</th>
                <th>Valid to</th>
                <th>Type</th>

            </tr>
            </thead>
            <tbody>

			<?php foreach ($display_data as $key => $closed_vouchers): ?>
				<?php echo '<tr>'; ?>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $closed_vouchers['voucher']; ?></td>
                <td><?php echo $closed_vouchers['issue_date']; ?></td>
                <td><?php echo $closed_vouchers['order']; ?></td>
                <td><?php echo $closed_vouchers['off_percent']; ?></td>
                <td><?php echo $closed_vouchers['valid_to']; ?></td>
                <td><?php echo $closed_vouchers['type']; ?></td>
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
