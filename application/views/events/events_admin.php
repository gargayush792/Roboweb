
<script type="text/javascript">
<!--
function confirmation() {
	var answer = confirm("Leave tizag.com?")
	if (answer){
		alert("Bye bye!")
		window.location = "http://www.google.com/";
	}
	else{
		alert("Thanks for sticking around!")
	}
}
//-->
</script>

{tabs}
Update:<?php echo anchor("events/update/tab/{id}","{menu_name}") ?><br/>
<!--Delete:<?php echo anchor("events/delete/tab/{id}","{menu_name}") ?><br/>-->
{/tabs}

<?php echo form_open();?><legend>Edit Event</legend><label><input type="text" name="evename" id=""> Name</label><br><label><input type="text" name="eveslug" id="">Slug</label><br><input type="text" name="eveposition" id="">Position</label><br><legend>TAbs</legend>
<label>
<input type="text" name="tabname" id="">
 Add Tab</label><br>
<label>

<input type="text" name="tabposition" id="">
Position</label><br>
<label>
<input type="text" name="category" id="" value='events'>
Category</label><br> 

<input type="submit" name="submit" value="submit">
<br/>
<br/>
<?php echo form_close(); ?>{event}Delete:<?php echo anchor("events/delete/event/{id}","{menu_name}") ?><br/>{/event}