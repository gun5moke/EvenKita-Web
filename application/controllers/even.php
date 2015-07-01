<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Even extends CI_Controller {
	public function index(){
		$this->load->view('even');
	}
	public function daftareven(){
		$data = $this->myeven->Getdata();
		$this->load->view('daftareven',$arrayName = array('data' => $data));
	}
	public function input(){
		echo "string";
	}
	function update(){

	}
	function delete(){

	}

}
