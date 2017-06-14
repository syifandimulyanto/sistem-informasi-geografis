<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Auth</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <?php echo backend_asset_css('assets/css/bootstrap.min.css'); ?>
    <?php echo backend_asset_css('assets/css/material-dashboard.css'); ?>
    <?php echo backend_asset_css('assets/css/demo.css'); ?>
    <?php echo backend_asset_css('assets/font-awesome/css/font-awesome.min.css'); ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
</head>
<body>
    <?php echo $contents; ?>        
</body>
</body>
<?php echo backend_asset_js('assets/js/jquery-3.1.1.min.js'); ?>
<?php echo backend_asset_js('assets/js/jquery-ui.min.js'); ?>
<?php echo backend_asset_js('assets/js/bootstrap.min.js'); ?>
<?php echo backend_asset_js('assets/js/material.min.js'); ?>
<?php echo backend_asset_js('assets/js/perfect-scrollbar.jquery.min.js'); ?>
<?php echo backend_asset_js('assets/js/jquery.validate.min.js'); ?>
<?php echo backend_asset_js('assets/js/moment.min.js'); ?>
<?php echo backend_asset_js('assets/js/chartist.min.js'); ?>
<?php echo backend_asset_js('assets/js/jquery.bootstrap-wizard.js'); ?>
<?php echo backend_asset_js('assets/js/bootstrap-notify.js'); ?>
<?php echo backend_asset_js('assets/js/jquery.sharrre.js'); ?>
<?php echo backend_asset_js('assets/js/bootstrap-datetimepicker.js'); ?>
<?php echo backend_asset_js('assets/js/nouislider.min.js'); ?>
<?php echo backend_asset_js('assets/js/jquery.select-bootstrap.js'); ?>
<?php echo backend_asset_js('assets/js/jasny-bootstrap.min.js'); ?>
<?php echo backend_asset_js('assets/js/jquery.tagsinput.js'); ?>
<?php echo backend_asset_js('assets/js/material-dashboard.js'); ?>
<?php echo backend_asset_js('assets/js/demo.js'); ?>

<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();
        setTimeout(function() {
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
