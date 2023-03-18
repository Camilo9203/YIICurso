<?php
/* @var $this CountriesController */
/* @var $model Countries */
/* @var $form CActiveForm */
?>
<div class="form contact mr-lg-5">
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'countries-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>
    <div class="form-group col-md-12">
        <?php echo $form->textField($model,'name',array('class' => 'form-control', 'placeholder' => 'Name', 'size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'name', array('class' => 'text-danger')); ?>
    </div>
    <div class="form-group col-md-12">
        <?php echo $form->textField($model,'status',array('class' => 'form-control', 'placeholder' => 'Status', 'size'=>60,'maxlength'=>128)); ?>
        <?php echo $form->error($model,'status', array('class' => 'text-danger')); ?>
    </div>
    <br>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-dark')); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->

