<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		// $this->load->model('lokasi/lokasi_model');
		$this->load->model('model/member_model');
		$this->load->model('model/funnel_model');
		$this->load->model('model/trafic_model');
		$this->load->model('model/transaksi_model');
		
	}
	function saveTrafic()
	{
		$cookie = $this->input->post('cookie');
		$funnel = $this->input->post('funnel');
		$username = $this->input->post('username');
		$pixel = $this->input->post('pixel');
		$urlFunnel = 'https://'.$_SERVER['SERVER_NAME'].'/'.$funnel;
		// echo $urlFunnel;exit;
		$dataMember = $this->member_model->get(array("username" => $username));
		// echo $this->db->last_query();
		$dataFunnel = $this->funnel_model->get(array("link" => $urlFunnel));
		// echo $urlFunnel;
		// echo $this->db->last_query( $this->member_model->get(array("username" => $username))); exit;
		// $dataFunnel = $this->trafic_model->save($data);
		$dataTrafic = array();
		$setFunnel = array();
		if ($dataFunnel['id']) {
			if ($dataMember['id']) {
				// if (!$cekTrafic['id']) {
					$dataTrafic['id'] = 0;
					$dataTrafic['id_member'] = $dataMember['id'];
					$dataTrafic['unique_id'] = $cookie;
					$dataTrafic['id_funnel'] = $dataFunnel['id'];
					$dataTrafic['tanggal'] = date('Y-m-d');
					$dataTrafic['jam'] = date('H:i:s');
					$dataTrafic['ip_address'] = get_client_ip_server() ? : '';
					$dataTrafic['lokasi'] = get_client_location($dataTrafic['ip_address']);
					$dataTrafic['user_agent'] = $_SERVER['HTTP_USER_AGENT'] ? : '';
					$dataTrafic['pixel'] = $pixel;
					// print_r($dataTrafic);exit;
					// echo $this->db->last_query(); exit;
					$this->trafic_model->save($dataTrafic);
					// echo $this->db->last_query(); exit;

					$setFunnel['id'] = $dataFunnel['id'];
					$setFunnel['jumlah_trafic'] = ($dataFunnel['jumlah_trafic'] + 1);
					$this->funnel_model->save($setFunnel);
				// }
				
			}
		}
		
	}

}