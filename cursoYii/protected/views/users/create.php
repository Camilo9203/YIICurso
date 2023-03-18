<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>
<div class="container">
    <div class="row-fluid">
        <div class="span12"><br>
            <h1>Create Users</h1>
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div><br><br>
