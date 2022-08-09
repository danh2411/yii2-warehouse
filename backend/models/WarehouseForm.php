<?php

namespace backend\models;

use  yii\db\Migration;
use Yii\db\ActiveRecord;
use yii\base\Model;


/**
 * Create user form
 */
class  WarehouseForm extends ActiveRecord
{     
   
       public static function tableName()
    {
        return '{{%products}}';
    }
    // public function rules()
    // {
    //     return [
    //         // the name, email, subject and body attributes are required
    //         [['vendor','measuare','container','receiving','styno',
    //           'uom','prefix','sufix','height','width','length','wieght',
    //           'upc','size1','color1','carton','date'
    //         ], 'required'],
    //         [['container','receiving','styno',
    //         'uom','prefix','sufix','height','width','length','wieght',
    //         'upc','size1','color1','carton'
    //       ], 'number'],
           
    //     ];
    // }
}