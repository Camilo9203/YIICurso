<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <br>
            <h1>Update User: <?php echo $model->username; ?></h1>
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div><br><br>
