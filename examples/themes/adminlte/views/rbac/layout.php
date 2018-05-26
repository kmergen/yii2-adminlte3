<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

/**
 * @var $this     yii\web\View
 * @var $content string
 */

use dektrium\rbac\widgets\Menu;
?>

<div class="card">
    <div class="card-header">
        <?= Menu::widget([
            'options' => ['class' => 'nav-pills card-header-pills']
        ]) ?>
    </div>
    <div class="card-body">
        <?= $content ?>
    </div>
</div>
