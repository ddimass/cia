<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Investors */

$this->title = Yii::t('backend', 'Create Investors');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Investors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="investors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
