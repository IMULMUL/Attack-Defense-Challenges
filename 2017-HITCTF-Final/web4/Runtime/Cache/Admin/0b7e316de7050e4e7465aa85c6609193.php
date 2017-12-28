<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Left</title>
<link rel='stylesheet' type='text/css' href='/Public/css/admin-left.css' />
<script language="JavaScript" type="text/javascript" charset="utf-8" src="/Public/jquery/jquery-1.7.2.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	$("a").click(function(){
		$("a").removeClass("on"); 
		$(this).addClass("on");
		$(this).blur();
	});
});
</script>
<base target="right">
</head>
<body class="body">
<table width="140" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr><td valign="top" class="left">
<div id="menu0" style="display:block">
<a href="?s=Admin-Admin-Config" class="on">网站信息配置</a>
<a href="?s=Admin-List-Show">网站分类管理</a>
<a href="?s=Admin-List-Add">添加网站分类</a>
<a href="?s=Admin-Index-Right">系统运行环境</a>
<a href="?s=Admin-Nav-Show">快捷菜单设置</a>
<?php if(is_array($array_nav)): $i = 0; $__LIST__ = $array_nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ppting): $mod = ($i % 2 );++$i;?><a href="<?php echo ($ppting); ?>"><?php echo ($key); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="menu1" style="display:none">

<a href="?s=Admin-Ting-Show" class="on">作品数据管理</a>
<a href="?s=Admin-Ting-Add">添加作品数据</a>
<a href="?s=Admin-News-Show">新闻资讯管理</a>
<a href="?s=Admin-News-Add">添加新闻资讯</a>
<a href="?s=Admin-Special-Show">网站专题管理</a>
<a href="?s=Admin-Special-Add">添加网站专题</a>
<a href="?s=Admin-Tag-Show">标签TAG管理</a>
<a href="?s=Admin-Ting-Show-status-2" class="line">未审核的作品</a>
<a href="?s=Admin-Ting-Show-status-3" class="line">待复查的作品</a>
<a href="?s=Admin-Ting-Show-status-1" class="line">已审核的作品</a>
<a href="?s=Admin-Ting-Show-url-1" class="line">无播放地址作品</a>

</div>
<div id="menu2" style="display:none">
<a href="?s=Admin-Caiji-Show" class="on">一键采集作品</a>
<a href="?s=plus-dswin-show">定时自动采集</a>

 

</div>
<div id="menu3" style="display:none">
<a href="?s=Admin-Cache-Show" class="on">系统缓存管理</a>
<a href="?s=Admin-Slide-Show">幻灯贴片管理</a>
<a href="?s=Admin-Slide-Add">添加幻灯贴片</a>
<a href="?s=Admin-Ads-Show">网站广告管理</a>
<a href="?s=Admin-Ads-Add">添加网站广告</a>
<a href="?s=Admin-Link-Show">友情链接管理</a>
<a href="?s=Admin-Link-Add">添加友情链接</a> 
<a href="?s=Admin-Pic-Down" onClick="return confirm('消耗资源较多，请勿在高峰期执行该操作!')">下载作品远程图片</a>
<a href="?s=Admin-Pic-news" onClick="return confirm('消耗资源较多，请勿在高峰期执行该操作!')">下载新闻缩略图图片</a>

</div>
<div id="menu4" style="display:none">
<a href="?s=Admin-Template-Show" class="on">模板在线管理</a>
</div>
<div id="menu5" style="display:none">
<a href="?s=Admin-Create-Show" class="on">网站生成选项</a>     
<a href="?s=Admin-Create-Index">生成网站首页</a>

<a href="?s=Admin-Create-Maps">生成网站地图</a>
<a href="?s=Admin-Create-Mytemplate">生成自定义模板</a>
</div>
<div id="menu6" style="display:none">
<a href="?s=Admin-Admin-Show" class="on">后台管理员</a>
<a href="?s=Admin-Admin-Add">添加管理员</a>
<a href="?s=Admin-Gb-Show">留言管理</a>
</div>
<div id="menu7" style="display:none">
<a href="?s=Admin-Data-Show" class="on">数据库备份</a>
<a href="?s=Admin-Data-Restore">数据库恢复</a>
<a href="?s=Admin-Data-Sql">执行SQL语句</a>
<a href="?s=Admin-Data-Replace">数据批量替换</a>  
</div>

<div style="display:none"><script language="javascript" type="text/javascript" src="//js.users.51.la/19164783.js"></script></div>

</td></tr>
<tr><td class="power">Powered by <a href="<?php echo (L("ppting_homeurl")); ?>" target="_blank">Gxlcms</a><?php echo ($vc); ?></td></tr>
</table>
</body>
</html>