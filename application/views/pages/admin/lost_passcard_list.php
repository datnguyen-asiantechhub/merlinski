<div class="data-search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for ZXY">
        <button class="btn search-data" value=""></button>
    </div>
</div>
<div class="table-responsive">
    <h1><?php echo $title; ?>/h1>
        <table class="table table-striped data-table">
            <thead>
            <tr>
                <th>No.</th>
                <th>Serial</th>
                <th>Customer</th>
                <th>Issue Date</th>
                <th>Last use</th>
                <th>Lost date</th>
                <th></th>

            </tr>
            </thead>
            <tbody>

			<?php foreach ($display_data as $key => $lost_pass_card): ?>
				<?php echo '<tr>'; ?>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $lost_pass_card['serial']; ?></td>
                <td><?php echo $lost_pass_card['customer']; ?></td>
                <td><?php echo $lost_pass_card['issue_date']; ?></td>
                <td><?php echo $lost_pass_card['last_use']; ?></td>
                <td><?php echo $lost_pass_card['lost_date']; ?></td>

                <td><a href="<?php echo base_url(); ?>admin/pass_card_generated">Re-generate</a>
                    <a href="<?php echo base_url(); ?>admin/pass_card_detail">Icon detail</a>
                </td>
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
