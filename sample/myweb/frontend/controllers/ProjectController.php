<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use common\services\UrlServices;
use common\composers\BaseController;


class ProjectController extends BaseController
{
    public $layout = "public";

    //首页
    public function actionIndex()
    {
        
        return $this->render('index');
    }

    //游戏中心
    public function actionGames()
    {

        return $this->render('games');
    }

    //回顾
    public function actionReviews()
    {

        return $this->render('reviews');
    }

    //游戏资讯
    public function actionNews()
    {

        return $this->render('single');
    }

    //博客
    public function actionBlog()
    {

        return $this->render('blog');
    }

    //联系我们
    public function actionContact()
    {

        return $this->render('contact');
    }
}