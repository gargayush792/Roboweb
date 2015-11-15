<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Welcome to Workshop editor</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>	
<script type="text/javascript" src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.gears.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.silverlight.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.flash.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.browserplus.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/pup/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-latest.js"></script><script type="text/javascript" src="<?php echo base_url();?>ckeditor/ckeditor.js"></script><script type="text/javascript">	tinyMCE.init({		// General options		mode : "textareas",		theme : "simple",			});</script>
</head>
<body>

<div id="container">
	<h2>Create</h2>
	<?php echo form_open('workshops/create');?>
	
	<p>
		<label for="title">Title:</label>
		<input type="text" name="title" id="title" />
	</p>
	
	<p>
		<label for="content">Content:</label>
		<textarea class="ckeditor" name="content" id="content" />
		</textarea>
	</p>
	
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php $path=UPLOADPATH; echo $path; echo form_close(); ?>
	<?php echo form_open('workshops/picsession');?>
	
	<p>
		<label for="title">Wkshop Id for uploading pictures:</label>
		<input type="text" name="picsession" id="title"  value="<?php session_start();
		echo $_SESSION['picsession']; ?>"/>
	</p>
	
	<p>
		<input type="submit" value="Submit" />
	</p>
	<?php echo form_close(); ?>
	
	
	<!-- Update Workshop table -->
	
	<h3>Update</h3>
	
	<?php if(isset($posts)) : foreach($posts as $row) : ?>
	<h2><?php echo anchor("workshops/update/$row->id", $row->name); ?> </h2>
		

	<?php endforeach; ?>

	<?php else : ?>	
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<div id="container">
    <div id="filelist">No runtime found.</div>
    <br />
    <a id="pickfiles" href="javascript:;">[Select files]</a> 
    <a id="uploadfiles" href="javascript:;">[Upload files]</a>
</div>


<script type="text/javascript">
// Custom example logic
function $(id) {
	return document.getElementById(id);	
}


var uploader = new plupload.Uploader({
	runtimes : 'gears,html5,flash,silverlight,browserplus',
	browse_button : 'pickfiles',
	container: 'container',
	max_file_size : '10mb',
	url : '<?php echo base_url(); ?>/scripts/pup/upload.php',
	resize : {width : 320, height : 240, quality : 90},
	flash_swf_url : '<?php echo base_url(); ?>js/pup/plupload.flash.swf',
	silverlight_xap_url : '<?php echo base_url(); ?>js/pup/plupload.silverlight.xap',
	filters : [
		{title : "Image files", extensions : "jpg,gif,png"}
		
	]
});

uploader.bind('Init', function(up, params) {
	$('filelist').innerHTML = "<div>Current runtime: " + params.runtime + "</div>";
});

uploader.bind('FilesAdded', function(up, files) {
	for (var i in files) {
		$('filelist').innerHTML += '<div id="' + files[i].id + '">' + files[i].name + ' (' + plupload.formatSize(files[i].size) + ') <b></b></div>';
	}
	
	
});

uploader.bind('UploadProgress', function(up, file) {
	$(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
});

$('uploadfiles').onclick = function() {
	uploader.start();
	
	return false;
};

uploader.init();

</script>
</div>
</body>
</html>