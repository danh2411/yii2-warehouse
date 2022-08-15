<?php use yii\widgets\DetailView;
 ?>

<?php echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        
        [                     
            'label' => 'Detail Id='. $model->id,   
            'value' => $model->date,
            
        ],  
      
         
        [                     
            'label' => 'styno',
            'value' => $model->styno,
            
        ],           
        [                    
            'label' => 'measuare',
            'value' => $model->measuare,
            
        ],
        [                      // the owner name of the model
            'label' => 'container',
            'value' => $model->container,
            
        ],
        [                      // the owner name of the model
            'label' => 'receiving',
            'value' => $model->receiving,
            
        ],
        [                      // the owner name of the model
            'label' => 'uom',
            'value' => $model->uom,
            
        ],
        [                      // the owner name of the model
            'label' => 'prefix',
            'value' => $model->prefix,
            
        ],
        [                      // the owner name of the model
            'label' => 'sufix',
            'value' => $model->sufix,
            
        ],
        [                      // the owner name of the model
            'label' => 'height',
            'value' => $model->height,
            
        ],
        [                      // the owner name of the model
            'label' => 'width',
            'value' => $model->width,
            
        ],
        [                      // the owner name of the model
            'label' => 'length',
            'value' => $model->length,
            
        ],
        [                      // the owner name of the model
            'label' => 'wieght',
            'value' => $model->wieght,
            
        ],
        [                      // the owner name of the model
            'label' => 'upc',
            'value' => $model->upc,
            
        ],
        [                      // the owner name of the model
            'label' => 'size1',
            'value' => $model->size1,
            
        ],
        [                      // the owner name of the model
            'label' => 'color1',
            'value' => $model->color1,
            
        ],
        [                      // the owner name of the model
            'label' => 'size2',
            'value' => $model->size2,
            
        ],
        [                      // the owner name of the model
            'label' => 'color2',
            'value' => $model->color2,
            
        ],
        
        [                      // the owner name of the model
            'label' => 'size3',
            'value' => $model->size3,
            
        ], [                      // the owner name of the model
            'label' => 'color3',
            'value' => $model->color3,
            
        ], [                      // the owner name of the model
            'label' => 'carton',
            'value' => $model->carton,
            
        ],
        
    ],
]);