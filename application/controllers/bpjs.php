<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bpjs extends CI_Controller
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
		$this->db->where('status',2);
		$this->db->order_by('no_antrian','DESC');
		$antrian = $this->db->get('syarefa')->row();
		if($antrian){
			$data['ambil_antrian'] = $antrian->no_antrian;

		}else{
			$data['ambil_antrian'] = 0;
		}
		$data["total_antrian"] = $this->db_model->get("v_totalantrian")->num_rows();
		// $data["ambil_antrian"] = $this->db_model->get_where("syarefa", ["status" => 2])->result();
		$this->load->view('bpjs_v', $data);
	}	
	
	public function tampil_ambiresep()
	{
		// $data_antrian = $this->db_model->ambil_data('syarefa')->result();
		// echo json_encode($data_antrian);
		// echo json_encode($this->db_model->get_where("syarefa", ["status" => 3])->result());
	}

	public function tambah_data()
	{
		$data = [
			"no_antrian" => $this->input->post("no_antrian", TRUE),
			"no_rm" => $this->input->post("no_rm", TRUE),
			"nama" => $this->input->post("nama", TRUE),
			"poli" => $this->input->post("poli", TRUE),
			"jenis_pasien" => $this->input->post("jenis_pasien", TRUE),
			"status"=>$this->input->post("status", TRUE)
		];
		$this->db_model->insert('syarefa', $data);
		echo json_encode($data);
	}

	public function dataById()
	{
		echo json_encode($this->db_model->get_where($this->input->post("target"), ["id" => $this->input->post('id', TRUE)])->row_array());
	}

	public function edit()
	{
		$this->form_validation->set_rules('status', 'Status', 'required|trim');
		if ($this->form_validation->run() == false) {
			$error = "status tidak boleh kosong.";
			echo json_encode($error);
		} else {
			$data = [
				"status" => $this->input->post("status", TRUE)
			];
			$this->db_model->update('syarefa', $data, ["id" => $this->input->post("id")]);
			echo json_encode("");
		}
	}

	public function hapus()
	{
		// $data = [
		// 	"status" => 1
		// ];
		echo json_encode($this->db_model->delete('syarefa', array('id' => $this->input->post('id', TRUE))));
		// echo json_encode($this->db_model->update('tbl_user', $data, array('id_user' => $this->input->post('id', TRUE))));
	}



}
