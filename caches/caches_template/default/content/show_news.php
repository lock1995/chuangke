<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
	.main{
		min-height: 710px;
	}
	#c-left{
        width: 100%;
        float: left;
        margin-right: 10px;
        margin-top: 10px;
    }
    .photo-list li{
		margin-bottom: 80px;
    }
    .cut{
         height:1px;
         width:100%;
         background:#ccc;
         overflow:hidden;
         margin-top: 20px;
    }
    .content{
        text-align: left;
        margin-top: 20px;
    }
</style>
<?php include template("content","header"); ?>
<div class="main">
    <div id="c-left">
        <h1><?php echo $title;?></h1>
        <h5><?php echo $inputtime;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览量：10</h5>
        <div class="cut"></div>
        <div class="content"><?php echo $description;?></div>
    </div>
</div>




















<?php include template("content","footer"); ?>