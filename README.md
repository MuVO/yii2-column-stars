yii2-column-stars
=================

# Using as common widget
```
<?= Stars::widget(['value'=>3.5]) ?>
```

# Using as data-column
```
<?= GridView::widget([
	'dataProvider' => …,
	'columns' => [
		<some column definitions>,
		[
			'class' => columns\StarColumn::className(),
			'value' => 'rating', /* In this example «rating» 
						attribute contains amount 
						of stars, which we need
						to display */
		],
	],
]) ?>
```