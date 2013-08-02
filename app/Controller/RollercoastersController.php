<?php
	
	class RollercoastersController extends AppController{

        var $name = 'Rollercoasters';
		
		public function index(){

            $this->set('rollercoasters', $this->Rollercoaster->find('all'));
			
//			$rollercoasters = $this->Rollercoaster->find('all');
			//pr($rollercoasters);
			
//			$this->set('rollercoasters', $rollercoasters);
		}

        function view($id = null)
        {
            $this->Rollercoaster->coasterId = $id;
            $this->set('rollercoaster', $this->Rollercoaster->read());
        }

//        function view($id = NULL){
//            $this->Rollercoaster->id = $id;
//            $this->set('rollercoaster', $this->Rollercoaster->)
            //$this->set('rollercoaster', $this->Rollercoaster->read('coasterId'));
            //$rollercoasters = $this->Rollercoaster->read('all');
           // $this->set('rollercoasters', $rollercoasters);
//        }

    }
	
?>