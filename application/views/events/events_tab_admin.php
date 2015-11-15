<script type="text/javascript" src="<?php echo base_url();?>js/jquery-latest.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>


{tab}
<?php echo form_open("", array('id'=>'tabform'));?>
    
          
        <label>
        <input type="text" name="tabname" id="" value="{menu_name}">
         Name Tab</label><br>
        <label>
        
        <input type="text" name="tabposition" id="" value="{position}">
         Position</label><br>
        <label>
        <input type="text" name="subtabid" id="" value="{subtab_id}">
         subtabof Enter Parent Id</label><br>
         
        <label>
        <input type="text" name="tabvis" id="" value="{visible}">
         Visible </label><br>
        
        <textarea class="ckeditor" id="elem1"  style="width:100%" name="tabcontent">{content}</textarea>
        <input type="submit" name="submit" value="submit">
        
	
<?php echo form_close(); ?>
<?php echo anchor("events/admin/{event_id}/subtab/{id}/1","Add Subtab") ?>(Caution:Dont use when in tutorial admin area)<br/>
<?php echo anchor("events/delete/tab/{id}","Delete"); ?><br/>
{/tab}



<?php echo form_open_multipart('tutorials/upload', array('id'=>'uploadform')); ?>
<input id="userfile" type="file" name="userfile" size="20" />
<br/>
<label>
<input type="text" name="tutpath" id="uppath" value=""/>
Upload path</label><br>
<input type="submit" value="upload" />
</form>
<div id="result">
</div>
<script type="text/javascript" >
/*
$('#uploadform').submit(function(e) {
  e.preventDefault();
  $.ajaxFileUpload({
         url         :'http://robotix.in/tutorials/upload',
         secureuri      :false,
         fileElementId  :'userfile',
         dataType    : 'json',
         data        : {
            'tutpath'           : $('#uppath').val()
         },
         success  : function (data, status)
         {
            
            alert(data.msg);
            //$("#result").html(data.status);
         }
  });
  return false;
});
*/
</script>