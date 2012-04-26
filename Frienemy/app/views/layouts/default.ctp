<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->css('cake.generic');
		echo $html->meta('icon');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="header">
		<h1><?php echo $html->link('Frienemy','/'); ?></h1>
	</div>
	<div id="navbar" class="actions">
		<ul>
				<li><?php echo $html->link(__('appdevices',true),''.'/'.'appdevices'); ?></li>
				<li><?php echo $html->link(__('appdevicesubscriptions',true),''.'/'.'appdevicesubscriptions'); ?></li>
				<li><?php echo $html->link(__('apps',true),''.'/'.'apps'); ?></li>
				<li><?php echo $html->link(__('appsubscriptions',true),''.'/'.'appsubscriptions'); ?></li>
				<li><?php echo $html->link(__('certificates',true),''.'/'.'certificates'); ?></li>
				<li><?php echo $html->link(__('certificateservers',true),''.'/'.'certificateservers'); ?></li>
				<li><?php echo $html->link(__('certificatetypes',true),''.'/'.'certificatetypes'); ?></li>
				<li><?php echo $html->link(__('devices',true),''.'/'.'devices'); ?></li>
				<li><?php echo $html->link(__('feeddevices',true),''.'/'.'feeddevices'); ?></li>
				<li><?php echo $html->link(__('feeds',true),''.'/'.'feeds'); ?></li>
				<li><?php echo $html->link(__('friends',true),''.'/'.'friends'); ?></li>
				<li><?php echo $html->link(__('messagequeues',true),''.'/'.'messagequeues'); ?></li>
				<li><?php echo $html->link(__('servers',true),''.'/'.'servers'); ?></li>
		</ul>
	</div>
	<div id="wrapper">
		<div id="content">
			<?php
				if ($session->check('Message.flash')):
					echo $session->flash();
				endif;
			?>
			<?php echo $content_for_layout; ?>

		</div>
	</div>
	<div id="sidenav">
		<ul>
		</ul>
	</div>
	<div id="extra">
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean sit amet felis eu tellus rhoncus accumsan. Vestibulum ac urna sit amet mi ultricies gravida. Nunc eu tortor at nisi accumsan sollicitudin. Mauris ultricies egestas felis. Morbi ut dolor. Aliquam erat volutpat. Praesent ut lectus ac elit vestibulum pharetra. Nulla sed arcu. Duis scelerisque interdum dui. Praesent auctor lacus eu purus. Aenean justo leo, rutrum nec, condimentum nec, cursus vel, lacus. Proin a lectus. Integer dapibus elit ac velit facilisis placerat. Fusce congue sagittis nibh. Maecenas lobortis. Aenean malesuada, lorem eget luctus tincidunt, ligula neque tempor justo, ut imperdiet nulla diam non sem. In hac habitasse platea dictumst.</p>
	</div>
	<div id="footer">
		<ul>
			<li>Frienemy</li>
			<li>0.1</li>
		</ul>
	</div>
		<?php echo $this->element('sql_dump'); ?>
</body>
</html>