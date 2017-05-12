<div class="data-search">
  <form>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search for ZXY">
      <button class="btn search-data" value=""></button>
    </div>
  </form>
</div>
<form>
<div class="table-responsive">
  <h1><?php echo $title; ?></h1>
  <table class="table table-striped data-table">
    <tr>
      <th>No.</th>
      <th>Name</th>
      <th>Status</th>
      <th>Created date</th>
      <th>Type</th>
      <th>Uses times</th>
      <th>Price</th>
      <th>Validaity</th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <?php foreach ($display_data as $key => $products): ?>
    <tr>
      <?php echo '<tr>'; ?>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $products['name']; ?></td>
            <td><?php echo $products['status']; ?></td>
            <td><?php echo $products['created_date']; ?></td>
            <td><?php echo $products['type']; ?></td>
            <td><?php echo $products['use_times']; ?></td>
            <td><?php echo $products['price']; ?></td>
            <td><?php echo $products['validaity']; ?></td>
            <td>
                <a class="detail" href="<?php echo base_url(); ?>admin/view_product_detail"><span></span></a>
            </td>
            <td>
                <a class="edit detail" href="<?php echo base_url(); ?>admin/customer_detail"><i class="fa fa-pencil"></i></a>
            </td>
            <td>
                <a class="remove detail" href="#" data-toggle="modal" data-target="#myModal<?php echo $key + 1; ?>"><span></span></a>
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
                                    <button type="button" class="btn btn-primary btn-warning btn-lg">Remove</button>
                                    <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>

                                </div>
                            </div>

                        </div>
                    </div>
            </td>
            </td>
      <?php echo '</tr>'; ?>
    </tr>
    <?php endforeach; ?>
  </table>
  <nav>
  <ul class="page-direction">
        <li><a id="prev" href="#"><span class="fa fa-angle-left left-arrow last-page"></span></a></li>
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
</form>