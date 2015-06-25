<?php
$upload_form = array(
    'id' => 'upload_image'
);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Edit Campaign: Campaign Name</title>


<meta name="author" content="GuidAR">
<meta name="guidAR-version" content="e52c3cc4ac4d, Fri Feb 20 16:30:00 2015 +0100, , tip">
<meta name="google-play-app" content="app-id=com.GuidAR">
<meta name="viewport" content="width=device-width, initial-scale=1" />


<!--
    <!--[if lte IE 9]
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]--><!-- ♥ -->


<!--    <link rel="stylesheet" href="https://d2nd2hlya8il3c.cloudfront.net/static/combined/creator.95e56787b07e.css">
-->

<script src="<?php echo base_url('public/js/jquery-1.11.2.min.js')?>"></script>
<script src="<?php echo base_url('public/js/googleapis.js')?>"></script>
<script src="<?php echo base_url('public/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('public/js/jquery-ui.js')?>"></script>
<link href="<?php echo base_url('public/css/bootstrap-theme.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('public/css/jquery-ui.css')?>" rel="stylesheet">


<style>
    html, body { overflow: hidden;font-family: "quicksand-bold",sans-serif;text-transform: uppercase;font-weight: normal; }
    header #active{
        border: 1px solid #ededed;
        background-color: whitesmoke;
    }
    .nav-tabs{
        border-bottom: 1px solid rgb(29, 109, 51);
    }
    .nav-tabs>li>a{
        opacity: 0.7;
        color: #ffffff;
        border: none;
    }
    .nav-tabs>li>a:hover{
        background: none;
        opacity: 1;
        font-weight: 600;
    }
    .nav-tabs>li.active>a,.nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{
        background-color: #EDEDED;
        opacity: 1;
        font-weight: 600;
    }
    .nav-tabs>li.active>a:hover{
        opacity: 2;
    }
    .nav-tabs>li.active#testc>a,.nav-tabs>li.active#testc>a:focus{
        color: #ffffff;
        background-color: #46484d;
        border: 1px solid #46484d;
    }
    .nav-tabs>li.active>a{
        color: #000000;
    }
    #mid-panel{
        background-color: #EDEDED;
        position: absolute;
        left: 180px;
        right: 300px;
        top: 60px;
        bottom: 0;
        overflow-y: auto;
        z-index: 10;
    }
    #mid-panel fieldset{
        border: none;
        padding: 0;
        position: relative;
    }
    #mid-panel .labels{
        font-size: 13px;
        font-size: 1.3rem;
        color: #82807d;
        text-align: right;
        display: block;
        float: left;
        margin-right: 2.35765%;
        min-width: 150px;
        max-width: 150px;
        line-height: 30px;
        min-height: 1px;
    }
    #mid-panel div>input,select{
        height: 28px;
        padding: 3px 8px;
        width: 100%;
        border: 1px solid whitesmoke;
    }
    #mid-panel h3{
        font-size: 15px;
        font-size: 1.5rem;
        font-weight: bold;
        border-bottom: 1px solid #dcd9d5;
        padding: 0 0 10px;
        margin: 30px 0 20px 165px;
    }
    #mid-panel ul li{
        display: inline-block;
        padding: 0 10px;
        border-right: 1px solid #aaa;
        text-transform: none;
        font-size: 13px;
    }
    #mid-panel ul li:last-child{
        border-right: none;
    }
    #mid-panel ul li:first-child{
        padding-left: 0px;
    }
    #mid-panel #active a{
        color: #46484d;
    }
    #tips li{
        line-height: 125%;
        background: url("<?php echo base_url('public/img/check.png')?>") no-repeat 0 0;
        margin: 17px 0;
        padding-left: 22px;
        list-style: none;
        text-transform: none;
        font-size: 12px;
        font-size: 1.2rem;
    }
    .field-wrapper{
        display: block;
        font-size: 13px;
        font-size: 1.3rem;
        margin-bottom: 20px;
        overflow: hidden;
    }
    .field-wrapper div{
        float: left;
        width: 460px;
    }
    .field-wrapper p{
        font-size: 12px;
        font-size: 1.2rem;
        margin-top: 5px;
        margin-bottom: 20px;
        color: #82807d;
        text-transform: none;
    }
    #dimage{
        background-image: url("<?php echo base_url('public/img/uploadimg.jpg')?>");

    }
    #tips li{
        line-height: 125%;
        background: url("<?php echo base_url('public/img/check.png')?>") no-repeat 0 0;
        margin: 17px 0;
        padding-left: 22px;
        list-style: none;
        text-transform: none;
        font-size: 12px;
        font-size: 1.2rem;
    }
    #right-panel ol{
        padding: 0px;
        text-transform: none;
        font-size: 13px;
        font-size: 1.3rem;
        font-weight: 400;
        line-height: 160%;
        margin-bottom: 18px;
    }
    #right-panel ol li{
        margin-bottom: 15px;
        list-style: none;
        line-height: 125%;
    }
    #right-panel ol li span{
        margin-right: 8px;
        text-align: center;
        background-color: #63e0aa;
        border-radius: 16px;
        display: inline-block;
        line-height: 24px;
        width: 30px;
        vertical-align: top;
    }
    #right-panel ol li p{
        font-size: 12px;
        font-size: 1.2rem;
        padding: 0;
        display: inline-block;
        vertical-align: top;
        width: 80%;
        padding-top: 5px;
        margin-bottom: 0;
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
<div class="outer-container" style="overflow: hidden;">
    <header style="border-bottom: 1px solid #1D6D33;height: 60px;background: #1D6D33;position: relative;z-index: 2;">
        <div id="logo" style="height: 60px;float: left;padding: 0 10px 0 20px;overflow: hidden;border-right: 1px solid #fff;">
            <span style="position: relative;top: 25px;font-size: 20px;"><a href="<?php echo site_url('welcome')?>" style="text-decoration: none;color: inherit;"><img  alt="GuidAR Logo" src="<?php echo base_url('public/img/logo.png')?>" style="/*max-width: 65px;max-height: 50px;*/position: relative;top: -20px;"></a></span>
        </div>
        <h1 style="color: #ffffff;min-width: 110px;max-width: 180px;float: left;top: 15px;position: relative;font-size: 1.3rem;margin-left: 25px;margin-right: 25px;"><?php echo $campaing[0]->title ?></h1>
        <div role="tabpanel" style="display: inline-block;position: absolute;top: 18px;">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist" id="mytab">
                <li role="presentation" class="<?php echo ($tab == 'settings') ? 'active' : ''; ?>"><a href="#settings"  class="glyphicon glyphicon-cog" aria-controls="settings" role="tab" data-toggle="tab"></a></li>
                <li role="presentation" class="<?php echo ($tab == 'edit') ? 'active' : ''; ?>"><a href="#edit"  class="activate_tab" aria-controls="edit" role="tab" data-toggle="tab">Edit</a></li>
                <?php if($campaing[0]->number_of_pages !=0){?>
                    <li role="presentation" class="<?php echo ($tab == 'test') ? 'active' : ''; ?>" id="testc"><a href="#test"  aria-controls="test" role="tab" data-toggle="tab">Test</a></li>
                <?php } ?>
            </ul>
        </div>
        <div id="button" style="position: absolute;top: 0;right: 320px;line-height: 24px;padding-top: 16px;">
            <button class="btn btn-sm btn-block" style="padding-left: 45px;padding-right: 45px;border-radius: 10px;">PUBLISH</button>
        </div>
        <div style="padding-right: 25px;position: absolute;top: 0px;right: 0;text-align: right;display: block;width: 25%;height: 60px;">
            <div style="cursor: pointer;margin: 20px 10px 0px 15px;color: #46484d;width: 300px;line-height: 30px;padding: 5px;">
                <div id="user-name" class="dropdown-toggle" data-toggle="dropdown">
                    <span data-bind="label" style="color: #ffffff;"><?php echo $username; ?></span>&nbsp;<span class="caret" style="color: #ffffff;"></span>
                </div>
            </div>
        </div>
