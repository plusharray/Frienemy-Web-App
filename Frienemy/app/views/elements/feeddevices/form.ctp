<?php echo $this->Form->create('Feeddevice'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Feeddevice.feeddeviceid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Feeddevice']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Feeddevice.dateadded'); ?>
<?php echo $this->Form->input('Feeddevice.dateupdated'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Feeddevice']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Feeddevice.enabled'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Feeddevice']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
