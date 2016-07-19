<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<script type='text/javascript' src='<?php echo JS_PATH;?>dropdown.js'></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
</head>
<body>
<div class="main_100">
    <div class="top">
        <div class="top_01">
        <div class="left">
            <a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('#');" href="#">·设为首页</a>&nbsp;&nbsp;<a onclick="window.external.AddFavorite('#', '大学生创客网'); return false;">·加入收藏</a></div>
        

        
        <div class="right" >
        
        <?php $siteinfo = siteinfo($this->memberinfo['siteid']);?>
        <?php $userid= param::get_cookie('_userid')?>
        <?php $groupid=param::get_cookie('_groupid')?>
        <?php $username=param::get_cookie('_username')?>

        <?php if($userid) { ?>

        <a href="index.php?m=member&c=index">欢迎 
        [<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=f231a408d0aafb9b23605a9f81c229ae&sql=select+name+from+v9_member_group+where+groupid%3D%24groupid&num=1&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select name from v9_member_group where groupid=$groupid LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
            <?php print($data[0]['name'])?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>]  <?php echo $username;?></a>
        <span> | </span>
        <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout">退出</a>
        <span> | </span>
        <a href="<?php echo $siteinfo['domain'];?>">首页</a>
        <?php } else { ?>
        <a href="index.php?m=member&c=index&a=register&siteid=1" class="deng left">注册</a><a href="index.php?m=member&c=index&a=login" class="zhu right">登录</a>

        <?php } ?>
        </div>
        </div>
    </div>
    <div class="top_01"><img src="<?php echo IMG_PATH;?>Design/logo.jpg"  class="left"/><img src="<?php echo IMG_PATH;?>Design/rexian.jpg"  class="right"/></div>
<div class="nav">
    <div id="nav">
    <ul id="navMenu">
        <li><a href="index.php" class="hover">网站首页</a></li>
        <li><a href='index.php?m=content&c=index&a=lists&catid=7'>新闻资讯</a> </li>   
        <li><a href='index.php?m=content&c=index&a=lists&catid=8'>创意展示</a></li>
        <li><a href='index.php?m=content&c=index&a=lists&catid=9'>项目发布</a></li>        
        <li><a rel="dropmenu1">竞赛专区</a></li>
        <li><a href="index.php?m=content&c=index&a=lists&catid=11">创业空间</a></li>
        <li><a href="index.php?m=content&c=index&a=lists&catid=12">创客论坛</a> </li>
        <li><a href="index.php?m=content&c=index&a=lists&catid=13">理工创意圈</a></li>
        <li><a href="index.php?m=content&c=index&a=lists&catid=17">关于我们</a></li>
    </ul>
</div>
<ul id="dropmenu1" class="dropMenu">
    <li><a href="index.php?m=content&c=index&a=lists&catid=14">竞赛动态</a></li>
    <li><a href="index.php?m=content&c=index&a=lists&catid=15">资料下载</a></li>
    <li><a href="index.php?m=content&c=index&a=lists&catid=16">导师帮帮团</a></li>
</ul>
</div>
<script type="text/javascript">cssdropdown.startchrome("navMenu")</script>