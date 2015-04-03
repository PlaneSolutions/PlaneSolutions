<?php echo $message; ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/bootstrap-responsive.min.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/style-metro.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/style.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/style-responsive.css')?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('public/css/themes/default.css')?>" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo base_url('public/css/select2_metro.css')?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo base_url('public/css/pages/login-soft.css')?>" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <style>
        .checker{
            display: inline-block;
            position: relative;
            top: 3px;
            margin-right: 5px;
        }
    </style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <!-- PUT YOUR LOGO HERE -->
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">

</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2014 &copy; Login Form
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url('public/js/jquery-1.11.2.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/jquery-migrate-1.2.1.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('public/js/jquery-ui-1.10.1.custom.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/twitter-bootstrap-hover-dropdown.min.js')?>" type="text/javascript" ></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url('public/js/excanvas.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/respond.min.js')?>" type="text/javascript"></script>
<![endif]-->
<script src="<?php echo base_url('public/js/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/jquery.cookie.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/jquery.uniform.min.js')?>" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url('public/js/jquery.validate.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/jquery.backstretch.min.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('public/js/select2.min.js')?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url('public/js/app.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/js/login-soft.js')?>" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>