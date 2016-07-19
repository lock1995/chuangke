<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div class="top_01">
     <div class="left top_10" style="width:100%">
      <!-- <div class="bood"><img src="<?php echo IMG_PATH;?>Design/biao_01.png" class="left left_10"/><b>友情链接</b></div> -->
      <!-- <div class="bodd juli_nei_top10" style="background:#fff"> -->
        <ul class="biao_05">
         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb533414c369d5f37f50948ad33bf4b3&action=lists&catid=40&num=25&order=id+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'40','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'40','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
         <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
         <li><a href="<?php echo $r['url'];?>" target="_blank" <?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
         <?php $n++;}unset($n); ?>
         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
       </ul>
     <!-- </div> -->
   </div>
 </div>
 <div class="nav juli_nei_10 top_10">
  热线电话：0451-82392812<br />
  Copyright © 2016 大学生创客网
</div>
</div>
</body>
</html>