<?php
	
	class RollercoasterController extends AppController{
		
		public function index(){
			
			$coasters = $this->rollercoaster->find('all');
			
			pr($coasters);
			
			$this->set('rollercoaster', 
			
		}
		
	}
	
?>