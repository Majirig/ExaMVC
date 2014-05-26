<?php

class getManjiriModel extends CI_Model{

	public function manjiriData(){
	
		 return $this->db->get('crud_example');//Select Query

			
	
	}
	
	public function insertItem($getname,$gettitle,$getcont){
	
		$data = array(
		
			'id'=>'',
			'Name' => ''.$getname.'',
			'title' => ''.$gettitle.'',
			'content' => ''.$getcont.''
		);
		
		$this->db->insert('crud_example',$data);
	}
}