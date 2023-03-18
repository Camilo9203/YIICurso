<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="atf-content clearfix">
    <div class="atf-page-heading atf-size-md atf-dynamic-bg" data-stellar-background-ratio="0.3" style="background-image: url(<?php echo Yii::app()->theme->baseUrl;?>/assets/img/blog/3.jpg); background-size:cover; background-position: center center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-md-6 col-12">
                    <div class="atf-page-heading-in text-center">
                        <h1 class="atf-page-heading-title">Any Help For This Customer </h1>
                        <div class="atf-post-label">
                            <span><a href="#">Home</a></span>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .atf-page-heading -->
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <br><br>
                <h1>Login</h1>

                <p>Please fill out the following form with your login credentials:</p>

                <div class="form">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); ?>

                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                    <div class="row">
                        <?php echo $form->textField($model,'username', array('class' => 'form-control','placeholder' => 'Username')); ?>
                        <?php echo $form->error($model,'username', array('class' => 'text-danger')); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->passwordField($model,'password', array('class' => 'form-control','placeholder' => 'Password')); ?>
                        <?php echo $form->error($model,'password', array('class' => 'text-danger')); ?>
                        <p class="hint">
                            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
                        </p>
                    </div>

                    <div class="row rememberMe">
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                        <?php echo $form->label($model,'rememberMe'); ?>
                        <?php echo $form->error($model,'rememberMe', array('class' => 'text-danger')); ?>
                    </div>

                    <div class="row buttons">
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-small atf-themes-btn')); ?>
                    </div>
                    <br><br>
                    <?php $this->endWidget(); ?>
                </div><!-- form -->
            </div>
        </div>
    </div>
    
    
</div>

