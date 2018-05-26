<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

/* @var $this yii\web\View */
/* @var $dataProviderRecentUsers yii\data\ActiveDataProvider */
/* @var $dataProviderRecentFische yii\data\ActiveDataProvider */

use yii\helpers\Url;
use yii\widgets\Pjax;

$this->title = 'Dashboard';
$this->params['bodyCssClass'] = 'dashboard';
?>
<div class="row">
    <div class="col-md-6">
        <?php
        Pjax::begin([
            'enablePushState' => false,
        ]);
        echo $this->render('_recent-fische', ['dataProvider' => $dataProviderRecentFische]);
        Pjax::end(); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <?php
        Pjax::begin([
            'enablePushState' => false,
        ]);
        echo $this->render('_recent-users', ['dataProvider' => $dataProviderRecentUsers]);
        Pjax::end(); ?>
    </div>

    <div class="col-md-6">
        <?php
        Pjax::begin([
            'enablePushState' => false,
        ]);
       echo $this->render('_recent-fische', ['dataProvider' => $dataProviderRecentFische]);
        Pjax::end(); ?>
    </div>
</div>

