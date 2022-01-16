<?php
defined('BASEPATH') or exit('No direct script access allowed');

class umum extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('db_model');
		$this->load->helper('url');
	}

	public function index()
	{

		// $data["ambil_antrian"] = $this->db_model->get("v_ambilantrian")->num_rows();
		//get_tbl_pasien('v_riwayat_diagnosa', 'nama', $newformat, $this->input->post('dokter', TRUE), $this->input->post('kec', TRUE), $this->input->post('diagnosa', TRUE))->result());
		// $data["ambil_antrian"] = $this->db_model->get_where('v_ambilantrian', ['no_antrian' =>'no_antrian'])->result();
		// $data = $this->db->get('antrian')->row();
		$nowDate = date('Y-m-d');

		// $this->db->limit('1');
		$this->db->where('status',3);
		$this->db->order_by('no_antrian','DESC');
		$antrian = $this->db->get('v_ambilantrian_umum')->row();
		if($antrian){
			$data['ambil_antrian'] = $antrian->no_antrian;

		}else{
			$data['ambil_antrian'] = 0;
		}

		$data["total_antrian"] = $this->db_model->get("v_total_umum")->num_rows();

		$data["total_belumdiambil"] = $this->db_model->get("v_obatbelumdiambil_umum")->num_rows();

		$this->db->where('status',2);
		$this->db->order_by('no_antrian','DESC');
		$antrian = $this->db->get('v_sedangdikerjan_umum')->row();
		if($antrian){
			$data['sedang_dikerjakan'] = $antrian->no_antrian;

		}else{
			$data['sedang_dikerjakan'] = 0;
		}
		$data["sisa_resep"] = $this->db_model->get("v_sisaresep_umum")->num_rows();
		// $data["ambil_antrian"] = $this->db_model->get_where("syarefa", ["status" => 2])->result();
		$this->load->view('umum_v', $data);
	}	
	
	public function tampil()
	{
		$data_antrian = $this->db_model->ambil_data_belumambilobat('v_obatbelumdiambil_umum')->result();
		echo json_encode($data_antrian);
	}



}
