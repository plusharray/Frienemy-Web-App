<?php echo $this->Form->create('Appdevicesubscription'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Appdevicesubscription.appdevicesubscriptionid'); ?>
<?php echo $this->Form->input('Appdevicesubscription.dateadded'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Appdevicesubscription']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Appdevicesubscription']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Appdevicesubscription.dateupdated'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Appdevicesubscription']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Appdevicesubscription.subscriptionenabled'); ?>


<?php echo $this->Form->end('Submit'); ?>
