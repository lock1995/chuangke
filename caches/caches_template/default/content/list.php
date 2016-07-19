<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
    .main{
        height: 1000px;
        text-align: left;
        font-size: 18px;
        line-height: 30px;
    }
    .list .left{
        float: left;
    }
    .list .right{
        float: right;
    }
    .list li{
        padding-top: 20px;
    }
    .clear{
        clear: both;
    }
    .type{
        border-radius: 40%;
        border: 1px solid #ccc;
        padding: 5px;
    }
    .type:hover{
        background: red;
        color: #fff;
    }
    .main a{
        text-decoration: none;
    }
    ul,ol{
        list-style: none;
    }
    .cut{
         height:1px;
         width:100%;
         background:#ccc;
         overflow:hidden;
         margin-top: 20px;
    }
    #c-left{
        width: 100%;
        float: left;
        margin-right: 10px;
    }
</style>
<?php include template("content","header"); ?>
<!--main-->
<div class="main">
	<div id="c-left">
        <div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ab4b05e97fd14c3ed386604ee1a9399&action=lists&catid=%24catid&num=25&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <ul class="list">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>" class="left"><h2><?php echo $r['title'];?></h2></a>
                        <span class="right"><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                        <div class="clear"></div>
                        <p><?php echo $r['description'];?></p>
                        <a href="#" class="type">资讯</a>
                        <div class="cut"></div>
                    </li>
                    <!-- <?php if($n%5==0) { ?><li class="bk20 hr"></li><?php } ?> -->
                <?php $n++;}unset($n); ?>
            </ul>
            <div id="pages" class="text-c"><?php echo $pages;?></div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

<!--         <ul class="list">
            <li>
                <a href="#" class="left"><h2>2016第二届全国大学生创业家成长计划</h2></a>
                <span class="right">2016-7-3</span>
                <div class="clear"></div>
                <p>摘要: 报名截止日期：2016年7月24日  活动名称：2016第二届全国大学生创业家成长计划主办单位：百度、中国...</p>
                <a href="#" class="type">zixun</a>
                <div class="cut"></div>
            </li>
            <li>
                <a href="#" class="left"><h2>2016第二届全国大学生创业家成长计划</h2></a>
                <span class="right">2016-7-3</span>
                <div class="clear"></div>
                <p>摘要: 报名截止日期：2016年7月24日  活动名称：2016第二届全国大学生创业家成长计划主办单位：百度、中国...</p>
                <a href="#" class="type">zixun</a>
                <div class="cut"></div>
            </li>
            <li>
                <a href="#" class="left"><h2>2016第二届全国大学生创业家成长计划</h2></a>
                <span class="right">2016-7-3</span>
                <div class="clear"></div>
                <p>摘要: 报名截止日期：2016年7月24日  活动名称：2016第二届全国大学生创业家成长计划主办单位：百度、中国...</p>
                <a href="#" class="type">zixun</a>
                <div class="cut"></div>
            </li>
            <li>
                <a href="#" class="left"><h2>2016第二届全国大学生创业家成长计划</h2></a>
                <span class="right">2016-7-3</span>
                <div class="clear"></div>
                <p>摘要: 报名截止日期：2016年7月24日  活动名称：2016第二届全国大学生创业家成长计划主办单位：百度、中国...</p>
                <a href="#" class="type">zixun</a>
                <div class="cut"></div>
            </li>
        </ul> -->
    </div>
</div>
<!-- <div class="col-auto">
    <div class="box">
        <h5 class="title-2">频道总排行</h5>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0ad40a45ad075d8f47798a231e25aec2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'0ad40a45ad075d8f47798a231e25aec2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <ul class="content digg">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="bk10"></div>
    <div class="box">
        <h5 class="title-2">频道本月排行</h5>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2caa10e576ba663010144233732308cd&action=hits&catid=%24catid&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'2caa10e576ba663010144233732308cd');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
        <ul class="content rank">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><span><?php echo number_format($r[monthviews]);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div> -->

<?php include template("content","footer"); ?>