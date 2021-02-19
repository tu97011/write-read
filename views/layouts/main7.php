<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<link href="css/view.css" rel="stylesheet">
	<link href="css/frame.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Halo-读写的花园',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
$navItems=[
            ['label' => '阅读花园', 'url' => ['/article/index']],          
            ['label' => '主题写作', 'url' => ['/zhuti/index']],
			['label' => '作文集', 'url' => ['/zuowen/index']],

  ];
  if (Yii::$app->user->isGuest) {
    array_push($navItems,['label' => '登录', 'url' => ['/user/security/login']]);
  } else {
	  array_push($navItems,['label' =>'个人主页',
        'url' => ['/user/profile/show','id'=>Yii::$app->user->identity->id],
        'linkOptions' => ['data-method' => 'post']]
    ); 
    array_push($navItems,['label' => '退出 (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']]
    );
  }
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $navItems,
]);

    NavBar::end();
    ?>

    <div class="layer50">

        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; classos- <?= date('Y') ?> powered by Mr Tu</p>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
