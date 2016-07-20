<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div class="main" style="min-height:710px">
  <div class="left top_10" style="width:100%;">
    <div class="bood">
      <!-- <b class="left left_10">当前位置</b> -->
      <div class="crumbs" style="padding:0 0 3px 20px;background-position:5px -35px;">
        <a href="<?php echo siteurl($siteid);?>">首页</a>
        <span> > </span><?php echo catpos($catid);?> 详情
      </div>
    </div>
  </div>
  <div class="left top_10" style="width: 320px;">
      <div class="bood top_10"><img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>排行榜1</b></div>
      <div class="bodd">
        <ul class="biao_01 left_10" style="width:300px;">
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=af76218a6cf1ad004844423a6b73a239&action=lists&catid=16&where=%27catid%27+in+%287%2C18%29&num=7&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'16','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'16','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li>· <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
            <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
      <div class="bood top_10"><img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>排行榜2</b></div>
      <div class="bodd">
          <ul class="biao_01 left_10" style="width:300px;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c5eaf659a8414d7c9d4b1bdbea62e1fb&action=lists&catid=7&where=%27catid%27+in+%287%2C18%29&num=7&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'7','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'7','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>· <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
              <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
      </div>
      <div class="bood top_10"><img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>排行榜3</b></div>
      <div class="bodd">
          <ul class="biao_01 left_10" style="width:300px;">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c5eaf659a8414d7c9d4b1bdbea62e1fb&action=lists&catid=7&where=%27catid%27+in+%287%2C18%29&num=7&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'7','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'7','where'=>'\'catid\' in (7,18)','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
              <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>· <a href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
              <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
      </div>

      <div class="bood top_10">
        <img src="<?php echo IMG_PATH;?>Design/biao_01.png"
        class="left left_10">
        <b>
          导师帮帮团排行
          <a href="http://www.hiid.com.cn/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=61"
          class="hong right">
            更多&gt;&gt;
          </a>
        </b>
      </div>
      <div class="bodd">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
          <ul class="biao_18" style="width:320px;">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
              <li>
                  <div class="shu">NO<br/><b>1</b></div>
                  <a href="<?php echo $r['url'];?>"><p><?php echo $r['title'];?></p></a>
              </li>
            <?php $n++;}unset($n); ?>
          </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
      </div>
  </div>
  <div class="right top_10" style="width: 630px">
    <h2 class="left_02"><?php echo $title;?></h2>
    <div class="text_02"><?php echo $inputtime;?></div>
    <div class="text"><?php echo $description;?></div>
  </div>
</div>





              
              

<?php include template("content","footer"); ?>
