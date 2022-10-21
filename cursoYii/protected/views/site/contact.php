<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
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

    <!-- CONTACT SECTION START-->
    <section id="contact" class="atf-contact-area atf-section-padding">
        <div class="container">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="atf-section-title text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
                        <h2 class="">Get In Touch</h2>
                        <p class="mx-auto my-auto">Lorem elementum Sed congue nisl dolorSed congue nisl dolor Lorem elementum Sed congue nisl dolorSed.</p>
                    </div>
                </div>
            </div><!--- END ROW -->
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 my-auto mx-auto">
                    <div class="contact mr-lg-5">
                        <h4>Stay Connected with us</h4>
                        <?php if(Yii::app()->user->hasFlash('contact')): ?>
                            <div class="flash-success">
                                <?php echo Yii::app()->user->getFlash('contact'); ?>
                            </div>
                        <?php else: ?>
                            <form class="atf-contact-form form">
                                <div class="row">
                                    <?php $form=$this->beginWidget('CActiveForm', array(
                                        'id'=>'contact-form',
                                        'enableClientValidation'=>true,
                                        'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                        ),
                                    )); ?>
                                    <p>
                                        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
                                    </p>
                                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                                    <?php echo $form->errorSummary($model, null, null, array('class'=>'alert alert-danger')); ?>
                                    <div class="form-group col-md-6">
                                        <?php echo $form->textField($model,'name', array('class' => 'form-control', 'placeholder' => 'Your Name')); ?>
                                        <?php echo $form->error($model,'name'); ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <?php echo $form->textField($model,'email', array('class' => 'form-control', 'placeholder' => 'Your Email')); ?>
                                        <?php echo $form->error($model,'email'); ?>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php echo $form->textField($model,'subject', array('class' => 'form-control', 'placeholder' => 'Subject')); ?>
                                        <?php echo $form->error($model,'subject'); ?>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class' => 'form-control', 'placeholder' => 'Your Message')); ?>
                                        <?php echo $form->error($model,'body'); ?>
                                    </div>
                                    <?php if(CCaptcha::checkRequirements()): ?>
                                        <div class="row">
                                            <div>
                                                <?php $this->widget('CCaptcha'); ?><br/><br/>
                                                <?php echo $form->textField($model,'verifyCode', array('class' => 'form-control', 'placeholder' => 'Code')); ?>
                                            </div>
                                            <div class="hint">Please enter the letters as they are shown in the image above.
                                                <br/>Letters are not case-sensitive.</div>
                                            <?php echo $form->error($model,'verifyCode'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-md-12">
                                        <br/><div class="actions atf-contact-btn text-left">
                                            <?php echo CHtml::submitButton('Send Message', array('class' => 'btn atf-themes-btn')); ?>
                                        </div>
                                    </div>
                                    <?php $this->endWidget(); ?>
                                </div>
                            </form>
                            <!-- <p class="form-message"></p> -->
                        <?php endif; ?>
                    </div>
                </div><!--- END COL -->
                <div class="col-xl-6 col-lg-6 col-12">
                    <div class="atf-contact-info mx-auto my-auto">
                        <div class="atf-contact-details">
                            <i class="fa fa-home"></i>
                            <h4>Home Address</h4>
                            <p>1 Grafton Street, Dublin, Ireland University.</p>
                        </div>
                        <div class="atf-contact-details">
                            <i class="fa fa-phone"></i>
                            <h4>Mobile Number</h4>
                            <p>+135 773 321 4442</p>
                        </div>
                        <div class="atf-contact-details">
                            <i class="fa fa-envelope"></i>
                            <h4>Email Address</h4>
                            <p>demo@example.com</p>
                        </div>
                    </div><!--- END CONTACT -->
                </div><!--- END COL -->
            </div><!--- END ROW -->

        </div><!--- END CONTAINER -->
    </section>
    <!-- CONTACT SECTION END-->

    <!-- Google Map start-->
    <div id="atf-map-area">
        <iframe style="border:0" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>
    </div>
    <!-- Google Map end -->
</div>
<h1>Contact Us</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'body'); ?>
	</div>

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>