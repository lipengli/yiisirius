<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
?>
<?=Html::style('img{color:red;border:1px solid red;}')?>
<?=Html::a($message,Url::toRoute('site/say'),['style'=>'color:yellow'])?>
<?=Html::tag('a','你好',['target'=>'_blank','href'=>'#'])?>
<?=Html::img('#')?>
<?=Html::label("这就是我")?>
<?=Html::button('登陆',['class'=>'btn btn-primary'])?>
<?=Html::resetButton('重置',['class'=>'btn btn-primary'])?>
<?=Html::input('text','username','',['placeholder'=>'username','class'=>'form-control'])?>
<?=Html::hiddenInput("id",'1',['class'=>'form-control'])?>
<?=Html::passwordInput("password",'',['placeholder'=>'password','class'=>'form-control'])?>
<?=Html::radio('classt[]',false,['value'=>'ts'])?> 请选我
<?=Html::radio('classt[]',false,['value'=>'tsone'])?> 请选我
<?=Html::dropDownList('list',2,[1,2,3])?>
<?=Html::listBox('listbox',2,[1,2,3])?>
<?=Html::checkBoxList("checkBoxList",2,[1,2,3])?>
<?=Html::radioList('radiolist[]',2,[1,2,3])?>
<?=Html::ul([1,2,3],['class'=>'list-group','itemOptions'=>['class'=>'list-group-item']])?>

<?php $form = ActiveForm::begin()?>
<?= $form->field($model,'email')?>
<?= $form->field($model,'username')?>

<?php ActiveForm::end()?>