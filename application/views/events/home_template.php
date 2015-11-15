<html>
    
		<head>
   		<title><?php if($title)
                  echo $title;
                else
                  echo "Homepage"; ?></title>
   		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/header.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/footer.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/homecontent.css">
		</head>
<body>
	    <div id="header">

            <?= $header ?>

        </div> 
        <?php if ($title) 
                {
                  echo '<div id="topic-name"><h2>'.$title.'</h2></div>';
                }

         ?>
        <div id="content">
        <?php if($title && $title!="The Team" && $title!="Dream-A-Bot") echo '<style>
            #content span,#content p,#content h1,#content h2,#content h3,#content h4,#content h5,#content h6,#content li,#content ul
            {
                text-align:left;
            }
        </style>'; ?>
        <?php if($title=="Updates" || $title=="Dream-A-Bot")
          {
            echo $content;
          }
          else if($title)
          {
            echo '<div id="wrap" align="center" style="margin-top:40px;min-height:300px;">'.$content.'</div>';
          }
          else
          {
            echo $content;
          }
        ?>
        </div>

        <div id="footer">
        <?= $footer ?>
        </div>
    </body>
</html>