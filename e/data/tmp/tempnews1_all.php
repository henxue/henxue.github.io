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
<title><?=$grpagetitle?>_<?=$public_r[sitename]?> - <?=$public_r[add_seotitle]?></title>
<link rel='stylesheet' id='main-css'  href='/skin/xiu/css/style.css' type='text/css' media='all' />
<link rel='canonical' href='<?=$grpagetitle?>' />
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<!--[if lt IE 9]><script src="/skin/xiu/js/html5.js"></script><![endif]-->
</head>
<body>
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
      <header class="article-header">
        <h1 class="article-title"><a href="<?=$grtitleurl?>"><?=$ecms_gr[title]?></a></h1>
        <ul class="article-meta">
          <li><?=$ecms_gr[username]?> 发布于 4小时前</li>
          <li>分类：<a href="<?=$grclassurl?>" title="查看<?=$class_r[$ecms_gr[classid]][classname]?>中的全部文章" rel="category tag"><?=$class_r[$ecms_gr[classid]][classname]?></a></li>
          <li class="post-views">阅读(<script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script>)</li>
          <li><a href="#pinglun" title="去发表你的看法">评论</a></li>
          <li></li>
        </ul>
      </header>
      <article class="article-content"><?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?></article>
      <div class="article-social"> <a href="javascript:;" class="action" data-pid="5429" data-event="like"><i class="glyphicon glyphicon-thumbs-up"></i>赞 (<span>0</span>)</a> <a href="#pinglun" class="action" data-event="login"><i class="glyphicon glyphicon-comment"></i>评论</a> <span class="action action-share bdsharebuttonbox"> <i class="glyphicon glyphicon-share"></i>分享 (<span class="bds_count" data-cmd="count"></span>)
        <div class="action-popover">
          <div class="popover top in">
            <div class="arrow"></div>
            <div class="popover-content"><a class="bds_qzone" data-cmd="qzone"></a><a class="bds_tsina" data-cmd="tsina"></a><a class="bds_weixin" data-cmd="weixin"></a><a class="bds_tqq" data-cmd="tqq"></a><a class="bds_sqq" data-cmd="sqq"></a><a class="bds_renren" data-cmd="renren"></a></div>
          </div>
        </div>
        </span> </div>
      <div class="article-tags"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
      <div class="relates">
        <h3 class="title"><strong>相关阅读</strong></h3>
        <ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('selfinfo',8,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>        
          <li><a href="<?=$bqr[titleurl]?>"><img data-original="<?=$bqr[titlepic]?>" class="thumb"/><?=esub($bqr[title],46)?></a></li>
<?php
}
}
?>         
        </ul>
      </div>
      <h3 class="title" id="pinglun"></h3>
      <!-- Duoshuo Comment BEGIN -->
	<div class="ds-thread" data-category="<?=$ecms_gr[classid]?>" data-thread-key="<?=$ecms_gr[id]?>" 
	data-title="<?=$ecms_gr[title]?>" data-author-key="" data-url=""></div>
<script type="text/javascript">
var duoshuoQuery = {short_name:"henxue"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = 'http://static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		|| document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- Duoshuo Comment END -->
<!--<script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script><form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">
<table width="100%" border="0" cellpadding="0" cellspacing="0" id="plpost">

<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="title">
<tr>
<td><strong>发表评论</strong></td>
<td align="right"><a href="/e/pl/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">共有<span><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</a></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="2">
<tr>
<td width="56%" align="left">用户名:
<input name="username" type="text" class="inputText" id="username" value="" size="16" /></td>
<td width="44%" align="left">密码:
<input name="password" type="password" class="inputText" id="password" value="" size="16" /></td>
</tr>
<tr>
<td align="left">验证码:
<input name="key" type="text" class="inputText" size="10" />
<img src="/e/ShowKey/?v=pl" align="absmiddle" /> </td>
<td align="left"><input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" />
匿名发表</td>
</tr>
</table>
<textarea name="saytext" rows="6" id="saytext"></textarea><input name="imageField" type="image" src="/e/data/images/postpl.gif"/>
<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />
<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />
<input name="enews" type="hidden" id="enews" value="AddPl" />
<input name="repid" type="hidden" id="repid" value="0" />
<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>"></td>
</tr>
</table>
</td>
</tr>
</table></form>-->
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