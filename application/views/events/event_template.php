<html>
<body>
<head>

<title><?php if($title)
                  echo $title;
                else
                  echo "Events"; ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssevent/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssevent/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssevent/general.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssevent/docs.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssevent/specific.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
    <style>
    .clicked{
        /*display: block;*/
    }
    .notclicked{
        display: none;
    }
    </style>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-latest.js"></script><?= $_styles ?>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/menu.js"></script>
<script src="<?php echo base_url(); ?>js/less-1.1.3.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>js/jquery.scrollTo-min.js" type="text/javascript" ></script>


    <script>
jQuery(document).ready(function($){  

    
$("div#events a:first-child").ready(function() {
$(this).trigger('click');
});


      $('.nochild div').addClass('notclicked'); //Set them to display: none

      $('#events a').live("click",function(){

           
        $(this).parent().find('a').removeClass('active'); //for adding css to the current active <a> tag
        $(this).addClass('active');
        
        $('.clicked').removeClass('clicked').addClass('notclicked'); //Hide the currently active div
            var height = $('div.nochild' + ' #'+ $(this).attr('rel')).css("height");
            
            //$('.nochild').animate({height: height + 'px'}, 1000);
        $('div.nochild' + ' #'+ $(this).attr('rel')).removeClass('notclicked').addClass('clicked'); //display target div

            $('div.content').append('<center><img align="center" class="loading" src="http://loadinggif.com/images/image-selection/36.gif" /></center>');
        //$("div.nochild").find('div').hasClass('clicked').addClass('check');
        var parent = $(this).parent().attr('id');
            var form_data = {
        name: $(this).attr('rel'),
        eventid : "<?php echo $maintabs[0] ->event_id ; ?>" ,
        ajax: '1'       
            };
            
            $.ajax({
        url: "<?php echo site_url('events/load'); ?>",
        type: 'POST',
        data: form_data,
            dataType: 'json' ,
        success: function(json) {

        var elem ='#'+ parent + ' #'+ json.result.link ; //Target element for putting the subtabs New div is created in the parent of the current element
        $(elem).remove(); 
        var data = json.result.data; var list = ''; 
        //alert( json.result.data);
            $('#'+ parent).append('<div  class="tabsnav" id="'+ json.result.link +'">'); 
                        if(data == '') { $('img.loading').hide(); }
                        
                        
                $.each(data, function(key , val){
                              list+='<a href="#" rel="' +val.id +'">'+val.name+'</a>';  //Subtab list created
                  $('#'+json.result.link).append('<a href="#" rel="' +val.id +'">'+val.name+'</a>');       //.show('fast') removed
                  if(key==0){ //Open the contents of first tab created
                  $('a[rel="'+ val.id +'"]').trigger('click');
                     

                  }
            });
                       
                        
                        //$('#'+json.result.link).append(list); //subtab list added to div
                       // $('a[rel="'+ data[0].id +'"]').trigger('click'); 
                       $('img.loading').hide();
                        
           // }
          
        } //End of success json

        });
      
      $('body').scrollTo("#main", 1000, {easing : 'swing'});
      return false;
     });
$("div#events").find('a').eq(0).trigger('click').addClass('active');
 
});
</script>
  </head>

       <body>        
  
         <div id="header">
            <?= $header ?>
         </div>
         
         <div id="content" style="background-image: url(<?php echo base_url(); ?>Images/background1.jpg);">
         <?php if ($title) 
                {
                  echo '<div id="topic-name"><h2>'.$title.'</h2></div>';
                }

         ?>
         
         <div id="main" class="event">
        


                <div id="tabs">              
                    <?= $tabs ?>
                </div>
                <div class="content">
                    
                      <?= $content ?>
                   
                </div>
                
         </div>
         </div>
         <div id="footer_outer">
            <?= $footer ?>
         </div>
  

</body>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/google.jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.parallax-1.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.localscroll-1.2.7-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>scripts/jquery.scrollTo-1.4.2-min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.nav').localScroll(800);
            
            //.parallax(xPosition, speedFactor, outerHeight) options:
            //xPosition - Horizontal position of the element
            //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
            //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
            $('#inspiralon').parallax("50%", 0.5);
            $('#canyonrush').parallax("50%", 0.1);
            $('#tremors').parallax("50%", 0.4);
            $('#transporter').parallax("50%", 0.1);
            $('#geoaware').parallax("50%", 0.2);
        })
        </script>
</html>