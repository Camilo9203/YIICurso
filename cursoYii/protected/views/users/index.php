<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */


$this->pageTitle=Yii::app()->name . ' - Users';
$this->breadcrumbs=array(
    'Users',
);

$this->menu=array(
	array('label'=>'Crear usuarios', 'url'=>array('create')),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),
);
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <h1>Usuarios registrados</h1>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'pager' => array('htmlOptions' => array('class'=>'pagination')),
            )); ?>

        </div>
    </div>
</div>