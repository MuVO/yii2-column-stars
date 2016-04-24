<?php namespace muvo\yii2\widgets;

use yii\grid\Column;

class RatingColumn extends Column
{
    public $header = 'Rating';
    public $attribute;
    public $value;

    public function renderDataCellContent($model,$key,$index){
        if(empty($this->attribute)&&empty($this->value))
            return null;

        return Stars::widget([
            'value' => !empty($this->value)
                    ? call_user_func_array($this->value,[$model,$key,$index])
                    : (int)$model->{$this->attribute},
        ]);
    }
}
