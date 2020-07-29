<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register</title>
<style>
.register{
    background: -webkit-linear-gradient(left, #af8e31, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Saudagar Kaya</h3>
                        <p>Awali langkah suksesmu </p>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">DAFTAR</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id='nama' placeholder="Nama *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id='email' placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id='noTelpn' placeholder="Nomor Telepon *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id='alamat' placeholder="Kota *" value="" />
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span>
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span>
                                                </label>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id='nama_bank' placeholder="Nama Bank *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  id='nomor_rekening' class="form-control" placeholder="Nomor Rekening *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text"  id='nama_rekening' class="form-control" placeholder="Atas Nama *" value="" />
                                        </div>
                                        <!-- <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                        </div> -->
                                        <input type="button" class="btnRegister"  id='buttonSubmit' onclick="daftarBasic()" value="Register"/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <!-- <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div> -->
                                        <input type="button" class="btnRegister" onclick="daftarBasic()" id='buttonSubmit' value="Register"/>
                                    </div>
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
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                // showProgres();

                $("#buttonSubmit").attr("disabled",true);
                $("#buttonSubmit").val("Loading");
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
                          swal({

                            title: "Success",
                            text: "Pendaftaran Berhasil",
                            icon: "success",
                            closeOnClickOutside: false,
                        });

                            window.location.href ='../../';
                            // loadMainContentMember('../../../payment');
                            // showSuccessToast(result.message);
                        }else{
                          swal({

                            title: "Error",
                            text: result.error,
                            icon: "warning",
                            closeOnClickOutside: false,
                        });
                            // alert(result.error);
                            $("#buttonSubmit").removeAttr("disabled");
                            $("#buttonSubmit").val("Register");
                            // showDangerToast(result.error);
                        }
                  }
                  ,"json"
                );
              }
            </script>
