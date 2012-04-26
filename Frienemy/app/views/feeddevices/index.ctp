<div class="feeddevices index">
<h2><?php __('list_of_feeddevices'); ?></h2>

<div id="gridWrapper">
	<table id="datagrid">
		<thead>
			<tr>
				<th class="feeddevice feeddeviceid"><?php echo $this->Paginator->sort('feeddeviceid'); ?></th>
				<th class="feeddevice dateadded"><?php echo $this->Paginator->sort('dateadded'); ?></th>
				<th class="feeddevice id"><?php echo $this->Paginator->sort('id'); ?></th>
				<th class="feeddevice dateupdated"><?php echo $this->Paginator->sort('dateupdated'); ?></th>
				<th class="feeddevice created"><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="feeddevice modified"><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="feeddevice enabled"><?php echo $this->Paginator->sort('enabled'); ?></th>
				<th class="actions"><?php __("actions"); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 0;
		foreach ($feeddevices as $feeddevice):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td class="feeddevice feeddeviceid"><?php echo $feeddevice['Feeddevice']['feeddeviceid']; ?></td>
				<td class="feeddevice dateadded"><?php echo $feeddevice['Feeddevice']['dateadded']; ?></td>
				<td class="feeddevice id"><?php echo $feeddevice['Feeddevice']['id']; ?></td>
				<td class="feeddevice dateupdated"><?php echo $feeddevice['Feeddevice']['dateupdated']; ?></td>
				<td class="feeddevice created"><?php echo $feeddevice['Feeddevice']['created']; ?></td>
				<td class="feeddevice modified"><?php echo $feeddevice['Feeddevice']['modified']; ?></td>
				<td class="feeddevice enabled"><?php echo $feeddevice['Feeddevice']['enabled']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('view', true), array('controller' => 'feeddevices', 'action' => 'view', $feeddevice['Feeddevice']['id'])); ?>

					<?php echo $this->Html->link(__('edit', true), array('controller' => 'feeddevices', 'action' => 'edit', $feeddevice['Feeddevice']['id'])); ?>

					<?php echo $this->Html->link(__('delete', true), array('controller' => 'feeddevices', 'action' => 'delete', $feeddevice['Feeddevice']['id']), null, sprintf(__('Are you sure you want to delete # %%s ?', true), $feeddevice['Feeddevice']['id'])); ?>

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
