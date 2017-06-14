<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manage</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <?php echo backend_asset_css('assets/css/bootstrap.min.css'); ?>
    <?php echo backend_asset_css('assets/css/material-dashboard.css'); ?>
    <?php echo backend_asset_css('assets/css/demo.css'); ?>
    <?php echo backend_asset_css('assets/font-awesome/css/font-awesome.min.css'); ?>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />

    <style type="text/css">
        .perfect-scrollbar-on .sidebar .sidebar-wrapper, .sidebar .sidebar-wrapper, .perfect-scrollbar-on .main-panel, .main-panel {
            overflow: visible!important;
        }
    </style>

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
    <?php //echo backend_asset_js('assets/js/jquery-jvectormap.js'); ?>
    <?php echo backend_asset_js('assets/js/nouislider.min.js'); ?>
    <?php echo backend_asset_js('assets/js/jquery.datatables.js'); ?>
    <?php echo backend_asset_js('assets/js/sweetalert2.js'); ?>
    <?php echo backend_asset_js('assets/js/jquery.select-bootstrap.js'); ?>
    <?php echo backend_asset_js('assets/js/jasny-bootstrap.min.js'); ?>
    <?php echo backend_asset_js('assets/js/fullcalendar.min.js'); ?>
    <?php echo backend_asset_js('assets/js/jquery.tagsinput.js'); ?>
    <?php echo backend_asset_js('assets/js/material-dashboard.js'); ?>
    <?php echo backend_asset_js('assets/js/demo.js'); ?>

    <script type="text/javascript">
        var backend_url         = '<?php echo backend_url(); ?>';
        var backend_asset_url   = '<?php echo backend_asset_url(); ?>';
        function setFormValidation(id) {
            $(id).validate({
                errorPlacement: function(error, element) {
                    $(element).parent('div').addClass('has-error');
                }
            });
        }

        function confirmDelete(e)
        {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function() {
                window.location.href = e.attr('href');
            });
            return false;
        }
    </script>

</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="azure" data-image="<?php echo backend_asset_url('assets/img/sidebar-1.jpg'); ?>">
            <div class="logo">
                <a href=# class="simple-text">
                    Dashboard SIG
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    Ct
                </a>
            </div>
            <?php $this->load->view('layout/backend/partials/sidebar'); ?>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="<?php //echo backend_url('position'); ?>"> Position </a> -->
                    </div>
                </div>
            </nav>
            <?php echo $contents; ?>
        </div>
    </div>
</body>
</html>