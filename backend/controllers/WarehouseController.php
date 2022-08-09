<?php

namespace backend\controllers;

use backend\models\WarehouseForm;
use Yii;
use yii\web\Controller;

class WarehouseController extends Controller
{public $enableCsrfValidation = false;
    
    public function actionIndex(){
        $var=WarehouseForm::find()->all();
        return $this->render('index',['var'=>$var]);
    }
    public function actionInsert(){

      $model=new WarehouseForm();

 
    if (isset($_POST)) {
        $data=Yii::$app->request->post();
      
        $model->vendor=$data['vendor'];
        $model->measuare=$data['measuare'];
        $model->container=$data['container'];
        $model->receiving=$data['receiving'];
        $model->styno=$data['styno'];
        $model->uom=$data['uom'];
        $model->prefix=$data['prefix'];
        $model->sufix=$data['sufix'];
        $model->height=$data['height'];
        $model->width=$data['width'];
        $model->length=$data['length'];
        $model->wieght=$data['wieght'];
        $model->upc=$data['upc'];
        $model->size1=$data['size1'];
        $model->color1=$data['color1'];
        $model->size2=$data['size2'];
        $model->color2=$data['color2'];
        $model->size3=$data['size3'];
        $model->color3=$data['color3'];
     
        $model->carton=$data['carton'];
        $model->date=$data['date'];
        
      
       if($model->save())
       {

    //    //redis
    $model=WarehouseForm::find()->all();
    foreach ($model as $row)
    {
        $temp='id:'.$row['id'].'||'.'vendor:'.$row['vendor'].'||'.
        'measuare:'.$row['measuare'].'||'.'container:'.$row['container'].'||'.
        'receiving:'.$row['receiving'].'||'.'styno:'.$row['styno'].'||'.
        'uom:'.$row['uom'].'||'.'prefix:'.$row['prefix'].'||'.
        'sufix:'.$row['sufix'].'||'.'height:'.$row['height'].'||'.
        'width:'.$row['width'].'||'.'length:'.$row['length'].'||'.
        'wieght:'.$row['wieght'].'||'.'upc:'.$row['upc'].'||'.
        'size1:'.$row['size1'].'||'.'color1:'.$row['color1'].'||'.
        'size2:'.$row['size2'].'||'.'color2:'.$row['color2'].'||'.
        'size3:'.$row['size3'].'||'.'color3:'.$row['color3'].'||'.
        'carton:'.$row['carton'].'||'.'date'.$row['date']
        ;
    }
  
Yii::$app->redis->set($row['id'], $temp);
    
        $mess='them thanh cong!!';
        return $this->render('index',['mess' =>$mess]);}
        else {
            $errors = $model->errors;
            
             return $this->render('index',['errors' =>$errors]);
                  }
    }
       
        
}  
    
   
}
// $da=Yii::$app->db->createCommand()->batchInsert('products',[
//     'vendor_id'=>$data['vendor'],$data['vendor'],
//     'styno'=>$data['vendor'],$data['styleno']
//    ],0)->execute();