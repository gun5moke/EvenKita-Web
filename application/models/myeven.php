<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myeven extends CI_Model {
		public function tampil(){
			$data = array(
			"result" => $this->db->get('tabel_even')
		);
			$this->load->view('daftareven',$data);
		}
		public function infotampil(){
			$data = array(
			"result" => $this->db->get('tabel_even')
		);
			$this->load->view('infoeven',$data);
		}
		public function tambah_data()
		{
			$data = array(
			"id" 					=> $this->input->post('nama_even'),
			"nama_even" 	=> $this->input->post('nama_even'),
			"tgl_mulai" 	=> $this->input->post('tanggal').' '.$this->input->post('bulan').' '.$this->input->post('tahun'),
			"jam_mulai" 	=> $this->input->post('jam').':'.$this->input->post('menit'),
			"tgl_selesai" => $this->input->post('tanggal_selesai').' '.$this->input->post('bulan_selesai').' '.$this->input->post('tahun_selesai'),
			"jam_selesai" => $this->input->post('jam_selesai').':'.$this->input->post('menit_selesai'),
			"alamat" 			=> $this->input->post('alamat'),
			"provinsi" 		=> $this->input->post('provinsi'),
			"deskrepsi" 		=> $this->input->post('deskrepsi'),
			"detail_even" 		=> $this->input->post('detail_even'),
			"gambar" 		=> $this->input->post('gambar'),
			"lokasi_map" 		=> $this->input->post('lokasi_map'),
		);
	    $this->db->insert('tabel_even',$data);
			redirect('even/daftareven');
		}
	}
