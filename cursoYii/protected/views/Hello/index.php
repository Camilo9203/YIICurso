<h1><?php echo $name ?></h1>
   <h2>Usuarios</h2>
<?php foreach($model as $data):?>
   <p><?php echo $data->username; ?></p>
<?php endforeach; ?>