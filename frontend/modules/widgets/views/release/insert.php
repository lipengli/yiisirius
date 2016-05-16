<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '发布';
$this->params['breadcrumbs'][] = '发布'; 
//注册kindeditor插件
$this->registerJsFile('/plugins/kindeditor/kindeditor-min.js', ['position' => yii\web\View::POS_END]);
$this->registerJsFile('/plugins/kindeditor/lang/zh_CN.js', ['position' => yii\web\View::POS_END]);
$this->registerCssFile('/plugins/kindeditor/themes/default/default.css');
$js = <<<JS
    KindEditor.ready(function(K) {
        var editor = K.create('#release-contents',{
            height:'500px',
            uploadJson:'/index.php?r=api/upload-kindeditor-file',
            urlType:'domain'
        });
    });
    //验证帖子内容为空的方法
    $("form").bind('beforeValidate', function(event, messages) {
        console(messages);
        $('#submitBtn').attr('disabled', true);
        $('#submitBtn').val('发布');;
    });

JS;
$this->registerJs($js);
?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>请填写以下字段登录：<span style='color:red;font-weight:bold;'><?=Yii::$app->session->getFlash('error');?></span></p>

    <div class="row">
        <div class="col-lg-12">
			<?php $form = ActiveForm::begin(['id'=>'add-post', 'options' => ['class' => 'form-horizontal','enctype'=>"multipart/form-data"]]);?>
				<?=$form->field($model,'title',[
					'template' => '{label}<div class="col-sm-11">{input}</div>{hint}{error}',
					'errorOptions' =>['class'=>'help-block col-sm-2'],
					'inputOptions' => ['placeholder'=>'请输入文章标题']
				])->label('标题',['class'=>'col-sm-1 control-label']);?>
				<?=$form->field($model,'img',[
					'template'=>'{label}<div class="col-sm-11">{input}</div>{hint}{error}',
					'errorOptions' => ['class'=>'help-block col-sm-2']
				])->label('logo',['class'=>'col-sm-1 control-label'])->fileInput()?>
				<?=$form->field($model,'contents',[
					'template' => '{label}<div class="col-sm-11">{input}</div>{hint}{error}',
					'errorOptions' => ['class'=>'help-block col-sm-2']
				])->label('内容', ['class'=>'col-sm-1 control-label'])->textarea()?>
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-10">
						<?=Html::submitButton('发布', ['class' => 'btn btn-success', 'id' => 'submitBtn'])?>
					</div>
				</div>
			<?php ActiveForm::end();?>
        </div>
    </div>
</div>