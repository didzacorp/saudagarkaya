<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Saudagar Kaya</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/vendors/jquery-bar-rating/css-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url();?>assets/ui-member/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url();?>assets/ui-member/images/favicon.png" />
  </head>
  <style type="text/css">
      .bg-white {
            background-color: #f3a65a !important;
            /* color: white; */
        }
        p {
            font-size: 1rem;
        }
  </style>
  <body class="sidebar-fixed">

<div style="background: #f9cc6b;font-family: poppin,sans-serif;">
    <div  class="row text-center">
        <div  class="col-lg-12 text-left mb-10" style="margin-bottom: 10px;">
            <div  class="card shadow-box copywriting" style="background: #f9cc6b;color: black;">
                <div  class="card-body" style="padding: 2rem;padding-top: 1rem;">
                    <br >
                    <center><h2>Pasukan Reseller Saudagar Kaya </h2></center>
                    <br >
                    <div>
                    <p >Di Saudagar Kaya ada 2 jenis Reseller, yaitu : </p>
                    <br >
                    <p> <b>1. Free Reseller  :</b></p>
                    <p> Anda  bisa menjadi pasukan reseller saudagar kaya tanpa keluar modal satu rupiah pun. </p>
                    <p> Anda hanya tinggal mengisi form pendaftaran Free Reseller dengan cara klik link ini <a href="https://saudagarkaya.com/register_form/<?php if(empty($username))$username="andyadmin"; echo $username;?>"> Daftar Free Reseller </a>
                    <p> Anda akan mendapatkan web toko online saudagar kaya dengan nama anda sendiri</p>
                    <p> Komisi free Reseller adalah sebesar 20% dari setiap item yang Anda jual </p>

                    </p>
                    <p > <b>2. Premium Reseller  :</p></b>
                    <p>
                        <p>Anda akan mendapat toko online saudagar kaya dengan nama Anda sendiri</p>
                        <p>Komisi penjualan premium reseller adalah 25%</p>
                        <p>Anda juga bisa menmbangun tim reseller Anda sendiri dengan merekrut reseller sebanyak banyaknya, dan Anda berhak mendapat fee dari omset tim reseller Anda sebesar 5%</p>
                        <p>Contoh: misal Anda mengajak Anita untuk jadi tim reseller Anda, ketika Anita melakukan penjualan maka Anda akan mendapat komisi 5% dari omset Anita <b>(ENAK BUKAN)</b></p>
                        <p>Anda bisa merekrut sebanyak banyaknya reseller untuk membantu menaikan omset penjualan Anda, semakin banyak tim reseller yang Anda rekrut maka peluang Anda mendapatkan komisi royalti akan lebih besar pula </p>
                        <p>Misal: Anda mempunyai 1 orang reseller, dan 1 orang reseller itu mampu menjual / menghasilkan omset sebesar 10 juta perbulan, maka Anda berhak mendapat komisi royalti 5% X 10 juta = 500 ribu</p>
                        <p>Jika Anda mempunyai 10 orang reseller dan masing2 reseller menghasilkan omset 10 juta per bulan per reseller maka total omsetnya adalah 10 juta X 10 = 100 juta, maka komisi Anda adalah 5% X 100 juta = 5 juta per bulan </p>
                        <p>Mantap apa mantap banget? </p>
                        <p>Itu komisi hanya dari royalti tim reseller Anda lho, blm termasuk keuntungan yang Anda peroleh dari hasil jualan Anda sendiri, kalo digabung bisa gede banget.</p>
                       <p> Bayangkan jika Anda mempunyai 100 reseller atau 1000 reseller, berapa komisi yang bisa Anda terima? Yang pasti gede banget</p>


                    </p>
                    <br>
                    <center>

                      <a class="btn btn-danger btn-lg" target="_blank" href="https://saudagarkaya.com/register_form/<?php if(empty($username))$username="andyadmin"; echo $username;?>" class="elementor-button-link elementor-button elementor-size-lg" data-fbevent="Lead" data-fbdata="{&quot;source&quot;:&quot;landingpress-elementor&quot;,&quot;source_widget&quot;:&quot;button_whatsapp&quot;,&quot;version&quot;:&quot;3.0.0&quot;,&quot;domain&quot;:&quot;supergoat.net&quot;,&quot;campaign_url&quot;:&quot;elementor-5&quot;,&quot;content_name&quot;:&quot;Supergoat&quot;,&quot;post_type&quot;:&quot;page&quot;,&quot;value&quot;:&quot;0.00&quot;,&quot;currency&quot;:&quot;IDR&quot;}">
                                                        <span class="elementor-button-text">DAFTAR SEKARANG</span>
                                                        </span>
                      </a>
                    </center>
                    <br>
                    <center>
                      <?php
                          $nomor_telepon = '62'.substr($member['nomor_telepon'],1);
                      ?>
                      <a class="btn btn-success btn-lg" target="_blank" href="https://api.whatsapp.com/send?phone=<?= $nomor_telepon; ?>&amp;text=Assalamu%27alaikum+Nama+%3A+Asal+kota+%3A+Tertarik++untuk+menjadi+reseller%2C++Boleh+minta+info+lebih+lanjut+%3F%0D%0A" class="elementor-button-link elementor-button elementor-size-lg" data-fbevent="Lead" data-fbdata="{&quot;source&quot;:&quot;landingpress-elementor&quot;,&quot;source_widget&quot;:&quot;button_whatsapp&quot;,&quot;version&quot;:&quot;3.0.0&quot;,&quot;domain&quot;:&quot;supergoat.net&quot;,&quot;campaign_url&quot;:&quot;elementor-5&quot;,&quot;content_name&quot;:&quot;Supergoat&quot;,&quot;post_type&quot;:&quot;page&quot;,&quot;value&quot;:&quot;0.00&quot;,&quot;currency&quot;:&quot;IDR&quot;}">
                      <img src="https://saudagarkaya.com//assets/wp-content/themes/landingpress-wp/assets/images/whatsapp.svg" alt="" height="15px" width="15px" />
                                                        <span class="elementor-button-text">KONSULTASI LEWAT WHATSAPP</span>
                                                        </span>
                      </a>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="<?= base_url();?>assets/ui-member/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?= base_url();?>assets/ui-member/vendors/chart.js/Chart.min.js"></script>
    <script src="<?= base_url();?>assets/ui-member/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="<?= base_url();?>assets/ui-member/vendors/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url();?>assets/ui-member/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url();?>assets/ui-member/js/off-canvas.js"></script>
    <script src="<?= base_url();?>assets/ui-member/js/hoverable-collapse.js"></script>
    <script src="<?= base_url();?>assets/ui-member/js/misc.js"></script>
    <script src="<?= base_url();?>assets/ui-member/js/settings.js"></script>
    <script src="<?= base_url();?>assets/ui-member/js/todolist.js"></script>
    <script src="<?= base_url();?>assets/custom/js/my_scripts.js"></script>
    <script src="<?= base_url();?>assets/ui-member/vendors/jquery-toast-plugin/jquery.toast.min.css"></script>
    <script src="<?= base_url();?>assets/ui-member/js/toast.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url();?>assets/ui-member/js/dashboard.js"></script>

    <script type="text/javascript">
    $(function () {
        saveTrafic();
      });
    function saveTrafic(){
        $.post('../../register/manage/saveTrafic'
          ,{
                funnel : '<?= $funnel; ?>',
                username : '<?= $username; ?>',
                cookie : '<?=  $_COOKIE['SuryaDutaCookie']; ?>',
            }
          ,function(result) {

          }
          ,"json"
        );
      }
    function daftarBasic()
      {
        showProgres();
        $.post('../../register/manage/daftarBasic/'
          ,{
                nama :  $('#nama').val(),
                email : $('#email').val(),
                noTelpn : $('#noTelpn').val(),
                alamat : $('#alamat').val(),
                nama_bank : $('#nama_bank').val(),
                nomor_rekening : $('#nomor_rekening').val(),
                nama_rekening : $('#nama_rekening').val(),
                username : '<?= $username ?>'
            }
          ,function(result) {
                if (result.message) {
                    window.location.href ='../../';
                    // loadMainContentMember('../../../payment');
                    // showSuccessToast(result.message);
                }else{
                    alert(result.error);
                    // showDangerToast(result.error);
                }
          }
          ,"json"
        );
      }
    </script>

  </body>
</html>
