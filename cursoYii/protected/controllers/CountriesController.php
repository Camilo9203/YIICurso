<!-- Latest jQuery -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.12.4.min.js"></script>
<?php

class CountriesController extends Controller {
    
    public function actionIndex($value='')
    {
        $model = new Countries();
        $model->name = 'Colombia';
        $model->status = 1;
        
        $model->save();
        
        $countries = Countries::model()->findAll();
        
        $this->render('index', array('countries' => $countries));
    }

}