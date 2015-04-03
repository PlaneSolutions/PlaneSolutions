<?php
$login = array(
    'name'	=> 'login',
    'id'	=> 'login',
    'value' => set_value('login'),
    'maxlength'	=> 80,
    'size'	=> 30,
    'class' => 'form-control',
    'placeholder' => 'Username',
    'style' => 'border: none;padding-left: 33px !important;'
);
if ($login_by_username AND $login_by_email) {
    $login_label = 'Email or Username';
} else if ($login_by_username) {
    $login_label = 'Login';
} else {
    $login_label = 'Email';
}
$password = array(
    'name'	=> 'password',
    'id'	=> 'password',
    'size'	=> 30,
    'class'=>'form-control',
    'placeholder'=>'Password',
    'style' => 'border: none;padding-left: 33px !important;'
);
$login_button = array(
    'name' => 'submit',
    'value' => 'Login',
    'class' => 'btn blue',
    'style' => 'margin-left: 75px;'
);
$remember = array(
    'name'	=> 'remember',
    'id'	=> 'remember',
    'value'	=> 1,
    'checked'	=> set_value('remember'),
    'style' => 'margin:0;padding:0',
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
    <!-- BEGIN LOGIN FORM -->
    <?php echo form_open($this->uri->uri_string()); ?>
    <h3 style="text-align: center;margin-bottom: 25px;">Login</h3>
    <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span>Enter any username and password.</span>
    </div>
    <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <div class="controls">
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Username </label>
                <div class="input-group">
                    <li class="glyphicon glyphicon-user" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                    <?php echo form_input($login); ?>
                </div>
                <div><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></div>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Password</label>
                <div class="input-group">
                    <li class="glyphicon glyphicon-lock" style="color: #ccc;display: block !important;position: absolute !important;z-index: 999;margin: 9px 2px 4px 10px;width: 16px;height: 16px;font-size: 16px;text-align: center;"></li>
                    <?php echo form_password($password); ?>
                </div>
                <div><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></div>
            </div>
        </div>
        <div class="form-group">
            <?php echo form_checkbox($remember); ?>
            <?php echo form_label('Remember me', $remember['id']); ?>
        </div>
        <div class="form-actions"><?php echo form_submit($login_button); ?></div>
    </div>
    <div class="forget-password">
        <h4>Forgot your password ?</h4>
        <p>
            no worries, click <?php echo anchor('/auth/forgot_password/', 'Here'); ?>
            to reset your password.
        </p>
    </div>
    <div class="create-account">
        <p>
            Don't have an account yet ?&nbsp;
            <?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register Here'); ?>
        </p>
    </div>
    <?php echo form_close(); ?>
    <!-- END LOGIN FORM -->
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