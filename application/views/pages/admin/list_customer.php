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
    <div class="table-responsive">
        <table class="table">
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

                <?php foreach ($display_data as $customers): ?>
                    <?php echo '<tr>';?>
                    <td><?php echo $customers['id'];?></td>
                    <td><?php echo $customers['name'];?></td>
                    <td><?php echo $customers['email'];?></td>
                    <td><?php echo $customers['phone'];?></td>
                    <td><?php echo $customers['country'];?></td>
                    <td><?php echo $customers['city'];?></td>
                    <td><?php echo $customers['address'];?></td>
                    <td><?php echo $customers['registered_on'];?></td>
                    <td><a href="<?php echo base_url();?>admin/customer_detail">icon go to detail</a></td>
                    <?php echo '</tr>';?>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination">

            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>

        </ul>
        <div class="clearfix"></div>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
