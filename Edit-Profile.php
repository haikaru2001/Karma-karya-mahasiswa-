<?php
//menyertakan file program koneksi.php pada register
require('config.php');

//inisialisasi session
session_start();
?>

<?php
include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="Edit-Profile.css">
<section class="u-clearfix u-grey-80 u-section-1" id="sec-8d29"  style="padding-top: 150px; padding-bottom: 100px;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-title u-text-1 h1">Account Profile</p>
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-23 u-image-1" data-image-width="256" data-image-height="256">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-text u-text-default u-text-2">Change Profile Data</p>
                  <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                      <div class="u-form-group u-form-name">
                        <label for="name-d86c" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Email" id="name-d86c" name="email" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-email u-form-group">
                        <label for="email-d86c" class="u-form-control-hidden u-label"></label>
                        <input type="email" placeholder="Nickname" id="email-d86c" name="nick" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-group u-form-group-3">
                        <label for="text-6d6d" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Full Name" id="text-6d6d" name="fullname" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle">
                      </div>
                      <div class="u-form-group u-form-group-4">
                        <label for="text-4307" class="u-form-control-hidden u-label"></label>
                        <input type="text" placeholder="Password" id="text-4307" name="pass" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle">
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-hover-black u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message"></div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-black u-clearfix u-section-2" id="sec-6922">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-1">Bio</p>
        <p class="u-text u-text-2">Signature</p>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                  <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;">
                      <div class="u-form-group u-form-message">
                        <label for="message-9705" class="u-form-control-hidden u-label"></label>
                        <textarea placeholder="Enter Signature" rows="4" cols="50" id="message-9705" name="signature" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-hover-black u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message"></div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <div class="u-form u-form-2">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form-1" style="padding: 10px;">
                      <div class="u-form-group u-form-message">
                        <label for="message-9705" class="u-form-control-hidden u-label"></label>
                        <textarea placeholder="Enter Bio" rows="4" cols="50" id="message-9705" name="bio" class="u-border-1 u-border-grey-30 u-grey-50 u-input u-input-rectangle" required=""></textarea>
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-border-2 u-border-white u-btn u-btn-submit u-button-style u-hover-white u-none u-text-hover-black u-btn-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Submit</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"></div>
                      <div class="u-form-send-error u-form-send-message"></div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="Profile.html" data-page-id="91203749" class="u-border-2 u-border-white u-btn u-button-style u-hover-white u-none u-text-hover-black u-btn-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">FINISH &amp; SAVE</a>
      </div>
    </section>