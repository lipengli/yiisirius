<?php 
namespace frontend\modules\widgets\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use frontend\modules\widgets\models\release;
use yii\helpers\Url;
use frontend\controllers\ApiController;

class ReleaseController extends Controller
{
	/**
	*	发布
	*/
	public function actionInsert(){
		$model = new release;
		$request = Yii::$app->request;
		if (Yii::$app->request->isPost) {
			if($model->load($request->post()) && $model->validate()){
				$uploadData = ApiController::actionUploads($model,'img');
				if($uploadData['status'] === 'ok'){
					$model['img'] = $uploadData['imgUrl'];
					$model->instime = time();
					$model->pageviews = 0;
					if(!empty(Yii::$app->user->identity->username)){
						$model->author = Yii::$app->user->identity->username;
					}else{
						$model->author = "来宾";
					}
					$model->save(false);
					$this->redirect(Url::toRoute('index/index'));
				}else{
					Yii::$app->session->setFlash('error',$uploadData['message']);
				}
			}
		}
		return $this->render('insert',[
			'model' => $model
		]);
	}
	
	
}