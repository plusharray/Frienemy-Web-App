<?php echo $this->Form->create('Friend'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Friend.facebookid'); ?>
<?php echo $this->Form->input('Friend.friendid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Friend']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Friend.friendname'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Friend']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Friend.isfrienemy'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Friend']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>


<?php echo $this->Form->end('Submit'); ?>
