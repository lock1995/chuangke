<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 轮播样式 -->
<style>
.flexslider {
    margin: 0px auto 20px;
    position: relative;
    width: 100%;
    height: 482px;
    overflow: hidden;
    zoom: 1;
}
.flexslider .slides li {
    width: 100%;
    height: 100%;
}
.flex-direction-nav a {
    width: 70px;
    height: 70px;
    line-height: 99em;
    overflow: hidden;
    margin: -35px 0 0;
    display: block;
    background: url(<?php echo IMG_PATH;?>Design/ad_ctr.png) no-repeat;
    position: absolute;
    top: 50%;
    z-index: 10;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all .3s ease;
    border-radius: 35px;
}

.flex-direction-nav .flex-next {
    background-position: 0 -70px;
    right: 0;
}

.flex-direction-nav .flex-prev {
    left: 0;
}

.flexslider:hover .flex-next {
    opacity: 0.8;
    filter: alpha(opacity=25);
}

.flexslider:hover .flex-prev {
    opacity: 0.8;
    filter: alpha(opacity=25);
}

.flexslider:hover .flex-next:hover,
.flexslider:hover .flex-prev:hover {
    opacity: 1;
    filter: alpha(opacity=50);
}

.flex-control-nav {
    width: 100%;
    position: absolute;
    bottom: 10px;
    text-align: center;
}

.flex-control-nav li {
    margin: 0 2px;
    display: inline-block;
    zoom: 1;
    *display: inline;
}

.flex-control-paging li a {
    background: url(<?php echo IMG_PATH;?>Design/dot.png) no-repeat 0 -16px;
    display: block;
    height: 16px;
    overflow: hidden;
    text-indent: -99em;
    width: 16px;
    cursor: pointer;
}

.flex-control-paging li a.flex-active,
.flex-control-paging li.active a {
    background-position: 0 0;
}

.flexslider .slides a img {
    width: 100%;
    height: 400px;
    display: block;
}
</style>
<!-- 首页轮播 -->
<div id="banner_tabs" class="flexslider">
    <ul class="slides">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=052876c97c186484f96dc5ea07640e23&action=lists&catid=6&num=3&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','moreinfo'=>'1','limit'=>'3',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"  alt="<?php echo $r['title'];?>" border="0"></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="javascript:;">Previous</a></li>
        <li><a class="flex-next" href="javascript:;">Next</a></li>
    </ul>
</div>
<script src="http://www.hiid.com.cn/statics/js/jquery-1.10.2.min.js"></script>
<script src="http://www.hiid.com.cn/statics/js/slider.js"></script>
<script type="text/javascript">
$(function() {
    var bannerSlider = new Slider($('#banner_tabs'), {
        time: 5000,
        delay: 400,
        event: 'hover',
        auto: true,
        mode: 'fade',
        controller: $('#bannerCtrl'),
        activeControllerCls: 'active'
    });
    $('#banner_tabs .flex-prev').click(function() {
        bannerSlider.prev()
    });
    $('#banner_tabs .flex-next').click(function() {
        bannerSlider.next()
    });
})
</script>
<!-- 轮播结束 -->
<!--页面主体开始-->
<!-- 入口 -->
<a href="#"><img src="<?php echo IMG_PATH;?>Design/rukou1-1.jpg" style="margin-top:-110px;"></a>
<a href="#"><img src="<?php echo IMG_PATH;?>Design/rukou2-1.jpg" style="margin-top:-110px;"></a>
<!-- 入口结束 -->
<div class="top_01">
    <div class="bood">
        <img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>竞赛动态</b><a href="index.php?m=content&c=index&a=lists&catid=14" class="right hong">更多》&nbsp;&nbsp;</a>
    </div>
        <div class="bodd">
            <ul class="biao_02">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4bacd9f06ce6aacefe1586a7d483fe6d&action=lists&catid=14&num=7&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'14','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'14','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>·  <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a>
                    <span class="right"><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <script>
