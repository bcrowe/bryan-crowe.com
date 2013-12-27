<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Bryan Crowe');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $cakeDescription ?> | 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('custom');
		echo $this->Html->css('/js/rainbow/themes/twilight');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
		echo $this->Html->script('js');
		echo $this->fetch('script');
	?>
</head>
<body>
	<video id="bkgVid" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<source src="/video/drink-bw.mp4">
		<source src="/video/drink-bw.webm">
	</video>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php echo $this->element('sidebar'); ?>
			</div>
			<div id="content" class="col-md-9">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
	</div>
	<?php echo $this->Html->script('bootstrap/bootstrap.min'); ?>
	<?php echo $this->Html->script('rainbow/js/rainbow.min'); ?>
	<?php echo $this->Html->script('rainbow/js/language/generic'); ?>
	<?php echo $this->Html->script('rainbow/js/language/php'); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-46695861-1', 'bryan-crowe.com');
		ga('send', 'pageview');

	</script>
</body>
</html>
