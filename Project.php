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
<link rel="stylesheet" href="Project.css" media="screen">
	
	<section class="u-black u-clearfix u-section-1" id="carousel_5be8">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                  <h1 class="u-custom-font u-heading-font u-text u-text-body-alt-color u-text-1" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">we<br>
                    <span class="u-text-palette-4-base">build</span>
                    <br>project
                  </h1>
                </div>
              </div>
              <div class="u-align-left-lg u-align-left-md u-align-left-xl u-align-right-sm u-align-right-xs u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                  <img class="u-image u-image-1" src="images/logoonly.png" data-image-width="674" data-image-height="680">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-palette-1-light-3 u-section-2" id="carousel_caac">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-heading-font u-text u-text-1" data-animation-name="slideIn" data-animation-duration="2000" data-animation-direction="Left"><b>RAGE WARS 2 adalah sebuah trading-card game dibuat berbasis programming Java, dimana gameplay berdasarkan role suit, setiap kartu memiliki attack dan defence power sebagai kunci kemenangan untuk menghabiskan LP lawan. Sebelumnya project ini sudah pernah dibuat semester lalu namun untuk versi ini memiliki beberapa perubahan signifikan, dimuali dari gameplay, sistem multi-account menggunakan database, dan implementasi sistem OOP (Object Oriented Programming) dalam pengkodingannya.&nbsp;<br>
            <br></b>
        </p>
        <blockquote class="u-border-20 u-border-white u-custom-font u-heading-font u-text u-text-default u-text-2" data-animation-name="flipIn" data-animation-duration="2000" data-animation-direction="X">OUR PROJECT</blockquote>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-b8ce">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-37 u-image-1" data-image-width="4894" data-image-height="3922">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-23 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-text u-text-1"><b>Sebuah Game simpel menggunakan sejumlah kartu suit (gunting batu kertas) dimana Pemain akan melawan CPU dan berusaha untuk saling mengurangi HP dan Kartu lawan.</b>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-4" id="sec-e22b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-1">Concept</h3>
        <p class="u-text u-text-2"><b>Game ini dibuat dengan konsep utama TCG (Trading Card Game), dimana pemain dapat memiliki berbagai jenis kartu berbeda yang dapat dimainkan melawan CPU player. Game ini memiliki sistem multi-account, sehingga setiap player berbeda dapat memiliki inventory kartu yang dapat diatur sendiri dan gacha shop untuk mendapatkan kartu baru. Sesuai dengan kriteria project Java OOP, game ini memiliki sistem pengkodingan yang berbeda dengan versi sebelumnya, dimana pengimplementasian Object-Oriented Programming di sebagian besar bagian seperti variabel data kartu, pengoperasian logic dalam gameplay, dan pengunaan Database dalam sistem multi-account.</b>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-15 u-section-5" id="sec-557c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-custom-font u-heading-font u-text u-text-default u-text-1">Key Fe​atures</h1>
        <p class="u-text u-text-default u-text-2"><b>Berbasis Java OOP, program ini terdiri dari beberapa class terpisah yang saling terhubung.<br>Program dasar dari game terhubung ke Database via class crudInterface and input user melalui class crudImplement.<br>Seluruh progress yang didapat oleh sebuah akun akan disimpan dalam Database per akun individual</b>
        </p>
        <img alt="" class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" data-image-width="1600" data-image-height="1282" src="images/NewLayout.png">
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-style u-image u-list-item u-repeater-item u-image-2" data-image-width="618" data-image-height="398">
              <div class="u-container-layout u-similar-container u-container-layout-1"></div>
            </div>
            <div class="u-align-center u-container-style u-image u-list-item u-repeater-item u-image-3" data-image-width="800" data-image-height="464">
              <div class="u-container-layout u-similar-container u-container-layout-2"></div>
            </div>
            <div class="u-align-center u-container-style u-image u-list-item u-repeater-item u-image-4" data-image-width="500" data-image-height="502">
              <div class="u-container-layout u-similar-container u-container-layout-3"></div>
            </div>
            <div class="u-align-center u-container-style u-image u-list-item u-repeater-item u-image-5" data-image-width="818" data-image-height="564">
              <div class="u-container-layout u-similar-container u-container-layout-4"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-black u-clearfix u-section-6" id="carousel_c4ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <blockquote class="u-border-20 u-border-white u-custom-font u-heading-font u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1" data-animation-name="slideIn" data-animation-duration="2000" data-animation-direction="Down">FEATURES</blockquote>
        <div id="carousel-3274" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-3274" class="u-active u-active-palette-2-base u-white" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-3274" class="u-active-palette-2-base u-white" data-u-slide-to="1"></li>
            <li data-u-target="#carousel-3274" class="u-active-palette-2-base u-white" data-u-slide-to="2"></li>
            <li data-u-target="#carousel-3274" class="u-active-palette-2-base u-white" data-u-slide-to="3"></li>
            <li data-u-target="#carousel-3274" class="u-active-palette-2-base u-white" data-u-slide-to="4"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-align-center u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h3 class="u-text u-text-default u-text-2">LOGIN &amp; REGISTER</h3>
                <p class="u-text u-text-3"><b>Pada menu ini database berperan sebagai penyimpan data para pemain, dengan mendaftar melalui email.&nbsp;</b><b>Para pemain dapat memainkan akunnya sendiri. Dengan Menggunakan database,&nbsp;</b>
                </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-2">
                <h5 class="u-text u-text-default u-text-4">Gameplay</h5>
                <p class="u-text u-text-5"><b>Player akan melawan CPU. Pertama, saat game dimulai, masing masing Player dan CPU akan mendapatkan 4 buah Kartu (index 0 s/d 3), sejumlah kartu deck, dan Health Point (HP)<br>Player akan memilih kartu dan akan melawan kartu CPU. Kartu yang kalah (sesuai tanda gunting batu kertas di kartu) akan masuk ke kuburan (graveyard) dan mengurangi HP pemain. Setiap ganti giliran, kartu baru akan diambil dari Deck dan dimasukkan ke kartu di tangan.<br></b>
                </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-3">
                <h5 class="u-text u-text-default u-text-6">Gacha &amp; Market</h5>
                <p class="u-text u-text-7"><b><b>Sebuah Shop feature untuk mendapatkan kartu baru untuk digunakan dalam permainan. Menggunakan sistem Gacha atau RNG (Random Number Generator) dan mendapatkan kartu secara acak.</b>
                    <br></b>
                </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-4">
                <h5 class="u-text u-text-default u-text-8">Deck Customizer</h5>
                <p class="u-text u-text-9"><b>Mengatur susunan kartu dalam deck player dengan fitur Customizer dan menunjukkan kartu yang sudah dimiliki</b><b>
                    <br></b>
                </p>
              </div>
            </div>
            <div class="u-align-center u-carousel-item u-container-style u-expanded-width u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-5">
                <h5 class="u-text u-text-default u-text-10">Leaderboard History</h5>
                <p class="u-text u-text-11"><b>Dengan implementasi Database, pemain dapat membuat personal account sendiri dalam game ini, menyimpan data seperti deck kartu, riwayat permainan, dan in-game currency, sehingga tidak tercampur dengan data pemain lain.&nbsp;</b><b>
                    <br></b>
                </p>
              </div>
            </div>
          </div>
          <a class="u-carousel-control u-carousel-control-prev u-hidden-md u-hidden-sm u-hidden-xs u-icon-circle u-spacing-17 u-text-palette-1-base u-white u-carousel-control-1" href="#carousel-3274" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="u-carousel-control u-carousel-control-next u-hidden-md u-hidden-sm u-hidden-xs u-icon-circle u-spacing-17 u-text-palette-1-base u-white u-carousel-control-2" href="#carousel-3274" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-image u-shading u-typography-custom-page-typography-8--Introduction u-white u-section-7" src="" id="sec-255f" data-image-width="1023" data-image-height="616">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <h2 class="u-text u-text-default u-text-white u-text-1">Try out our creation!</h2>
        <div class="u-border-4 u-border-palette-3-base u-line u-line-horizontal u-line-1"></div>
        <div class="fr-view u-clearfix u-rich-text u-text u-text-white u-text-2">
          <p>
            <span style="font-size: 1.5rem;">System Requirements<br>Operating System : Windows<br>Processor : Intel / AMD anything<br>RAM : anything above 1GB RAM<br>Graphics : Potato<br>Audio : None
            </span>
          </p>
        </div>
        <h3 class="u-text u-text-body-alt-color u-text-default u-text-3">Download via GitHub</h3>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-white u-text-4"> Rage2WarsGame-master.zip&nbsp;<br>17.9 MB
        </p>
        <a href="https://github.com/haikaru2001/Rage2WarsGame" class="u-border-2 u-border-white u-btn u-button-style u-custom u-hover-white u-none u-text-body-alt-color u-text-hover-black u-btn-1">DOWNLOAD HERE</a>
      </div>
    </section>

<?php include 'footer.php'; ?>