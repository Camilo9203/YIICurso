<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
    'Countries'=>array('index'),
    'Create',
);

$this->menu=array(
    array('label'=>'List Countries', 'url'=>array('index')),
    array('label'=>'Manage Countries', 'url'=>array('admin')),
);
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12"><br>
            <h1>Create Contry</h1>
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div><br><br>