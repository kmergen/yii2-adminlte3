<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */
$this->context->layout = '@app/themes/adminlte/views/layouts/blank';
$this->title = Yii::t('user', 'Sign in');
$this->params['bodyCssClass'] = 'app flex-row align-items-center';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-1">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <?php
                        $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'enableAjaxValidation' => true,
                            'enableClientValidation' => false,
                            'validateOnBlur' => false,
                            'validateOnType' => false,
                            'validateOnChange' => false,
                            'successCssClass' => 'is-valid',
                            'errorCssClass' => 'is-invalid',
                        ])
                        ?>

                        <?= $form->field($model, 'login', ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]) ?>

                        <?= $form->field($model, 'password', ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])->passwordInput()->label(Yii::t('user', 'Password')) ?>

                        <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>

                        <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-primary btn-block', 'tabindex' => '3']) ?>

                        <?php ActiveForm::end(); ?>

                        <?=
                        Connect::widget([
                            'baseAuthUrl' => ['/user/security/auth'],
                        ])
                        ?>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Backend</h2>
                            <p>You can only login to Backend if you have access rights. If you not sure send an email
                                to our Administrator.
                            </p>
                            <?= Html::a(Yii::t('backend', 'Send Email'), Yii::$app->urlManagerFrontend->createUrl(['/site/contact']), ['class' => 'btn btn-primary active mt-3']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







