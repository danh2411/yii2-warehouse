<?php

namespace backend\controllers;
use backend\models\RedisWarehouse;
use backend\models\WarehouseForm;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
class WarehouseController extends Controller
{public $enableCsrfValidation = false;
    
    public function actionIndex(){
        
        $var=WarehouseForm::find()->all();
        return $this->render('index',['var'=>$var]);
    }
    public function actionInsert(){

      
  if (isset($_POST)) {
         $data=Yii::$app->request->post();
        

    for($i=0;$i< (int)($data['amountRow']);$i++){
        $model=new WarehouseForm();
        $model->vendor=$data['vendor'];
         
        $model->measuare=$data['measuare'];
        $model->container=$data['container'];
        $model->receiving=$data['receiving'];
        $model->styno=$data['styno'.$i];
  
        $model->uom=$data['uom'.$i];
        $model->prefix=$data['prefix'.$i];
        $model->sufix=$data['sufix'.$i];
        $model->height=$data['height'.$i];
        $model->width=$data['width'.$i];
        $model->length=$data['length'.$i];
        $model->wieght=$data['wieght'.$i];
        $model->upc=$data['upc'.$i];
        $model->size1=$data['size1'.$i];
        $model->color1=$data['color1'.$i];
        $model->size2=$data['size2'.$i];
        $model->color2=$data['color2'.$i];
        $model->size3=$data['size3'.$i];
        $model->color3=$data['color3'.$i];
     
        $model->carton=$data['carton'.$i];
        $model->date=$data['date'];
         $model->save();
    }
   

       if($model->save())
       {

         //    //redis
         $data=Yii::$app->request->post();
            
                for($i=0;$i< (int)($data['amountRow']);$i++){
                    $modelredis=new RedisWarehouse();
                    $modelredis->vendor=$data['vendor'];
         
                    $modelredis->measuare=$data['measuare'];
                    $modelredis->container=$data['container'];
                    $modelredis->receiving=$data['receiving'];
                    $modelredis->styno=$data['styno'.$i];
              
                    $modelredis->uom=$data['uom'.$i];
                    $modelredis->prefix=$data['prefix'.$i];
                    $modelredis->sufix=$data['sufix'.$i];
                    $modelredis->height=$data['height'.$i];
                    $modelredis->width=$data['width'.$i];
                    $modelredis->length=$data['length'.$i];
                    $modelredis->wieght=$data['wieght'.$i];
                    $modelredis->upc=$data['upc'.$i];
                    $modelredis->size1=$data['size1'.$i];
                    $modelredis->color1=$data['color1'.$i];
                    $modelredis->size2=$data['size2'.$i];
                    $modelredis->color2=$data['color2'.$i];
                    $modelredis->size3=$data['size3'.$i];
                    $modelredis->color3=$data['color3'.$i];
                 
                    $modelredis->carton=$data['carton'.$i];
                    $modelredis->date=$data['date'];
                $modelredis->save();
            }
            
                $mess='them thanh cong!!';
                return $this->render('index',['mess' =>$mess]);}
        else {
            
            $errors = $model->errors;
           
             return $this->render('index',['errors' =>$errors]);
                  }
       }

        
}  
// if(isset($errors['vendor'])){
//     echo ($errors['vendor']);
// }
 public function actionShow(){
    
  $query = RedisWarehouse::find();
    $countQuery = clone $query;
    $countQuery =  $query->count();

    $pages = new Pagination(['totalCount' => $countQuery]);
    
    $dataProvider = new ActiveDataProvider(['query' => $query,'pagination' => [
        'pageSize' => 5,
    ],]);
    return $this->render('showDb', ['dataProvider' => $dataProvider, 'pages' => $pages]);
  
       }
   

}