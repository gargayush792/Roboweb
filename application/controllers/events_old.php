<?php if (! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php  
    class Events extends CI_Controller{
        function _construct(){
            parent::_construct();
            
        }
        
        function index(){
            $this->load->model('events_m');
            $data['events']=$this->events_m->getallevents();
            $this->parser->parse('events/events_page',$data); 
        
         }
        private function output($eventid,$data){
            $this->load->model('events_m');
            
            foreach($data as $key=>$value){
               // echo $value->menu_nameu . '<br/>';
                
                if($value->haschild==1)
                {
                    $datas['subtabs']=$this->events_m->getmaintabs($eventid,$value->id);
                    $this->parser->parse('events/events_page',$datas);
                    $this->parser->parse('events/tabcontent',$datas);
                    $this->output($eventid,$datas['subtabs']);
                }
                //$data[$value->id]['subtabs']=$this->events_m->getmaintabs($data['event'][0]->id,$value->id);
            
            }
        }
        function load(){
             $tabid = $this->input->post('name');
             $ajax = $this->input->post('ajax');
             $eventname = 'stalker';
             $this->load->model('events_m');
            $data['event'] = $this->events_m->getevent($eventname);
            //subtab id of the tab the clicked tab
            //append items to div having id equal to the subtab id of clicked tab
            $data['maintabs']=$this->events_m->getmaintabs($data['event'][0]->id,$tabid);
            $data['tabs']=$this->events_m->gettab($tabid);
            $data['tabid']=$data['tabs'][0]->subtab_id;

            $this->parser->parse('events/maintabs',$data);
            
        }
        function event(){
    
            $name=$this->uri->segment('3');
            $this->load->model('events_m');
            
            $data['event']=$this->events_m->getevent($name);
            $data['maintabs']=$this->events_m->getmaintabs($data['event'][0]->id,'0');
            
            $data['maintabs']=$this->events_m->getmaintabs($data['event'][0]->id,$this->uri->segment('5'));
            $data['alltabs'] = $this->events_m->getalltabs($data['event'][0]->id);
            $this->parser->parse('events/scripts',$data);
            //$this->parser->parse('events/maintabs',$data);
            
            $this->load->view('events/maintabscontent',$data);
            //$this->output($data['event'][0]->id,$data['maintabs']);
           
            
    
        }
        function admin(){
            //Adding main tabs to the event
            $this->load->model('events_m');
            $name=$this->uri->segment('3');
            
            $datas['event']=$this->events_m->getevent($name);
            $alltabs['tabs']=$this->events_m->getalltabs($datas['event'][0]->id);
            $data = array(
			'menu_name' => $this->input->post('tabname'),
			'event_id' => $datas['event'][0]->id,
                        'position' => $this->input->post('tabposition'),
                        'subtab_id' => $this->uri->segment('5')
			
	    );
            $submit = $this->input->post('tabposition');
            $this->parser->parse('events/events_admin',$alltabs);
            
            if(isset($submit[0])){
                $this->events_m->inserttab($data);
                //Update haschild if this is a subtab
                $data1 = array(
                    'haschild' => $this->uri->segment('6')
                );
                $this->events_m->updatetab($this->uri->segment('5'),$data1);

            }
         
        }
        function update(){
            //Edit details of a particular tab
            $this->load->model('events_m');
            $tabs['tab']=$this->events_m->gettab($this->uri->segment(4));
            $this->parser->parse('events/events_tab_admin',$tabs);
            $data = array(
			'menu_name' => $this->input->post('tabname'),
			'position' => $this->input->post('tabposition'),
                        'content' => $this->input->post('tabcontent'),
                        'subtab_id' => $this->input->post('subtabid')
			
	    );
            $this->load->model('events_m');
            $submit = $this->input->post('tabposition');
            if(isset($submit[0])){
                $this->events_m->updatetab($this->uri->segment(4),$data);
            }

        }
        function delete(){
             $this->load->model('events_m');
             $this->events_m->deletetab($this->uri->segment('4'));
             
        }
    }
    
?>