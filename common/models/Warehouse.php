<?php

namespace common\models;

use common\models\query\TimelineEventQuery;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "timeline_event".
 *
 * @property string $vendor
 *  @property string measurementSystem 
 * @property integer $container
 *  @property integer $receiving 
 *  @property integer $styno
 * @property integer $uom
 * @property integer $prefix
 * @property integer $sufix
 * @property integer $height
 * @property integer $width
 * @property integer $leangth
 * @property integer $wiegth
 * @property integer $upc
 *  @property integer $size1
 *  @property integer $color1
 *   @property integer $size2
 *  @property integer $color2
 *   @property integer $size3
 *  @property integer $color3
 * @property integer $carton
 * @property datetime $date
 */
class Warehouse extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%products}}';
    }
    public function rules()
    {
        [['styleno'], 'required'] ;  
    }
public function getAll(){
    return static::find()->indexBy('id')->all();
}

}