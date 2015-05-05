<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('public/js/googleapis.js')?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap.min.js')?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        function addcampaing(){
            $("#new-campaing").parent("div").html("<div id='remove-campaing' class='thumbnail' style='padding: 10px;'> <div onclick='removecampaing()' style='float: right;color: blue;cursor: pointer;cursor: hand;'>Cancel</div><h3 style='margin: 86px 0px 25px 0px;font-size: 20px;text-align: center;'>NEW CAMPAIGN</h3> <form method='post' accept-charset='utf-8' action=" + '<?php echo site_url('campaing/add'); ?>' + "><input style='margin-bottom: 10px;' class='form-control' onkeyup='check()' type='text' name='title' placeholder='Enter A Campaing Title'> <select onchange='check()' style='margin-bottom: 10px;' class='form-control' name='campaing_type'> <option value='0'>-- Campaing Type --</option> <option value='Magazine'>Magazine </option> <option value='Newspaper'>Newspaper </option> <option value='Print Advertisement'>Print Advertisement </option> <option value='Catalouge'>Catalouge </option> <option value='Bussines Card'>Bussines Card</option> </select> <input id='submit_campaing' style='width: 100%;border-radius: 5px;margin: 10px 0px 10px 0px;' type='submit' disabled='disabled' class='btn' name='Add' value='Submit'> </form> </div> ");
        }
        function removecampaing(){
            $("#remove-campaing").parent("div").html("<div id='new-campaing' onclick='addcampaing()' style='width: 100%;cursor: pointer;cursor: hand;'><div href='' class='thumbnail' style='text-decoration: none;background-color: #f5f5f5'><div class='glyphicon glyphicon-plus' style='color: #727272;width: 100%;margin: 85px 0px 85px 0px;text-align: center;font-size: 60px;'></div><p style='padding: 10px 10px 30px 10px;margin: 0px;text-align: center;color: #727272;'>NEW CAMPAING</p></div></div>");
        }

        function check(){
            var $empty = false;

            if(($('#remove-campaing form input').val() !== '')&&($('#remove-campaing form select').val() !== '0')){
                $empty = true;
            }

            if($empty){
                $('#submit_campaing').removeAttr('disabled').removeClass('btn-block').addClass('btn-info');
            }
            else{
                $('#submit_campaing').attr('disabled', 'disabled').removeClass('btn-info');
            }
        }
    </script>
    <style>
        html, body{
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            text-transform: uppercase;
        }
        .user-menu{
            top: 57px;
            left: 1048px;
            border-radius: 0px;
            text-align: right;
            width: 302px;
            display: none;
        }
        .user-menu li{
            line-height: 40px;
            height: 40px;
        }
        .user-menu li a{
            display: block;
            text-decoration: none!important;
            color: #46484d;
            padding: 0 40px;
            line-height: 40px;
        }
        #user-name{
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>
</head>
<body>
<header style="border-bottom: 1px solid #dcd9d5;height: 60px;background: #fff;position: relative;z-index: 2;">
    <div id="logo" style="height: 60px;float: left;padding: 0 10px 0 20px;overflow: hidden;">
        <span style="position: relative;top: 25px;font-size: 20px;"><a href="<?php echo site_url('main')?>" style="text-decoration: none;color: inherit;"><img  alt="GuidAR Logo" src="<?php echo base_url('public/img/logog.jpg')?>" style="width: 110px;height: 50px;position: relative;top: -20px;"></a></span>
    </div>
    <h1 style="font-size: 13px;text-transform: uppercase;font-size: 1.3rem;color: #82807d;display: inline-block;margin: 32px 0 0 0;vertical-align: middle;">Creator</h1>
    <div style="padding-right: 25px;position: absolute;top: 0px;right: 0;text-align: right;display: block;width: 25%;height: 60px;">
        <div style="cursor: pointer;margin: 20px 10px 0px 15px;color: #46484d;width: 300px;line-height: 30px;padding: 5px;">
            <div id="user-name" class="dropdown-toggle" data-toggle="dropdown">
                <span data-bind="label"><?php echo $username; ?></span>&nbsp;<span class="caret"></span>
            </div>
        </div>
    </div>
