<div class="data-search">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search for ZXY" id="keyword">
        <input type="submit" class="btn search-data" value="" id="sumit_form">
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
                <th></th>

            </tr>
            </thead>
            <tbody>

			<?php foreach ($display_data as $key => $inactive_passcard): ?>
				<?php echo '<tr>'; ?>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $inactive_passcard['serial']; ?></td>
                <td><?php echo $inactive_passcard['customer']; ?></td>
                <td><?php echo $inactive_passcard['issue_date']; ?></td>
                <td><?php echo $inactive_passcard['last_use']; ?></td>

                <td>
                    <a href="#" data-toggle="modal" data-target="#myModal<?php echo $key + 1; ?>">Activate</a>
                    <div id="myModal<?php echo $key + 1; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Remove</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tincidunt risus
                                        eget semper feugiat. Duis sit amet aliquam lacus. Nulla tellus massa, gravida at
                                        risus sed, interdum semper sapien.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Remove</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                </div>
                            </div>

                        </div>
                    </div>
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
