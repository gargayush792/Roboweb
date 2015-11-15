<?php


echo form_open();

?>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-latest.js"></script><script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script><script type="text/javascript">	tinyMCE.init({		// General options		mode : "textareas",		theme : "simple",			});</script>
	
	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" value="<?php echo $post[0]->name; ?>"/>
	</p>
<p>
		<label for="title">Position:</label>
		<input type="text" name="position" id="position" value="<?php echo $post[0]->position; ?>"/>
	</p>
	
	<p>
		<label for="content">Content:</label>
		<textarea class="ckeditor"  name="content" id="content" />
                <?php echo $post[0]->content; ?>
		</textarea>
	</p>
	<p>
		<label for="content">Associated Pictures with the workshop(Select and click submit to delete):</label>
		
	</p>
             <?php
                    $picoptions=array();
                    foreach ($pics as $value){
                    array_push($picoptions,$value->name);
                    }
                   echo form_multiselect('picsdelete[]', $picoptions);
                 
             ?>
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php echo
        
       
        form_close();
echo anchor("workshops/delete/".$post[0]->id,"Delete");
 ?>