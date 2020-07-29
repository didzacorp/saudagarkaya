<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
		// $this->load->model('lokasi/lokasi_model');
		$this->load->model('model/users_model');
		$this->load->model('model/member_model');
		$this->load->model('model/funnel_model');
		$this->load->model('model/trafic_model');
		$this->load->model('model/transaksi_model');
		
	}

	function daftarBasic(){
	error_reporting(0);

		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$noTelpn = $this->input->post('noTelpn');
		$nama_bank = $this->input->post('nama_bank');
		$nomor_rekening = $this->input->post('nomor_rekening');
		$nama_rekening = $this->input->post('nama_rekening');

		if (!$nama) {
			$this->error('Nama Wajib diisi');
		}

		if (!$email) {
			$this->error('Email Wajib diisi');
		}

		if (!$noTelpn) {
			$this->error('Nomor Telpn Wajib diisi');
		}

		// $this->update['idTrans'] = $this->transaksi_model->getLastID();

		

			$subject = 'Pendaftaran Saudagar kaya';			
			$html_body =  "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Pearl UI</title>
    <link rel='stylesheet' href='<?= base_url();?>assets/ui-member/css/style.css'>
</head>

<body>
    <div class='container-scroller'>

        <div class='container-fluid page-body-wrapper'>

            <div class='main-panel' style='width: 100%;'>
                <div class='content-wrapper' style='padding: 1%;'>
                    <div class='row'>
                        <div class='col-12 grid-margin'>
                            <div class='card'>
                                <h4 class='card-title ' style='text-align: center;background: #529fef;color: white;padding: 1%;'>
                   Pendaftaran Saudagar Kaya
                </h4>
                                <div class='card-body' style='padding: 1%;'>
                                    <p class='card-description' style='text-align: center;'>
                                        <img src='https://member.akademibisnis.id/assets/ui-member/images/logo/logo.png' style='width: 245px;'>
                                    </p>
                                    <hr>
                                    <h3>Hallo ".$nama." , selamat bergabung dengan kami berikut akun member anda</h3>
									<table>
										<tr>
											<td>Email </td>
											<td>:</td>
											<td>".$email."</td>
										</tr>
										<tr>
											<td>Password </td>
											<td>:</td>
											<td>membersaudagar</td>
										</tr>
										<tr>
											<td colspan='3'>Silahkan login <a href='http://member.saudagarkaya.com'>disini</a></td>
										</tr>
									</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</html>";

			// $email =  'support@saudagarkaya.com';

			// //---------------------
			// $m = new SimpleEmailServiceMessage();
			// // $m->addTo($data['transaksi']['email_pembeli']);
			// $m->addTo($email);
			// $m->setFrom('support@saudagarkaya.com');
			// $m->setSubject($subject);
			// $m->setMessageFromString('',$html_body);

			// $ses = new SimpleEmailService('AKIAQBXG7F42UTEVWIJW', 'BIcZplisnAwqjmJ0n2tmU9+0E6n0FPZcAshEhYeoZ2c5');
			// $ses->sendEmail($m);
			if ($username) {
				$getMember =  $this->member_model->get(array('username' => $username));
				$username =$getMember['id'];
			}else{
				$getMember =  $this->member_model->get(array('username' => 'andyadmin'));
				$username = $getMember['id'];
			}
			$dataMember = array();
			$dataMember['id'] = 0; 
			$dataMember['nama'] = $nama; 
			$dataMember['username'] = substr($email,0,6).$username; 
			$dataMember['email'] = $email; 
			$dataMember['nomor_telepon'] = $noTelpn; 		
			$dataMember['nama_bank'] = $nama_bank; 
			$dataMember['nomor_rekening'] = $nomor_rekening; 
			$dataMember['nama_rekening'] = $nama_rekening; 
			$dataMember['lisensi'] = 'FREE'; 
			$dataMember['upline_level_1'] = $username =$getMember['id']; 
			$dataMember['tanggal_join'] = date('Y-m-d H:i:s');
			$saveMember = $this->member_model->save($dataMember);

			$data = array();
			$data['id'] = 	 0;
			$data['id_member'] = $this->member_model->getLastID();
			$data['email'] = $email; 
			$data['password'] = md5('membersaudagar'); 
			$data['status'] = 	'AKTIF';
			$data['hak_akses'] = 	 'MEMBER';
			$data['create_date'] = 	 date('Y-m-d H:i:s');

			$save = $this->users_model->save($data);

			// $email =  'support@saudagarkaya.com';
			
			$data = array('email_penerima' => $email , 'subjek_email' => $subject, "body_email" => $html_body);
			$curl = curl_init('http://admin.saudagarkaya.com/sendEmail.php') ;
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_exec($curl);
		
		
		if ($save) {
			$this->success('Behasil Prossess');
		}else{
			$this->error('Gagal Prossess');
		}
		
	}

	function saveTrafic()
	{
		// echo 'TES';
		// $this->success('Behasil Prossess');
		// exit;
		$cookie = $this->input->post('cookie');
		$funnel = $this->input->post('funnel');
		$username = $this->input->post('username');
		$pixel = $this->input->post('pixel');
		$urlFunnel = 'https://'.$_SERVER['SERVER_NAME'].'/'.$funnel;
		// echo $urlFunnel;exit;
		$dataMember = $this->member_model->get(array("username" => $username));
		// echo $this->db->last_query();
		$dataFunnel = $this->funnel_model->get(array("link" => $urlFunnel));
		// echo $this->db->last_query(); exit;
		// $dataFunnel = $this->trafic_model->save($data);
		$dataTrafic = array();
		$setFunnel = array();
		if ($dataFunnel['id']) {
			if ($dataMember['id']) {
				// $cekTrafic = $this->trafic_model->get(array(
				// 	"id_member" => $dataMember['id'],
				// 	"unique_id" => $cookie
				// ));
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
					// echo $this->db->last_query(); exit;
					$this->trafic_model->save($dataTrafic);

					$setFunnel['id'] = $dataFunnel['id'];
					$setFunnel['jumlah_trafic'] = ($dataFunnel['jumlah_trafic'] + 1);
					$this->funnel_model->save($setFunnel);
				// }
				
			}
		}
		
	}
}