</div>
</header>
<script>
    $( "#user-name" ).click(function() {
        $( ".user-menu" ).toggle();
    });
    $(document).on('click', function(event) {
        if (!$(event.target).closest('#user-name').length) {
            $(".user-menu").hide();
        }
    });
</script>
<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane" id="settings">
    <div id="left-panel" style="position: absolute;bottom: 0;left: 0;top: 60px;width: 180px;padding-top: 20px;background-color: #EDEDED;">
        <div style="height: 45px;text-align: left;"></div>
    </div>
    <div id="mid-panel">
        <?php echo form_open('campaing/updatecampaign/'.$campaing[0]->id);?>
        <form style="width: 630px;margin: 20px auto;">
            <fieldset>
                <h3 style="">Campaign Settings</h3>
                <div class="field-wrapper">
                    <label class="labels">Campaign name</label>
                    <div>
                        <input type="text" name="campaign_name" value="<?php echo $campaing[0]->title?>">
                        <p>For the creator environment only</p>
                    </div>
                </div>
                <div class="field-wrapper">
                    <label class="labels">Campaign Type</label>
                    <div>
                        <select name="campaing_type">
                            <option <?php if($campaing[0]->category == 'Magazine') echo 'Selected'.' value = Magazine';?>>Magazine</option>
                            <option <?php if($campaing[0]->category == 'Newspaper') echo 'Selected'.' value = Newspaper';?>>Newspaper</option>
                            <option <?php if($campaing[0]->category == 'Print advertisement') echo 'Selected'.' value = Print advertisement';?>>Print advertisement</option>
                            <option <?php if($campaing[0]->category == 'Catalogue/folder') echo 'Selected'.' value = Catalogue/folder';?>>Catalogue/folder</option>
                            <option <?php if($campaing[0]->category == 'Business card') echo 'Selected'.' value = Business card';?>>Business card</option>
                            <!--<option <?php /*if($campaing[0]->category == 'Magazine') echo 'Selected'.' value = Magazine';*/?>>Greeting card</option>
                            <option <?php /*if($campaing[0]->category == 'Magazine') echo 'Selected'.' value = Magazine';*/?>>Packaging</option>
                            <option <?php /*if($campaing[0]->category == 'Magazine') echo 'Selected'.' value = Magazine';*/?>>Direct marketing</option>
                            <option <?php /*if($campaing[0]->category == 'Magazine') echo 'Selected'.' value = Magazine';*/?>>Billboard/outdoor advertising</option>
                            <option <?php /*if($campaing[0]->category == 'Letter') echo 'Selected'.' value = Letter';*/?>>Letter</option>
                            <option <?php /*if($campaing[0]->category == 'Poster') echo 'Selected'.' value = Poster';*/?>>Poster</option>
                            <option <?php /*if($campaing[0]->category == 'Other') echo 'Selected'.' value = Other';*/?>>Other</option>-->
                        </select>
                    </div>
                </div>
                <div class="field-wrapper">
                    <label class="labels">Visibility</label>
                    <div>
                        <label style="font-size: 13px;font-size: 1.3rem;font-weight: normal;text-transform: none;"><input type="checkbox" name="visibility"> Visible worldwide</label>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <h3>In-App Branding</h3>
                <div class="field-wrapper">
                    <label class="labels">Display name</label>
                    <div>
                        <input style="width: 200px;" type="text" name="display_name" value="<?php echo $campaing[0]->display_name?>">
                    </div>
                </div>
                <div class="field-wrapper">
                    <label class="labels">Display icon</label>
                    <div style="width: 460px;">
                        <div id="dimage" style="background-color: #fff;width: 124px;height: 124px;background-repeat: no-repeat;">

                        </div>
                    </div>
                </div>
                <figure style="position: absolute;bottom: 20px;right: 200px;width: 260px;height: 160px;">
                    <img src="<?php echo base_url('public/img/phone.jpg')?>">
                    <figcaption style="font-size: 11px;font-size: 1.1rem;position: absolute;background: rgba(248,250,255,0.7);color: #46484d;font-weight: bold;padding: 0 2px 0 0;width: 60%;top: 90px;right: 20px;line-height: 30px;height: 30px;float: left;">
                        <img style="width: 22px;height: 22px;background: rgba(0,0,0,0.2);float: left;margin: 4px 6px 4px 4px;" src="">
                        <span style="text-transform: none;">Umair Umair</span>
                    </figcaption>
                </figure>
            </fieldset>
            <div STYLE="border-top: 1px solid #dcd9d5;padding: 30px 0 0;margin: 20px 0 0 165px;">
                <button style="margin: 0px 5px 15px 0px;float: right;width: 20%;cursor: default!important;border-radius: 8px;background-color: #dcd9d5!important;color: #aaa!important;text-shadow: 0 1px 0 #fff!important;box-shadow: 0 1px 0 #fff;padding-left: 30px;padding-right: 30px;" type="submit" class="btn btn-block">Save</button>
            </div>
            <?php echo form_close();?>
    </div>
    <div id="right-panel" style="background-color: #EDEDED;position: absolute;width: 300px;top: 60px;bottom: 0;right: 0;padding: 70px 20px 20px 20px;">
        <ul style="display: none;top: -3px;border-radius: 0px;text-align: right;width: 300px;" class="user-menu dropdown-menu" role="menu">
            <li><a href="#">my account</a></li>
            <li><a href="#">layar creator</a></li>
            <li><a href="#">messages</a></li>
            <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
        </ul>
    </div>
