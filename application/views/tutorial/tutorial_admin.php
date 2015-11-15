<?php foreach($tabs as $value){ ?>
Update:<?php echo anchor("tutorials/update/tab/".$value->id,$value->menu_name) ?><br/>
Delete:<?php echo anchor("tutorials/delete/tab/".$value->id,$value->menu_name) ?><br/>
<?php }?>

<?php echo form_open();?>
<legend>Edit tutorial</legend>
<label>
<input type="text" name="tutname" id="">
 Name</label><br>

<label>
<input type="url" name="tuturl" id="">
 Pdf Url</label><br>
<input type="text" name="tutposition" id="">
Position</label><br>
<label>
<input type="text" name="tutslug" id="">
Slug</label><br>

<legend>Add tabs</legend>
<label>
<input type="text" name="tabname" id="">
 Add Tab</label><br>

<label>
<input type="text" name="tabposition" id="">
Position</label><br>


<input type="submit" name="submit" value="submit">
<?php echo form_close(); ?>
<?php echo anchor("tutorials/delete/tutorial/".$tutorial->id,"Delete"); ?><br/>
<br/>
<?php echo form_open_multipart('tutorials/upload'); ?>
<input type="file" name="userfile" size="20" />
<br/>
<label>
<input type="text" name="tutpath" id="" value="<?php echo $tutorial->slug; ?>"/>
Upload path</label><br>
 <input type="submit" value="upload" />
</form>
Files :
<?php
foreach($files as $value){
    echo base_url(). $tutorial->slug . '/uploads/' . $value;
}
?>