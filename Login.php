
<?php
//menyertakan file program koneksi.php pada register
require('config.php');

//inisialisasi session
session_start();
 
$error = '';
$validate = '';
 
//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['username']) ) {
    header('Location: index.php');
 }
//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
         
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($con, $password);
        
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){
 
            //select data berdasarkan username dari database
            $query      = "SELECT * FROM users WHERE username = '$username'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);
 
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                    logged($username);
                }
                             
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
 
?>



<?php
include 'header.php';
?>
<!-- <link rel="stylesheet" type="text/css" href="Login.css"> -->
<link rel="stylesheet" type="text/css" href="bootstrap.css">

<section class="container-fluid bg-dark" style="padding-top: 250px;padding-bottom: 200px; color: white;">
            <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
            <section class="row justify-content-center mx-4">
            <section class="col-12 col-sm-8 col-md-6">
                <form class="form-container" action="Login.php" method="POST">
                    <h4 class="text-center font-weight-bold"> Sign-In </h4>
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                    
                    <div class="form-group my-2">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group my-2">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                        <?php if($validate != '') {?>
                            <p class="text-danger"><?= $validate; ?></p>
                        <?php }?>
                    </div>
                  
                    <button type="submit" name="submit" class="btn btn-primary my-3 btn-block">Sign In</button>
                    <div class="form-footer mt-2">
                        <p> Belum punya account? <a href="Register.php">Register</a></p>
                    </div>
                </form>
            </section>
            </section>
        </section>


<!-- <section class="u-align-center u-black u-clearfix u-section-1" id="sec-7b1e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-text u-text-default u-text-1" style="margin-top: 200px;">Login to your Account</h1>
        <div class="u-form u-login-control u-form-1">
          <form action="Login.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="username-aedf" class="u-label">Username *</label>
              <input type="text" placeholder="Enter your Username" id="username-aedf" name="username" class="u-grey-60 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-password">
              <label for="password-aedf" class="u-label">Password *</label>
              <input type="password" placeholder="Enter your Password" id="password-aedf" name="password" class="u-grey-60 u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-checkbox u-form-group">
              <input type="checkbox" id="checkbox-aedf" name="remember" value="On">
              <label for="checkbox-aedf" class="u-label">Remember me</label>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1">Login</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <a href="#" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-2">Forgot password?</a>
      </div>
    </section> -->

<?php include 'footer.php'; ?>