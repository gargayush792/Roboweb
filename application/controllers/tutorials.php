<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php

//Required Features : delete children tab when parent is deleted + order tabs by position + display children of tabs + tabcontent is loaded separately

    class Tutorials extends CI_Controller{

        public function __construct(){

            parent::__construct();

	      $this->template->set_template('tutorial'); 
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
$this->template->add_js('js/jquery-latest.js');


          //$this->template->write('title' , 'Tutorials'); 
 
 

        }

        

        function index(){

            
	     $tutorials = $this->tutorials_m->getallcats() ;
            

          foreach($tutorials as $value)
          {
              $output['tutorials'][$value->menu_name]['slug'] = $value->slug;
              
              $temp = $this->tutorials_m->gettut('category_slug', $value->slug);
              if ($temp)
                $output['tutorials'][$value->menu_name]['tuts'] = $temp;

              $output['tutorials'][$value->menu_name]['intro'] = $value->content;
             
              
          }
        
        
          $this->template->parse_view('content' , 'template/tutorialcontent', $output);
          $this->template->render();

         }

       

        

        public function category(){

    

          $this->template->add_css('css/events/eventpage.less','link','screen','text/less');

           $val = $this->tutorials_m->getcat($this->uri->segment('3'));

	   $data['tutorials'] = $this->tutorials_m->gettut('category_slug', $this->uri->segment('3'));		

	    

            $this->template->add_js('js/jquery.scrollTo-min.js');

            $this->template->add_js('js/jquery.localscroll-min.js');

           


	    
	  
	

        	

	    

	    $name = $this->uri->segment('4');

	    if(!empty($name)){	

            $data['maintabs']=$this->tutorials_m->getmaintabs($this->uri->segment('3'),'0',$this->uri->segment('4')); //Tabs having this category and tutorial name 

            

	   $tutorial = $this->tutorials_m->gettut('slug',$name);
            $this->template->write('title' , $tutorial[0]->menu_name);

            
	    $this->template->write('tabs', '<div id="sideheader"><span>Content</span></div><div id="fix" style="z-index: 10000;position: absolute"><div id="tutorialnav">'); 
            foreach($data['maintabs'] as $value){

                
		
                $this->template->write('tabs', '<a href="#'.$value->id.'">'.$value -> menu_name.'</a>', $data, FALSE);

                $this->template->write('content', '<div class="heading" id="'.$value->id.'"><h3>'.$value -> menu_name.'</h3></div>'.'<p>'.$value -> content.'</p>', $data, FALSE);

            }

            $this->template->write('tabs', '</div>'); //End of tutorial tabs
	    
	    $this->template->write('tabs', '<div class="download"><a href="'.$tutorial[0]->download.'"></a></div>');  //Download link
             $this->template->write_view('tabs', 'template/sidebarextras');
	    $this->template->write('tabs', '</div>'); //End of fix div
           

            $this->template->add_js('js/jquery.scrollTo-min.js');

            $this->template->add_js('js/jquery.localscroll-min.js');
        

           $this->template->render();
	   
	     

	    }
	    else{
	
$output['categories'] = $this->tutorials_m->getallcats() ;
           foreach($output['categories'] as $key => $val){
              $output[$val->menu_name]['tutorials'] = $this->tutorials_m->gettut('category_slug', $val->slug);	
     

	}
$this->template->add_css('css/tutorials/css/style.css');

            $this->template->add_js('js/infogrid.js');
$this->template->write('content',  '<center><div id="page-wrap">');

	 foreach($output['categories'] as $key => $val){
if($key==2)
$this->template->write('content',  '<div id="first" class="info-col">
<h2>' . $val->menu_name . '</h2><a class="image '.$val->slug.'">Image</a>
<dl>');
else 
$this->template->write('content',  '<div class="info-col">
<h2>' . $val->menu_name . '</h2><a class="image '.$val->slug.'">Image</a>
<dl>');

foreach($output[$val->menu_name] as $key1 => $val1){
foreach($output[$val->menu_name]['tutorials'] as $val2){
$desc = $this->tutorials_m->gettabbyname($val2->id, 'Description');
$link='http://robotix.in/tutorials/category/'. $val->slug .'/' .  $val2->slug ;
$this->template->write('content', '<dt /*onclick="window.location.href=' . $link . ';"*/ >' . $val2->menu_name . '</dt><dd>'. $desc[0]->content .'<a href="'. $link  .'">Read More</a></dd>');

}

} 
$this->template->write('content', '</dl></div>');

   }    
$this->template->write('content', '</div></center>'); 
$this->template->write('title' , $this->uri->segment('4'));  
//$this->template->write('content', $content);
		
//		$this->template->write_view('content', 'template/tutorialpage.php',$output);
        $this->template->render();
	    }



        }

	private function gettutorial($cat,$name){

	    

	    $tutorials = $cat -> tutorials;

	   

	    foreach(unserialize($tutorials) as $value){

		if($value['slug'] == $name){

		    return $value;

		}	

	    }

	}

	private function updatetut($cat, $data ,$id){

	    echo '<pre>';

	    print_r($tutorials = unserialize($cat -> tutorials));

	    echo '</pre>';

	    foreach($tutorials as $key => $value){

		if($value['id'] == $id){

		   $tutorials[$key]['name'] = $data['name'];

		   $tutorials[$key]['slug'] = $data['slug'];

		   $tutorials[$key]['position'] = $data['position'];	   

		}	

	    }

	    echo '<pre>';

	    print_r($tutorials );

	    echo '</pre>';

	   print_r($cata['tutorials'] = serialize($tutorials));

	   $this->tutorials_m->updatecat($cat->slug, $cata);
	   

	}

	

        function admin(){

            //Adding main tabs to the event
//if($this->phpbb_library->getUserInfo('username') == "admin"){
            if($this->input->cookie('robotixiitkgp')){

            $name=$this->uri->segment('4');

            $cat=$this->uri->segment('3');          

	    if(!empty($name)&&!empty($cat)){ //Tab editing area for a tutorial. Edit tutorial and slug also

		$category = $this->tutorials_m->getcat($cat);  //Details of selected category
//$category = $this->tutorials_m->getcatbyid($category[0]->id); 	

		$tutorial = $this->tutorials_m->gettut('slug',$name); //Details of selected tutorial

		 

		$datatut['menu_name'] = $this->input->post('tutname');

		$datatut['slug'] = $this->input->post('tutslug');              //Data from form for modifying tutorial details

		$datatut['position'] = $this->input->post('tutposition');

		$datatut['download'] = $this->input->post('tuturl');



		

		//Data for addition of tab to the tutorial		 

		$data = array(

			'menu_name' => $this->input->post('tabname'),

			'category_id' =>$category[0]->id,

			'tutorial_id' =>$tutorial[0]->id,

			'category' => $this->uri->segment('3'),

			'tutorial_name' =>$this->uri->segment('4'),

                        'position' => $this->input->post('tabposition'),

                        'subtab_id' => $this->uri->segment('5')	

		);

		

		$submit = $this->input->post('submit'); //To check if submit button is pressed

		

		if(isset($submit[0])){

		    if(!empty($data['menu_name']))   

			$this->tutorials_m->inserttab($data);  //If a new tab is being added

		    else{

			//If tutorial details are beign changed

			$this->tutorials_m->updatetut('id',$tutorial[0]->id,array_filter($datatut));

			if(!empty($datatut['slug']))

			    $this->tutorials_m->updatetab('tutorial_id',$tutorial[0]->id,array_filter(array('tutorial_name'=>$datatut['slug'])));

		    }

		}

		
		$path = 'uploads/'.$name;
		$alltabs['files'] =  scandir('./'.$path);

		$alltabs['tabs'] = $this->tutorials_m->getalltabs($name, $cat); //Get all tabs of current tutorial from slugs

		$alltabs['tutorial'] = $tutorial[0];

		$this->load->view('tutorial/tutorial_admin',$alltabs); //Load the view conatining form

		

	    }

	    else if(empty($name)&&empty($cat)){

		//Category addition and removal

		$output['categories'] = $this->tutorials_m->getallcats() ;

	    

		foreach($output['categories'] as $val){

			    echo anchor('tutorials/admin/'.$val->slug,$val->menu_name).'<br/>';

			} 

		$this->load->view('tutorial/main_admin'); //Add and remove category

		$data = array(

			'menu_name' => $this->input->post('catname'),

			

			'slug' =>$this->input->post('catslug'),

                        'position' => $this->input->post('catposition'),

                        

			

		);

		$submit = $this->input->post('catposition');

		if(isset($submit[0])){

		    $this->tutorials_m->insertcat($data);

		}

	    }

        else if(empty($name)&&!empty($cat)) {

		//Editing area for a particular category

		            

		$val = $this->tutorials_m->getcat($cat);

		$pass['id']=$val[0]->id;

		$this->load->view('tutorial/category_admin',$pass); //Add and remove category

		

	     $data['tutorials'] = $this->tutorials_m->gettut('category_slug',$cat);

		$val = $this->tutorials_m->getcat($cat);

		

		//if(!empty($val[0]->tutorials)){

			

		//	echo '<pre>';

			

			//$data['tutorials'] = unserialize($val[0]->tutorials);

			

			foreach($data['tutorials'] as $val){

			    echo anchor('tutorials/admin/'.$this->uri->segment('3').'/'.$val->slug,$val->menu_name).'<br/>';

			}

		//	echo '</pre>';

		//}

		

		$data1['menu_name'] = $this->input->post('catname');

		$data1['slug'] = $this->input->post('catslug');

		$data1['position'] = $this->input->post('catposition');
		$data1['content'] = $this->input->post('catintro');
		

		    //This will be updated only when a tutorial name is present

		array_push($data['tutorials'], array_filter(array(

		    	'name' => $this->input->post('tutname'),

			'id' => rand(),

			'slug' =>$this->input->post('tutslug'),

                        'position' => $this->input->post('tutposition'),		

		    )));

		

		$data['tutorials'] = array_filter($data['tutorials']); //filters all empty things so remains unchanged if no values are entered

		$data['tutorials'] = serialize($data['tutorials']);

		$valu = $this->tutorials_m->getcat($this->uri->segment('3'));

		$datatut = array_filter(array(

		    	'menu_name' => $this->input->post('tutname'),

			'category_id' => $valu[0]->id,

			'category_slug' => $valu[0]->slug,

			'slug' =>$this->input->post('tutslug'),

                        'position' => $this->input->post('tutposition'),		

		    ));

		$submit = $this->input->post('submit');

		$val = $this->tutorials_m->getcat($cat);

		if(isset($submit[0])){

		   

		    if(!empty($datatut['menu_name'])&&!empty($datatut['slug']))

			 $this->tutorials_m->inserttut($datatut);

		    else {

			 $this->tutorials_m->updatecat($cat,array_filter($data1));
if(!empty($data['slug'])){
$updatetut['category_slug'] = $data['slug'];
$this->tutorials_m->updatetut('category_id',$pass['id'], $updatetut);
}

			 $this->tutorials_m->updatetab('category_id',$pass['id'],array_filter(array('category'=>$data['slug'])));

		    }

		}

		

	    }

            
}
//        } 

        }

        function update(){

            //Edit details of a particular tab
//if($this->phpbb_library->getUserInfo('username') == "admin"){

            $tabs['tab']=$this->tutorials_m->gettab($this->uri->segment(4));

            $this->parser->parse('events/events_tab_admin',$tabs);

            $data = array(

			'menu_name' => $this->input->post('tabname'),

			'position' => $this->input->post('tabposition'),

                        'content' => $this->input->post('tabcontent'),
                        'visible' => $this->input->post('tabvis'),
			

	    );

            $submit = $this->input->post('tabposition');

            if(isset($submit[0])){

                $this->tutorials_m->updatetab('id',$this->uri->segment(4),$data);

            }


//}
        }

        function delete(){
//if($this->phpbb_library->getUserInfo('username') == "admin"){
	    if($this->uri->segment('3')== 'tab')

		$this->tutorials_m->deletetab('id',$this->uri->segment('4'));

            if($this->uri->segment('3')== 'category'){

		$this->tutorials_m->deletecategory('id', $this->uri->segment('4'));

		$this->tutorials_m->deletetutorial('category_id', $this->uri->segment('4'));

		$this->tutorials_m->deletetab('category_id', $this->uri->segment('4'));

	    }

	    if($this->uri->segment('3')== 'tutorial'){

		$this->tutorials_m->deletetutorial('id', $this->uri->segment('4'));

		$this->tutorials_m->deletetab('tutorial_id', $this->uri->segment('4'));

	    }
//}

        }

   function upload(){
                $folder = $this->input->post('tutpath');

                if(empty($folder)){
                    $config['upload_path'] = './uploads/';
                }
	        else if(!empty($folder))
{
                mkdir('./uploads/'.$folder, 0777);
		    

		$config['upload_path'] = './uploads/'.$folder;
}
		

		$config['allowed_types'] = 'txt|pdf|docx|doc|pptx|ppt|jpg|png|jpeg|bmp';

		$config['max_size']	= '0';

		$config['max_width']  = '0';

		$config['max_height']  = '0';



		$this->load->library('upload', $config);



		if ( ! $this->upload->do_upload())

		{

			$error = array('error' => $this->upload->display_errors());

			print_r($error);

		}

		else

		{

			$data = array('upload_data' => $this->upload->data());
                       echo '<pre>' ;
		print_r($data);
                     echo '</pre>';
                       echo 'Link : ' . substr_replace($data['upload_data']['full_path'], "http://robotix.in/", 0, strlen("/home/content/11/8510111/html/"));

		}
//echo json_encode(array('status' => $data, 'msg' => substr_replace($data['upload_data']['full_path'], "http://robotix.in/", 0, strlen("/home/content/11/8510111/html/")));

	}

    }

    