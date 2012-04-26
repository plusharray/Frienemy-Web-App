<?php echo $this->Form->create('Feed'); ?>
<?php if ($mode == 'edit') {?>
<?php	echo $this->Form->hidden('id'); ?>
<?php }?>


<?php echo $this->Form->input('Feed.feedid'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("id"); ?></label>
	<em><?php echo $this->data['Feed']['id']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Feed.feedname'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("created"); ?></label>
	<em><?php echo $this->data['Feed']['created']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Feed.feedurl'); ?>
<?php echo $this->Form->input('Feed.datelastchecked'); ?>
<?php if ($mode == 'edit') {?>
<div class="label readonly">
	<label class="readonly"><?php __("modified"); ?></label>
	<em><?php echo $this->data['Feed']['modified']; ?>&nbsp;</em>
</div>
<?php } ?>
<?php echo $this->Form->input('Feed.datelastupdated'); ?>


<?php echo $this->Form->end('Submit'); ?>
