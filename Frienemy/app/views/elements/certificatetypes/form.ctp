<?php echo $this->Form->create('Certificatetype'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Certificatetype.certificatetypeid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Certificatetype']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Certificatetype.certificatetypename'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Certificatetype']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Certificatetype']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
