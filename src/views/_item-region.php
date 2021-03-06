<?php

use omny\yii2\city\component\components\CityComponent;
use yii\helpers\Html;

/** @var $this \yii\web\View */
/** @var $model omny\yii2\city\component\models\Freegeoip */

$link = Html::a($model->subdivision_1_name,
    ['/city/default/' . CityComponent::ACTION_CHOSE_REGION_AJAX, 'id' => $model->id],
    ['class' => 'region-item']);
echo Html::tag('li', $link);