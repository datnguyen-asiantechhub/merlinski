<div class="left-side menu-style">
    <ul class="nav nav-pills nav-stacked sidenav">
        <li><a href="">Home</a> </li>
        <li class="sub-menu">
            <a data-toggle= "collapse" data-target="#products" href="#">Product<span class="glyphicon glyphicon-chevron-right right-arrow"></span></a>
            <ul class="nav nav-stacked collapse" id="products">
               <li><a href="<?php echo base_url().index_page();?>/admin/create_new_product">Create new product</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/view_all_products">View all</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a data-toggle="collapse" data-target="#Order" href="#"> Order <span class="badge badge-style" >33</span> <span class="glyphicon glyphicon-chevron-right right-arrow"></span></a>
            <ul class="nav nav-stacked collapse" id="Order">
                <li><a href="<?php echo base_url().index_page();?>/admin/list_orders_today">Orders today</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/view_all_order">View all</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/cancelled_order">Cancelled vouchers</a></li>
            </ul>
        </li>
        <li><a href="<?php echo base_url().index_page();?>/admin/customer">Customer</a></li>
        <li class="sub-menu">
            <a data-toggle="collapse" data-target="#passcard" href="#"> Pass Card<span class="glyphicon glyphicon-chevron-right right-arrow"></span></a>
            <ul class="nav nav-stacked collapse" id="passcard">
                 <li><a href="<?php echo base_url().index_page();?>/admin/create_passcard_list">Create Pass Card</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/view_all_pass_card">View all</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/lost_passcard">Lost Pass Card</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/inactive_pass_card">Inactive</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a data-toggle="collapse" data-target="#voucher" href="#">Voucher<span class="glyphicon glyphicon-chevron-right right-arrow"></span></a>
            <ul class="nav nav-stacked collapse" id="voucher">
                <li><a href="<?php echo base_url().index_page();?>/admin/create_new_voucher">Create vouchers</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/open_normal_vouchers_list">Open vouchers</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/closed_vouchers_list">Closed vouchers</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/open_secondary_vouchers">Open secondary vouchers</a></li>
                <li><a href="<?php echo base_url().index_page();?>/admin/closed_secondary_vouchers">Closed secondary vouchers</a></li>
                
            </ul>

        </li>
        <li class="sub-menu">
            <a data-toggle="collapse" data-target="#report" href="#">Report<span class=" glyphicon glyphicon-chevron-right right-arrow"></span></a>
            <ul class="nav nav-stacked collapse" id="report">
                <li><a href="<?php ?>">Select1</a></li>
                <li><a href="">Select2</a></li>

            </ul>
        </li>
        <li><a href="">Configuration</a></li>
    </ul>
</div>