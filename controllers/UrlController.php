<?php

namespace app\controllers;

use app\models\Admin;
use app\models\UrlForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\db\ActiveRecord;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class UrlController extends Controller
{


    public function actionUrl(){




        $model = new UrlForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $url = new Admin();
            $url->url = $model->url;
            $url->frequency = $model->frequency;
            $url->count=$model->count;
            $url->save();


            return $this->render('url-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('url', ['model' => $model]);
        }
    }


}
