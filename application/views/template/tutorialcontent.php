            <ul class="nav">
            <?php foreach($tutorials as $key=>$value)
            {
            ?>
				<li><a href="#<?php echo $value['slug'] ?>"><?php echo $key ?></a></li>
		    <?php }?>
			</ul>

			<ul class="content">
            
                <?php foreach($tutorials as $key=>$value)
    			{
    			?>
       			<li>
                   <div id="<?= $value['slug'] ?>" class="span12 event">
    				<div class="span7" style="min-height:400px;">
						<a href="#"><h3 align="center"><?php 
                        if($key=="KRAIG") echo $key." Presentations";
                        else echo $key; ?></h3></a>

						<p align="center"><strong>Introduction:</strong><?php echo  $value['intro']; ?></p>
    					<table width="100%">
    						<tbody>
    						<?php   $i = 0;
    								for($out=0; $out<5; $out++)
    								{ 
    									$end = $i + 4;
    						?>
    							<tr>
    							<?php for ($i ; $i<$end; $i++)
                                {  
                                    if($i > sizeof( $value['tuts']) - 1)
                                    break;
                                ?>
    								<td><a href="<?php echo base_url(). 'tutorials/category/'. $value['slug']. '/' . $value['tuts'][$i]->slug ?>"><?php echo $value['tuts'][$i]->menu_name ?></a></td>
                                <?php } ?>
    							</tr>
    						<?php } ?>
    						</tbody>
    					</table>
                    </div>
                </div>    
    			</li>
    			<?php } ?>
                
            
            
<!--            
<?php foreach($tutorials as $key=>$value)
{
?>
       <li>
    			<div id="<?= $value['slug'] ?>" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center"><?php 
                        if($key=="KRAIG") echo $key." Presentations";
                        else echo $key; ?></h3></a>

						<p align="center"><strong>Introduction:</strong><?php echo  $value['intro']; ?></p>
						<ul width="96%" align="center" class="list1">
                        <?php $i = 0; for($out=0; $out<4; $out++) { $end = $i + 4;?>
							<li align="center" style="width:18%;">
								<ul>
                                <?php for ($i ; $i<$end; $i++)
                                {  
                                    if($i > sizeof( $value['tuts']) - 1)
                                    break;
                                ?>
									<li><a href="<?php echo base_url(). 'tutorials/category/'. $value['slug']. '/' . $value['tuts'][$i]->slug ?>"><?php echo $value['tuts'][$i]->menu_name ?></a></li>
                                <?php
                                }
                                ?>
								</ul>
							</li>
                            <?php } ?>
						
						</ul>
					</div>
				</div>
			</li>     

<?php
}
?>-->
		<!--	<li>
				<div id="kraig" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center">K.R.A.I.G</h3></a>

						<p align="center"><strong>Intro :</strong><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<ul width="96%" align="center" class="list1">
							<li align="center" style="width:18%;">
								<ul>Module 0
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:60%;font-weight:bolder;">Module 1
								<ul align="center" class="list1">
									<li align="center" style="width:32%;">
										<ul>Module 1.a
											<li><a href="tutorial1">Tutorial 1</a></li>
											<li><a href="tutorial2">Tutorial 2</a></li>
											<li><a href="tutorial3">Tutorial 3</a></li>
											<li><a href="tutorial4">Tutorial 4</a></li>
										</ul>
									</li>
									<li align="center" style="width:32%;">
										<ul>Module 1.b
											<li><a href="tutorial1">Tutorial 1</a></li>
											<li><a href="tutorial2">Tutorial 2</a></li>
											<li><a href="tutorial3">Tutorial 3</a></li>
											<li><a href="tutorial4">Tutorial 4</a></li>
										</ul>
									</li>
									<li align="center" style="width:32%;">
										<ul>Module 1.c
											<li><a href="tutorial1">Tutorial 1</a></li>
											<li><a href="tutorial2">Tutorial 2</a></li>
											<li><a href="tutorial3">Tutorial 3</a></li>
											<li><a href="tutorial4">Tutorial 4</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li align="center" style="width:18%;">
								<ul>Module 2
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div id="avr" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center">Autonomous and AVR Tutorials</h3></a>
						<p align="center"><strong>Intro :</strong><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<ul align="center" class="list1">
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div id="arduino" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center">Arduino Tutorials</h3></a>
						<p align="center"><strong>Intro :</strong><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<ul align="center" class="list1">
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div id="manual" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center">Manual Robotics Tutorials</h3></a>
						<p align="center"><strong>Intro :</strong><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<ul align="center" class="list1">
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li>
				<div id="IP" class="span12 event">
					<div class="span7">
						<a href="#"><h3 align="center">Image Processing Tutorials</h3></a>
						<p align="center"><strong>Intro :</strong><br/>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
						<ul align="center" class="list1">
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
							<li align="center" style="width:24%;">
								<ul>
									<li><a href="tutorial1">Tutorial 1</a></li>
									<li><a href="tutorial2">Tutorial 2</a></li>
									<li><a href="tutorial3">Tutorial 3</a></li>
									<li><a href="tutorial4">Tutorial 4</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</li>-->
		</ul>