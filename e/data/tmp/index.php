<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="<?=$public_r[sitename]?>">
<title><?=$public_r[sitename]?> - <?=$public_r[add_seotitle]?></title>
<link rel='stylesheet' id='main-css'  href='/skin/xiu/css/style.css' type='text/css' media='all' />
<link rel='canonical' href='恨雪博客' />
<meta name="keywords" content="恨雪,恨雪博客,恒学网络,帝国cms网站建设,帝国cms建站,帝国cms仿站,帝国cms模版,帝国cms免费模版" />
<meta name="description" content="恨雪博客是一个专注于帝国CMS网站建设与模版制作的网页设计博客，站长恨雪。" />
<!--[if lt IE 9]><script src="/skin/xiu/js/html5.js"></script><![endif]-->
</head>
<body class="home blog">
<section class="container">
  <header class="header">
    <div class="logo"><a href="<?=$public_r[newsurl]?>" title="<?=$public_r[sitename]?> - <?=$public_r[add_seotitle]?>"><?=$public_r[sitename]?></a></div>
    <ul class="nav">
<li><a href="<?=$public_r[newsurl]?>" target="_self">首页</a></li>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid from phome_enewsclass limit 20',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a <? if ($bqr[classid]==$GLOBALS[navclassid]) 
{
echo "class='current'";
}?>  href="<?=$bqsr[classurl]?>" target="_blank"><?=$bqsr[classname]?></a></li>
<?php
}
}
?>    
    </ul>
    <div class="feeds"> <a class="feed feed-rss" rel="external nofollow" href="http://feed.feedsky.com/hengxue" title="Feed订阅<?=$public_r[sitename]?>" target="_blank">订阅</a> <a class="feed feed-weibo" rel="external nofollow" href="http://weibo.com/hongrongshun" title="关注博主新浪微博" target="_blank">新浪微博</a> <a class="feed feed-tqq" rel="external nofollow" href="http://t.qq.com/rosonho" title="关注博主腾讯微博" target="_blank">腾讯微博</a> <a class="feed feed-weixin" rel="external nofollow" href="javascript:;">关注微信</a> </div>
    <div class="slinks">QQ:415245871</div>
  </header>
  <div class="content-wrap">
    <div class="content">
      <div class="focusmo">
        <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',1,22,1,'firsttitle=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>          
<li class="large"><a href="<?=$bqsr[titleurl]?>"><img class="thumb" data-original="<?=$bqr[titlepic]?>">
<h4><?=esub($bqr[title],30)?></h4></a></li>
<?php
}
}
?>   
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',4,22,1,'firsttitle=2');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>             
<li><a href="<?=$bqsr[titleurl]?>"><img class="thumb" data-original="<?=$bqr[titlepic]?>">
<h4><?=esub($bqr[title],30)?></h4> </a></li>
<?php
}
}
?>
        </ul>
      </div>
      <div class="most-comment-posts">
        <h3 class="title"><strong>博主觉得还不错的文章</strong></h3>
        <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',5,20,0,'isgood=2');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>         
<li><span class="label label-<?=$bqno?>"><?=$bqno?></span><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],50)?></a></li>
<?php
}
}
?>  
        </ul>
      </div>
      <h3 class="title"><small class="pull-right">恨雪较少更新博文，有问题可联系我415245871</small><strong>最近更新</strong></h3>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',10,18,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>      
      <article class="excerpt excerpt-one">
        <header><a class="cat label label-important" href="<?=$bqsr[classurl]?>"><?=$bqsr[classname]?><i class="label-arrow"></i></a>
          <h2><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],40)?></a></h2>
          </header>
        <p class="text-muted time"><?=$bqsr[username]?> 发布于 <?=date("Y-m-d H:i:s",$bqr[newstime])?></p>
        <p class="focus"><a href="<?=$bqsr[titleurl]?>" class="thumbnail"><span class="item"><span class="thumb-span"><img data-original="<?=$bqr[titlepic]?>" class="thumb"/></span></span></a></p>
        <p class="note"><?=esub($bqr[smalltext],300)?>...</p>
      </article>
<?php
}
}
?>      
    </div>
  </div>
  <aside class="sidebar">
    <div class="widget widget_tags">
      <h3 class="title"><strong>热门标签</strong></h3>
      <ul class="widget_tags_inner">
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select listname,filepath from [!db.pre!]enewsuserlist order by listid desc",30,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li><a title="点击查看所有关于<?=$bqr[listname]?>的文章" href="/tags/<?=$bqr[filepath]?>"><?=$bqr[listname]?></a></li>
<?php
}
}
?> 	  
      </ul>
    </div>
    <div class="widget widget_searchbox">
      <h3 class="title"><strong>搜索文章</strong></h3>
<form accept-charset="utf-8" method="get" action="http://www.baidu.com/baidu" target="_blank" class="search-form">
<input type="text" name="word" class="form-control" placeholder="输入关键字" autofocus="" x-webkit-speech="">
<input type="submit" class="btn" value="搜索" name="submit">
        <input type="hidden" value="baidulocal" name="tn">
        <input type="hidden" value="3" name="cl">
        <input type="hidden" value="2097152" name="ct">
        <input type="hidden" value="henxue.net" name="si">
      </form>     
    </div>
    <script src="/d/js/acmsd/thea1.js"></script>
    <div class="widget widget_postlist">
      <h3 class="title"><strong>最新文章</strong></h3>
      <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('news',6,18,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>        
<li><a href="<?=$bqr[titleurl]?>"><span class="thumbnail"><img data-original="<?=$bqr[titlepic]?>" class="thumb"/></span><span class="text"><?=esub($bqr[title],46)?></span><span class="text-muted post-views">阅读(<?=$bqr[onclick]?>)</span></a></li>
<?php
}
}
?>  	  
      </ul>
    </div>
  </aside>
  <footer class="footer"> &copy; 2014 <a href="<?=$public_r[newsurl]?>"><?=$public_r[sitename]?></a> &nbsp; 感谢 <a href="http://www.alibaixiu.com" target="_blank">阿里百秀</a> &nbsp; <a href="/sitemap.xml" target="_blank">网站地图</a> </footer>
  <div class="rollto"><a href="javascript:;"></a></div>
</section>
<script type='text/javascript' src='/skin/xiu/js/jquery.js?ver=1.0.1'></script> 
<script type='text/javascript' src='/skin/xiu/js/bootstrap.js?ver=1.0.1'></script> 
<script type='text/javascript' src='/skin/xiu/js/custom.js?ver=1.0.1'></script>
</body>
</html>