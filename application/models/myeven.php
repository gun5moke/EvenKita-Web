<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myeven extends CI_Model {
		public function Getdata(){
			$data = $this->db->query('select * from tabel_even');
			return	$data->result_array();
		}

		public function inputData(){
			echo "string";
		}

		public function updateData(){

		}
		public function deleteData(){

		}
	}
