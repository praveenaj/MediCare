<?php
/* @var $this DoctorController */
/* @var $model Doctor */

$this->breadcrumbs=array(
	'Doctors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Doctor', 'url'=>array('index')),
	array('label'=>'Manage Doctor', 'url'=>array('admin')),
);
?>
<div class="span12">

 <h1><center>Register as a Doctor</center></h1>
 </div>
 
<div class="span4"></div>
            
            <div class="span4">
       		 
                    
					<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
                
       
            </div>
            
            <div class="span4"></div>

