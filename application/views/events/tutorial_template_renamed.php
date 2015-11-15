<html>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/csstutorial/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="css/csstutorial/general.css">
		<link rel="stylesheet" type="text/css" href="css/csstutorial/docs.css">
</head>
<body>
      <div id="header">

            <?= $header ?>

      </div>
      <div id="content">
       <?= $content ?>
      </div>

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
			$('#manual').parallax("50%", 0.1);
			$('#IP').parallax("50%", 0.2);
		})
		</script>

</html>