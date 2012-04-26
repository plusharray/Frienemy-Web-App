<?php echo $this->Form->create('Device'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Device.deviceid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Device']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Device.devicetoken'); ?>
<?php echo $this->Form->input('Device.dateadded'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Device']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Device.istestdevice'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Device']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Device.devicenotes'); ?>


<?php echo $this->Form->end('Submit'); ?>
