<?php
/* @var $this CountriesController */
/* @var $model Countries */
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
		<?php echo $form->textField($model,'name',array('class' => 'form-control', 'placeholder' => 'Name')); ?>
	</div>

	<div class="form-group col-md-12">
		<?php echo $form->textField($model,'status',array('class' => 'form-control', 'placeholder' => 'Status')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class' => 'btn btn-dark btn-sm')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->