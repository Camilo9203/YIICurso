<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
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
    <!-- BREADCRUMBS SECTION START-->
    <?php if(isset($this->breadcrumbs) and $this->breadcrumbs !==array()):?>
        <div class="container">
            <div class="row-fluid">
                <div class="span12">
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
                </div>
            </div>
        </div>
    <?php endif?>
    <!-- BREADCRUMBS SECTION END-->
    <div class="container">
        <div class="row">
            <div class="span12">
                <br>
                <h1>About</h1>

                <p>This is a "static" page. You may change the content of this page
                    by updating the file <code><?php echo __FILE__; ?></code>.</p>
                <br>
            </div>
        </div>
    </div>
</div>
