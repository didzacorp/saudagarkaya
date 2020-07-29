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
    <link rel="stylesheet" href="https://orbitthemes.com/preview/checkout-plus/dist/font-awesome/css/font-awesome.min.css">
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
                                        <small class="text-muted">Original</small>
                                    </div>
                                    <span class="text-muted"><input type='number' id='jumlahBarang' name='jumlahBarang' style="width:40px;text-align:right;"  > </span>
                                    <span class="text-muted">X 75.000</span>
                                    <span class="text-muted">150.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Jalur Nugraha Ekakurir (JNE)</h6>
                                        <small class="text-muted">Ongkos Kirim Ekonomis </small>
                                    </div>
                                    <span class="text-muted">15.000</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (Rp)</span>
                                    <strong>165.000</strong>
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
                                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/1200px-BNI_logo.svg.png" style="width:100px;height:40px;">
                                    </li>
                                    <li class="mx-1 text-info">
                                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/f/fa/Bank_Mandiri_logo.svg/1200px-Bank_Mandiri_logo.svg.png" style="width:100px;height:40px;">
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" novalidate>
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
                                        <select class="custom-select d-block w-100"  id='ProvinsiPembeli' onchange="getKota(this.value)" required>
                                            <option value="">-- PROVINSI -- </option>
                                        </select>

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">KOTA</label>
                                        <select class="custom-select d-block w-100" id="state" required>
                                            <option value="">Choose...</option>
                                            <option>BANDUNG</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Kode Pos</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Expedisi</label>
                                                      <select class="form-control select2 select2-hidden-accessible" id="layananPengiriman" tabindex="-1" aria-hidden="true"><option value="jne">Jalur Nugraha Ekakurir (JNE)</option></select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" style="width: 647.109px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-layananPengiriman-container"><span class="select2-selection__rendered" id="select2-layananPengiriman-container" title="Jalur Nugraha Ekakurir (JNE)"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Service</label>
                                        <select class="form-control select2 select2-hidden-accessible" id="servicePengiriman" onchange="getOngkir($('#KotaPembeli').val(),$('#berat').val(),this.value)" tabindex="-1" aria-hidden="true"><option value="0">Ongkos Kirim Ekonomis</option><option value="1">Layanan Reguler</option></select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Kecamatan</label>
                                        <input type="text" class="form-control" id="kecamatanPembeli" name="kecamatanPembeli" placeholder="" value="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Ongkir</label>
                                        <input type="text" class="form-control" id="ongkir" name="ongkir" placeholder="" readonly value="" required>
                                    </div>
                                </div>

                                <hr class="mb-4">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    <i class="fa fa-credit-card"></i> Checkout</button>
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
          $(function () {


                  getProvinsi();
                   $('.select2').select2();
            });


            function getProvinsi(id='')
            {
              $.ajax({
        				type:'POST',
        				data:$('#'+this.formName).serialize(),
        				url: 'https://saudagarkaya.com/api/getProvinsi',
        					success: function(data) {
					          var resp = eval('(' + data + ')');
        					  
        					}
        			});
            }

</body>

</html>
</body>
</html>
