<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js" ></script>
<?php if(!empty($pages)): ?>
{pages}
Update:<?php echo anchor("home/update/page/{id}","{menu_name}"); ?><br/>
View:<?php echo anchor("home/page/{slug}","{menu_name}"); ?><br/>
{/pages}
<?php endif; ?>

<?php echo form_open();?>

<label>
<input type="text" name="tabname" id="" value="<?php if(isset($page[0])) echo $page[0]->menu_name; ?>">
Page Name</label><br>
<label>

<input type="text" name="tabslug" id="" value="<?php if(isset($page[0])) echo $page[0]->slug; ?>">
Slug</label><br>
<label>
<textarea class="ckeditor" type="text" name="tabcontent" ><?php if(isset($page[0])) echo $page[0]->content; ?></textarea>
Content</label><br>

<label>
<input type="text" name="tabcat" id="" value="<?php if(isset($page[0])) echo $page[0]->category; ?>">
Page Category</label><br>

<input type="submit" name="tabsubmit" value="submit">

<?php echo form_close(); ?>

<?php echo form_open_multipart('tutorials/upload', array('id'=>'uploadform')); ?>
<input id="userfile" type="file" name="userfile" size="20" />
<br/>
<label>
<input type="text" name="tutpath" id="uppath" value=""/>
Upload path</label><br>
<input type="submit" value="upload" />
</form>