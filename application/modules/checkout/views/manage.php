<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <meta name="robots" content="index,follow" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Supergoat" />
    <meta property="og:url" content="index.html" />
    <meta property="og:image" content="<?= base_url();?>/assets/wp-content/uploads/2019/12/supergoat.png" />
    <meta property="og:title" content="SuperGoat" />
    <meta property="og:description" content="SuperGoat Bisnis No Modal No Utang" />
    <link rel="stylesheet" href="https://saudagarkaya.com/assets/custom/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://orbitthemes.com/preview/checkout-plus/css/main.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <body>
        <div class="loader"></div>
        <!-- <header id="header">
            <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
                <div class="container">
                    <a class="navbar-brand" href="#" id="header-logo">
                        <img src="https://raw.githubusercontent.com/orbitthemes/Orbit-Themes/master/assets/logo.png" class="img-fluid" width="200"
                            alt="Orbit Themes">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item active">
                                <a class="nav-link text-dark" href="#">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Features</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Enterprise</a>
                            </li>
                            <li class="nav-item mr-md-3">
                                <a class="nav-link text-dark" href="#">Support</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="btn btn-outline-primary"> Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> -->
        <main id="main" role="main">

            <section id="checkout-container">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <!-- <span class="badge badge-secondary badge-pill">3</span> -->
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Super Goat</h6>
                                        <small class="text-muted">Original 250 Gram</small>
                                    </div>
                                    <span class="text-muted"><input type='number' id='jumlahBarang' name='jumlahBarang' readonly  style="width:40px;text-align:right;" value='1' onchange="countSubTotal();"  onkeyup="countSubTotal();"> </span>
                                    <span class="text-muted">X 75.000</span>
                                    <span class="text-muted" id='spanHarga'>75.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0" id='namaEkspedisi'>Ekspedisi Pengiriman</h6>
                                        <small class="text-muted" id='serviceEkspedisi'></small>
                                    </div>
                                    <span class="text-muted"  id='spanOngkir' >0</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (Rp)</span>
                                    <strong id='spanTotal'>75.000</strong>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">

                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="button" onClick=prosesCheckout();>
                                        <i class="fa fa-credit-card"></i> Checkout</button>
                                </li>
                            </ul>
                            <!-- <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form> -->
                            <div class="payment-methods">
                                <p class="pt-4 mb-2">Payment Options</p>
                                <hr>
                                <ul class="list-inline d-flex">
                                    <li class="mx-1 text-info">
                                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/e/e0/BCA_logo.svg/472px-BCA_logo.svg.png" style="width:100px;height:40px;">
                                    </li>
                                    <li class="mx-1 text-info">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" style="width:100px;height:40px;">
                                    </li>
                                    <li class="mx-1 text-info">
                                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/fa/Bank_Mandiri_logo.svg/1200px-Bank_Mandiri_logo.svg.png" style="width:100px;height:40px;">
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" name='formCheckout' id='formCheckout' novalidate>
                              <input type='hidden' name='username' id='username' value="<?php if(empty($username))$username='andyadmin'; echo $username?>">
                              <input type='hidden' name='statusSimpan' id='statusSimpan' value="0">
                              <input type='hidden' name='totalOngkir' id='totalOngkir' value="0">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="firstName">Nama</label>
                                        <input type="text" class="form-control" id="namaPembeli" name="namaPembeli" placeholder="" value="" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email
                                    </label>
                                    <input type="email" class="form-control" id="emailPembeli" name="emailPembeli" placeholder="you@example.com">

                                </div>
                                <div class="mb-3">
                                    <label for="email">Nomor Telepon
                                    </label>
                                    <input type="text" class="form-control" id="nomorTelepon" name="nomorTelepon" placeholder="081223744803">
                                </div>


                                <div class="mb-3">
                                    <label for="address">Alamat</label>
                                    <input type="text" class="form-control" id="alamatPembeli" name="alamatPembeli" placeholder="Jl. Junaedi no 6 " required>

                                </div>



                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Provinsi</label>
                                        <select class="custom-select d-block w-100"  id='ProvinsiPembeli' name="ProvinsiPembeli" onchange="getKota(this.value)" required>
                                            <option value="">-- PROVINSI -- </option>
                                        </select>

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">KOTA</label>
                                        <select class="custom-select d-block w-100" id="KotaPembeli" name="KotaPembeli" required>
                                            <option value="">-- KOTA -- </option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="kodePos">Kode Pos</label>
                                        <input type="text" class="form-control" id="kodePos" name="kodePos" placeholder="" required>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <input type='hidden' value="" id="jsonOngkir" name="jsonOngkir" >
                                        <label for="firstName">Expedisi</label>
                                                      <select class="form-control select2 select2-hidden-accessible" id="layananPengiriman" name="layananPengiriman" onchange=getService(); tabindex="-1" aria-hidden="true">
                                                        <option value="">-- EKSPEDISI -- </option>
                                                        <option value="jne">Jalur Nugraha Ekakurir (JNE)</option>
                                                        <option value="pos">POS Indonesia</option>
                                                      </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 647.109px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-layananPengiriman-container"><span class="select2-selection__rendered" id="select2-layananPengiriman-container" title="Jalur Nugraha Ekakurir (JNE)"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Service</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="servicePengiriman" name="servicePengiriman" onchange="getOngkir($('#KotaPembeli').val(),$('#berat').val(),this.value)" tabindex="-1" aria-hidden="true">
                                          <option value="0">-- SERVICE --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatanPembeli" name="kecamatanPembeli" placeholder="" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Ongkir / Kg</label>
                                        <input type="text" class="form-control" id="hargaOngkir" name="hargaOngkir" placeholder="" style="text-align:right;" readonly value="" required>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="button" onclick="saveAlamat()" id='buttonSave'>
                                    <i  class="fa fa-save"></i> Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer -->

        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://orbitthemes.com/preview/checkout-plus/dist/jquery/jquery.min.js"></script>
        <script src="https://orbitthemes.com/preview/checkout-plus/dist/popper/popper.min.js" integrity=""></script>
        <script src="https://orbitthemes.com/preview/checkout-plus/dist/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://orbitthemes.com/preview/checkout-plus/js/main.min.js"></script>

        <script type="text/javascript">

            $( document ).ready(function() {
                getProvinsi();
            });
            function getProvinsi()
            {
              $.ajax({
        				type:'POST',
        				data:$('#formCheckout').serialize(),
        				url: 'https://saudagarkaya.com/api/getProvinsi',
        					success: function(data) {
					          var resp = eval('(' + data + ')');
                    var JSONObject = JSON.parse(resp.provinsi);
                    $('#ProvinsiPembeli').append(new Option('-- Pilih --' ,0));
                    for (var i = 0; i < JSONObject.length; i++) {
                      $('#ProvinsiPembeli').append(new Option(JSONObject[i]["province"], JSONObject[i]["province_id"]));
                    }
        					}
        			});
            }
            function saveAlamat(){
              if($("#namaPembeli").val() == ''){
                alert("Isi nama pembeli");
              }else if($("#emailPembeli").val() == ''){
                alert("Isi email pembeli");
              }else if($("#nomorTelepon").val() == ''){
                alert("Isi nomor telepon");
              }else if($("#alamatPembeli").val() == ''){
                alert("Isi alamat");
              }else if($("#KotaPembeli").val() == ''){
                alert("Pilih Provinsi dan kota");
              }else if($("#layananPengiriman").val() == ''){
                alert("Pilih layanan pengiriman dan service");
              }else if($("#servicePengiriman").val() == ''){
                alert("Pilih Provinsi dan kota");
              }else if($("#kecamatanPembeli").val() == ''){
                alert("Isi kecamatan");
              }else if($("#kodePos").val() == ''){
                alert("Isi kode pos ");
              }else{
                $("#namaPembeli").attr("readonly",true);
                $("#emailPembeli").attr("readonly",true);
                $("#nomorTelepon").attr("readonly",true);
                $("#ProvinsiPembeli").attr("disabled",true);
                $("#KotaPembeli").attr("disabled",true);
                $("#kodePos").attr("readonly",true);
                $("#layananPengiriman").attr("disabled",true);
                $("#servicePengiriman").attr("disabled",true);
                $("#kecamatanPembeli").attr("readonly",true);
                $("#buttonSave").attr("class","btn btn-danger btn-lg btn-block");
                $("#buttonSave").text("Batal");
                $("#buttonSave").attr("onClick","batalSimpan();");
                $("#statusSimpan").val("1");
                $("#namaEkspedisi").text($("#layananPengiriman option:selected").html());
                $("#serviceEkspedisi").text($("#servicePengiriman option:selected").html());
                $("#jumlahBarang").removeAttr("readonly");
                countSubTotal();
                // var jumlahBarang = $("#jumlahBarang").val();
                // var berat = 250 * jumlahBarang;
                // $.ajax({
                //   type:'POST',
                //   data:{
                //     destination : $("#KotaPembeli").val(),
                //     weight : berat,
                //     servicePengiriman : $("#servicePengiriman").val(),
                //     layananPengiriman : $("#layananPengiriman").val(),
                //   },
                //   url: 'https://saudagarkaya.com/api/getOngkirBerat',
                //     success: function(data) {
                //       var resp = eval('(' + data + ')');
                //       $('#spanOngkir').html(resp.spanOngkir);
                //       $('#totalOngkir').val(resp.totalOngkir);
                //     }
                // });


              }
            }
            function batalSimpan(){
              $("#namaPembeli").removeAttr("readonly");
              $("#emailPembeli").removeAttr("readonly");
              $("#nomorTelepon").removeAttr("readonly");
              $("#ProvinsiPembeli").removeAttr("disabled");
              $("#KotaPembeli").removeAttr("disabled");
              $("#kodePos").removeAttr("readonly");
              $("#layananPengiriman").removeAttr("disabled");
              $("#servicePengiriman").removeAttr("disabled");
              $("#kecamatanPembeli").removeAttr("readonly");
              $("#buttonSave").attr("class","btn btn-primary btn-lg btn-block");
              $("#buttonSave").text("Simpan");
              $("#buttonSave").attr("onClick","saveAlamat();");
              $("#statusSimpan").val("0");
              $("#jumlahBarang").attr("readonly",true);

            }
            function getKota()
            {
              $('#jsonOngkir').html('');
              $.ajax({
        				type:'POST',
        				data:$('#formCheckout').serialize(),
        				url: 'https://saudagarkaya.com/api/getKota',
        					success: function(data) {
					          var resp = eval('(' + data + ')');
                    var JSONObject = JSON.parse(resp.kota);
                    $('#KotaPembeli').html('');
                    $('#KotaPembeli').append(new Option('-- KOTA --' ,0));
                    for (var i = 0; i < JSONObject.length; i++) {
                      $('#KotaPembeli').append(new Option(JSONObject[i]["city_name"], JSONObject[i]["city_id"]));
                    }
        					}
        			});
            }
            function getService(){
              // showProgres();
              $('#jsonOngkir').html('');
              $('#estimasiPengiriman').html('');
              $('#hargaOngkir').val('');
              var jumlahBarang = $("#jumlahBarang").val();
              var berat = 250 * jumlahBarang;
              $.ajax({
        				type:'POST',
        				data:$('#formCheckout').serialize()+"&weight="+berat,
        				url: 'https://saudagarkaya.com/api/getService',
        					success: function(data) {
					          var resp = eval('(' + data + ')');
                    var JSONObject = JSON.parse(resp.biaya);
                    $("#jsonOngkir").val(resp.biaya);
                    $('#servicePengiriman').html('');
                    $('#servicePengiriman').append("<option value='0'>-- SERVICE --</option> ");
                    for (var i = 0; i < JSONObject[0]['costs'].length; i++) {
                      $('#servicePengiriman').append(new Option(JSONObject[0]['costs'][i]['description'] + "( "+JSONObject[0]['costs'][i]['cost'][0]['etd']+" Hari )", i));
                   }
        					}
        			});

            }
            function prosesCheckout(){
              // showProgres();
              if($("#statusSimpan").val() =='1'){

                var jumlahBarang = $("#jumlahBarang").val();
                var berat = 250 * jumlahBarang;
                $.ajax({
          				type:'POST',
          				// data:$('#formCheckout').serialize()+"&jumlahBarang="+$("#jumlahBarang").val(),
                  data: {
                    namaPembeli : $("#namaPembeli").val(),
                    emailPembeli : $("#emailPembeli").val(),
                    nomorTelepon : $("#nomorTelepon").val(),
                    alamatPembeli : $("#alamatPembeli").val(),
                    kodePos : $("#kodePos").val(),
                    kecamatanPembeli : $("#kecamatanPembeli").val(),
                    jumlahBarang : $("#jumlahBarang").val(),
                    username : $("#username").val(),
                    totalOngkir : $("#totalOngkir").val(),
                    namaEkspedisi : $("#namaEkspedisi").text(),
                    servicePengiriman : $("#serviceEkspedisi").text(),
                    namaProvinsi : $("#ProvinsiPembeli option:selected").html(),
                    namaKota : $("#KotaPembeli option:selected").html(),
                  },
          				url: 'https://saudagarkaya.com/api/prosesCheckout',
          					success: function(data) {
  					          var resp = eval('(' + data + ')');
                      window.location = "https://saudagarkaya.com/payment/"+resp.idTransaksi;
          					}
          			});
              }else{
                alert("Billing address belum di simpan !");
              }


            }
            function countSubTotal(){
              var jumlahBarang = $("#jumlahBarang").val();
              var subTotal = jumlahBarang * 75000;
              var berat = 250 * jumlahBarang;
              var total = 0;
              $("#spanHarga").text(formatCurrency(subTotal.toString()));
              $.ajax({
                type:'POST',
                data:{
                  destination : $("#KotaPembeli").val(),
                  weight : berat,
                  servicePengiriman : $("#servicePengiriman").val(),
                  layananPengiriman : $("#layananPengiriman").val(),
                },
                url: 'https://saudagarkaya.com/api/getOngkirBerat',
                  success: function(data) {
                    var resp = eval('(' + data + ')');
                    total = subTotal + parseInt(resp.totalOngkir);
                    $('#spanOngkir').html(resp.spanOngkir);
                    $('#totalOngkir').val(resp.totalOngkir);
                    $("#spanTotal").text(formatCurrency(total.toString()));
                  }
              });




            }
            function formatCurrency(num) {
              num = num.toString().replace(/\$|\,/g,'');
              if(isNaN(num))
              num = "0";
              sign = (num == (num = Math.abs(num)));
              num = Math.floor(num*100+0.50000000001);
              cents = num%100;
              num = Math.floor(num/100).toString();
              if(cents<10)
              cents = "0" + cents;
              for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
              num = num.substring(0,num.length-(4*i+3))+'.'+
              num.substring(num.length-(4*i+3));
              // return (((sign)?'':'-') + '' + num + ',' + cents);
              return (((sign)?'':'-') + '' + num);
            }

            function getOngkir(destination='',weight=1,id=0)
            {
              $('#estimasiPengiriman').html('');
              $('#hargaOngkir').val('');
              var jumlahBarang = $("#jumlahBarang").val();
              var berat = 250 * jumlahBarang;
              $.ajax({
        				type:'POST',
        				data:{
                  destination : destination,
                  weight : berat,
                  jsonOngkir : $("#jsonOngkir").val(),
                  servicePengiriman : $("#servicePengiriman").val(),
                },
        				url: 'https://saudagarkaya.com/api/getOngkir',
        					success: function(data) {
					          var resp = eval('(' + data + ')');
                    $('#estimasiPengiriman').html(resp.estimasiPengiriman);
                    $('#hargaOngkir').val(resp.hargaOngkir);
        					}
        			});


            }
          </script>
</body>

</html>
</body>
</html>
