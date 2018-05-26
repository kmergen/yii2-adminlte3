<?php
/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->params['bodyCssClass'] = 'app flex-row align-items-center';
?>
<div class="error-page container">
    <div class="row justify-content-center">
        <?php if ($exception->statusCode < 500): ?>
            <div class="col-md-6">
                <div class="clearfix">
                    <h1 class="float-left display-3 mr-4 text-warning"><?= $exception->statusCode ?></h1>
                    <div class="error-content">
                        <h3><i class="fa fa-warning text-warning"></i> Oops! Something went wrong.</h3>
                        <p>
                            <?= nl2br(Html::encode($message)) ?>
                            You may <?= Html::a('return to dashboard', ['/']) ?>.
                        </p>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="col-md-6">
                <div class="clearfix">
                    <h1 class="float-left display-3 mr-4 text-danger"><?= $exception->statusCode ?></h1>
                    <div class="error-content">
                        <h3><i class="fa fa-warning text-danger"></i> Oops! Something went wrong.</h3>
                        <p>
                            <?= nl2br(Html::encode($message)) ?>
                            We will work on fixing that right away.
                            You may <?= Html::a('return to dashboard', ['/']) ?>.
                        </p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

