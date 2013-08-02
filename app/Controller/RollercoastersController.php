<?php

class RollercoastersController extends AppController {

    var $name = 'Rollercoasters';

    public function index(){

        $this->set('rollercoasters', $this->Rollercoaster->find('all'));
    }

    function view($coasterId = NULL) {
        $this->set('rollercoaster', $this->Rollercoaster->read(NULL, $coasterId));
    }

}

?>