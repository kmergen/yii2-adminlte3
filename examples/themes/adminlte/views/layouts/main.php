<?php
/**
 * KM Websolutions Projects
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2010 KM Websolutions
 * @license http://www.yiiframework.com/license/
 */

/* @var $this \yii\web\View */

use yii\helpers\Html;
use kmergen\adminlte\widgets\Alert;
use kmergen\adminlte\widgets\Menu;
use kmergen\adminlte\widgets\Breadcrumbs;

$user = Yii::$app->getUser()->getIdentity();
$profile = $user->profile;
$items = [
    ['label' => 'Dashboard', 'icon' => 'fa fa-address-book-o', 'url' => ['/dashboard']],
    [
        'label' => 'User',
        //'icon' => 'fa fa-users',
        'url' => '#',
        'items' => [
            ['label' => 'List', 'icon' => 'fa fa-users', 'url' => ['/user/admin']],
            ['label' => 'Add', 'icon' => 'fa fa-user-plus', 'url' => ['/user/admin/create']],
        ],
    ],
];
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?= Html::cssFile(YII_DEBUG ? '@web/themes/adminlte/css/app.css' : '@web/themes/adminlte/css/app.min.css?v=' . filemtime(Yii::getAlias('@webroot/themes/adminlte/css/app.min.css'))) ?>
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <?php $this->head() ?>
    </head>
    <body class="sidebar-mini navbar-fixed-top<?= isset($this->params['bodyCssClass']) ? " {$this->params['bodyCssClass']}" : '' ?>">

    <?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar fixed-top navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-sm-inline-block">
                    <?= Html::a(Yii::t('backend', 'Home'), ['/dashboard'], ['class' => 'nav-link']) ?>
                </li>
            </ul>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="<?= $profile->getAvatarUrl(20) ?>" class="img-avatar"
                             alt="admin@bootstrapmaster.com">
                        <span class="d-md-down-none"><?= $user->username ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <?= Html::beginForm(['/user/security/logout'], 'post')
                        . Html::submitButton(
                            Yii::t('app', 'Logout') . '(' . Yii::$app->user->identity->username . ')',
                            ['class' => 'dropdown-item btn btn-link logout']
                        )
                        . Html::endForm(); ?>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <?= Html::a(Html::img('@web/themes/adminlte/img/logo.png', ['alt' => 'Logo', 'class' => 'brand-image img-circle elevation-3']) . '<span class="brand-text font-weight-light">Mein Logo</span>', ['/dashboard'], ['class' => 'brand-link']) ?>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <?=
                    Menu::widget([
                        'encodeLabels' => false,
                        'items' => $items,
                    ])
                    ?>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <div class="content-wrapper">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <div class="content container-fluid">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                <!-- Put in your text or everything you want here -->
            </div>
            <!-- Default to the left -->
            <strong>&copy; <?= date('Y') ?> <?= Html::a(Yii::$app->name, ['/']) ?>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->
    <?= Html::jsFile(YII_DEBUG ? '@web/themes/adminlte/js/app.js' : '@web/themes/adminlte/js/app.min.js?v=' . filemtime(Yii::getAlias('@webroot/themes/adminlte/js/app.min.js'))) ?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>