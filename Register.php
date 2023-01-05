<?php
//menyertakan file program koneksi.php pada register
require('config.php');
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($con, $repass);
        $notelp   = stripslashes($_POST['no_telp']);
        $notelp   = mysqli_real_escape_string($con, $notelp);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($username, $con) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO users (username,name,email, password, no_telp ) VALUES ('$username','$name','$email','$pass','$notelp')";
                    $result   = mysqli_query($con, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: Login.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        $nama = mysqli_real_escape_string($con, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="Register.css">

<style type="text/css">
  #sign{
    font-size: 72px;
  }
  @media (max-width: 1200px) {
    #sign{
      font-size: 48px;
    }
  }
  @media (max-width: 766px) {
    #sign{
      display: none;
    }
  }
</style>
<body>
        <section class="container-fluid bg-dark px-4" style="padding-bottom: 100px; padding-top: 200px;">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center">
            <section class="col-md-5" style="margin-top: 50px;">
              <h1 id="sign" class="u-custom-font u-heading-font u-text u-text-default u-text-1">SIGN UP YOUR ACCOUNT</h1>
            </section>
            <section class="col-12 col-md-4" style="color: white; font-family: 'Campotype-Timesquare';">
                <form class="form-container" action="Register.php" method="POST">
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                    <h4 class="text-center font-weight-bold" > Sign-Up </h4>
                    <div class="form-group my-3">
                        <input type="text" class="form-control u-input u-border-1 u-border-grey-30" id="name" name="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group my-3">
                        
                        <input type="email" class="form-control u-input u-border-1 u-border-grey-30" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                    </div>
                    <div class="form-group my-3">
                        
                        <input type="text" class="form-control u-input u-border-1 u-border-grey-30" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" class="form-control u-input u-border-1 u-border-grey-30" id="InputPassword" name="password" placeholder="Password">
                    </div>
                    <div class="form-group my-3">
                        <input type="password" class="u-input u-border-1 u-border-grey-30 form-control " id="InputRePassword" name="repassword" placeholder="Re-Password">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                    <div class="form-group my-3">
                        <input type="text" class="u-input u-border-1 u-border-grey-30 form-control " id="no_telp" name="no_telp" placeholder="No. Telepon">
                    </div>
                    <button type="submit" name="submit" class="btn btn-dark my-3 btn-block" style="border: 2px solid white;">Register</button>
                    <div class="form-footer mt-2">
                        <p> Sudah punya account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </section>
            </section>
        </section>


    <section class="u-clearfix u-image u-section-2" id="sec-5c85" data-image-width="1920" data-image-height="1080">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-body-alt-color u-text-1"> Get the latest News Right In Your Inbox</h2>
                  <div class="u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <p class="u-text u-text-body-alt-color u-text-2"> Join the next generation of entertainment. Receive exclusive VIP treatment as a member of our community and player base.<br>
                    <br>Register and subscribe now and receive all the latest games news and highlights, recommendation for new contents and many more!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>