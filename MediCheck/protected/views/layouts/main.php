<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	 -->
	 
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	 -->
	 
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/application.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
 <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/mediCheckLogoCroppedSmall.png"></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/index">Home</a></li>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/page&view=about">About</a></li>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/contact">Contact</a></li>
            </ul>
		
          </div><!--/.nav-collapse -->
		 <div class="nav-collapse collapse">

                <ul class="nav pull-right">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/login">Login</a></li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Register <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Patient</a>
							</li>
							<li>
								<a href="#">Doctor</a>
							</li>
						</ul>
					</li>
                </ul>
            </div>
        </div>
      </div>
    </div>
	
	
<div class="container" id="page">

	<div class="row">
		<div class="span12">
		
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	</div>
</div>

<div class="row">
		<div class="span12">
   
        <?php echo $content; ?>
   
	</div>
</div>

	<div class="clear"></div>

	<hr>
	<footer>
        <p>&copy; MediCheck 2012</p>
      </footer><!-- footer -->

</div><!-- page -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/scripts.js" type="text/javascript"></script>
</body>
</html>
