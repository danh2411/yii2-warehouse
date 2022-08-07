<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m220805_052104_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%products}}', [
            'id' => $this->primaryKey(),
            'vendor' => $this->string(),
            'measuare' => $this->string(),
            'container' => $this->integer(),
            'receiving'=>$this->integer(),
            'styno'=> $this->integer(),
            'receiving'=>$this->integer(),
            'uom'=> $this->integer(),
             'prefix'=>$this->integer(),
            'sufix'=> $this->integer(),
             'height'=>$this->integer(),
            'width'=> $this->integer(), 
            'length'=>$this->integer(),
            'wieght'=> $this->integer(),
             'upc'=>$this->integer(),
            'size1'=> $this->integer(), 
            'color1'=>$this->integer(),
            'size2'=> $this->integer(),
             'color2'=>$this->integer(),
            'size3'=> $this->integer(),
            'color3'=> $this->integer(),
            'carton'=>$this->integer(),
        
            'date'=>$this->dateTime(),
        ]);
        // $this->createTable('{{%vendors}}', [
        //     'id' => $this->primaryKey(),
        //     'name' => $this->string(),
            
        // ]);
        // $this->createTable('{{%measurements}}', [
        //     'id' => $this->primaryKey(),
        //     'name' => $this->string(),
            
        // ]);
        // $this->addForeignKey('fk_vendor_product', '{{%products}}', 'vendor_id', '{{%vendors}}', 'id', 'cascade', 'cascade');
        // $this->addForeignKey('fk_measurements_product', '{{%products}}', 'measuare_id', '{{%measurements}}', 'id', 'cascade', 'cascade');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%products}}');

        // $this->dropForeignKey('fk_vendor_product', '{{%products}}');
        // $this->dropTable('{{%products}}');
        // $this->dropTable('{{%vendors}}');
        // $this->dropForeignKey('fk_measurements_product', '{{%products}}');
        // $this->dropTable('{{%products}}');
        // $this->dropTable('{{%measurements}}');

    }
}