//滚动
(function($){
    $.fn.kxbdMarquee = function(options){
        var opts = $.extend({},$.fn.kxbdMarquee.defaults, options);
        return this.each(function(){
            var $marquee = $(this);//滚动元素容器
            var _scrollObj = $marquee.get(0);//滚动元素容器DOM
            var scrollW = $marquee.width();//滚动元素容器的宽度
            var scrollH = $marquee.height();//滚动元素容器的高度
            var $element = $marquee.children(); //滚动元素
            var $kids = $element.children();//滚动子元素
            var scrollSize=0;//滚动元素尺寸
            var _type = (opts.direction == 'left' || opts.direction == 'right') ? 1:0;//滚动类型，1左右，0上下

            //防止滚动子元素比滚动元素宽而取不到实际滚动子元素宽度
            $element.css(_type?'width':'height',10000);
            //获取滚动元素的尺寸
            if (opts.isEqual) {
                scrollSize = $kids[_type?'outerWidth':'outerHeight']() * $kids.length;
            }else{
                $kids.each(function(){
                    scrollSize += $(this)[_type?'outerWidth':'outerHeight']();
                });
            }
            //滚动元素总尺寸小于容器尺寸，不滚动
            if (scrollSize<(_type?scrollW:scrollH)) return; 
            //克隆滚动子元素将其插入到滚动元素后，并设定滚动元素宽度
            $element.append($kids.clone()).css(_type?'width':'height',scrollSize*2);
            var numMoved = 0;
            function scrollFunc(){
                var _dir = (opts.direction == 'left' || opts.direction == 'right') ? 'scrollLeft':'scrollTop';
                if (opts.loop > 0) {
                    numMoved+=opts.scrollAmount;
                    if(numMoved>scrollSize*opts.loop){
                        _scrollObj[_dir] = 0;
                        return clearInterval(moveId);
                    } 
                }
                if(opts.direction == 'left' || opts.direction == 'up'){
                    var newPos = _scrollObj[_dir] + opts.scrollAmount;
                    if(newPos>=scrollSize){
                        newPos -= scrollSize;
                    }
                    _scrollObj[_dir] = newPos;
                }else{
                    var newPos = _scrollObj[_dir] - opts.scrollAmount;
                    if(newPos<=0){
                        newPos += scrollSize;
                    }
                    _scrollObj[_dir] = newPos;
                }
            };
            //滚动开始
            var moveId = setInterval(scrollFunc, opts.scrollDelay);
            //鼠标划过停止滚动
            $marquee.hover(
                function(){
                    clearInterval(moveId);
                },
                function(){
                    clearInterval(moveId);
                    moveId = setInterval(scrollFunc, opts.scrollDelay);
                }
            );
            //控制加速运动
            if(opts.controlBtn){
                $.each(opts.controlBtn, function(i,val){
                    $(val).bind(opts.eventA,function(){
                        opts.direction = i;
                        opts.oldAmount = opts.scrollAmount;
                        opts.scrollAmount = opts.newAmount;
                    }).bind(opts.eventB,function(){
                        opts.scrollAmount = opts.oldAmount;
                    });
                });
            }
        });
    };
    $.fn.kxbdMarquee.defaults = {
        isEqual:true,//所有滚动的元素长宽是否相等,true,false
        loop: 0,//循环滚动次数，0时无限
        direction: 'left',//滚动方向，'left','right','up','down'
        scrollAmount:1,//步长
        scrollDelay:10,//时长
        newAmount:3,//加速滚动的步长
        eventA:'mousedown',//鼠标事件，加速
        eventB:'mouseup'//鼠标事件，原速
    };
    $.fn.kxbdMarquee.setDefaults = function(settings) {
        $.extend( $.fn.kxbdMarquee.defaults, settings );
    };
})(jQuery);
</script>
    <div class="top_10">
        <div class="bood">
            <img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>精品创意展</b><a href="#" class="right hong">更多》&nbsp;&nbsp;</a>
        </div>
        <div class="bodd juli_nei_top10">
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.marqueed').kxbdMarquee({
                            direction:'left',
                            eventA:'mouseenter',
                            eventB:'mouseleave'
                    });
                });
            </script>
            <div class="marqueed"> 
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ba1f1107bf9bab979432818f39b4b5b7&action=lists&catid=8&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','limit'=>'10',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <div class="pji_01">
                            <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><img src="<?php echo thumb($r[thumb],240,180);?>" width="240" height="180" alt="<?php echo $r['title'];?>" border="0"/></a>
                            <div class="txt"> <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></div>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div> 
        </div>
    </div>
    <div class="left top_10">
    <div class="bood">
        <img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10" style=""/><b>最新资讯</b><a href="#" class="right hong">更多》&nbsp;&nbsp;</a>
    </div>
        <div class="bodd">
            <ul class="biao_02" style="width:540px;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e5c1f2126d5c3220bfe9056f9e5bbfe3&action=lists&catid=7&num=7&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'7','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'7','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>·  <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>

    <div class="right top_10">
    <div class="bood">
        <img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>资料下载</b><a href="index.php?m=content&c=index&a=lists&catid=15" class="right hong">更多》&nbsp;&nbsp;</a></div>
        <div class="bodd">
            <ul class="biao_02" style="width:540px;">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=440e750186cdb41c0416d23d8a1c2fa1&action=lists&catid=15&num=7&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>·  <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>