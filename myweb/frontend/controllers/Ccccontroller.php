<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use common\services\UrlServices;
use common\composers\BaseController;


class CccController extends Controller
{
	public function actionIndex()
	{
		var_dump('
			hello world');
	}
}