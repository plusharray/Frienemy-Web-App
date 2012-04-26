<?php echo $this->Form->create('Appsubscription'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Appsubscription.appsubscriptionid'); ?>
<?php echo $this->Form->input('Appsubscription.subscriptionname'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Appsubscription']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Appsubscription']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Appsubscription']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
