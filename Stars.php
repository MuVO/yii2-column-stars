<?php namespace muvo\yii2\widgets

use yii\base\Widget;
use yii\helpers\Html;

class Stars extends Widget
{
    public $options = array();
    public $value;

    public function init(){
        parent::init();
        $this->options['class'] = 'rating';
    }

    protected static function stars($value=0){
        $stars=array();

        $fullStar = floor($value);
        $halfStar = round($value*10%10/10);

        for($i=0;$i<$fullStar;$i++)
            $stars[]=Html::tag('span',null,
                ['class'=>'fa fa-star']);

        if($halfStar)
            $stars[]=Html::tag('span',null,
                ['class'=>'fa fa-star-half']);

        return implode('&nbsp;',$stars);
    }

    public function run(){
        $this->options['title'] = sprintf('%0.1f',$this->value);
        $this->options['data'] = [
            'int' => floor($this->value),
            'half' => round($this->value*10%10/10),
        ];
        return Html::tag('div',self::stars($this->value),
            $this->options);
    }
}
