<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

namespace kmergen\adminlte\widgets;

use Yii;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs as BaseBreadcrumbs;

class Breadcrumbs extends BaseBreadcrumbs
{
    /**
     * @inheritdoc
     */
    public $itemTemplate = "<li class=\"breadcrumb-item\">{link}</li>\n";
    /**
     * @inheritdoc
     */
    public $activeItemTemplate = "<li class=\"breadcrumb-item active\">{link}</li>\n";
}
