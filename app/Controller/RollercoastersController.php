<?php
	
	class RollercoastersController extends AppController{
		
		public function index(){
			
			$rollercoasters = $this->Rollercoaster->find('all');
			//pr($rollercoasters);
			
			$this->set('rollercoasters', $rollercoasters);
		}
	
	}
	
?>