<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Users';

$this->breadcrumbs=array(
    'Users',
);

$this->menu = array(
    array('label' => 'Create user', 'url' => array('create')),
    array('label' => 'Manage users', 'url' => array('admin')),
);
?>
<div class="atf-content clearfix"><br>    
    <h1>Users</h1>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        //'pager' => array('htmlOptions' => array('class'=>'pagination')),
    )); ?>
</div>
<br><br>
