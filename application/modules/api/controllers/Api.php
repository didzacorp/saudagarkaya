<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'application/libraries/SimpleEmailService.php';
class Api extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		// $this->load->model('lokasi/lokasi_model');
		$this->load->model('model/member_model');
		$this->load->model('model/funnel_model');
		$this->load->model('model/trafic_model');
		$this->load->model('model/transaksi_model');

	}
	function getProvinsi()
	{
		$id = $this->input->post('id');
		$this->load->library('RajaOngkir');
		$provinces = $this->rajaongkir->province($id);
		$provinsi = json_decode($provinces, true);
		$data['provinces'] = json_encode($provinsi['rajaongkir']['results']);
		// echo $totalCart;exit();
		if($data['provinces']){
			$this->update['provinsi'] = $data['provinces'];
			$this->success(' Provinsi Ditemukan');

		}else{
			$this->error('Provinsi Tidak Ditemukan');
		}

	}
	function getKota()
	{
		$idProv = $this->input->post('ProvinsiPembeli');
		$this->load->library('RajaOngkir');
		$city = $this->rajaongkir->city($idProv);
		$kota = json_decode($city, true);
		$data['city'] = json_encode($kota['rajaongkir']['results']);
		// echo $totalCart;exit();
		if($data['city']){
			$this->update['kota'] = $data['city'];
			$this->success(' Kota Ditemukan');

		}else{
			$this->error('Kota Tidak Ditemukan');
		}

	}
	function getService()
	{
		$id = $this->input->post('id');
		$destination = $this->input->post('KotaPembeli');
		$weight = $this->input->post('weight');
		$this->load->library('RajaOngkir');
		if(empty($weight))$weight=1;
		$cost = $this->rajaongkir->cost(22, $destination, $weight, $_REQUEST['layananPengiriman']);
		$biaya = json_decode($cost, true);
		$data['cost'] = json_encode($biaya['rajaongkir']['results']);
		// echo $totalCart;exit();
		if($data['cost']){
			$this->update['biaya'] = $data['cost'];
			$this->success(' Biaya Ditemukan');

		}else{
			$this->error('Biaya Tidak Ditemukan');
		}

	}
	function getOngkirBerat()
	{
		$id = $this->input->post('id');
		$destination = $this->input->post('destination');
		$weight = $this->input->post('weight');
		$this->load->library('RajaOngkir');
		if(empty($weight))$weight=1;
		$cost = $this->rajaongkir->cost(22, $destination, $weight, $_REQUEST['layananPengiriman']);
		$biaya = json_decode($cost, true);
		$jsonOngkir =  json_encode($biaya['rajaongkir']['results']);
		$decodeArrayOngkir = json_decode($jsonOngkir);
		echo json_encode(
			array(
				"spanOngkir" => $this->numberFormat($decodeArrayOngkir[0]->costs[$_REQUEST['servicePengiriman']]->cost[0]->value),
				"totalOngkir" => $decodeArrayOngkir[0]->costs[$_REQUEST['servicePengiriman']]->cost[0]->value
			)
		);
	}
	function getOngkir()
	{
		$decodeArrayOngkir = json_decode($_REQUEST['jsonOngkir']);
		echo json_encode(
			array(
				"hargaOngkir" => $this->numberFormat($decodeArrayOngkir[0]->costs[$_REQUEST['servicePengiriman']]->cost[0]->value),
				"estimasiPengiriman" => $decodeArrayOngkir[0]->costs[$_REQUEST['servicePengiriman']]->cost[0]->etd
			)
		);


	}
	function genNumber($num, $dig=3){
		return sprintf("%0".$dig."d", $num);
	}
	function prosesCheckout()
	{
		foreach ($_REQUEST as $key => $value) {
			$$key = $value;
		}
		$err = "";
		$cek = "";
		$getDataMember = $this->sqlArray($this->sqlQuery("select * from member where username = '".$_REQUEST['username']."'"));
		if(empty($err)){
			$getJumlahTransaksiHariIni = $this->sqlArray($this->sqlQuery("select count(id) from transaksi where tanggal = '".date("Y-m-d")."'"));
			$kodeUnik = $getJumlahTransaksiHariIni['count(id)'] + 1;
			$subTotal = $jumlahBarang * 75000;
			$dataTransaksi = array(
				"id_member" => $getDataMember['id'],
				"nama_pembeli" => $namaPembeli,
				"email_pembeli" => $emailPembeli,
				"nomor_telepon" => $nomorTelepon,
				"alamat_pengiriman" => $alamatPembeli,
				"provinsi_pengiriman" => $namaProvinsi,
				"kota_pengiriman" => $namaKota,
				"kecamatan_pengiriman" => $kecamatanPembeli,
				"kode_pos_pengiriman" => $kodePos,
				"tanggal" => date("Y-m-d"),
				"sub_total" => $jumlahBarang * 75000,
				"ongkir" => $totalOngkir,
				"total" => ( $jumlahBarang * 75000 ) + $totalOngkir + $kodeUnik,
				"status" => "BELUM BAYAR",
				"service_pengiriman" => $namaEkspedisi." => ".$servicePengiriman,
				"keterangan" => "",
				"jenis_transaksi" => "PENJUALAN",
				"kode_unik" =>$this->genNumber($kodeUnik,3),
				"update_time" =>date("Y-m-d H:i:s"),
			);
			$queryInsertTransaksi = $this->sqlInsert("transaksi",$dataTransaksi);
			$this->sqlQuery($queryInsertTransaksi);
			$getIdTransaksi = $this->sqlArray($this->sqlQuery("select max(id) from transaksi where id_member = '".$getDataMember['id']."' "));
			$dataDetailTransaksi = array(
				"id_transaksi" => $getIdTransaksi['max(id)'],
				"id_produk" => 2,
				"jumlah" => $jumlahBarang,
				"harga" => 75000,
				"total" => $jumlahBarang * 75000,
			);
			$queryInsertDetailTransaksi = $this->sqlInsert("detail_transaksi",$dataDetailTransaksi);
			$this->sqlQuery($queryInsertDetailTransaksi);


			$subject = ' Pembayaran Pembelian Produk';
			$html_body =  "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Pearl UI</title>
    <link rel='stylesheet' href='<?= base_url();?>assets/ui-member/css/style.css'>
    <style type='text/css'>
      table, th, td {
        border: 1px solid black;
      }
    </style>
</head>

<body>
<p>&nbsp;</p>
<div class='container-scroller'>
    <div class='container-fluid page-body-wrapper'>
        <div class='main-panel' style='width: 100%;'>
            <div class='content-wrapper' style='padding: 1%;'>
                <div class='row'>
                    <div class='col-12 grid-margin'>
                        <div class='card'>
                            <h3 class='card-title ' style='text-align: center; background: #c3ccd6; color: white; padding: 1%;'><img style='width: 90px; float: left;' src='http://member.saudagarkaya.com/assets/ui-member/images/logo/logo.png' /> Pembayaran Pembelian Produk</h3>
                            <div class='card-body'>
                                <div class='container-fluid d-flex justify-content-between' style='width: 100%;'>
                                    <div class='col-lg-3 pl-0' style='float: left;'>
                                        <p class='mt-2 mb-2'><strong id='namaTransaksi'>".$namaPembeli."</strong></p>
                                        <p><span id='alamatTransaksi'>".$alamatPembeli.",</span>
                                            <br /><span id='kecamatanTransaksi'>".$kecamatanPembeli." (".$kodePos."),</span>
                                            <br /><span id='kotaTransaksi'>".$namaKota.",</span>
                                            <br /><span id='provinsiTransaksi'>".$namaProvinsi.".</span></p>
                                    </div>
                                    <div class='col-lg-3 pr-0' style='float: right;'>
                                        <p class='mt-2 mb-2 text-right'><strong>#".$getIdTransaksi['max(id)']."</strong></p>
                                        <p class='mt-2 mb-2 text-right'><strong>Kontak Pembeli</strong></p>
                                        <p class='text-right'><span id='emailTransaksi'>".$emailPembeli."</span>
                                            <br /> <span id='noTelpnTransaksi'>".$nomorTelepon."</span></p>
                                    </div>
                                </div>
                                <div class='container-fluid d-flex justify-content-between' style='width: 100%; float: left;'>
                                    <div class='col-lg-3 pl-0' style='float: left;'>
                                        <p class='mb-0 mt-2'>Tanggal Transaksi : <span id='TanggalTransaksi'>".humanize_date(date("Y-m-d"))."</span></p>
                                        <p>Layanan Pengiriman : <span id='pengirimanTransaksi'>".$namaEkspedisi." => ".$servicePengiriman."</span></p>
                                    </div>
                                    <div style='width: 100%; float: left;'>
                                        <table class='table' style='width: 100%; float: left;'>
                                            <thead>
                                                <tr class='bg-dark text-white'>
                                                    <th>#</th>
                                                    <th>Produk</th>
                                                    <th class='text-right'>Harga</th>
                                                    <th class='text-right'>Jumlah</th>
                                                    <th class='text-right'>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id='DetailTransaksi'>
																						<tr class='text-right'>
																               <td class='text-left'1</td>
																               <td class='text-left'>Super Goat</td>
																               <td class='text-right'>75.000</td>
																               <td>$jumlahBarang</td>
																               <td>".$this->numberFormat($subTotal)."</td>
																             </tr>
																						</tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class='container-fluid mt-5 w-100' style='width: 100%; text-align: right; float: right;'>
                                    <p class='text-right mb-2'>Sub - Total : <span id='totalTransaksi'>".$this->numberFormat($subTotal)."</span></p>
                                    <p class='text-right mb-2'>Kode Unik : <span id='diskonTransaksi'>".$this->genNumber($kodeUnik,3)."</span></p>
                                    <p class='text-right'>Ongkir : <span id='ongkirTransaksi'>".$this->numberFormat($totalOngkir)."</span></p>
                                    <h4 class='text-right mb-5'>Grand Total : <span id='grandTotalTransaksi'>".number_format($dataTransaksi['total'])."</span></h4>
                                    <hr />
                                    <div style='text-align: center;'>
                                        <div class='bank-box'>
                                            <h5>Silahkan Transfer Ke Salah Satu Rekening Dibawah ini, sejumlah ".number_format(( $jumlahBarang * 75000 ) + $totalOngkir + $kodeUnik)."</h5>
                                            <div class='p-2 icon-bank'><img style='width: 150px;' src='https://img2.pngdownload.id/20180802/lcs/kisspng-bank-central-asia-logo-bca-finance-business-logo-bank-central-asia-bca-format-cdr-amp-pn-5b63687e470088.3520223915332414702908.jpg' /></div>
                                            <h4><strong>437.128.5843</strong></h4>
                                            <h5>Atas Nama Andy Sudaryanto</h5>
                                        </div>
                                        <div class='option-divider-bordered'>
                                            <div class='row justify-content-center overlap-row'>
                                                <div class='pills-heading'><strong>ATAU</strong></div>
                                            </div>
                                        </div>
                                        <div class='bank-box'>
                                            <div class='p-2 icon-bank'><img style='width: 150px;' src='https://upload.wikimedia.org/wikipedia/id/thumb/f/fa/Bank_Mandiri_logo.svg/1280px-Bank_Mandiri_logo.svg.png' /></div>
                                            <h4><strong>131.001.363.9408</strong></h4>
                                            <h5>Atas Nama Andy Sudaryanto</h5>
                                        </div>
                                        <div class='option-divider-bordered'>
                                            <div class='row justify-content-center overlap-row'>
                                                <div class='pills-heading'><strong>ATAU</strong></div>
                                            </div>
                                        </div>
                                        <div class='bank-box'>
                                            <div class='p-2 icon-bank'><img style='width: 150px;' src='https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png' /></div>
                                            <h4><strong>763.701.002.274.508</strong></h4>
                                            <h5>Atas Nama Andy Sudaryanto</h5>
                                        </div>
																				<h5 >Setelah transfer klik tombol konfirmasi </h5>
																				<center>

																				<a href='https://api.whatsapp.com/send?phone=62".substr($getDataMember['nomor_telepon'],1)."&text=halo+saya+ingin+konfirmasi+nomor+order+%23".$getIdTransaksi['max(id)']."+' style='background-color:rgb(0, 128, 0);border-bottom-color:rgb(255, 255, 255);border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-bottom-style:none;border-bottom-width:0px;border-image-outset:0px;border-image-repeat:stretch;border-image-slice:100%;border-image-source:none;border-image-width:1;border-left-color:rgb(255, 255, 255);border-left-style:none;border-left-width:0px;border-right-color:rgb(255, 255, 255);border-right-style:none;border-right-width:0px;border-top-color:rgb(255, 255, 255);border-top-left-radius:5px;border-top-right-radius:5px;border-top-style:none;border-top-width:0px;box-sizing:border-box;color:rgb(255, 255, 255);display:block;font-family:Roboto, sans-serif;font-size:20px;font-stretch:100%;font-style:normal;font-variant-caps:normal;font-variant-east-asian:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-weight:400;height:63px;hyphens:manual;line-height:28px;margin-bottom:0px;margin-left:0px;margin-right:0px;margin-top:0px;outline-color:rgb(255, 255, 255);outline-style:none;outline-width:0px;padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:15px;text-size-adjust:100%;transition-delay:0s, 0s, 0s, 0s, 0s, 0s;transition-duration:0.3s, 0.3s, 0.3s, 0.3s, 0.3s, 0.3s;transition-property:background, border, border-radius, box-shadow, -webkit-border-radius, -webkit-box-shadow;transition-timing-function:ease, ease, ease, ease, ease, ease;vertical-align:baseline;visibility:visible;width:387.328px;-webkit-font-smoothing:antialiased;text-decoration: none;' >KONFIRMASI</a>
																				</center>
                                        <h5 style='color: blue;'>*MOHON DIPERHATIKAN : Jika Anda melakukan transfer dari rekening bank selain 3 bank di atas, kami sarankan Anda transfernya ke akun Bank BCA kami, untuk proses verifikasi yang lebih cepat. Terima kasih.</h5>
                                        <br />
                                        <p class='card-text'>Transaksi ini bersifat <strong>non refundable / tidak bisa dikembalikan</strong> dan Setelah Anda melakukan transaksi ini maka Anda telah setuju dengan semua ketentuan yang berlaku.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>";
			$data = array('email_penerima' => $emailPembeli , 'subjek_email' => $subject, "body_email" => $html_body);
			$curl = curl_init('https://admin.saudagarkaya.com/sendEmail.php') ;
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_exec($curl);


			$data = array('email_penerima' => "admin@saudagarkaya.com" , 'subjek_email' => "Pesanan Baru", "body_email" => "#Nomor Pesanan ".$getIdTransaksi['max(id)']. " senilai". $this->numberFormat($dataTransaksi['total']));
			$curl = curl_init('https://admin.saudagarkaya.com/sendEmail.php') ;
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_exec($curl);


			echo json_encode(
				array("idTransaksi" => $getIdTransaksi['max(id)'])
			);
		}




	}
	function numberFormat($value,$angka = 0){
		return number_format($value,$angka,',','.');
	}
	public function index($username='',$pixel='')
	{
		$exFunnel = explode('/', $_SERVER['REQUEST_URI']);
		setcookie("SuryaDutaCookie",session_id(),mktime (0, 0, 0, 12, 31, 3019));

		if (count($exFunnel) > 2) {
			$funnel = $exFunnel[1];
			$username = $exFunnel[2];
			// $pixcel = $exFunnel[3];
		}else{
			$funnel = '';
			$username = '';
			// $pixcel = '';
		}

		$data = array();
		$data['funnel'] =	$funnel;
		$data['username'] = $username;
		// $data['pixel'] = $pixcel;

		if ($username) {
			$data['member'] = $this->member_model->get(array('username' => $username));
		}else{
			$data['member'] = $this->member_model->get(array('username' => 'andyadmin'));
		}


		// $data['SuryaDutaCookie'] = $_COOKIE['SuryaDutaCookie'];

		$data['content'] = 'manage';
		$this->load->view($data['content'],$data);
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

	function daftarBasic()
	{
		$cookie = $this->input->post('cookie');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$konfirmasiEmail = $this->input->post('konfirmasiEmail');
		$funnel = $this->input->post('funnel');
		$username = $this->input->post('username');
		$pixel = $this->input->post('pixel');

		if (!$nama) {
			$this->error('Nama Wajib diisi');
		}

		if (!$email) {
			$this->error('Email Wajib diisi');
		}

		if (!$funnel) {
			$urlFunnel = 'http://'.$_SERVER['SERVER_NAME'];
		}else if (!$username) {
			$urlFunnel = 'http://'.$_SERVER['SERVER_NAME'].'/'.$funnel;
		}else if (!$pixel) {
			$urlFunnel = 'http://'.$_SERVER['SERVER_NAME'].'/'.$funnel.'/'.$username;
		}else{
			$urlFunnel = 'http://'.$_SERVER['SERVER_NAME'].'/'.$funnel.'/'.$username.'/'.$pixel;
		}

		$dataMember = $this->member_model->get(array("username" => $username));
		$dataTrafic = $this->trafic_model->get(array("unique_id" => $cookie));
		$getTransaksi = $this->transaksi_model->get(array("email_pembeli" => $email));
		$getKodeUnik =  $this->transaksi_model->getKodeUnik();

		if (!$getTransaksi['id']) {
			// if ($dataTrafic['id']) {


				$data = array();
				$data["id"] = 0;
				$data['nama_pembeli'] = $nama;
				$data['email_pembeli'] = $email;
				$data['id_trafic'] = $dataTrafic['id'] ? : 0;
				$data["id_member"] = $dataMember['id'];
				$data["tanggal"] = date('Y-m-d');
				$data["sub_total"] = floatval(500000)+floatval($getKodeUnik);
				$data["total"] = '500000';
				$data["diskon"] = 0;
				$data["cashback"] = NULL;
				$data["status"] = 'BELUM BAYAR';
				$data["jenis_transaksi"] = 'PENDAFTARAN MEMBER (BASIC)';
				$data["kode_unik"] = $getKodeUnik;
				$data["url_funnel"] = $urlFunnel;
				$data["update_time"] = date('Y-m-d H:i:s');
				$save = $this->transaksi_model->save($data);

				$this->update['idTrans'] = $this->transaksi_model->getLastID();
				$this->success('Behasil Prossess');
			// }else{}
		}else{
			$this->error('Gagal Prossess');
		}

	}
	function connectionMysql(){
		return mysqli_connect("localhost", "root", "Hash2856", "saudagar_kaya");
	}
  function sqlQuery($script){
    return mysqli_query($this->connectionMysql(), $script);
  }
	function sqlInsert($table, $data){
  	    if (is_array($data)) {
  	        $key   = array_keys($data);
  	        $kolom = implode(',', $key);
  	        $v     = array();
  	        for ($i = 0; $i < count($data); $i++) {
  	            array_push($v, "'" . $data[$key[$i]] . "'");
  	        }
  	        $values = implode(',', $v);
  	        $query  = "INSERT INTO $table ($kolom) VALUES ($values)";
  	    } else {
  	        $query = "INSERT INTO $table $data";
  	    }
  		  return $query;

  	}
  function sqlUpdate($table, $data, $where){
      if (is_array($data)) {
          $key   = array_keys($data);
          $kolom = implode(',', $key);
          $v     = array();
          for ($i = 0; $i < count($data); $i++) {
              array_push($v, $key[$i] . " = '" . $data[$key[$i]] . "'");
          }
          $values = implode(',', $v);
          $query  = "UPDATE $table SET $values WHERE $where";
      } else {
          $query = "UPDATE $table SET $data WHERE $where";
      }

     return $query;
  }
	function sqlArray($sqlQuery){
			return mysqli_fetch_assoc($sqlQuery);
	}

	function sqlRowCount($sqlQuery){
			return mysqli_num_rows($sqlQuery);
	}
}
