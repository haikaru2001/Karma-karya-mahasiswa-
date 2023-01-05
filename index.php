<?php
//inisialisasi session
session_start();
 
//mengecek username pada session
if( !isset($_SESSION['username']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: Login.php');
}
 
?>

<?php include 'header.php'; ?>
<link rel="stylesheet" type="text/css" href="Home.css">
<section class="u-clearfix u-image u-section-1" id="sec-dbe9" data-image-width="1600" data-image-height="1183">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-black u-clearfix u-section-2" id="sec-4313">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1 hidden">
                  <img class="u-image u-image-1" src="images/logoweb1.png" data-image-width="207" data-image-height="50">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h3 class="u-text u-text-default u-text-1">Our Activities</h2>
                  <p class="u-text u-text-2">Basically what we're doing is messing with Games!&nbsp;<br>From playing them and learn how to make one by ourselves, We try to do anything we can to enjoy gaming experience to the fullest
                  </p>
                  <a href="" class="u-btn u-button-style u-btn-1">Button</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-3" src="" data-image-width="600" data-image-height="295" id="sec-595d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">Lock 'n Loaded!</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Join us on our community and discuss about your favorite games!</p>
        <a href="Gameplay.php" data-page-id="72008258" class="u-border-none u-btn u-button-style u-palette-1-light-1 u-btn-1">Gameplay</a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-4" src="" data-image-width="864" data-image-height="486" id="carousel_12a8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">Watch 'n Learn</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Learn the basics of game development and some tips 'n tricks</p>
        <a href="Learn.php" data-page-id="220819088" class="u-btn u-button-style u-palette-2-base u-btn-1">Learn</a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-5" src="" data-image-width="690" data-image-height="388" id="carousel_ac04">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">Our Project</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Check out our own project on game development</p>
        <a href="Project.php" data-page-id="18627640" class="u-btn u-button-style u-palette-2-base u-btn-1">Project</a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-6" id="sec-83a8">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-icon u-icon-circle u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 128 128" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8998"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 128 128" id="svg-8998"><path d="m118.6 47.8h-61.2c-5.2 0-9.4 4.2-9.4 9.3v35.7c0 5.1 4.2 9.3 9.4 9.3h37.5l16.8 16.8c2.5 2.5 6.8 0.7 6.8-2.8v-10-3.9h0.1c5.2 0 9.4-4.2 9.4-9.3v-35.8c0-5.1-4.2-9.3-9.4-9.3zm1.2 45c0 0.7-0.5 1.2-1.2 1.2h-5.2c-1.6 0-2.9 1.2-3.1 2.8v9.2l-11.2-11.2c-0.5-0.5-1.3-0.8-2-0.8h-39.7c-0.7 0-1.2-0.5-1.2-1.2v-35.7c0-0.7 0.5-1.2 1.2-1.2h61.3c0.7 0 1.2 0.5 1.2 1.2v35.7z"></path><path d="m38.1 67.7c-1 0-2 0.4-2.7 1-0.1 0-0.1 0.1-0.2 0.2l-14.7 15.1v-12.5c-0.2-2.1-1.9-3.8-4-3.8h-6.9c-0.9 0-1.6-0.7-1.6-1.6v-48.3c0-0.9 0.7-1.6 1.6-1.6h80.8c0.9 0 1.6 0.7 1.6 1.6v30.1h8v-30.1c0-5.4-4.3-9.8-9.6-9.8h-80.8c-5.3 0-9.6 4.4-9.6 9.8v48.3c0 5.4 4.3 9.8 9.6 9.8h2.9v8.1 10c0 3.6 4.4 5.3 6.9 2.8l6.8-7 13.6-13.9h8.2v-8.2h-9.9z"></path></svg></span>
                <h3 class="u-text u-text-1">Community &amp; Forum</h3>
                <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-icon-circle u-icon-2"><img src="images/2103611.png" alt=""></span>
                <h3 class="u-text u-text-3">Learn</h3>
                <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-icon-circle u-icon-3"><img src="images/1336494.png" alt=""></span>
                <h3 class="u-text u-text-5">Development</h3>
                <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'footer.php'; ?>