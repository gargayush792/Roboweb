<!-- Navigation bar -->
    	<div id="navbar">
			<div id="wrapper">
				<header class="navbar span12">
					<div style="float:left;margin-left:-20px;"><a href="<?php echo base_url(); ?>"><img width="400px;" src="<?php echo base_url(); ?>Images/rbtx.png"></a></div>
					<ul>
						<li class="dropdown-submenu">
							<div align="center" id="drop" style="margin-top:90px;">
    							<ul>
                                                                   
									<li><a href="<?php echo base_url(); ?>home/page/about_us">About Us</a></li>
    								<li><a href="<?php echo base_url(); ?>home/page/team">Our Team</a></li>
								</ul>
							</div>
							<span style="margin-left:35px;"></span>
							<a href="<?php echo base_url();?>home">Home</a>
						</li>
						
                        <li class="dropdown-submenu">
    						<ul class="dropdown-menu">
                            
								<?php foreach($events as $key=>$value)
								{
								?>
					            <li>
					                <div align="center" class="display">
					                    <div class="span5 image-display"><img src="<?php echo base_url().'Images/'.$key.'-nav.jpg';?>"></div>
					                    <div class="span5 text-display">
					                        <a href="<?php echo base_url().'events/event/'.$value['slug']; ?>"><h2 align="center"><?php echo $key; ?></h2></a><p><strong>Problem Statement :- </strong><?php echo $value['ps'];?></p>
					                    </div>
					                </div>
					                <a href="<?php echo base_url().'events/event/'.$value['slug']; ?>"><?= $key ?></a>
					            </li>
								<?php
								}
								?>
							</ul>
    						<span></span>
							<a tabindex="-1" href="<?php echo base_url(); ?>events">Events</a>
						</li>
                        <!--
                        <li class="dropdown-submenu">
							<div class="display span11 events-menu">
								<ul class="dropdown-menu">
									<li id="icon-1">
										<a class="sub-tab" href="<?php echo base_url(); ?>events/event/inspiralon">inSPIRALon</a>
										<div id="icon-1" class="sub-display span8">
											<div class="span5 image-display"><img src="<?php echo base_url(); ?>Images/inspiralon-nav.jpg"></div>
											<div class="span3 text-display"><a href="<?php echo base_url(); ?>events/event/inspiralon"><h2>inSPIRALon</h2></a><p><strong>Problem Statement :-</strong> A problem that has always been faced by sewage boards has been keeping their pipes unblocked. This event aims to solve that.</p></div>
										</div>
									</li>
									<li id="icon-2">
										<a class="sub-tab" href="<?php echo base_url(); ?>events/event/canyonrush">Canyon Rush</a>
										<div id="icon-2" class="sub-display span8">
											<div class="span5 image-display"><img src="<?php echo base_url(); ?>Images/canyon-rush-nav.jpg"></div>
											<div class="span3 text-display"><a href="<?php echo base_url(); ?>events/event/canyonrush"><h2>Canyon Rush</h2></a><p><strong>Problem Statement :-</strong> Build a manually controlled robot capable of traversing an arena similar to a CANYON (with grooves on parallel walls) and collect objects placed at certain depths.</p></div>
										</div>
									</li>
									<li id="icon-3">
										<a class="sub-tab" href="<?php echo base_url(); ?>events/event/tremors">Tremors</a>
										<div id="icon-3" class="sub-display span8">
											<div class="span3 text-display"><a href="<?php echo base_url(); ?>events/event/tremors"><h2>Tremors</h2></a><p><p><strong>Problem Statement :-</strong> Build an autonomous robot that can detect the mini earthquakes and evacuate the victims which are away from the epicenter.</p></div>
											<div class="span5 image-display"><img src="<?php echo base_url(); ?>Images/quake-nav.jpg"></div>
										</div>
									</li>
									<li id="icon-4">
										<a class="sub-tab" href="<?php echo base_url(); ?>events/event/transporter">Transporter</a>
										<div id="icon-4" class="sub-display span8">
											<div class="span3 text-display"><a href="<?php echo base_url(); ?>events/event/transporter"><h2>Transporter</h2></a><p><strong>Problem Statement :-</strong> Build an autonomous robot which can traverse a grid and place cubes in voids on the grid.</p></div>
											<div class="span5 image-display"><img src="<?php echo base_url(); ?>Images/transporter-nav.jpg"></div>
										</div>
									</li>
									<li id="icon-5">
										<a class="sub-tab" href="<?php echo base_url(); ?>events/event/geoaware">Geo-Aware</a>
										<div id="icon-5" class="sub-display span8">
											<div class="span3 text-display"><a href="<?php echo base_url(); ?>events/event/geoaware"><h2>Geo-Aware</h2></a><p><strong>Problem Statement :-</strong> Create an Image Processing robot which can use onboard video to navigate an environment based on  an overhead image as a map.</p></div>
											<div class="span5 image-display"><img src="<?php echo base_url(); ?>Images/geo-aware-nav.jpg"></div>
										</div>
									</li>
								</ul>
							</div>
							<a tabindex="-1" href="<?php echo base_url(); ?>events">Events</a>
							<span></span>
						</li> -->
                        
                        
                        <li class="dropdown-submenu">
    						<ul class="dropdown-menu">
								<?php foreach($tutorials as $key=>$value)
								{
								?>
       							<li>
    								<div class="display span5">
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
													<td style="text-align:left;"><a href="<?php echo base_url(). 'tutorials/category/'. $value['slug']. '/' . $value['tuts'][$i]->slug ?>"><?php echo $value['tuts'][$i]->menu_name ?></a></td>
				                                <?php } ?>
    											</tr>
    										<?php } ?>
    										</tbody>
    									</table>
    								</div>
    								<a href="#"><?= $key ?></a>
    							</li>
    							<?php } ?>
    						</ul>
    						<span></span>
							<a tabindex="-1" href="<?php echo base_url(); ?>tutorials">Tutorial</a>
						</li>
						<!--
                        <li class="dropdown-submenu">
							<div class="display span11 tuts-menu">
								<ul class="dropdown-menu">
									<li id="icon-1">
										<a href="#kraig">K.R.A.I.G.</a>
										<div id="icon-1" class="sub-display span8">
											<div class="sub-sub-display">
												<div align="center" class="sub-list-display" style="width:19.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/kraig/101">KRAIG 101</a></li>
														<li><a href="tutorial2">KRAIG 102</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="tutorial1">KRAIG 103</a></li>
														<li><a href="tutorial2">KRAIG 104</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="tutorial1">KRAIG 105</a></li>
														<li><a href="tutorial2">KRAIG 106</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="tutorial1">KRAIG 107</a></li>
														<li><a href="tutorial2">KRAIG 108</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li id="icon-2">
										<a href="#avr">Autonomous and AVR Tutorials</a>
										<div id="icon-2" class="sub-display span8">
											<div class="sub-sub-display">
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/steppermotor">Stepper Motors</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/pid">PID Control</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/usart">USART-UART</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/shaftencoders">Shaft Encoders</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/linefollower">Line Follower</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/servo">Servo</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/timers">Timers</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/gridfollow">Grid Follower</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/avr/adctut" title="Analog to Digital Converter">ADC</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li id="icon-3">
										<a href="#arduino">Arduino Tutorials</a>
										<div id="icon-3" class="sub-display span8">
											<div class="sub-sub-display">
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/arduino/anaout">Analog Output(PWM)</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/arduino/serial">Serial Communication</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/arduino/digin">Disgital Input</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/arduino/digout">Digital Output</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/arduino/settingup">Setting up Arduino</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li id="icon-4">
										<a href="#mechanical">Manual Robotics Tutorials</a>
										<div id="icon-4" class="sub-display span8">
											<div class="sub-sub-display">
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/wheelstut">Various Types of Wheels</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/pickngrabtut">Picking & Gripping Mechanisms</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/sprinklertut">Water Sprinkling Mechanisms</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/submarinetut">Submarine Mechanisms</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/drivemechtut">Drive Mechanisms</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/gearsuspensiontut">Gears & Suspension Systems</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/rockerbogie">Rocker Bogie</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/mechanical/glidecamtut">Glidecam Mechanisms</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
									<li id="icon-5">
										<a href="#imageprocessing">Image Processing</a>
										<div id="icon-5" class="sub-display span8">
											<div class="sub-sub-display">
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/introduction">Introduction & Integrating OpenCV</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/programming_concepts">Programming Concepts of IP</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/noise_reduction">Noise Reduction</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/video_and_callback">Video Processing and Callback</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/edge_detection">Edge Detection</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/introductory_programs">Introductory programs using OpenCV</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/gscale_bin_hist">Grayscale, Binary and Histogram</a></li>
													</ul>
												</div>
												<div align="center" class="sub-list-display" style="width:24.5%">
													<ul>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/blob_detection">Blob Detection</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/colour_detection">Color Detection</a></li>
														<li><a href="<?php echo base_url(); ?>tutorials/category/imageprocessing/shape_detection">Shape Detection</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<a tabindex="-1" href="<?php echo base_url(); ?>tutorials">Tutorial</a>
							<span></span>
						</li> -->
						<li>
							<a href="<?php echo base_url(); ?>home/page/workshop11">Workshops</a>
							<!-- <div align="center" id="drop">
								<ul>
									<li><a href="">Intro Workshop</a></li>
									<li><a href="">Robotix 11</a></li>
									<li><a href="">Robotix 10</a></li>
								</ul>
							</div> -->
						</li>
						<li>
							<a href="<?php echo base_url(); ?>home/page/dream_a_bot">KRAIG Initiatives</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>phpBB3">Forum</a>
						</li>
						<li class="dropdown-submenu">
							<div align="center" id="drop">
								<ul>
									<li><a href="http://robotix.in/rbtx13" target="_blank">Robotix 13</a></li>
    								<li><a href="http://robotix.in/rbtx09" target="_blank">Robotix 09</a></li>
									</ul>
							</div>
							<span style="margin-left:35px;"></span>
							<a href="#archive">Archive</a>
						</li><!-- 
						<li class="logo">
							<div>
								<img src="<?php echo base_url(); ?>Images/iitlogo.png" style="margin-top:-10px;">
								<a href="http://iitkgp.ac.in" target="_blank">
								IIT Kharagpur
								</a>
							</div>
						</li> -->
    					<li>
                            <div style="height:35px;display:inline-block;margin-top:40px;">
							<img align="right" src="<?php echo base_url();?>Images/KTJLogo.png" style="height:50px;margin-top:5px;">
                            </div>
                            <div style="margin-top:15px;">
                            <b style="font-size:12px;">31<sup>st</sup> Jan - 3<sup>rd</sup> Feb 2014</b>
                            </div>
						</li>
					</ul>
				</header>
			</div>
		</div>
		<!-- Navigation bar ENDS -->










