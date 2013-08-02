<?php
	
	class RollercoastersController extends AppController{
		
		public function index(){
			
			$rollercoasters = $this->Rollercoaster->find('all');
			//pr($rollercoasters);
			
			$this->set('rollercoasters', $rollercoasters);
		}

        function view($id = NULL){
            $this->set('rollercoaster', $this->Rollercoaster->read(NULL, $id));
            //$rollercoasters = $this->Rollercoaster->read('all');
           // $this->set('rollercoasters', $rollercoasters);
        }
	
?>