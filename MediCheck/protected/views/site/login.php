<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>


       
        <div class="span4"></div>
        
   		 <div class="span4">
         <div class="row">
         
         <div class="form-signin">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>


        <h2 class="form-signin-heading"><strong>Login</strong></h2>
        
        <?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
		
       <?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<br>
       <?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
		
		<?php echo CHtml::submitButton('Login'); ?>
		
        <!-- <button class="btn btn-large btn-primary" type="submit">Sign in</button> -->
 
      </div>
      <hr>
      <div class="row reg-now">
      <h4 style="text-align:center">New to MediCheck ? Register Now</h5>
	  <br>
       <div class="span2">
       		<a href="docregister.html">
            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/docIcon.png">
                <br/>
                <center>Doctor</center>
             </a>
       </div>
       
       <div class="span2">
       		<a href="docregister.html">
            	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/patientIcon.png">
                <br/>
                <center>Patient</center>
             </a>
       </div>
     
         
</div>
      	</div>
		
		     <?php $this->endWidget(); ?>
</div><!-- form -->
        <div class="span4"></div>
        

	 


	

