<?php

namespace ismagilovnail\spout\models;

use Yii;
use yii\base\Model;

class Excel extends Model {


    public function rules()
    {
        return [
            [['ip'], 'ip'],
            [['comment'], 'required'],
        ];
    }

}