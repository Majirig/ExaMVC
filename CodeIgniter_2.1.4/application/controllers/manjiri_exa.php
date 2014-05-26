<?php

class Manjiri_Exa extends CI_Controller{


	public function index(){
	
		$this->load->model('getManjiriModel');
		$getItem = $this->getManjiriModel->manjiriData();
		$get = $getItem->result();
		$getitem['allitem']=$get;//We get the result from DB
		$this->load->view('manjiri_html',$getitem);
		
		
	}
	
	public function inserItem(){
		
	$this->load->model('getManjiriModel');//DB load here
	//print($_POST);exit;
	 $getName = $this->input->post('name');
	 $getTitle = $this->input->post('title');
	 $getContent = $this->input->post('content');
	 if($getName!=="" && $getTitle !== "" && $getContent!=="" ){
	 $this->getManjiriModel->insertItem($getName,$getTitle,$getContent);//Inserting into DB
	}else{
		echo 'Please Insert Fields';
	
	}
		$getItem = $this->getManjiriModel->manjiriData();
		$get = $getItem->result();
		$getitem['allitem']=$get;
		$this->load->view('manjiri_html',$getitem);
	}


}