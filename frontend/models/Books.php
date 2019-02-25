<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 19.02.2019
 * Time: 12:00
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Books extends ActiveRecord
{
    public static function tableName()
    {
        return 'table_books';
    }

    public function rules()
    {
        return [
            [['title', 'author', 'date_publication'], 'required'],
            [['date_publication'], 'date', 'format'=>'php:Y-m-d']
        ];
    }
}