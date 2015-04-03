<?php
if ($use_username) {
    $username = array(
        'name'	=> 'username',
        'id'	=> 'username',
        'value' => set_value('username'),
        'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
        'size'	=> 30,
        'class' => 'form-control',
        'placeholder' => 'USERNAME',
        'style' => 'border: none;padding-left: 33px !important;'
    );
}
$email = array(
    'name'	=> 'email',
    'id'	=> 'email',
    'value'	=> set_value('email'),
    'maxlength'	=> 80,
    'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'EMAIL',
    'style' => 'border: none;padding-left: 33px !important;'
);
$password = array(
    'name'	=> 'password',
    'id'	=> 'password',
    'value' => set_value('password'),
    'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
    'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'PASSWORD',
    'style' => 'border: none;padding-left: 33px !important;'
);
$confirm_password = array(
    'name'	=> 'confirm_password',
    'id'	=> 'confirm_password',
    'value' => set_value('confirm_password'),
    'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
    'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'CONFIRM PASSWORD',
    'style' => 'border: none;padding-left: 33px !important;'
);
$register_button = array(
    'class' => 'btn blue',
    'style' => 'margin-left: 75px;'
);
$captcha = array(
    'name'	=> 'captcha',
    'id'	=> 'captcha',
    'maxlength'	=> 8,
);
?>
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
    <!-- BEGIN REGISTER FORM -->
    <?php echo form_open($this->uri->uri_string()); ?>
    <h3 style="text-align: center;">Sign Up</h3>
    <p style="text-align: center;margin-bottom: 25px;">Enter your account details below:</p>
    <?php if ($use_username) { ?>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
            <?php echo form_error($username['name'],'<div style="position: relative;  left: 210px;top: -5px;margin: 0px;padding: 7px;" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>','</div>'); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
            <div class="input-group">
                <li class="glyphicon glyphicon-font" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                <?php echo form_input($username); ?>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Full Name</label>
        <div class="controls">
            <?php echo form_error($email['name'],'<div style="position: relative;left: 210px;top: -5px;margin: 0px;padding: 7px;" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>','</div>'); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
            <div class="input-group">
                <li class="glyphicon glyphicon-envelope" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                <?php echo form_input($email); ?>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
            <?php echo form_error($password['name'],'<div style="position: relative;left: 210px;top: -5px;margin: 0px;padding: 7px;" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>','</div>'); ?>
            <div class="input-group">
                <li class="glyphicon glyphicon-lock" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                <?php echo form_password($password); ?>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
            <?php echo form_error($confirm_password['name'],'<div style="position: relative;left: 210px;top: -5px;margin: 0px;padding: 7px;" class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>','</div>'); ?>
            <div class="input-group">
                <li class="glyphicon glyphicon-lock" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                <?php echo form_password($confirm_password); ?>
            </div>
        </div>
    </div>
    <?php echo form_submit($register_button,'register', 'Register'); ?>
    <?php echo form_close(); ?>
    <!-- END REGISTER FORM -->
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