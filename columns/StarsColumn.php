<?php namespace muvo\yii2\widgets\columns;

use muvo\yii2\widgets\Stars;
use yii\grid\DataColumn;

class StarsColumn extends DataColumn
{
    public function renderDataCellContent($model,$key,$index){
        return Stars::widget([
            'value' => parent::renderDataCellContent($model,$key,$index),
            'options' => $this->options,
        ]);
    }
}
