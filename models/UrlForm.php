<?php

namespace app\models;
use yii\base\Model;

class UrlForm extends Model
{

    public $url;
    public $frequency;
    public $count;

    public function rules()
    {
        return [
            [['url', 'frequency', 'count'], 'required']
        ];
    }

}