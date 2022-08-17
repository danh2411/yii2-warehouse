<?php

namespace backend\models;

use common\models\Warehouse;

class RedisWarehouse extends \yii\redis\ActiveRecord
{
    /**
     * @return array the list of attributes for this record
     */
    public function rules()
    {   
        return [
         
            // the name, email, subject and body attributes are required
            [['vendor','measuare','container','receiving','styno',
              'uom','prefix','sufix','height','width','length','wieght',
              'upc','size1','color1','carton','date'
            ], 'required'],
            [['container','receiving','styno',
            'uom','prefix','sufix','height','width','length','wieght',
            'upc','size1','color1','carton'
          ], 'number','min' => 0],
           
        ];
    }
    public function attributes()
    {
        return ['id','styno','measuare','container','receiving','vendor','measuare','container','styno',
        'uom','prefix','sufix','height','width','length','wieght',
        'upc','size1','color1','size2','color2','size3','color3','carton','date'];
    }
   

}