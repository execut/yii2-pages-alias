<?php


namespace execut\pagesAlias\models;


class Page extends \execut\pages\models\Page
{
    public static function find()
    {
        return parent::find()->andWhere(['type' => 2]);
    }
}