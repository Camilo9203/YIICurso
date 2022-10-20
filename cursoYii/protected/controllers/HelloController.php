<?php 

class HelloController extends Controller {
    
    public function actionIndex() {
        //$model = CActiveRecord::model('Users')->findAll();
        $model = Users::model('Users')->findAll();
        $name = 'Camilo Ríos';
        $this->render("index", array("name" => $name, 'model' => $model));
    } 
    
}