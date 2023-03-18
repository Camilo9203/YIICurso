<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<!-- Header Users-->
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
    <!-- BREADCRUMBS SECTION START-->
<?php if(isset($this->breadcrumbs) and $this->breadcrumbs !==array()):?>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links'=>$this->breadcrumbs,
                    'htmlOptions' => array('class' => 'breadcrumb'),
                )); ?><!-- breadcrumbs -->
            </div>
        </div>
    </div>
<?php endif?>
<!-- Content -->
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'navbar navbar-dark bg-dark btn btn-dark'),
            ));
            ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>