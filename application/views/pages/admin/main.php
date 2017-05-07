<!DOCTYPE html>
<meta lang="en" />
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1.5" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/libraries/bootstrap/css/bootstrap.min.css" />
    <!-- Optional theme -->
    <link rel="stylesheet" href="<?php echo base_url();?>application/libraries/bootstrap/css/bootstrap-theme.min.css" />
    <!-- Latest compiled and minified JavaScript -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
   
    <meta content="text/html" charset="utf-8" />   
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/styles.css"/>
    <link rel="stylesheet" href="<?php echo base_url();?>application/views/assets/css/select2.min.css"/>
</head>
<header>
<?php $this->load->view('sasscompile/build'); ?>
<div class="container">
    <div class="row">
        
        <div id="logo" class="col-sm-3">
            <img src="<?php echo base_url();?>application/views/assets/images/logo.jpg" />
        </div>
        <div class="col-sm-9 pull-right">
            <p>Welcome Administrator</p>
        </div>   
    </div>
</div>
</header>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <?php $this->load->view('templates/admin_leftmenu');?>
        </div>
        <div class="col-sm-9">
            <?php $this->load->view($subview);?>
        </div>
    </div>
</div>
<footer>
    <p>Copyright © 2017 FallsCreek. All rights reserved.</p>
</footer>
<body>
    
</body>
<script type="text/javascript" src="<?php echo base_url();?>application/libraries/bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/libraries/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/libraries/javascript/select2/select2.full.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/libraries/javascript/js.js"></script>
</html>