<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 19.02.2019
 * Time: 11:59
 */

namespace frontend\models;


use yii\db\ActiveRecord;

class Authors extends ActiveRecord
{
    public static function tableName()
    {
        return 'table_authors';
    }

    public function rules()
    {
        return [
            [['full_name'], 'required']
        ];
    }

    public function getBooks()
    {
        return $this->hasOne(Books::className(), ['full_name' => 'author']);
    }
}