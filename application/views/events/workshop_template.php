<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title><?= $title ?></title>

<link href="<?php echo base_url(); ?>/favicon.ico" rel="icon" type="image/x-icon" />  



   <?= $_scripts ?>

   <?= $_styles ?>

  
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/menu.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/slider/style.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.28468.js"></script>
<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cslider.js"></script>
<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
</script>		
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>js/less-1.1.3.min.js" type="text/javascript" ></script>

 <link rel="stylesheet" href="<?php echo base_url()?>css/login/form.css" type="text/css" />
<!--FancyBox Start--> 
<script type="text/javascript" src="<?php echo base_url()?>fancybox/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fancybox/jquery.fancybox.css?v=2.0.6" media="screen" />

<script type="text/javascript">
	
		$(".fancybox").fancybox({
				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,
			});
	
</script>

<script>

var height2;

var width2;
var cssheight2;

   $(document).ready(function(){

          height2 = $('div#topbar-outer').position().top;

          width2 = $('div#topbar-outer').css('width');
          cssheight2 = $('div#topbar-outer img').css('height');

         scrollalert2(height2);
         

      });

function scrollalert2(){

	var scrolltop1=$("body").scrollTop();

	

	if(scrolltop1>=height2)

	{
		$("div#topbar-outer").css("position","fixed");

		$("div#topbar-outer").css("top","0");

                $("div#topbar-outer").css("width",width2);
		
		$("div#topbar-outer").css("height", cssheight2);

	}

	else if(scrolltop1 == 0){

		$("div#topbar-outer").css("position","inherit");
                $("div#topbar-outer").css("height",cssheight2);
	}

	setTimeout('scrollalert2();', 10);

}

</script>

</head>
<body  style="">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   

   <div id="outerWrapper" class="center">
      <div id="innerWrapper">
      <div id="header">

            <?= $header ?>

      </div>
      <div id="content">
<div class="workshop">     

         
      
         

             <h2 class="title"><?= $title ?></h2>

               

                <div id="tabs">

                 

                  <?= $tabs ?>

                  
		
                </div>
		
                    <div class="content" >

                    

                    

                      <?= $content ?>

                    

                  </div>

                

  </div>         
	
      </div>

         <div id="footer">

            <?= $footer ?>

         </div>

      

  
  </div>
   </div>

   
<script type="text/javascript">
localStorage.clear()  //To prevent caching of LESS files, remove later
</script>
</body>

</html>