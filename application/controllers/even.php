<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Even extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper("url");
	}
	public function index(){
			$data['content']='content';
			$this->load->view('even',$data,array('error' => ' ' ));
	}
	public function daftareven(){
		$data = $this->myeven->tampil();
	}
	public function infoeven(){
		$data = $this->myeven->infotampil();
	}
	public function hapus_db($id)
	{
			$this->db->delete('tabel_even',array(
				'id' => $id
				)
			);
			redirect('even/daftareven');
	}
	public function insert()
	{
			$data = $this->myeven->tambah_data();
	}
}