</header>
<script>
    $( "#user-name" ).click(function() {
        $( ".user-menu" ).toggle();
    });
</script>
<div class="outer-container" style="overflow: hidden;">
    <div class="overview" style="width: 75%;float: left;padding: 30px 25px 10px 25px;">
        <div class="title" style="/*margin: 30px 20px 0px 20px;*/border-bottom: 1px solid #dcd9d5;line-height: 50px;">
            <b>CAMPAING OVERVIEW</b>
            <div style="display: inline-block;cursor: pointer;cursor: hand;">
                <span style="margin-left: 2em;background-color: #02b4ca;width: 10px;height: 10px;margin-right: 5px;display: inline-block;"></span>
                <span>DRAFT</span>
                <span  style="background-color: lightgrey;border-radius: 10px;margin-left: 5px;display: inline-block;width: 20px;height: 20px;line-height: 20px;text-align: center;">2</span>
            </div>
        </div>
        <div id="panels" style="100%">
            <div class="panel-body" style="display: inline-block;width: 255px;height: 325px;overflow: hidden;">
                <div id="new-campaing" onclick="addcampaing()" style="width: 100%;cursor: pointer;cursor: hand;">
                    <div class="thumbnail" style="text-decoration: none;background-color: #f5f5f5">
                        <div class="glyphicon glyphicon-plus" style="color: #727272;width: 100%;margin: 85px 0px 85px 0px;text-align: center;font-size: 60px;"></div>
                        <p style="padding: 10px 10px 30px 10px;margin: 0px;text-align: center;color: #727272;">NEW CAMPAING</p>
                    </div>
                </div>
            </div>
            <!--<div class="panel-body " style="display: inline-block;width: 255px;height: 325px;overflow: hidden;">
                <div class="thumbnail" style="padding: 10px;">
                    <a href="#" class="" style="float: right;text-decoration: none;">Cancel</a>
                    <h3 style="margin: 86px 0px 25px 0px;font-size: 20px;text-align: center;">NEW CAMPAIGN</h3>
                    <form>
                        <input style="margin-bottom: 10px;" class="form-control" type="text" name="title" placeholder="Enter A Campaing Title">
                        <select style="margin-bottom: 10px;" class="form-control">
                            <option>-- Campaing Type --</option>
                            <option>Campaing Type 1</option>
                            <option>Campaing Type 2</option>
                            <option>Campaing Type 3</option>
                            <option>Campaing Type 4</option>
                        </select>
                        <input style="width: 100%;border-radius: 5px;margin: 15px 0px 15px 0px;" type="submit" class="btn btn-block" name="Add" value="submit">
                    </form>
                </div>
            </div>-->
            <?php foreach($campaings as $campaing){?>
                <div class="panel-body" style="text-transform: none;display: inline-block;width: 255px;height: 325px;overflow: hidden;">
                    <a href="<?php echo site_url('welcome/editcampaign/edit/'.$campaing->id)?>" class="thumbnail" style="text-decoration: none;background-color: #FFFFFF;padding: 0px">
                        <div style="position: relative;background: url(<?php if($campaing->number_of_pages == 0)echo base_url('public/img/nopages.png'); else echo base_url('public/img/1234.jpg'); ?>);background-size: auto 100%;background-position-x: 50%;background-repeat: no-repeat;height: 247px;"></div>
                        <div class="detail" style="cursor: default;position: relative;padding: 5px 5px 5px 10px;color: rgb(114, 114, 114);float: right;overflow: hidden;width: 225px;left: 1px;height: 50px;border: 1px solid rgb(211, 211, 211);top: 0px;background: white;">
                            <div>
                                <b><?php echo $campaing->title ?></b><br>
                                <div id="camp-detail">
                                    <span style="background-color: #07e5aa;width: 12px;height: 12px;border-radius: 10px;display: inline-block;"></span>
                                    <span>Draft</span>
                                    <div id="image-icon" class="glyphicon glyphicon-picture" style="float: right;"><span style="margin-left: 5px;"><?php echo $campaing->number_of_pages?></span></div>
                                </div>
                            </div>
                            <!--Hiden Div show on hover Start-->
                            <div style="display: none">
                                <div class='glyphicon glyphicon-trash' style='cursor: pointer;float: right;'></div>
                                <b><?php echo $campaing->title ?></b><br><br>
                                <div id='camp-detail'>
                                    <span style='background-color: #07e5aa;width: 12px;height: 12px;border-radius: 10px;display: inline-block;'></span>
                                    <span> Draft</span>
                                </div>
                                <div style='left: -1px;' class='glyphicon glyphicon-cog'>
                            <span style='top: -2px;left: 3px;position: relative;'>
                                <span href='<?php echo site_url('main/editcampaign/settings')?>' style='text-decoration: none;color: inherit;'>Settings</span>
                            </span>
                                </div>
                                <div style='position: relative;top: 140px;'>
                                    <button onclick='<?php echo site_url('main/editcampaign')?>' class='btn btn-sm btn-block'style='width: 100%;border-radius: 5px;margin-bottom: 5px;'>EDIT</button>
                                    <button class='btn btn-sm btn-info'style='width: 100%;border-radius: 5px;margin-bottom: 5px;'>PUBLISH</button>
                                </div>
                            </div>
                            <!--Hiden Div show on hover End-->
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="cart" style="/*height: 100vh;*/float: right;width: 300px;border: 1px solid gray;padding: 20px 10px 20px 10px;background-color: #b1a7ad;">
        <ul class="user-menu dropdown-menu" role="menu">
            <li><a href="#">my account</a></li>
            <li><a href="#">layar creator</a></li>
            <li><a href="#">messages</a></li>
            <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
        </ul>
        <div id="credit-info" style="padding: 15px 5px 15px 5px;border-top: 5px solid #76b8be;background: white;">
            <div style="text-align: center;padding: 10px 2px 10px 2px;border-bottom: 1px solid gray;margin: 0px 10px 0px 10px;"><b>YOUR PRO CREDITS</b></div>
            <div style="text-align: center;line-height: 60px;font-size: 30px;">0</div>
            <button class="btn btn-sm btn-info" style="width: 90%;margin-left: 12px;border-radius: 10px;">BUY CREDITS</button>
        </div>
        <div id="pusblish-campaing" style="height: 400px;margin-top: 15px;padding: 15px 5px 15px 5px;border-top: 5px solid #76b8be;background: white;">
            <div style="text-align: center;padding: 10px 2px 10px 2px;margin: 0px 10px 0px 10px;">
                <span><b>PUBLISH CAMPAING</b><br><span style="text-transform: none;font-size: 12px;position: relative;top: 2px;">It seems like it's ready, Publish it now!</span></span>
                <div style="height: 200px;margin-top: 20px;margin-bottom: 20px;position: relative;background: url(<?php echo base_url('public/img/12345.jpg')?>);background-size: auto 100%;background-position-x: 50%;background-repeat: no-repeat;border-radius: 50%;"></div>
                <div><span><b>UMAIR</b><br></span><span style="font-size: 12px;">1 Page</span></div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<script>
    $(function() {
        $(".detail").hover(function() {
            $(this).stop().delay(150).animate({'height': '298px', 'top': "-250px"},200);
            $($(this).children()[0]).css({display: 'none'});
            $($(this).children()[1]).css({display: 'block'});
        }, function() {
            $(this).stop().animate({'height': '50px', 'top': "0px"},400);
            $($(this).children()[0]).css({display: 'block'});
            $($(this).children()[1]).css({display: 'none'});
        });
    });
</script>