<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Investors */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Investors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="investors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('backend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('backend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'l_name',
            's_name',
            'email:email',
            'phone',
            'disc',
            [
    'attribute'=>'photo',
    'value'=>Yii::$app->homeUrl.'/uploads/' . $model->photo,
    'format' => ['image',['width'=>'100','height'=>'100']],
],

            'user_id',
        ],
    ]) ?>

</div>
