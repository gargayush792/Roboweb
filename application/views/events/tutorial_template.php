<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"

   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

   <title><?php if($title)
                  echo $title;
                else
                  echo "Tutorials"; ?></title>

<link href="<?php echo base_url(); ?>/favicon.ico" rel="icon" type="image/x-icon" />  



   <?= $_scripts ?>

   <?= $_styles ?>

  
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/menu.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.28468.js"></script>
<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>js/less-1.1.3.min.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/tutehome.css">


<?php 

if($title)
{

        echo '<script>

        var height;

        var width;

           $(document).ready(function(){

                 $.localScroll({

                       target:"body",

            	queue:true,

        		duration:1000,

        		hash:true,

                        offset: -100,

        		onBefore:function( e, anchor, $target ){

        			// The "this" is the settings object, can be modified

        		},

        		onAfter:function( anchor, settings ){

                         

        			// The "this" contains the scrolled element (#content)

        		}

                   

                    });


                  height = $("#tabs div#fix").position().top;
          var height2 = $("#footer").position().top;

                  width = $("#tabs").css("width");
        	 cssheight = $("#tabs").css("height");
                  

                 scrollalert(height);


                 

              });

           

        function scrollalert(){

        	var scrolltop=$("body").scrollTop();
        	if(scrolltop>=height)
        	{

        		$("#tabs div#fix").css("position","fixed");

        		$("#tabs div#fix").css("top", 150);

                        $("#tabs div#fix").css("width",width);
        		$("#tabs div#fix").css("background","rgba(230, 241, 245, 0.5)");
        		$("#tabs").css("height",height);

              

        	}
                

        	else{

        		$("#tabs div#fix").css("position","inherit");

                        $("#tabs div#fix").css("width","100%");

        	}

        	setTimeout("scrollalert();", 10);

        }

        </script>';
      }
    else
    {

    }

?>





</head>
<body  style="">

   <div id="outerWrapper_new" class="">
      <div id="header">

            <?= $header ?>

      </div>
      
      <div id="innerWrapper_new">
      <div id="content">
      <?php if ($title) 
                {
                  echo '<div id="topic-name"><h2>'.$title.'</h2></div>';
                }

         ?>
        <div class="tutorial">     

                 
              
                 

                     <!-- <h2 class="title"><?= $title ?></h2> -->

                       <?php if ($title) 
                        {
                          echo '<div id="tabs">'.$tabs.'</div>';
                        }?>

                        
        		
                            <div class="content" >

                            

                            

                              <?= $content ?>

                            

                          </div>

                        

          </div>         
	
      </div>

         </div>
         <div id="footer">

            <?= $footer ?>


      

  
  </div>
   </div>

   
<script type="text/javascript">
localStorage.clear()  //To prevent caching of LESS files, remove later
</script>
</body>
<script type="text/javascript" src="scripts/google.jquery.js"></script>
    <script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav').localScroll(800);
      
      //.parallax(xPosition, speedFactor, outerHeight) options:
      //xPosition - Horizontal position of the element
      //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
      //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
      $('#kraig').parallax("50%", 0.5);
      $('#avr').parallax("50%", 0.1);
      $('#arduino').parallax("50%", 0.4);
      $('#mechanical').parallax("50%", 0.1);
      $('#opencv').parallax("50%", 0.5);
      $('#imageprocessing').parallax("50%", 0.2);
      $('#auto').parallax("50%", 0.4);
    })
    </script>
</html>