<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;

class WarehouseController extends Controller
{public $enableCsrfValidation = false;
    
    public function actionIndex(){
        $var=Yii::$app->db->createCommand('SELECT * FROM products')
        ->queryAll();
        
        return $this->render('index',['var'=>$var]);
    }
    public function actionInsert(){

        $data=Yii::$app->request->post();

        $da=Yii::$app->db->createCommand()->insert('products',
        [
            'vendor'=>$data['vendor'],
            'measuare'=>$data['measurementSystem'],
            'container' =>$data['container'],
            'receiving'=>$data['receiving'],
            'styno'=>$data['styleno'],
            'uom'=>$data['uom'],
             'prefix'=>$data['prefix'],
            'sufix'=>$data['sufix'],
             'height'=>$data['height'],
            'width'=>$data['width'], 
            'length'=>$data['lenght'],
            'wieght'=>$data['weight'],
             'upc'=>$data['upc'],
            'size1'=>$data['size1'], 
            'color1'=>$data['color1'],
            'size2'=>$data['size2'], 
             'color2'=>$data['color2'],
            'size3'=>$data['size3'], 
            'color3'=>$data['color3'], 
            'carton'=>$data['carton'],
        
            'date'=>$data['date'],
         ],0)->execute();
   
             //redis

            $var=Yii::$app->db->createCommand('SELECT * FROM products')
            ->queryAll();
            foreach ($var as $row)
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
            Yii::$app->redis->set($row['id'],  $temp); 
          
            $mess='them thanh cong!!';
            return $this->render('index',['mess' =>$mess,'var' =>$var]);
      
        
    }
   
}
// $da=Yii::$app->db->createCommand()->batchInsert('products',[
//     'vendor_id'=>$data['vendor'],$data['vendor'],
//     'styno'=>$data['vendor'],$data['styleno']
//    ],0)->execute();