<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Car */

$this->title = Yii::t('app', 'Crear Carro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Carros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>