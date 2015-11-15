<ul class="nav">
<?php foreach($events as $key=>$value)
{
?>
    <li><a href="#<?php echo $value['slug']; ?>" title="<?php echo $key; ?>"><?php echo $key; ?></a></li>


<?php
}
?>
				
			<!--	<li><a href="#canyon" title="Canyon Rush">Canyon Rush</a></li>
				<li><a href="#quake" title="Quake">Tremors</a></li>
				<li><a href="#transporter" title="Transporter">Transporter</a></li>
				<li><a href="#geo-aware" title="Geo-Aware">Geo-Aware</a></li>-->
			</ul>

<ul class="content">
<?php foreach($events as $key=>$value)
{
?>
            <li>
    			<div id="<?php echo $value['slug']; ?>" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url().'events/event/'.$value['slug']; ?>"><h3 align="center"><?php 
                        
                        echo $key; ?></h3></a>

						<p align="center"><strong>Event Introduction :</strong><br/> <?php echo $value['intro']; ?></p>
						<p><strong>Problem Statement :-</strong> <?php echo $value['ps']; ?></p>
					</div>
				</div>
			</li>

<?php
}
?>
		<!--	<li>
				<div id="inspiralon" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url(); ?>events/event/inspiralon"><h3 align="center">inSPIRALon</h3></a>

						<p align="center"><strong>Event Intro :</strong><br/>The helix, more commonly called the spiral, is a beautiful thing. With its majestic symmetry and fluidity, it can ignite the imagination of those who appreciate it. And for the robotics enthusiast, there would be something distinctly enthralling in the design, creation and control of a robot that could actually traverse a helix smoothly and effectively.
INSPIRALON, a manual event of ROBOTIX 2014, looks to bring out that excitement in its participants, whose robots have to move along the spiral structure, making repairs where they are required, and with only a central rod for assistance. The spiral is ready. Are you?</p>
						<p><strong>Problem Statement :-</strong> A problem that has always been faced by sewage boards has been keeping their pipes unblocked. This event aims to solve that.</p>
					</div>
				</div>
			</li>
			<li>
				<div id="canyon-rush" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url(); ?>events/event/canyonrush"><h3 align="center">Canyon Rush</h3></a>
						<p align="center"><strong>Event Intro :</strong><br/>Canyons are one of the most fearsome and awe-inspiring natural phenomena. Vast expanses, uncharted territory and ominous falls looming around every corner. As formidable as they are in and of themselves, the feat of traversing one with a robot takes things to a whole new dimension. That is the experience that ROBOTIX 2014 tries to replicate with its manual event, Canyon Rush.
Teams have to build and operate a manually controlled robot to make its way around a canyon-like arena using grooves and furrows along the walls, navigate obstacles and rescue victims stranded along the way. Let the heroics begin!</p>
						<p><strong>Problem Statement :-</strong> Build a manually controlled robot capable of traversing an arena similar to a CANYON (with grooves on parallel walls) and collect objects placed at certain depths.</p>
					</div>
				</div>
			</li>
			<li>
				<div id="quake" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url(); ?>events/event/quake"><h3 align="center">Tremors</h3></a>
						<p align="center"><strong>Event Intro :</strong><br/>It is said that nature’s fury, when unleashed, is unstoppable. There is no technology, no human invention that can contend with a sufficiently powerful natural phenomenon. Earthquakes are right up there on the list of such events. There is little anybody can do when the very ground beneath their feet gives way and structures crumble around them. 
However, where we do have a role to play, and a crucial one at that, is in the aftermath. Acting quickly and effectively would be the difference between Life and Death for many of the affected people. With its autonomous event TREMORS, the team at ROBOTIX 2014 invites participants to design and program a robot capable of detecting mini-vibrations on the floor as earthquakes, of navigating to the source and saving stranded victims from their doom. Not for the faint of heart is this!</p>
						<p><strong>Problem Statement :-</strong> Build an autonomous robot that can detect the mini earthquakes and evacuate the victims which are away from the epicenter.</p>
					</div>
				</div>
			</li>
			<li>
				<div id="transporter" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url(); ?>events/event/transporter"><h3 align="center">Transporter</h3></a>
						<p align="center"><strong>Event Intro :</strong><br/>A city is under siege from a formidable enemy. The latest attack has destroyed many of the roads and bridges that connect it to the outside, by forming vital lines of communication and supplies. The materials to replace them are scattered all over the city. As lead engineers of the defences, you are charged with designing an autonomous robot that can navigate the grid network of the city, locating the areas of damage, and the means to repair them, and bringing the two together in the most efficient manner. 
The challenge that is embodied in ROBOTIX 2014’s autonomous event TRANSPORTER is steep and daunting, but the rewards are that much more fulfilling.</p>
						<p><strong>Problem Statement :-</strong> Build an autonomous robot which can traverse a grid and place cubes in voids on the grid.</p>
					</div>
				</div>
			</li>
			<li>
				<div id="geo-aware" class="span12 event">
					<div class="span7">
						<a href="<?php echo base_url(); ?>events/event/geoaware"><h3 align="center">Geo-Aware</h3></a>
						<p align="center"><strong>Event Intro :</strong><br/>A fearsome maze with imposing walls. Innumerable ways to get lost. Tunnels that could take you closer to your goal or to your doom.  An unenviable situation for any human being, let alone a robot. But such is the challenge of Geo-Aware. 
ROBOTIX 2014 presents it’s Computer Vision event which will put your path planning and navigation skills to the test. The only solace for your stranded robot is an old static overhead map of the maze - a map your robot will have to understand and process and then use to find its way to the target points and out of the arena.</p>
						<p><strong>Problem Statement :-</strong> Create an Image Processing robot which can use onboard video to navigate an environment based on  an overhead image as a map.</p>
					</div>
				</div>
			</li>-->
		</ul>