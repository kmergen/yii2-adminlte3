<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

/* @var $this yii\web\View */
/* @var $dataProviderRecentUsers yii\data\ActiveDataProvider */

use yii\widgets\Pjax;

$this->title = 'Dashboard';
$this->params['bodyCssClass'] = 'dashboard';

$js = <<<JS
    var el = $("[data-pjax-container]");
   $(el).on('pjax:clicked', function() {
       var overlay = $('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
       $(this).find('.card').append(overlay);
   });
   $(el).on('pjax:complete', function() {
       $(this).find('.overlay').remove(); 
   });
JS;
?>
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
        Next widget
    </div>
</div>

