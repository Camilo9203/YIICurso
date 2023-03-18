<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<ol class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <div class="fw-bold">
                <b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
                </b><?php echo CHtml::encode($data->username); ?>
            </div>
            <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
            <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?><br>
            <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            <?php echo CHtml::encode($data->email); ?>
        </div>
        <span class="badge bg-primary rounded-pill">
            <?php echo CHtml::link(CHtml::encode('Ver'), array('view', 'id'=>$data->id)); ?>
        </span>
    </li>
</ol><br>
