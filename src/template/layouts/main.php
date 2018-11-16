<?php
/**
 * Created by PhpStorm.
 * User: manuel.gonzalez
 * Date: 16.11.2018
 * Time: 09:48
 */

use yii\helpers\Html;
use magp\src\AdminLte3Asset;

$adminLteAsset = AdminLte3Asset::register($this);
$distPath = $adminLteAsset->baseUrl;

/* @var $this \yii\web\View */
/* @var $content string */
/**
 * Do not use this code in your template. Remove it.
 * Instead, use the code `$this->layout = 'login';` in your controller.
 * (`yii\web\ErrorAction` also support changing layout by setting `layout` property)
 */
$action = Yii::$app->controller->action->id;
if (in_array($action, ['login', 'error'])) {
    echo $this->render('login', ['content' => $content]);
    return;
}
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?= $this->render('main/navbar', ['directory' => $distPath]) ?>
        <?= $this->render('main/left-aside', ['directory' => $distPath]) ?>
        <?= $this->render('main/content', ['directory' => $distPath]) ?>
        <?= $this->render('main/footer', ['directory' => $distPath]) ?>
        <?= $this->render('main/right-aside', ['directory' => $distPath]) ?>
    </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


