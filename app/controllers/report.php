<?php

class Report extends Controller {
    public function index() {
       
		 $this->view('report/index');    
    }
    public function mostreminders($id='') {
		 $v = $this->model('Reports');
        $list = $v->get_reports();
        $this->view('report/mostreminders',[
        'list' => $list
        ] );   
    }
    public function remindersdates($id='') {
        $v = $this->model('Reports');
        
        if(isset($_POST['find'])){
            $year1=$_POST['year1'];
            $year2=$_POST['year2'];
            $list=$v->findreminders($year1,$year2);
            $this->view('report/findreminders',[
        'list' => $list
        ] );

        }else{
            $this->view('report/remindersdates');  
        }
    }
    public function totallogins() {
        $v = $this->model('Reports');
        $list=$v->totallogins();
        $this->view('report/totallogins',[
        'list' => $list
        ] );
   
    }
}