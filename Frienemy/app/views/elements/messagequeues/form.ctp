<?php echo $this->Form->create('Messagequeue'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Messagequeue.messageid'); ?>
<?php echo $this->Form->input('Messagequeue.message'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Messagequeue']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Messagequeue.badge'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Messagequeue']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Messagequeue']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Messagequeue.sound'); ?>
<?php echo $this->Form->input('Messagequeue.dateadded'); ?>
<?php echo $this->Form->input('Messagequeue.status'); ?>


<?php echo $this->Form->end('Submit'); ?>
