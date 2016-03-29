<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php  Loader::element('header_required');?>

<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/assets/css/960_12_col.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath();?>/assets/css/text.css">

</head>
<body>
<div id="wraper">
	<HEADER>
		<div class="header_cont">
			<!-- Separater -->
			<div class="separater_hd"></div>
			<div class="clear"></div>

			<!-- LOGO -->
			<a href="#" class="logo"><img src="<?php echo $this->getThemePath();?>/assets/img/logo.png"></a>
				<?php $a = new GlobalArea('Menu');
			$a -> display ($c);?>
			<!-- NAV MENU -->
			<nav>
				
			</nav>
		</div>
	</HEADER><!-- END OF HEADER TAG -->