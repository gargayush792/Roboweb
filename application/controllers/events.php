<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php

//Required Features : delete children tab when parent is deleted + order tabs by position + display children of tabs + tabcontent is loaded separately

    class Events extends CI_Controller{

        public function __construct(){

            parent::__construct();


	      $this->template->set_template('event');
            $events=$this->events_m->getallevents();
            

          foreach($events as $value)
          {
              $output['events'][$value->menu_name]['slug'] = $value->slug;
              $temp = $this->events_m->gettabbyname($value->id, 'Problem Statement');
              
              if ($temp)
                $output['events'][$value->menu_name]['ps'] = ($temp[0]->content);
              $temp = $this->events_m->gettabbyname($value->id, 'Introduction');
              if ($temp)
                $output['events'][$value->menu_name]['intro'] = ($temp[0]->content);
              
          }
        $tutorials = $this->tutorials_m->getallcats() ;
            

          foreach($tutorials as $value)
          {
              $output['tutorials'][$value->menu_name]['slug'] = $value->slug;
              
              $temp = $this->tutorials_m->gettut('category_slug', $value->slug);
              if ($temp)
                $output['tutorials'][$value->menu_name]['tuts'] = $temp;

              $output['tutorials'][$value->menu_name]['intro'] = $value->content;
             
              
          }
          
	    $this->template->parse_view('header' , 'template/header', $output);        
        $this->template->parse_view('footer' , 'template/footer', $output);
            	 

        }

        

        function index(){

            

             $events=$this->events_m->getallevents();
            

          foreach($events as $value)
          {
              $output['events'][$value->menu_name]['slug'] = $value->slug;
              $temp = $this->events_m->gettabbyname($value->id, 'Problem Statement');
              
              if ($temp)
                $output['events'][$value->menu_name]['ps'] = ($temp[0]->content);
              $temp = $this->events_m->gettabbyname($value->id, 'Introduction');
              if ($temp)
                $output['events'][$value->menu_name]['intro'] = ($temp[0]->content);
              
          }
        
        $this->template->parse_view('content' , 'template/eventpagecontent', $output);
        $this->template->render();

         }

       

     public   function load(){ //function made for events only

             $tabid = $this->input->post('name'); //tab that was clicked

             $eventid = $this->input->post('eventid');

             

            //subtab id of the tab the clicked tab

            //append items to div having id equal to the subtab id of clicked tab

            $data['maintabs']=$this->events_m->getmaintabs($eventid,$tabid); //all subtabs of clicked tab

            $data['tabs']=$this->events_m->gettab($tabid); //subtab id of the tab that was clicked

             

            $result['result']['data'] = array();

            $result['result']['link'] = array(); //the div in which subtabs are going to be placed

            foreach($data['maintabs'] as $value){

                array_push($result['result']['data'] , array(

                  'id' =>  $value->id ,

                  'name' =>$value->menu_name ,

                  'link' => $tabid, //subtab id of the tabs that will be loaded or the id of the clicked tab

              

               ));

            }

            array_push($result['result']['link'],$data['tabs'][0]->subtab_id);

            echo json_encode($result); //output for ajax callback

         

            

        }

        public function event(){

    

          
            

            $data['event']=$this->events_m->getevent($this->uri->segment('3'));

            $data['maintabs']=$this->events_m->getmaintabs($data['event'][0]->id,'0'); //Tabs having subtabid of 0 

            if($this->uri->segment('5')){

            $data['maintabs']=$this->events_m->getmaintabs($this->uri->segment('3'),$this->uri->segment('5'),'events'); //Required for addition of subtab

            }

            $data['alltabs'] = $this->events_m->getalltabs($data['event'][0]->id, 'events'); //To print the contents of tabs that have no children

           

            
          
            $this->template->write('title' , $data['event'][0]->menu_name );
                        $this->template->write_view('tabs', 'events/scripts', $data, FALSE);

            $this->template->write_view('content', 'events/maintabscontent', $data, FALSE);

            

             $this->template->add_css('css/events/eventpage.less','link','screen','text/less');
 
            $this->template->render();



        }

        
        function admin(){
        
        
        
        
       // if($this->input->cookie('robotixiitkgp'))
        //{
         $this->template->add_css('css/events/eventpage.less','link','screen','text/less');
            

            $name=$this->uri->segment('3');

            if(empty($name))
            {
            	$events=$this->events_m->getallevents();
            	
            	foreach($events as $value){
            		echo anchor(base_url().'events/admin/'.$value->slug,$value->menu_name);
            	}
            	echo form_open();
            	echo 'name: '.form_input('evename');
            	echo 'slug: '.form_input('eveslug');
            	echo 'position: '.form_input('eveposition');
            	echo form_submit('submit','submit');
            	echo form_close();
            	
            	$dataadd = array(
            			'menu_name' => $this->input->post('evename'),
            			'slug'=> $this->input->post('eveslug'),
            			'position'=> $this->input->post('eveposition'),
            			
            			);
                $evesub = $this->input->post('submit');
                if(!empty($dataadd['slug']))
                {
                	$this->events_m->addevent($dataadd);
                }
            }
            else{

            $datas['event']=$this->events_m->getevent($name);

            

            if(is_numeric($this->uri->segment('3'))){

                $datas['event'][0]->id = $this->uri->segment('3'); //For subtab addition

            }

            $alltabs['tabs']=$this->events_m->getalltabs($datas['event'][0]->id);
            $alltabs['event']=$datas['event'];
            
            $data = array(

			'menu_name' => $this->input->post('tabname'),

                        'category' =>  $this->input->post('category'),

			'event_id' => $datas['event'][0]->id,

                        'position' => $this->input->post('tabposition'),

                        'subtab_id' => $this->uri->segment('5')

			

	    );
            $dataevent = array(
            
            		'menu_name' => $this->input->post('evename'),
            
            		'slug' => $this->input->post('eveslug'),
            
            		'position' => $this->input->post('eveposition')
            
            
            			
            
            );

            $submit = $this->input->post('submit');

            //$this->parser->parse('events/events_admin',$alltabs);
            $this->template->parse_view('content', 'events/events_admin', $alltabs, FALSE);

            

            

            $this->template->render();
            

            if(isset($submit[0])){
            	if(!empty($data['menu_name']))
							$this->events_m->inserttab($data);
            	else 
                $this->events_m->updateevent('id',$datas['event'][0]->id ,array_filter($dataevent));
                
            	
            	//Update haschild if this is a subtab. Note that haschild is not really required in the current way of display.
               $data1 = array(

                    'haschild' => $this->uri->segment('6')

                );

                $this->events_m->updatetab($this->uri->segment('5'),$data1);



            }

         
            //}
        }
        
}
        
        

        function tutorial(){

            //Public tutorial page for events
	      $output['categories'] = $this->tutorials_m->getallcats() ;
$output['events'] = $this->events_m->getallevents() ;
$output['resources'] = $this->home_m->getallpages() ;

	      $this->template->set_template('tutorial'); 
	    $this->template->parse_view('header' , 'template/header', $output);
	    $this->template->parse_view('footer' , 'template/footer', $output);

$this->template->add_js('js/jquery-latest.js');

            $this->template->add_js('js/jquery.scrollTo-min.js');

            $this->template->add_js('js/jquery.localscroll-min.js');

		$this->template->add_css('css/grid/grid.less','link','screen','text/less');

		$this->template->add_css('css/events/eventpage.less','link','screen','text/less');
           $this->template->write('title' , 'Tutorials | ');  

            $data['event']=$this->events_m->getevent($this->uri->segment('3'));
    $tutname = $this->uri->segment('3');
  if(empty($tutname)){
$this->template->write('title' , 'Event Tutorials');
foreach ($output['events']  as $value)
 $this->template->write('content', "<a href='http://robotix.in/events/tutorial/" . $value->slug . "'>" . $value->menu_name  . "</a><br/>");
$this->template->render();
}
else {
            $data['maintabs']=$this->events_m->getmaintabs($data['event'][0]->id,'0','tutorials'); //Tabs having subtabid of 0 

            $this->template->write('title' , $data['event'][0]->menu_name);

            
	    $this->template->write('tabs', '<div id="sideheader"><span>Content</span></div><div id="fix" style="z-index: 10000;position: absolute"><div id="tutorialnav">'); 
            foreach($data['maintabs'] as $value){

                
		
                $this->template->write('tabs', '<a href="#'.$value->id.'">'.$value -> menu_name.'</a>', $data, FALSE);

                $this->template->write('content', '<div class="heading" id="'.$value->id.'"><h3>'.$value -> menu_name.'</h3></div>'.'<p>'.$value -> content.'</p>', $data, FALSE);

            }

            $this->template->write('tabs', '</div>'); //End of tutorial tabs
	    $tutorial = $this->tutorials_m->gettut('slug',$name);
	    $this->template->write('tabs', '<div class="download"><a href="'.$tutorial[0]->download.'"></a></div>');  //Download link
	
$this->template->write_view('tabs', 'template/sidebarextras');
$this->template->write('tabs', '</div>'); //End of fix div

            
            



            $this->template->render();
}
        }

        

        function update(){

            //Edit details of a particular tab
  
            $tabs['tab']=$this->events_m->gettab($this->uri->segment(4));

            $this->parser->parse('events/events_tab_admin',$tabs);

            $data = array(

			'menu_name' => $this->input->post('tabname'),

			'position' => $this->input->post('tabposition'),

                        'content' => $this->input->post('tabcontent'),

                        'subtab_id' => $this->input->post('subtabid'),
           
                        'visible'=> $this->input->post('tabvis')

			

	    );

            $submit = $this->input->post('tabposition');

            if(isset($submit[0])){

                $this->events_m->updatetab($this->uri->segment(4),$data);

            }



        }

        function delete(){


if($this->uri->segment('3') == 'tab')
             $this->events_m->deletetab('id', $this->uri->segment('4'));  //Problem If this is the only subtab its parents haschild has to be made 0
if($this->uri->segment('3') == 'event'){
	$this->events_m->deleteevent($this->uri->segment('4'));
	$this->events_m->deletetab('event_id', $this->uri->segment('4'));
}
             
        }
//}

    }

    

?>