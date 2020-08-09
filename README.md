# yii2-pages-alias
Integration module for [execut/yii2-pages](https://github.com/execut/yii2-pages) and [yii2-alias](https://github.com/execut/yii2-alias).

For license information check the [LICENSE](LICENSE.md)-file.

[![Latest Stable Version](https://poser.pugx.org/execut/yii2-pages-alias/v/stable.png)](https://packagist.org/packages/execut/yii2-pages-alias)
[![Total Downloads](https://poser.pugx.org/execut/yii2-pages-alias/downloads.png)](https://packagist.org/packages/execut/yii2-pages-alias)
[![Build Status](https://travis-ci.com/execut/yii2-pages-alias.svg?branch=master)](https://travis-ci.com/execut/yii2-pages-alias)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require execut/yii2-pages-alias
```

or add

```
"execut/yii2-pages-alias": "dev-master"
```

to the require section of your `composer.json` file.

Usage
----
Add to your applications configs bootstrapping of module:
```php
return [
    'bootstrap' => [
        // for common app:
        'pagesAlias' => \execut\pagesAlias\bootstrap\Common::class,
        // for console app:
        'pagesAlias' => \execut\pagesAlias\bootstrap\Console::class,
    ]
];
```