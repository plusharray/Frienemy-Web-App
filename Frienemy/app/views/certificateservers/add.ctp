<div class="certificateservers add form">
<h2><?php __('add_certificateserver'); ?></h2>



<?php echo $this->element('certificateservers/form', array('mode' => 'add')); ?>

</div>
<div class="additional actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li>&nbsp;</li>
		<li><?php echo $this->Html->link(__('add_appdevice', true), array('controller' => 'appdevices', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_appdevices', true), array('controller' => 'appdevices', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_appdevicesubscription', true), array('controller' => 'appdevicesubscriptions', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_appdevicesubscriptions', true), array('controller' => 'appdevicesubscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_app', true), array('controller' => 'apps', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_apps', true), array('controller' => 'apps', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_appsubscription', true), array('controller' => 'appsubscriptions', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_appsubscriptions', true), array('controller' => 'appsubscriptions', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_certificate', true), array('controller' => 'certificates', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_certificates', true), array('controller' => 'certificates', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_certificateserver', true), array('controller' => 'certificateservers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_certificateservers', true), array('controller' => 'certificateservers', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_certificatetype', true), array('controller' => 'certificatetypes', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_certificatetypes', true), array('controller' => 'certificatetypes', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_device', true), array('controller' => 'devices', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_devices', true), array('controller' => 'devices', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_feeddevice', true), array('controller' => 'feeddevices', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_feeddevices', true), array('controller' => 'feeddevices', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_feed', true), array('controller' => 'feeds', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_feeds', true), array('controller' => 'feeds', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_friend', true), array('controller' => 'friends', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_friends', true), array('controller' => 'friends', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_messagequeue', true), array('controller' => 'messagequeues', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_messagequeues', true), array('controller' => 'messagequeues', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('add_server', true), array('controller' => 'servers', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('list_of_servers', true), array('controller' => 'servers', 'action' => 'index')); ?></li>
	</ul>
</div>
