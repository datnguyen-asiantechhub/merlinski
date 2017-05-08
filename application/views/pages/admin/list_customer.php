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
