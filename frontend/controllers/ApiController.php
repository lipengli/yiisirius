<?php 
namespace frontend\controllers;

use Yii;
use yii\web\UploadedFile;
use yii\web\Controller;
use yii\helpers\Url;
use frontend\modules\widgets\models\release;
use frontend\controllers\Services_JSON;

class ApiController extends Controller
{
	public $enableCsrfValidation = false;
	
	/**
	*	上传kindeditor文件
	*/
	public function actionUploadKindeditorFile(){
		$upload = UploadedFile::getInstanceByName('imgFile');
		if(empty($_FILES)){
			return ['error'=>1,'message'=>'上传内容为空'];
		}
		
		$fileParts = pathinfo($_FILES['imgFile']['name']);//扩展名称
		if(!in_array(strtolower($fileParts['extension']),Yii::$app->params['allowedUploadFileExtensions'])){
			return ['error'=>1,'message'=>'上传类型不符'];
		}else{
			$tempFile = $_FILES['imgFile']['tmp_name'];
			$timeDir = date('Y-m-d',time());
			$rootPath = Url::to('@webroot/Uploads/').$timeDir;
			$webPath = Url::to('@web/Uploads/').$timeDir;
			$fileName = time().rand(1000,9999).rand(1000,9999).'.'.strtolower($fileParts['extension']);
	
			if(!file_exists($rootPath)){
				mkdir($rootPath,true);
			}
			$file_url = $rootPath.'/'.$fileName;
			$file_urlweb = $webPath.'/'.$fileName;
			$status = $upload->saveAs($file_url);
			
			if($status){
				header('Content-type: text/html; charset=UTF-8');
				$json = new Services_JSON();
				echo $json->encode(array('error' => 0, 'url' => $file_urlweb));
				exit;
			}else{
				echo "上传失败";
			}
			
		}
	}
	
	/**
	*	公共的上传文件方法
	*	@param string $name 文件的input名称
	*/
	public static function actionUploads($model,$names = 'imgFile',$option = []){
		$upload = UploadedFile::getInstance($model,$names);
		if(empty($upload)){
			return ['error'=>1,'status'=>'fail','message'=>'上传内容为空'];
		}
		//自定义子目录 默认为upload
		if(isset($option['subdirectory'])){
			$subdirectory = trim($option['subdirectory'],'/').'/';
		}else{
			$subdirectory = 'upload/';
		}
		
		$fileExtension = $upload->getExtension();//上传文件的扩展名称
		if(!in_array($fileExtension,Yii::$app->params['allowedUploadFileExtensions'])){
			return ['error'=>1,'status'=>'fail','message'=>'上传类型不符'];
		}else{
			$timeDir = date('Y-m-d',time());//时间子目录
			$rootPath = Url::to('@webroot/Uploads/').$subdirectory.$timeDir;//本地目录
			$webPath = Url::to('@web/Uploads/').$subdirectory.$timeDir;//线上读取目录
			$fileName = time().rand(1000,9999).rand(1000,9999).'.'.$fileExtension;//文件名称
			if(!file_exists($rootPath)){
				mkdir($rootPath,0777,true);
			}
			$file_url = $rootPath.'/'.$fileName;
			$file_urlweb = $webPath.'/'.$fileName;
			$status = $upload->saveAs($file_url);
			if($status){
				return ['error'=>'2','status'=>'ok','message'=>'上传成功','imgUrl'=>$file_urlweb];
			}else{
				return ['error'=>'1','status'=>'fail','message'=>$upload->getHasError()];
			}
		}
	}
}