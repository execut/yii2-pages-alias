<?php
/**
 */

namespace execut\pagesAlias\pages;

use execut\navigation\Page;
use execut\navigation\page\NotFound;
use yii\base\Exception;
use yii\db\ActiveQuery;

class Plugin implements \execut\pages\Plugin
{
    public function getPageFieldsPlugins() {
        return [
            [
                'class' => \execut\alias\crudFields\Plugin::class,
                'isRequired' => function ($row) {
                    return $row->type == 2;
                },
            ],
        ];
    }

    public function getCacheKeyQueries() {
        return [];
    }

    public function initCurrentNavigationPage(Page $navigationPage, \execut\pages\models\Page $pageModel) {
    }

    public function applyCurrentPageScopes(ActiveQuery $q)
    {
        return $q;
    }

    public function configureErrorPage(NotFound $notFoundPage, \Exception $e)
    {
    }

    public function getPageAddressAdapters(): array
    {
        return [
            new AddressAdapter(),
        ];
    }
}