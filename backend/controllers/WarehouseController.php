<?php

namespace backend\controllers;
use backend\models\RedisWarehouse;
use backend\models\WarehouseForm;
use Codeception\Module\Redis;
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
        
         $model=new WarehouseForm();
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
            
            Yii::$app->session->setFlash('successinsert','Thêm thành công.');
            return $this->goback('index');
            }
        else {
            
            $errors = $model->errors;
           
             return $this->render('index',['errors' =>$errors]);
                  }
       }

        
}  
//show mysql
 public function actionShow(){
    $data=new WarehouseForm();
  $query = WarehouseForm::find()->limit(0,4);
    $countQuery = clone $query;
    $countQuery =  $query->count();

    $pages = new Pagination(['totalCount' => $countQuery]);
    
    $dataProvider = new ActiveDataProvider(['query' => $query,'pagination' => [
        'pageSize' => 5,
    ],]);
    return $this->render('showDb', ['dataProvider' => $dataProvider, 'pages' => $pages,'data'=>$data]);
  
    
       }
       //show detail mysql
  public function actionViewmysql($id)
  {
        $model = WarehouseForm::find()->where(['id' => $id])->one();
        if($model==null)
        {
          
            return $this->goBack('show');
        }
       
    
      return $this->render('viewmysql', ['model' => $model]);
  }
  //delete mysql
 public function actionDeletemysql($id)
       {
        $query = WarehouseForm::findOne($id);
        $query->delete();
        Yii::$app->session->setFlash('success','Delete Success.'.$id);
        return $this->goBack('show');
       }
    //update mysql
       public function actionUpdatemysql($id)
       {
        $query = WarehouseForm::findOne($id);
        return $this->render('updatemysql', ['query' => $query]);
       }
       public function actionSuccessmysql($id)
       {
        $model = WarehouseForm::findOne($id);
        
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
       
        $model->update();
        
        if ($model->update() !== false) {
            Yii::$app->session->setFlash('success','Update Success.'.$id);

            return $this->goBack('show');
        } else {
            $errors = $model->errors;
            $query = WarehouseForm::findOne($id);
            return $this->render('updatemysql',['errors' =>$errors,'query' => $query,]);
                 
        }
       }
   //show redis
   public function actionShowredis(){
    $data=new RedisWarehouse();
  $query = RedisWarehouse::find()->limit(0,4);
    $countQuery = clone $query;
    $countQuery =  $query->count();

    $pages = new Pagination(['totalCount' => $countQuery]);
    
    $dataProvider = new ActiveDataProvider(['query' => $query,'pagination' => [
        'pageSize' => 5,
    ],]);
    return $this->render('redis/showredis', ['dataProvider' => $dataProvider, 'pages' => $pages,'data'=>$data]);
  
    
       }
       //show details 
       public function actionViewredis($id)
       {
             $model = RedisWarehouse::find()->where(['id' => $id])->one();
             if($model==null)
             {
               
                 return $this->goBack('showredis');
             }
            
           
           return $this->render('redis/viewredis', ['model' => $model]);
       }
      //delete redis
 public function actionDeleteredis($id)
 {
  $query = RedisWarehouse::findOne($id);
  $query->delete();
  Yii::$app->session->setFlash('successredis','Delete Success.'.$id);

  return $this->goBack('showredis');
 }
 //update redis
 public function actionUpdateredis($id)
 {
  $query = RedisWarehouse::findOne($id);
  return $this->render('redis/updateredis', ['query' => $query]);
 }
 public function actionSuccessredis($id)
 {
  $model = RedisWarehouse::findOne($id);
  
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
 
  $model->update();
  
  if ($model->update() !== false) {
    Yii::$app->session->setFlash('successredis','Update Success.'.$id);

      return $this->goBack('showredis');
  } else {
      $errors = $model->errors;
      $query = RedisWarehouse::findOne($id);
      return $this->render('redisupdateredis',['errors' =>$errors,'query' => $query,]);
           
  }
 }
}