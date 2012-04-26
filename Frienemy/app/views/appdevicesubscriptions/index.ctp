<div class="appdevicesubscriptions index">
<h2><?php __('list_of_appdevicesubscriptions'); ?></h2>

<div id="gridWrapper">
	<table id="datagrid">
		<thead>
			<tr>
				<th class="appdevicesubscription appdevicesubscriptionid"><?php echo $this->Paginator->sort('appdevicesubscriptionid'); ?></th>
				<th class="appdevicesubscription id"><?php echo $this->Paginator->sort('id'); ?></th>
				<th class="appdevicesubscription dateadded"><?php echo $this->Paginator->sort('dateadded'); ?></th>
				<th class="appdevicesubscription created"><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="appdevicesubscription dateupdated"><?php echo $this->Paginator->sort('dateupdated'); ?></th>
				<th class="appdevicesubscription modified"><?php echo $this->Paginator->sort('modified'); ?></th>
				<th class="appdevicesubscription subscriptionenabled"><?php echo $this->Paginator->sort('subscriptionenabled'); ?></th>
				<th class="actions"><?php __("actions"); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 0;
		foreach ($appdevicesubscriptions as $appdevicesubscription):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td class="appdevicesubscription appdevicesubscriptionid"><?php echo $appdevicesubscription['Appdevicesubscription']['appdevicesubscriptionid']; ?></td>
				<td class="appdevicesubscription id"><?php echo $appdevicesubscription['Appdevicesubscription']['id']; ?></td>
				<td class="appdevicesubscription dateadded"><?php echo $appdevicesubscription['Appdevicesubscription']['dateadded']; ?></td>
				<td class="appdevicesubscription created"><?php echo $appdevicesubscription['Appdevicesubscription']['created']; ?></td>
				<td class="appdevicesubscription dateupdated"><?php echo $appdevicesubscription['Appdevicesubscription']['dateupdated']; ?></td>
				<td class="appdevicesubscription modified"><?php echo $appdevicesubscription['Appdevicesubscription']['modified']; ?></td>
				<td class="appdevicesubscription subscriptionenabled"><?php echo $appdevicesubscription['Appdevicesubscription']['subscriptionenabled']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('view', true), array('controller' => 'appdevicesubscriptions', 'action' => 'view', $appdevicesubscription['Appdevicesubscription']['id'])); ?>

					<?php echo $this->Html->link(__('edit', true), array('controller' => 'appdevicesubscriptions', 'action' => 'edit', $appdevicesubscription['Appdevicesubscription']['id'])); ?>

					<?php echo $this->Html->link(__('delete', true), array('controller' => 'appdevicesubscriptions', 'action' => 'delete', $appdevicesubscription['Appdevicesubscription']['id']), null, sprintf(__('Are you sure you want to delete # %%s ?', true), $appdevicesubscription['Appdevicesubscription']['id'])); ?>

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
