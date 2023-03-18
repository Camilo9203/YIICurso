<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php
/* @var $this CountriesController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Countries';

$this->breadcrumbs=array(
    'Countries',
);

$this->menu = array(
    array('label' => 'Create country', 'url' => array('create')),
    array('label' => 'Manage countries', 'url' => array('admin')),
);
?>
<div class="atf-content clearfix"><br>
    <!-- Message Session -->
    <?php $this->renderPartial('_messages'); ?>
    <!-- Content -->
    <h1>Countries</h1>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        //'pager' => array('htmlOptions' => array('class'=>'pagination')),
    )); ?>
</div>
<br><br>


