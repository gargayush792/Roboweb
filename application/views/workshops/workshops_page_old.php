
    <link href="<?php echo base_url(); ?>css/movingboxes/movingboxes.css" media="screen" rel="stylesheet">

    <script src="<?php echo base_url(); ?>js/movingboxes/jquery.movingboxes.js"></script>
    <style>
		/* Dimensions set via css in MovingBoxes version 2.2.2+ */
		#slider { width: 500px; }
		#slider li { width: 250px; }
    </style>
    <script>
	$(function(){

		$('#slider').movingBoxes({
			/* width and panelWidth options deprecated, but still work to keep the plugin backwards compatible
			width: 500,
			panelWidth: 0.5,
			*/
			startPanel   : 1,      // start with this panel
			wrap         : false,   // if true, the panel will "wrap" (it really rewinds/fast forwards) at the ends
			buildNav     : true,   // if true, navigation links will be added
			navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
		});

	});
    </script>


<?php if(!empty($pics)):?>

<pictures>
<ul id="slider">
{pics}
<li>
    <img src="<?php echo base_url();?>uploads/{name}" alt="picture">
</li>
{/pics}
</ul>
</pictures>
<?php endif;?>