</div>
<div role="tabpanel" class="tab-pane active" id="edit">
<?php foreach($campaing as $c);
if($c->number_of_pages == 0){ ?>
    <div id="left-panel" style="position: absolute;bottom: 0;left: 0;top: 60px;width: 180px;padding-top: 20px;background-color: #e5e5e5;border-right: 1px solid #e5e5e5;">
        <div style="height: 45px;text-align: left;">
            <a href="#" style="display: inline-block;width: 130px;margin-left: 15px;box-shadow: inset 0 1px 1px #82807d,0 1px 0 #fff;background: #dcd9d5!important;color: #82807d!important;text-shadow: none;cursor: default;line-height: 30px;text-align: center;border-radius: 8px;">+PAGES</a>
        </div>
    </div>
    <div id="mid-panel" style="background-color: #EDEDED;position: absolute;left: 180px;right: 300px;top: 60px;bottom: 0;overflow: visible;z-index: 10;">
        <div style="width: 80%;margin: 0 auto;padding-top: 30px;">
            <nav>
                <ul style="line-height: 160%;margin-bottom: 18px;padding: 0px;">
                    <li id="active"><a href="#">New Pages</a></li>
                    <li><a href="#">Important Pages</a></li>
                    <li><a href="#">Include Pages with Buttons</a></li>
                </ul>
            </nav>
            <div>
                <div style="background: #fff;padding: 20px;border: 1px solid #aaa;height: 363px;">
                    <?php echo form_open_multipart('upload_file/do_upload/'.$campaing[0]->id,$upload_form);?>
                    <div style="background-image: url(<?php echo base_url('public/img/upload.jpg')?>);background-repeat: no-repeat;background-size: 100% 322px;">
                        <input style="height: 384px;opacity: 0;" type="file" name="userfile" size="20">
                    </div>
                    <?php echo form_close();?>
                </div>
                <script>
                    $( "#upload_image" ).change(function() {
                        $(this).submit();
                    });
                </script>
            </div>
        </div>
    </div>
    <div id="right-panel" style="background-color: #e5e5e5;border-left: 1px solid #e5e5e5;position: absolute;width: 300px;top: 60px;bottom: 0;right: 0;padding: 70px 20px 20px 20px;overflow-y: scroll;">
        <div id="tips">
            <h1 style="text-align: center;font-size: 15px;color: #646464;margin: 0px 0px 10px 0px;font-weight: bold;">Before You Upload..</h1>
            <ul style="font-size: 12px;font-size: 1.2rem;line-height: 138%;margin-bottom: 25px;padding-left: 20px;padding-right: 20px;">
                <li>Choose <a>good quality images</a> with clear lines and features.</li>
                <li>Place easy to spot <a>calls-to-action</a> so your viewers know they can scan.</li>
                <li>only upload the <a>final version</a> of your pages. it's not possible to change them after publishing.</li>
            </ul>
        </div>
        <ul style="display: none;top: -3px;border-radius: 0px;text-align: right;width: 300px;" class="user-menu dropdown-menu" role="menu">
            <li><a href="#">my account</a></li>
            <li><a href="#">layar creator</a></li>
            <li><a href="#">messages</a></li>
            <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
        </ul>
    </div>
<?php } else {?>
    <div id="left-panel" style="position: absolute;bottom: 0;left: 0;top: 60px;width: 180px;padding-top: 20px;background-color: #e5e5e5;border-right: 1px solid #e5e5e5;">
        <!--<div style="height: 45px;text-align: left;">
            <a href="#" style="display: inline-block;width: 130px;margin-left: 15px;box-shadow: inset 0 1px 1px #82807d,0 1px 0 #fff;background: #dcd9d5!important;color: #82807d!important;text-shadow: none;cursor: default;line-height: 30px;text-align: center;border-radius: 8px;">+PAGES</a>
        </div>-->
        <div style="height: 45px;text-align: left;">
            <label id="add_page" style="height: 35px;display: inline-block;width: 130px;margin-left: 15px;background: #82807d;color: white;font-weight: bold;text-shadow: none;cursor: pointer;cursor: hand;text-decoration: none;line-height: 35px;text-align: center;border-radius: 8px;">+PAGES</label>
            <?php echo form_open_multipart('upload_file/do_upload/'.$campaing[0]->id,$upload_form);?>
            <input id="upload_page" style="display: none;height: 35px;position: absolute;top: 20px;width: 130px;cursor: pointer;cursor: hand;left: 15px;" type="file" name="userfile" size="20">
            <?php echo form_close();?>

            <script>
                $("label#add_page").click(function() {
                    $("input[id='upload_page']").click();
                });
                $( "#upload_image" ).change(function() {
                    $(this).submit();
                });
                $(function() {
                    $('.image-data').click( function() {
                        /*alert($(this).attr('href'));*/
                        var path = $(this).attr('data-path');
                        var width = ($(this).attr('data-width'));
                        $('.imgchange').attr("style","width:"+width+"px;"+"max-width: 802px;max-height: 560px;margin: 20px auto;");
                        $('.imgchange>div>img').attr("src", path);
                    });
                });
            </script>
        </div>
        <nav style="top: 70px;bottom: 0;left: 0;right: 0;overflow-x: hidden;overflow-y: auto;position: absolute;">
            <?php foreach ($pages as $page) {
                $width = 0;
                $h = $page->height;
                $w = $page->width;
                $var = 560/$h;
                $var1 = 1 - $var;
                $wvar = $var1 * $w;
                $width = $w - $wvar;
                if($width < 0){
                    $width = $width * (-1);
                }
                if($page->name == $campaing['0']->thumbnail_img){
                    $fwidth = $width;
                }
                ?>
                <ol data-imgid="<?php $page->id?>" data-width="<?php echo $width ?>" data-path="<?php echo base_url('public/img/'.$page->name)?>" class="image-data" style="/*padding-bottom: 30px;*/margin: 0;padding-left: 0px;">
                    <li style="list-style: none;position: relative;border-bottom: 4px solid #1D6D33;width: 130px;margin: 0 25px 20px 15px;">
                        <figure>
                            <div class="img-responsive" style="width: 100%;background-size: cover;background-position: center top;min-height: 90px;;background-repeat: no-repeat;background-image: url(<?php echo base_url('public/img/'.$page->name)?>);"></div>
                            <a class="change_img" data-link="<?php echo site_url('welcome/editcampaign/edit/'.$page->campaing_id .'/'.$page->name)?>" href="<?php echo site_url('welcome/editcampaign/edit/'.$page->campaing_id .'/'.$page->name)?>" style="display: block;position: absolute;top: 0;left: 0;right: 0;bottom: 0;cursor: pointer;"></a>
                            <figcaption style="z-index: 10;width: 100%;background-color: #fff;padding: 4px;word-wrap: break-word;">
                                <h4 style="font-size: 11px;font-size: 1.1rem;margin: 0px;font-weight: bold;line-height: 1.4rem;color: #46484d;word-break: break-word;cursor: text;"><?php echo $page->name?></h4>
                                <div>
                                    <div><h5 style="padding-top: 2px;line-height: 1.4rem;color: #82807d;margin: 0px;font-size: 10px;font-size: 1rem;">1 Button</h5></div>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                </ol>
            <?php } ?>
        </nav>
    </div>
    <script>
        $(function() {
            /*$.ui.draggable.prototype.destroy = function (div, item) { };*/
            $( ".dragable" )
                .draggable({
                    helper: 'clone',
                    revert: 'invalid',
                    appendTo: 'body',
                    cursor: "pointer"
                });
            $("#target").droppable({
                accept: "#btn-group  div",
                drop: function(event,ui){
                    var newPosX = (((ui.offset.left - $(this).offset().left)/836)*100);
                    var newPosY = (((ui.offset.top - $(this).offset().top)/560)*100);
                    var wd = ((ui.helper.width())/836)*100;
                    var he = ((ui.helper.height())/560)*100;
                    /*$("header").text("left" + $newPosX+"%" + "Top "+ $newPosY+"%");*/

                    $(this).append($(ui.draggable).clone());
                    $("#target .dragable").addClass("item")
                        .removeClass("ui-draggable")
                        .css({"position": "absolute"})
                        .css("top", (ui.offset.top - $(this).offset().top))
                        .css("left", (ui.offset.left - $(this).offset().left))
                        .css("width", ui.helper.width())
                        .css("height", ui.helper.height())
                        .draggable({
                            containment: 'parent',
                            drag: function(event,ui){
                                var newPosX = (((ui.offset.left - $("#target").offset().left)/836)*100);
                                var newPosY = (((ui.offset.top - $("#target").offset().top)/560)*100);
                                var wd = ((ui.helper.width())/836)*100;
                                var he = ((ui.helper.height())/560)*100;
                                //$("header").text("left" + newPosX + "Top "+ newPosY);
                                var data = {
                                    img_id: $('.image-data').attr('data-imgid'),
                                    url: "",
                                    posx: newPosX,
                                    posy: newPosY,
                                    width: wd,
                                    height: he
                                };
                                $.ajax({
                                    url: "<?php echo site_url('content/add'); ?>",
                                    type: 'POST',
                                    data: data,
                                    success: function(msg) {
                                     alert("<?php echo site_url('content/add'); ?>");
                                     }
                                });
                            }
                        })
                        .resizable({
                            aspectRatio: true,
                            containment: "parent",
                            handles: "ne, se, sw, nw",
                            create: function(event, ui){
                                $("#target .dragable div.ui-resizable-se").css({"right": "-5px","bottom": "-5px","background-color": "black","opacity": "0.5","border-radius": "10px","width": "11px","height": "11px"});
                                $("#target .dragable div.ui-resizable-ne").css({"background-color": "black","opacity": "0.5","border-radius": "10px","width": "11px","height": "11px"});
                                $("#target .dragable div.ui-resizable-sw").css({"background-color": "black","opacity": "0.5","border-radius": "10px","width": "11px","height": "11px"});
                                $("#target .dragable div.ui-resizable-nw").css({"background-color": "black","opacity": "0.5","border-radius": "10px","width": "11px","height": "11px"});
                            },
                            start:function(){
                                $(".dragable").css({"border": "2px solid rgb(127, 127, 127)","background-color": "rgba(127, 127, 127, 0.36)"});
                                $("#target .dragable div.ui-resizable-se").css({"opacity": "0.8"});
                                $("#target .dragable div.ui-resizable-ne").css({"opacity": "0.8"});
                                $("#target .dragable div.ui-resizable-sw").css({"opacity": "0.8"});
                                $("#target .dragable div.ui-resizable-nw").css({"opacity": "0.8"});
                            },
                            stop: function(event, ui) {
                                var w = $(this).width();
                                var h = $(this).height();
                                console.log('StopEvent fired')
                                console.log('Width:'+w);
                                console.log('Height:'+h);
                                $(".dragable").css({"border": "none","background-color": "none"});
                                $("#target .dragable div.ui-resizable-se").css({"opacity": "0.5"});
                                $("#target .dragable div.ui-resizable-ne").css({"opacity": "0.5"});
                                $("#target .dragable div.ui-resizable-sw").css({"opacity": "0.5"});
                                $("#target .dragable div.ui-resizable-nw").css({"opacity": "0.5"});
                                /*$("header").text('Height: ' + h + 'Width: ' + w);*/
                            }
                        });
                    $("#target .dragable").removeClass();
                    /*var form_data = {            //repair
                        img_id: $('.image-data').attr('data-imgid'),
                        url: ,
                        posx: newPosX,
                        posy: newPosY,
                        width: wd,
                        height: he
                    };

                    $.ajax({
                        url: "<?php echo site_url('content/add'); ?>",//repair
                        type: 'POST',
                        data: form_data // $(this).serialize(); you can use this too
                        *//*success: function(msg) {
                            alert("success..!! or any stupid msg");
                        }*//*
                    });*/
                }
            });
        });
        $('.change_img').click(function(e){
            e.preventDefault();
            var targetUrl = $('.change_img').attr('data-link');
            $.ajax({
                url: targetUrl,
                type: "GET",
                success:function(){
                },
                error:function (){
                }
            });
        });

    </script>
    <div id="mid-panel" style="background-color: #EDEDED;position: absolute;left: 180px;right: 300px;top: 60px;bottom: 0;overflow: visible;z-index: 10;">
        <!--<div style="width: 80%;margin: 0 auto;padding-top: 30px;">
        <nav>
            <ul style="line-height: 160%;margin-bottom: 18px;padding: 0px;">
                <li id="active"><a href="#">New Pages</a></li>
                <li><a href="#">Important Pages</a></li>
                <li><a href="#">Include Pages with Buttons</a></li>
            </ul>
        </nav>
        <div>
            <div style="background: #fff;padding: 20px;border: 1px solid #aaa;min-height: 384px;">
                <div id="upload"><img src="<?php /*echo base_url('public/img/upload.jpg')*/?>"></div>
            </div>
        </div>
    </div>-->
        <div class="imgchange" style="width: <?php echo $fwidth;?>px;max-width: 802px;max-height: 560px;margin: 20px auto;">
            <div id="target" style="position: relative;">
                <img style="display: block;width: 100%;height: 100%;" src="<?php echo base_url('public/img/'.$campaing['0']->thumbnail_img)?>">
            </div>
        </div>
        <a href="#" style="width: 22px;height: 22px;position: absolute;top: 21px;right: 27px;z-index: 50;background: #faf7f5 url('<?php echo base_url('public/img/grid.jpg')?>') no-repeat 50% 50%;"></a>
    </div>
    <div id="right-panel" style="background-color: #e5e5e5;border-left: 1px solid #e5e5e5;position: absolute;width: 300px;top: 60px;bottom: 0;right: 0;padding: 20px 20px 20px 20px;">
        <!--<ul style="display: none;top: -3px;border-radius: 0px;text-align: right;width: 300px;" class="user-menu dropdown-menu" role="menu">
              <li><a href="#">my account</a></li>
              <li><a href="#">layar creator</a></li>
              <li><a href="#">messages</a></li>
              <li><a href="#">logout</a></li>
          </ul>
          <div id="tips">
              <h1 style="text-align: center;font-size: 15px;color: #646464;margin: 0px 0px 10px 0px;font-weight: bold;">Before You Upload..</h1>
              <ul style="font-size: 12px;font-size: 1.2rem;line-height: 138%;margin-bottom: 25px;padding-left: 20px;padding-right: 20px;">
                  <li>Choose <a>good quality images</a> with clear lines and features.</li>
                  <li>Place easy to spot <a>calls-to-action</a> so your viewers know they can scan.</li>
                  <li>only upload the <a>final version</a> of your pages. it's not possible to change them after publishing.</li>
              </ul>
          </div>-->
        <ul style="display: none;top: -3px;border-radius: 0px;text-align: right;width: 300px;" class="user-menu dropdown-menu" role="menu">
            <li><a href="#">my account</a></li>
            <li><a href="#">layar creator</a></li>
            <li><a href="#">messages</a></li>
            <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
        </ul>
        <div>
            <div style="border-bottom: 1px solid #dcd9d5;margin: 0 0 20px;padding: 0 0 20px;">
                <select style="height: inherit;width: 100%;font-size: 13px;font-size: 1.3rem;color: #46484d!important;background-color: #fff;border: 1px solid #dcd9d5;border-radius: 8px;padding: 9px 30px 9px 9px;text-align: center;text-transform: uppercase;">
                    <option>suggested buttons</option>
                    <option>custom buttons</option>
                    <option>frequently used buttons</option>
                    <option>buttons by category</option>
                </select>
            </div>
            <div id="btn-group" style="position: absolute;top: 83px;right: 0;width: 282px;bottom: 0;padding: 20px;z-index: 1;overflow: auto;">
                <ul style="font-size: 12px;padding: 0px;font-size: 1.2rem;line-height: 138%;margin-bottom: 25px;">
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style="display: inline-block;position: relative;">
                                    <div style="width: 100%;height: 100%;transform: scale(1);">
                                        <div>
                                            <div class="dragable" style="cursor: pointer;cursor: hand;z-index: 999;">
                                                <img  style="height: 100%;width: 100%;cursor: pointer;cursor: hand;z-index: 999;" src="<?php echo base_url('public/img/slider1.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">Add a Video</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style="display: inline-block;position: relative;">
                                    <div style="width: 100%;height: 100%;transform: scale(1);">
                                        <div>
                                            <div class="dragable" style="cursor: pointer;cursor: hand;z-index: 999;">
                                                <img  style="height: 100%;width: 100%;cursor: pointer;cursor: hand;z-index: 999;" src="<?php echo base_url('public/img/playvideo.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">Show a carousel</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/website.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">Open a Website</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/audio.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">play audio</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/buy.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">buy a product</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/call.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">call a number</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/fbshare.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">share a message on facebook</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style=";-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/twshare.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">share a message on twitter</div></div>
                            </div>
                        </div>
                    </li>
                    <li style="list-style: none;">
                        <div>
                            <div style="width: 235px;box-shadow: 0 1px 3px rgba(0,0,0,0.1);background: #fff;color: #46484d;padding: 8px 10px;overflow: hidden;margin: 0 0 20px;position: relative;text-align: center;">
                                <div style="-webkit-transition: opacity .3s linear .15s;-moz-transition: opacity .3s linear .15s;transition: opacity .3s linear .15s;display: inline-block;position: relative;opacity: 1;">
                                    <div>
                                        <div>
                                            <div>
                                                <img style="width: 100%;height: 100%;" src="<?php echo base_url('public/img/twiterfeed.jpg')?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div><div style="font-size: 10px;font-size: 1rem;margin: 12px 0 0 0;text-transform: uppercase;line-height: 100%;font-style: italic;">show a twitter feed</div></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php } ?>
</div>
<div role="tabpanel" class="tab-pane" id="test">
    <div id="left-panel" style="position: absolute;bottom: 0;left: 0;top: 60px;width: 180px;padding-top: 20px;background-color: #46484d;">
        <div style="height: 45px;text-align: left;"></div>
        <nav style="top: 70px;bottom: 0;left: 0;right: 0;overflow-x: hidden;overflow-y: auto;position: absolute;">
            <ol style="padding-bottom: 30px;margin: 0;padding-left: 0px;">
                <li style="list-style: none;position: relative;border-bottom: 4px solid #1D6D33;width: 130px;margin: 0 25px 20px 15px;">
                    <figure>
                        <div style="width: 100%;background-size: cover;background-position: center top;min-height: 90px;;background-repeat: no-repeat;background-image: url(<?php echo base_url('public/img/pagelistimg.jpg')?>);"></div>
                        <a href="#" style="display: block;position: absolute;top: 0;left: 0;right: 0;bottom: 0;cursor: pointer;"></a>
                        <figcaption style="z-index: 10;width: 100%;background-color: #fff;padding: 4px;word-wrap: break-word;">
                            <h4 style="font-size: 11px;font-size: 1.1rem;margin: 0px;font-weight: bold;line-height: 1.4rem;color: #46484d;word-break: break-word;cursor: text;">Image_name.jpg</h4>
                            <div>
                                <div><h5 style="padding-top: 2px;line-height: 1.4rem;color: #82807d;margin: 0px;font-size: 10px;font-size: 1rem;">1 Button</h5></div>
                            </div>
                        </figcaption>
                    </figure>
                </li>
            </ol>
        </nav>
    </div>
    <div id="mid-panel" style="background-color: #46484d; overflow: hidden">
        <div style="width: 836px;margin: 20px auto;height: 560px;">
            <img style="display: block;width: 100%;height: 100%;" src="<?php echo base_url('public/img/testimg.jpg')?>">
        </div>
    </div>
    <div id="right-panel" style="background-color: #46484d;position: absolute;width: 300px;top: 60px;bottom: 0;right: 0;padding: 50px 20px 20px 20px;">
        <ul style="display: none;top: -3px;border-radius: 0px;text-align: right;width: 300px;" class="user-menu dropdown-menu" role="menu">
            <li><a href="#">my account</a></li>
            <li><a href="#">layar creator</a></li>
            <li><a href="#">messages</a></li>
            <li><?php echo anchor('/auth/logout/', 'Logout'); ?></li>
        </ul>
        <div style="color: #fff;">
            <section>
                <div>
                    <h3 style="font-weight: bold;text-align: center;font-size: 15px;font-size: 1.5rem;margin-bottom: 9.375px;">Test Your Campaign</h3>
                    <ol>
                        <li><span>1</span><p>Download the <a href="#">Guidar app</a></p></li>
                        <li><span>2</span><p>Scan the page to test</p></li>
                        <li><span>3</span><p>Make sure that all your buttons appear correctly and perform as desired</p></li>
                    </ol>
                    <p style="color: #00a6c2;text-transform: none;font-size: 12px;font-size: 1.2rem;;padding-left: 20px;padding-right: 20px;display: block;text-align: right;"><a href="#">Hide Help</a></p>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>