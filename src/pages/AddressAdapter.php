<?php


namespace execut\pagesAlias\pages;


use execut\pages\crudFields\pageAddress\Adapter;
use execut\pages\models\Page;

class AddressAdapter implements Adapter
{
    public function toArray($address)
    {
        return [
            'alias' => trim($address, '/'),
        ];
    }

    public function toString($params)
    {
        if (!empty($params['alias'])) {
            return '/' . $params['alias'];
        }
    }

    public function getKey():int {
        return 2;
    }

    public function getLabel():string {
        return \yii::t('execut/pagesAlias', 'Alias');
    }

    public function getFields():array {
        return [
            'alias'
        ];
    }

    public function initPageFields(Page $page)
    {
    }
}