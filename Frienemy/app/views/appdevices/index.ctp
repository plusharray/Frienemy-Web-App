<div class="appdevices index">
<h2><?php __('list_of_appdevices'); ?></h2>

<div id="gridWrapper">
	<table id="datagrid">
		<thead>
			<tr>
				<th class="appdevice appdeviceid"><?php echo $this->Paginator->sort('appdeviceid'); ?></th>
				<th class="appdevice id"><?php echo $this->Paginator->sort('id'); ?></th>
				<th class="appdevice created"><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="appdevice modified"><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="appdevice deviceactive"><?php echo $this->Paginator->sort('deviceactive'); ?></th>
				<th class="appdevice dateadded"><?php echo $this->Paginator->sort('dateadded'); ?></th>
				<th class="appdevice dateupdated"><?php echo $this->Paginator->sort('dateupdated'); ?></th>
				<th class="appdevice launchcount"><?php echo $this->Paginator->sort('launchcount'); ?></th>
				<th class="actions"><?php __("actions"); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 0;
		foreach ($appdevices as $appdevice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td class="appdevice appdeviceid"><?php echo $appdevice['Appdevice']['appdeviceid']; ?></td>
				<td class="appdevice id"><?php echo $appdevice['Appdevice']['id']; ?></td>
				<td class="appdevice created"><?php echo $appdevice['Appdevice']['created']; ?></td>
				<td class="appdevice modified"><?php echo $appdevice['Appdevice']['modified']; ?></td>
				<td class="appdevice deviceactive"><?php echo $appdevice['Appdevice']['deviceactive']; ?></td>
				<td class="appdevice dateadded"><?php echo $appdevice['Appdevice']['dateadded']; ?></td>
				<td class="appdevice dateupdated"><?php echo $appdevice['Appdevice']['dateupdated']; ?></td>
				<td class="appdevice launchcount"><?php echo $appdevice['Appdevice']['launchcount']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('view', true), array('controller' => 'appdevices', 'action' => 'view', $appdevice['Appdevice']['id'])); ?>

					<?php echo $this->Html->link(__('edit', true), array('controller' => 'appdevices', 'action' => 'edit', $appdevice['Appdevice']['id'])); ?>

					<?php echo $this->Html->link(__('delete', true), array('controller' => 'appdevices', 'action' => 'delete', $appdevice['Appdevice']['id']), null, sprintf(__('Are you sure you want to delete # %%s ?', true), $appdevice['Appdevice']['id'])); ?>

				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
<p class="counter">
<?php
	echo $paginator->counter(array(
		'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
?></p>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous',true),array(),null,array('class'=>'disabled'));?>
	&nbsp;|&nbsp;<?php echo $paginator->numbers(); ?>&nbsp;|&nbsp;
	<?php echo $paginator->next(__('next',true).' >>', array(), null, array('class'=>'disabled'));?>
</div>


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
