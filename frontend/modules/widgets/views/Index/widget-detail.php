<?php 
$this->title = 'detail';
$this->params['breadcrumbs'][] = '插件分析详情';
$this->registerCssFile('http://www.yiichina.com/css/site.css');
?>
<div class="row">
    <div class="col-lg-9">
		<div class="page-header" style='margin-top:0px;'>
            <h1>
                <?=$widgetsData->title?> <small></small>
            </h1>
        </div>
		<div class="action">
            <span class="user"><a href="javascript:void(0)"><span class="fa fa-user"></span><?=$widgetsData->author?></a></span>
            <span class="time"><span class="fa fa-clock-o"></span> <?=date('Y-m-d H:i:s',$widgetsData->instime)?></span>
            <span class="views"><span class="fa fa-eye"></span> <?=$widgetsData->pageviews?>次浏览</span>
            <!--<span class="answers"><a href="#answers"><span class="fa fa-comments-o"></span> 5条回答</a></span>-->
            <span class="favourites"><a data-original-title="收藏" href="javascript:void(0)" title="" data-toggle="tooltip"><span class="fa fa-star-o"></span> <em>0</em></a>人收藏</span>
            <!--<span class="money"><span class="fa fa-database"></span> 悬赏 20 金钱</span>-->
        </div>
		<?=$widgetsData->contents?>

        <ul class="tag-list list-inline"><li><a class="label label-success" href="javascript:void(0)">created_at</a></li><li><a class="label label-success" href="javascript:void(0)">updated_at</a></li></ul>
        <div data-bd-bind="1461140035643" class="bdsharebuttonbox bdshare-button-style0-16">
            <a href="#" class="bds_more" data-cmd="more">分享到：</a>
            <a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a>
            <a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a>
            <a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a>
            <a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren">人人网</a>
            <a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a>
            <a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq">QQ好友</a>
        </div>
        <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	</div>
	
	<div class="col-lg-3"> 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">热门教程</h2>
            </div>
            <div class="panel-body">
                <ul class="post-list">
					<li><a href="/tutorial/705">yii2搭建完美后台并实现rbac权...</a></li>
					<li><a href="/tutorial/467">解决提交表单出现400错误的问...</a></li>
					<li><a href="/tutorial/320">yii2 邮件发送</a></li>
					<li><a href="/tutorial/509">数据库的增删改查操作</a></li>
					<li><a href="/tutorial/112">Yii2.0 依赖注入(DI)和依赖注...</a></li>
					<li><a href="/tutorial/121">Yii2.0 路由（Route）的实现原...</a></li>
					<li><a href="/tutorial/550">Yii2使用Redis - 从安装redis...</a></li>
					<li><a href="/tutorial/331">Yii框架中使用CHtmlPurifier过...</a></li>
					<li><a href="/tutorial/96">Yii2.0 数据库关联查询</a></li>
					<li><a href="/tutorial/361">23种设计模式详解及其PHP实现...</a></li>
				</ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">热门标签</h2>
            </div>
            <div class="panel-body">
                <ul class="tag-list list-inline">
					<li><a class="label label-success" href="/tutorial?tag=yii2">yii2</a></li>
					<li><a class="label label-success" href="/tutorial?tag=yii2.0">yii2.0</a></li>
				</ul>           
			</div>
        </div>

			<!--<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">活跃会员</h2>
				</div>
				<div class="panel-body">
					<ul class="avatar-list">
						<li><a title="" data-original-title="" href="/user/26352" rel="author"><img src="/uploads/avatar/000/02/63/52_avatar_small.jpg" alt="icultivator"></a></li>
						<li><a title="" data-original-title="" href="/user/32729" rel="author"><img src="/images/noavatar_small.gif" alt="specialnot"></a></li>
						<li><a title="" data-original-title="" href="/user/2" rel="author"><img src="/uploads/avatar/000/00/00/02_avatar_small.jpg" alt="╃巡洋艦㊣"></a></li>
						<li><a title="" data-original-title="" href="/user/28467" rel="author"><img src="/uploads/avatar/000/02/84/67_avatar_small.jpg" alt="小伙儿"></a></li>
						<li><a title="" data-original-title="" href="/user/29312" rel="author"><img src="/uploads/avatar/000/02/93/12_avatar_small.jpg" alt="bubifengyun"></a></li>
						<li><a title="" data-original-title="" href="/user/25960" rel="author"><img src="/uploads/avatar/000/02/59/60_avatar_small.jpg" alt="刘东东"></a></li>
						<li><a title="" data-original-title="" href="/user/30834" rel="author"><img src="/images/noavatar_small.gif" alt="qq3737002"></a></li>
						<li><a title="" data-original-title="" href="/user/26718" rel="author"><img src="/images/noavatar_small.gif" alt="yiissy001"></a></li>
						<li><a title="" data-original-title="" href="/user/33537" rel="author"><img src="/uploads/avatar/000/03/35/37_avatar_small.jpg" alt="yeyu"></a></li>
						<li><a title="" data-original-title="" href="/user/25055" rel="author"><img src="/uploads/avatar/000/02/50/55_avatar_small.jpg" alt="燕玉苗"></a></li>
						<li><a title="" data-original-title="" href="/user/9849" rel="author"><img src="/uploads/avatar/000/00/98/49_avatar_small.jpg" alt="游学"></a></li>
						<li><a title="" data-original-title="" href="/user/25668" rel="author"><img src="/uploads/avatar/000/02/56/68_avatar_small.jpg" alt="金色木叶枫"></a></li>
						<li><a title="" data-original-title="" href="/user/28094" rel="author"><img src="/uploads/avatar/000/02/80/94_avatar_small.jpg" alt="小马哥"></a></li>
						<li><a title="" data-original-title="" href="/user/30420" rel="author"><img src="/uploads/avatar/000/03/04/20_avatar_small.jpg" alt="蛋黄派"></a></li>
						<li><a title="" data-original-title="" href="/user/4169" rel="author"><img src="/uploads/avatar/000/00/41/69_avatar_small.jpg" alt="advance100"></a></li>
						<li><a title="" data-original-title="" href="/user/35914" rel="author"><img src="/uploads/avatar/000/03/59/14_avatar_small.jpg" alt="小程府"></a></li>
					</ul>
				</div>
			</div>-->
		</div>
</div>