<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Admin;

class AdminController extends Controller
{

    public function actionAdmin() {
        $query = Admin::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $url = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('admin', [
            'url' => $url,
            'pagination' => $pagination,
        ]);


}
}