<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js" ></script>

<?php echo form_open();?>
    
         

    
          
        <label>
        <input type="text" name="catname" id="" value="">
         Name Category</label><br>
        <label>
        
        <input type="text" name="catslug" id="" value="">
         Slug</label><br>
        <label>
        <input type="text" name="catposition" id="" value="">
         Position</label><br>
         <textarea class="ckeditor" type="text" name="catintro" ></textarea>
        Content</label><br>
        
        
	

 <legend>Add tutorial to category</legend> 
        <label>
        <input type="text" name="tutname" id="" value="">
         Name Tutorial</label><br>
        <label>
        
        <input type="" name="tutslug" id="" value="">
         Slug</label><br>
        <label>
        <input type="text" name="tutposition" id="" value="">
         Position</label><br>
        
        <input type="submit" name="submit" value="submit">
       
	
<?php echo form_close(); ?>
<?php echo anchor("tutorials/delete/category/".$id[0],"Delete"); ?><br/>
