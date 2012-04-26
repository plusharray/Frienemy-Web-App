<?php echo $this->Form->create('Certificate'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Certificate.certificateid'); ?>
<?php echo $this->Form->input('Certificate.certificatename'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Certificate']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Certificate.keycertfile'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Certificate']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Certificate.passphrase'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Certificate']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
