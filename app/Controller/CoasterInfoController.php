<?php

class CoasterInfoController extends AppController{

    public function index(){

        $rollercoasters = $this->Rollercoaster->find('all');
        //pr($rollercoasters);

        $this->set('rollercoasters', $rollercoasters);
    }

}

?>