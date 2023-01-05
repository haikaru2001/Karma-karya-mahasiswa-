<?php
include 'config.php';

session_start();
$username = $_SESSION['username'];
if( !isset($username) ) {
	header('Location: Login.php');
}
  $sql    = "SELECT * FROM users WHERE username = '$username'";
  $query  = mysqli_query($con, $sql);
  $result = mysqli_fetch_assoc($query);
  if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
  }
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="Profile.css">



<section class="u-clearfix u-grey-80 u-section-1" id="sec-a606">
      <div class="u-clearfix u-sheet u-sheet-1" style="padding-top: 100px; padding-bottom: 50px;">
        <h1 class="u-text u-text-default u-title u-text-1">Account Profile</h1>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-23 u-image-1" data-image-width="256" data-image-height="256">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xs u-container-layout-2">
                  <p class="u-text u-text-2"><?=$result['email']?></p>
                  <p class="u-text u-text-grey-25 u-text-3">Email</p>
                  <p class="u-text u-text-4"><?=$result['username']?></p>
                  <p class="u-text u-text-grey-25 u-text-5">Nickname</p>
                  <p class="u-text u-text-6"><?=$result['name']?></p>
                  <p class="u-text u-text-grey-25 u-text-7">Full Name</p>
                  <p class="u-text u-text-8">0<?=$result['no_telp']?></p>
                  <p class="u-text u-text-grey-25 u-text-9">No Telp</p>
                  <p class="u-text u-text-8"><?=$result['saldo']?></p>
                  <p class="u-text u-text-grey-25 u-text-9">Saldo</p>
                  <a href="Edit-Profile.php" data-page-id="487604404" class="u-border-2 u-border-white u-btn u-button-style u-hover-white u-none u-text-hover-black u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Edit profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-2" id="sec-9ebb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-1">Bio</p>
        <p class="u-text u-text-2">Signature</p>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-text u-text-default u-text-3">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-text u-text-default u-text-4">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet tellus cras adipiscing enim. Ut porttitor leo a diam sollicitudin. Turpis in eu mi bibendum neque egestas congue quisque egestas.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>

