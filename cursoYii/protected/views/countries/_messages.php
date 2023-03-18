<!-- Messages Session -->
<?php if(($status = Yii::app()->user->getFlashes()) !== null) : ?>
    <?php foreach ($status as $type => $message): ?>
        <div class="alert alert-<?php echo $type ?> alert-dismissible fade show" role="alert">
            <strong><?php echo ucfirst($type) ?>. </strong> <?php echo $message?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endforeach; ?>
<?php endif; ?>  