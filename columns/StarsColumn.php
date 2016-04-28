<?php namespace muvo\yii2\widgets\columns;

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
