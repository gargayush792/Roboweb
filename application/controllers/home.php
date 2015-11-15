<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php

    class Home extends CI_Controller{

        public function __construct(){

            parent::__construct();

	      $this->template->set_template('home'); 
          
          $events=$this->events_m->getallevents();
            $scroll = $this->home_m->gethpage('scroller');
            $output['scroller']= $scroll[0]->content;

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
        $output['title'] = 'Homepage';
	    $this->template->parse_view('header' , 'template/header', $output);
        $this->template->parse_view('footer' , 'template/footer', $output);

        }

        

        function index(){
            $output['categories'] = $this->tutorials_m->getallcats() ;
$output['events'] = $this->events_m->getallevents() ;
$output['resources'] = $this->home_m->getallpages() ;
$output['workshops'] = $this->workshops_m->getposts() ;

 
        //$this->template->parse_view('content' , 'template/eventpagecontent', $output);
        $this->template->parse_view('content' , 'template/content', $output);

         $this->template->render();
         }

       
         function login()
         {
        $this->load->view('login_view');
        }

        function loginchck(){
        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if($result)
        {
         $this->input->set_cookie('robotixiitkgp', 'robotixiitkgp', 0);
         $this->load->view('login_sucess');
        }
        }

 
        
        public function page(){
 $this->load->model('home_m');
                $name = $this->uri->segment('3');

                $page = $this->home_m->gethpage($name);
                
                $this->template->write('title' , $page[0]->menu_name );  
		
		$this->template->write('content', $page[0]->content );

        $this->template->render();
        }

        function admin(){

            //Adding main tabs to the event

if($this->input->cookie('robotixiitkgp')){
            $this->load->model('home_m');

            

        

            

          

            $datas['pages']=$this->home_m->getallpages();

            $data = array(

			'menu_name' => $this->input->post('tabname'),

                       'slug' => $this->input->post('tabslug'),

			
                       

                        'content' => $this->input->post('tabcontent'),
 'category' => $this->input->post('tabcat'),
			

	    );

            $submit = $this->input->post('tabsubmit');

            $this->parser->parse('home_admin',$datas);

            

            if(isset($submit[0])){

                $this->home_m->insertpage($data);

               

               



            }

        }

        

        }


        function update(){

            //Edit details of a particular page
$this->load->model('home_m');
            $tabs['page']=$this->home_m->gethpageid($this->uri->segment(4));

            $this->load->view('home_admin',$tabs);

            $data = array(

			'menu_name' => $this->input->post('tabname'),
'category' => $this->input->post('tabcat'),
			

                        'content' => $this->input->post('tabcontent'),

                        'slug' => $this->input->post('tabslug')

			

	    );

            $submit = $this->input->post('tabsubmit');

            if(isset($submit[0])){

                $this->home_m->updatepage($this->uri->segment(4),array_filter($data));

            }



        }

        function delete(){

             $this->events_m->deletetab($this->uri->segment('4'));

             

        }

    }

    

?>