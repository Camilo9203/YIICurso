<?php
/* @var $this CountriesController */
/* @var $model Countries */

$this->breadcrumbs=array(
	'Countries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Countries', 'url'=>array('index')),
	array('label'=>'Create Country', 'url'=>array('create')),
	array('label'=>'Update Country', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Country', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Countries', 'url'=>array('admin')),
);
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <br>
            <!-- Message Session -->
            <?php $this->renderPartial('_messages'); ?>
            <!-- Content -->
            <h1>View Country: <?php echo $model->name; ?></h1>
            <?php $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'htmlOptions' => array('class' => 'table table-striped'),
                'attributes'=>array(
                    'id',
                    'name',
                    array(               // related city displayed as a link
                        'label'=>'status',
                        'type'=>'raw',
                        'value'=> CHtml::encode($model->status==1 ? 'Enabled' : 'Disabled'),
                    ),
                ),
            )); ?>
            <br><br>
        </div>
    </div>
</div>
