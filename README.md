# Bootstrap Tags Input for Yii 2
A simple widget tags input, renders a [Bootstrap Tags Input](https://github.com/bootstrap-tagsinput/bootstrap-tagsinput).

### Installation

The preferred way to install this extension is through composer.

Either run
```sh
php composer.phar require pudinglabs/yii2-bootstrap-tags-input "*"
```
or add

```sh
"pudinglabs/yii2-bootstrap-tags-input" : "*"
```
### Usage
```sh
// with an ActiveForm
<?= 
    $form->field($model, 'your_attr')->widget(TagsinputWidget::classname(), [
            'options' => [],
            'clientOptions' => [],
            'clientEvents' => []
         ]);
?>

// as a widget
<?= 
    TagsinputWidget::widget([
        'model' => $model,
        'attribute' => 'your_attr',
        'options' => [],
        'clientOptions' => [],
        'clientEvents' => []
    ]);
?>
```

License
----

MIT


**Free Software, Hell Yeah!**