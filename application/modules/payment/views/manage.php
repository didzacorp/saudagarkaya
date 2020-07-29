<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<title>Payment</title>
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
                                  <p class='mt-2 mb-2'><strong id='namaTransaksi'><?php echo $namaPembeli; ?></strong></p>
                                  <p><span id='alamatTransaksi'><?php echo $alamatPembeli; ?>,</span>
                                      <br /><span id='kecamatanTransaksi'><?php echo $kecamatanPembeli; ?> (<?php echo $kodePos; ?>),</span>
                                      <br /><span id='kotaTransaksi'><?php echo $namaKota; ?>,</span>
                                      <br /><span id='provinsiTransaksi'><?php echo $namaProvinsi; ?>.</span></p>
                              </div>
                              <div class='col-lg-3 pr-0' style='float: right;'>
                                  <p class='mt-2 mb-2 text-right'><strong>#<?php echo $idTransaksi;?> </strong></p>
                                  <p class='mt-2 mb-2 text-right'><strong>Kontak Pembeli</strong></p>
                                  <p class='text-right'><span id='emailTransaksi'><?php echo $emailPembeli;?></span>
                                      <br /> <span id='noTelpnTransaksi'><?php echo $nomorTelepon;?></span></p>
                              </div>
                          </div>
                          <div class='container-fluid d-flex justify-content-between' style='width: 100%; float: left;'>
                              <div class='col-lg-9 pl-0' style='float: left;'>
                                  <p class='mb-0 mt-2'>Tanggal Transaksi : <span id='TanggalTransaksi'><?php echo humanize_date($tanggalTransaksi);?></span></p>
                                  <p>Layanan Pengiriman : <span id='pengirimanTransaksi'><?php echo $layananPengiriman;?></span></p>

                              </div>
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
                                         <td class='text-left'>1</td>
                                         <td class='text-left'>Super Goat</td>
                                         <td class='text-right'>75.000</td>
                                         <td><?php echo $jumlahBarang;?></td>
                                         <td><?php echo $subTotal;?></td>
                                       </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                          <div class='container-fluid mt-5 w-100' style='width: 100%; text-align: right; float: right;'>
                              <p class='text-right mb-2'>Sub - Total : <span id='totalTransaksi'><?php echo $subTotal;?></span></p>
                              <p class='text-right mb-2'>Kode Unik : <span id='diskonTransaksi'><?php echo $kodeUnik;?></span></p>
                              <p class='text-right'>Ongkir : <span id='ongkirTransaksi'><?php echo $totalOngkir;?></span></p>
                              <h4 class='text-right mb-5'>Grand Total : <span id='grandTotalTransaksi'><?php echo $total;?></span></h4>
                              <hr />
                              <div style='text-align: center;'>
                                  <div class='bank-box'>
                                      <h5>Silahkan Transfer Ke Salah Satu Rekening Dibawah ini, sejumlah <b><?php echo $total;?></b></h5>
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

                                  <a href='https://api.whatsapp.com/send?phone=62<?php echo substr($nomorWAMember,1) ?>&text=halo+saya+ingin+konfirmasi+nomor+order+%23<?php echo $idTransaksi ?>+' style='background-color:rgb(0, 128, 0);border-bottom-color:rgb(255, 255, 255);border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-bottom-style:none;border-bottom-width:0px;border-image-outset:0px;border-image-repeat:stretch;border-image-slice:100%;border-image-source:none;border-image-width:1;border-left-color:rgb(255, 255, 255);border-left-style:none;border-left-width:0px;border-right-color:rgb(255, 255, 255);border-right-style:none;border-right-width:0px;border-top-color:rgb(255, 255, 255);border-top-left-radius:5px;border-top-right-radius:5px;border-top-style:none;border-top-width:0px;box-sizing:border-box;color:rgb(255, 255, 255);display:block;font-family:Roboto, sans-serif;font-size:20px;font-stretch:100%;font-style:normal;font-variant-caps:normal;font-variant-east-asian:normal;font-variant-ligatures:normal;font-variant-numeric:normal;font-weight:400;height:63px;hyphens:manual;line-height:28px;margin-bottom:0px;margin-left:0px;margin-right:0px;margin-top:0px;outline-color:rgb(255, 255, 255);outline-style:none;outline-width:0px;padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:15px;text-size-adjust:100%;transition-delay:0s, 0s, 0s, 0s, 0s, 0s;transition-duration:0.3s, 0.3s, 0.3s, 0.3s, 0.3s, 0.3s;transition-property:background, border, border-radius, box-shadow, -webkit-border-radius, -webkit-box-shadow;transition-timing-function:ease, ease, ease, ease, ease, ease;vertical-align:baseline;visibility:visible;width:387.328px;-webkit-font-smoothing:antialiased;text-decoration: none;' >KONFIRMASI</a>
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

</html>
