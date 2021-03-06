<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Applicant */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Başvurular', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="applicant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->applicant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->applicant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'İlgili kayıt silinecek. Devam edilsin mi?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'applicant_id',
            'user_id',
            'notice_id',
            'name',
            'surname',
            'experienceforjob:ntext',
            'cvfilelink',
            'about_yourself:ntext',
        ],
    ]) ?>

</div>
