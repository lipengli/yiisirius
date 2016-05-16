<?php 
use yii\web\View;
use yii\helpers\Url;
use yii\helpers\StringHelper;
use yii\widgets\LinkPager;
use yii\helpers\Html;
$this->title = 'widgets';
$this->params['breadcrumbs'][] = '插件分析列表';
$this->registerCssFile('http://www.yiichina.com/css/site.css');
?>
<div class="row">
    <div class="col-lg-9">
	<div class="page-header" style='margin-top:0px;'>
		<h1>分析列表</h1>
		<ul id="w0" class="nav nav-tabs nav-main">
		<li class="active"><a href="/tutorial">最新发布</a></li>    
	</div>

	<ul id="w1" class="media-list">
		<?php foreach($widgetsData as $key=>$val): ?>
		<li class="media" data-key="709">
			<div class="media-left">
				<a title="" data-original-title="" href="javascript:void(0)" rel="author"><img class="media-object" src="<?=$val->img?>" alt="<?=$val->title?>"></a>
			</div>
			<div class="media-body">
				<h2 class="media-heading">
					<span class="fa fa-file-text-o fa-fw"></span> 
					<?=Html::a(StringHelper::truncate($val->title,30),['index/widget-detail','id'=>$val->id])?>
					<small><span class="fa fa-thumbs-o-up"></span> <!--<em>0</em>--></small>
				</h2>
				<div class="media-action">
						<a title="" data-original-title="" href="javascript:void(0)" rel="author"><?=$val->author?></a> 
					
					发布于 <?=date('Y-m-d H:i:s',$val->instime)?>
					<!--<span class="dot">•</span>0 人收藏<span class="dot">•</span>2.0 版本-->
				</div>
			</div>
			<div class="media-right"><a href="/tutorial/709">浏览<em><?=$val->pageviews?></em></a></div>
			<!--<div class="media-right"><a href="/tutorial/709#comments">评论<em>0</em></a></div>-->
		</li>
		<?php endforeach; ?>
		
	</ul>
	<?php echo LinkPager::widget([
		'pagination' => $pages
	]); ?>
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