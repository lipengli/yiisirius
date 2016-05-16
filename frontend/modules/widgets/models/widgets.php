<?php 
namespace frontend\modules\widgets\models;

use Yii;

class widgets extends \yii\db\ActiveRecord
{
	public function rules(){
		return [
			[['title','contents','img'],'safe']
		];
	}
	
	public static function tableName(){
		return 'widgets';
	}
	
	public function attributeLabels(){
		return [
			'title' => '标题',
			'contents' => '内容'
		];
	}
	
}