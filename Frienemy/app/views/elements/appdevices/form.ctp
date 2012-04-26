<?php echo $this->Form->create('Appdevice'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Appdevice.appdeviceid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Appdevice']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Appdevice']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Appdevice']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Appdevice.deviceactive'); ?>
<?php echo $this->Form->input('Appdevice.dateadded'); ?>
<?php echo $this->Form->input('Appdevice.dateupdated'); ?>
<?php echo $this->Form->input('Appdevice.launchcount'); ?>


<?php echo $this->Form->end('Submit'); ?>
