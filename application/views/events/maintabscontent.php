<div class="nochild">
<?php foreach($alltabs as $value){?>
<?php if($value->haschild=='0'){ ?>
<div id="<?php echo $value->id; ?>" >
<?php echo $value->content ?>
</div>
<?php }} ?>
</div>
