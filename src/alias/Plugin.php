<?php
/**
 */

namespace execut\pagesAlias\alias;

use execut\pagesAlias\models\Page;

class Plugin implements \execut\alias\Plugin
{
    public $modelClass = Page::class;
    public function getModels()
    {
        return [
            [
                'modelClass' => $this->modelClass,
                'order' => 100,
                'route' => 'pages/frontend/index'
            ],
        ];
    }
}