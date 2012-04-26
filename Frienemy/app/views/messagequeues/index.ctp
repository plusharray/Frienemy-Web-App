<div class="messagequeues index">
<h2><?php __('list_of_messagequeues'); ?></h2>

<div id="gridWrapper">
	<table id="datagrid">
		<thead>
			<tr>
				<th class="messagequeue messageid"><?php echo $this->Paginator->sort('messageid'); ?></th>
				<th class="messagequeue id"><?php echo $this->Paginator->sort('id'); ?></th>
				<th class="messagequeue message"><?php echo $this->Paginator->sort('message'); ?></th>
				<th class="messagequeue badge"><?php echo $this->Paginator->sort('badge'); ?></th>
				<th class="messagequeue created"><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="messagequeue sound"><?php echo $this->Paginator->sort('sound'); ?></th>
				<th class="messagequeue modified"><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="messagequeue dateadded"><?php echo $this->Paginator->sort('dateadded'); ?></th>
				<th class="messagequeue status"><?php echo $this->Paginator->sort('status'); ?></th>
				<th class="actions"><?php __("actions"); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 0;
		foreach ($messagequeues as $messagequeue):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td class="messagequeue messageid"><?php echo $messagequeue['Messagequeue']['messageid']; ?></td>
				<td class="messagequeue id"><?php echo $messagequeue['Messagequeue']['id']; ?></td>
				<td class="messagequeue message"><?php echo $messagequeue['Messagequeue']['message']; ?></td>
				<td class="messagequeue badge"><?php echo $messagequeue['Messagequeue']['badge']; ?></td>
				<td class="messagequeue created"><?php echo $messagequeue['Messagequeue']['created']; ?></td>
				<td class="messagequeue sound"><?php echo $messagequeue['Messagequeue']['sound']; ?></td>
				<td class="messagequeue modified"><?php echo $messagequeue['Messagequeue']['modified']; ?></td>
				<td class="messagequeue dateadded"><?php echo $messagequeue['Messagequeue']['dateadded']; ?></td>
				<td class="messagequeue status"><?php echo $messagequeue['Messagequeue']['status']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('view', true), array('controller' => 'messagequeues', 'action' => 'view', $messagequeue['Messagequeue']['id'])); ?>

					<?php echo $this->Html->link(__('edit', true), array('controller' => 'messagequeues', 'action' => 'edit', $messagequeue['Messagequeue']['id'])); ?>

					<?php echo $this->Html->link(__('delete', true), array('controller' => 'messagequeues', 'action' => 'delete', $messagequeue['Messagequeue']['id']), null, sprintf(__('Are you sure you want to delete # %%s ?', true), $messagequeue['Messagequeue']['id'])); ?>

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
