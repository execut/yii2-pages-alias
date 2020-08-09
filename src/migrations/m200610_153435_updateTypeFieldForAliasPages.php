<?php
namespace execut\pagesAlias\migrations;
use execut\pages\models\Page;
use execut\yii\migration\Migration;
use execut\yii\migration\Inverter;
use yii\caching\TagDependency;

class m200610_153435_updateTypeFieldForAliasPages extends Migration
{
    public function initInverter(Inverter $i)
    {
        $i->table('pages_pages')
            ->update([
                'type' => 2,
            ]);
        TagDependency::invalidate(\yii::$app->cache, [Page::CACHE_TAG]);
    }
}
