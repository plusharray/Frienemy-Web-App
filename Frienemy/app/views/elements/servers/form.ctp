<?php echo $this->Form->create('Server'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Server.serverid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Server']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Server']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Server.servername'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Server']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Server.serverurl'); ?>
<?php echo $this->Form->input('Server.servertypeid'); ?>


<?php echo $this->Form->end('Submit'); ?>
