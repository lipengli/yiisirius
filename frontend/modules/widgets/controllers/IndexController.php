<?php 
namespace frontend\modules\widgets\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Url;
use frontend\modules\widgets\models\widgets;
use yii\data\Pagination;

class IndexController extends Controller
{
	/**
	*	插件分析列表页
	*/
	public function actionIndex(){
		$widgetsFind = widgets::find();
		$widgetsFindQuery = clone $widgetsFind;
		$pages = new Pagination(['totalCount' =>$widgetsFindQuery->count(),'defaultPageSize'=>2]);

		$widgetsData = $widgetsFind->orderBy('instime desc')
									->offset($pages->offset)
									->limit($pages->limit)
									->all();
		return $this->render('index',[
			'widgetsData' => $widgetsData,
			'pages' => $pages
		]);
	}
	
	/**
	*	插件分析详情页
	*/
	public function actionWidgetDetail(){
		$id = (int)Yii::$app->request->get('id');
		if(empty($id)){
			$this->redirect(Url::toRoute("index/index"));
		}
		$widgetsData = widgets::findOne($id);
		widgets::updateAllCounters(['pageviews'=>1],'id='.$id);
		return $this->render('widget-detail',[
			'widgetsData' => $widgetsData
		]);
	}
}
