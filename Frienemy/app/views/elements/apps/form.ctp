<?php echo $this->Form->create('App'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('App.appid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['App']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('App.appname'); ?>
<?php echo $this->Form->input('App.dateadded'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['App']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['App']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
