<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group col-md-12">
		<?php echo $form->textField($model,'id', array('class' => 'form-control', 'placeholder' => 'ID')); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->textField($model,'username',array('class' => 'form-control', 'placeholder' => 'Username', 'size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->textField($model,'email',array('class' => 'form-control', 'placeholder' => 'Username', 'size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class' => 'btn btn-dark btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->