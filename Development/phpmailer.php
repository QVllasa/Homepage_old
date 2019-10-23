<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
$mail->CharSet = 'UTF-8';
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'qendrim.vllasa@gmail.com';                 // SMTP username
$mail->Password = 'ztwlztfvrybdzyfx';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('hello@qendrimvllasa.de', 'Lass uns loslegen!');
$mail->addAddress('qendrimvllasa@hotmail.de', 'Qendrim Vllasa');     // Add a recipient
$mail->addReplyTo('qendrim.vllasa@gmail.com', 'Qendrim Vllasa');


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = "<!DOCTYPE html>
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\"
      xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
  <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
  <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
  <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
  <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->


  <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i\" rel=\"stylesheet\">



  <!-- CSS Reset : BEGIN -->
  <style>

    @import url('https://fonts.googleapis.com/css?family=Comfortaa:400,700&display=swap');

    html,
    body {
      margin: 0 auto !important;
      padding: 0 !important;
      height: 100% !important;
      width: 100% !important;
      background: #f1f1f1;
    }

    /* What it does: Stops email clients resizing small text. */
    * {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    /* What it does: Centers email on Android 4.4 */
    div[style*=\"margin: 16px 0\"] {
      margin: 0 !important;
    }

    /* What it does: Stops Outlook from adding extra spacing to tables. */
    table,
    td {
      mso-table-lspace: 0pt !important;
      mso-table-rspace: 0pt !important;
    }

    /* What it does: Fixes webkit padding issue. */
    table {
      border-spacing: 0 !important;
      border-collapse: collapse !important;
      table-layout: fixed !important;
      margin: 0 auto !important;
    }

    /* What it does: Uses a better rendering method when resizing images in IE. */
    img {
      -ms-interpolation-mode: bicubic;
    }

    /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
    a {
      text-decoration: none;
    }

    /* What it does: A work-around for email clients meddling in triggered links. */
    *[x-apple-data-detectors], /* iOS */
    .unstyle-auto-detected-links *,
    .aBn {
      border-bottom: 0 !important;
      cursor: default !important;
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
    .a6S {
      display: none !important;
      opacity: 0.01 !important;
    }

    /* What it does: Prevents Gmail from changing the text color in conversation threads. */
    .im {
      color: inherit !important;
    }

    /* If the above doesn't work, add a .g-img class to any image in question. */
    img.g-img + div {
      display: none !important;
    }

    /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
    /* Create one of these media queries for each additional viewport size you'd like to fix */

    /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
    @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
      u ~ div .email-container {
        min-width: 320px !important;
      }
    }

    /* iPhone 6, 6S, 7, 8, and X */
    @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
      u ~ div .email-container {
        min-width: 375px !important;
      }
    }

    /* iPhone 6+, 7+, and 8+ */
    @media only screen and (min-device-width: 414px) {
      u ~ div .email-container {
        min-width: 414px !important;
      }
    }

  </style>

  <!-- CSS Reset : END -->

  <!-- Progressive Enhancements : BEGIN -->
  <style>

    /* cyrillic-ext */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4QIFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4SYFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4ToFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4QoFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4Q4FqL_KWxWMT.woff) format('woff');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4TYFqL_KWxQ.woff) format('woff');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }
    /* cyrillic-ext */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4QIFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
    /* cyrillic */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4SYFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
    }
    /* greek */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4ToFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0370-03FF;
    }
    /* vietnamese */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4QoFqL_KWxWMT.woff) format('woff');
      unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
    }
    /* latin-ext */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4Q4FqL_KWxWMT.woff) format('woff');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
      font-family: 'Comfortaa';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://fonts.gstatic.com/s/comfortaa/v27/1Ptsg8LJRfWJmhDAuUs4TYFqL_KWxQ.woff) format('woff');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }



    .primary {
      background: #f3a333;
    }


    .bg_custom {
      background: #ffffff;
    }

    .bg_light {
      background: #fafafa;
    }

    .bg_black {
      background: #474D5D;
    }

    .bg_dark {
      background: rgba(0, 0, 0, .8);
    }

    .email-section {
      padding: 2.5em;
    }

    /*BUTTON*/
    .btn {
      padding: 10px 15px;
    }

    .btn.btn-primary {
      border-radius: 30px;
      background: #f3a333;
      color: #ffffff;
    }


    h1, h2, h3, h4, h5, h6 {
      font-family: 'Comfortaa', sans-serif;
      color: #000000;
      margin-top: 0;
    }

    body {
      font-family: 'Comfortaa', sans-serif;
      font-weight: 400;
      font-size: 15px;
      line-height: 1.8;
      color: rgba(0, 0, 0, .4);
    }

    a {
      color: #f3a333;
    }

    table {
    }

    /*LOGO*/

    .logo h1 {
      margin: 0;
    }

    .logo h1 a {
      color: #273343;
      -webkit-text-decoration: #273343;
      text-decoration: #273343;

      font-size: 50px;
      font-weight: 700;

      font-family: 'Comfortaa', sans-serif;
    }

    .upper-text {
      margin-bottom: 200px;
      padding: 0 3em;
      text-align: center;
    }

    /*HERO*/
    .hero {
      position: relative;
    }

    .hero img {

    }

    .hero .text {
      color: #273343;
    }

    .hero .text h2 {
      color: #273343;
      font-size: 30px;
      position: relative;
      line-height: normal;

    }


    /*HEADING SECTION*/
    .heading-section {
    }

    .heading-section h2 {
      color: #000000;
      font-size: 28px;
      margin-top: 0;
      line-height: 1.4;
    }

    .heading-section .subheading {
      margin-bottom: 20px !important;
      display: inline-block;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgba(0, 0, 0, .4);
      position: relative;
    }

    .heading-section .subheading::after {
      position: absolute;
      left: 0;
      right: 0;
      bottom: -10px;
      content: '';
      width: 100%;
      height: 2px;
      background: #f3a333;
      margin: 0 auto;
    }

    .heading-section-white {
      color: rgba(255, 255, 255, .8);
    }

    .heading-section-white h2 {
      font-size: 28px;
      line-height: 1;
      padding-bottom: 0;
    }

    .heading-section-white h2 {
      color: #ffffff;
    }

    .heading-section-white .subheading {
      margin-bottom: 0;
      display: inline-block;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: rgba(255, 255, 255, .4);
    }


    .icon {
      text-align: center;
    }

    .icon img {
    }


    /*SERVICES*/
    .text-services {
      padding: 10px 10px 0;
      text-align: center;
    }

    .text-services h3 {
      font-size: 20px;
    }

    /*BLOG*/
    .text-services .meta {
      text-transform: uppercase;
      font-size: 14px;
    }

    /*TESTIMONY*/
    .text-testimony .name {
      margin: 0;
    }

    .text-testimony .position {
      color: rgba(0, 0, 0, .3);

    }


    /*VIDEO*/
    .img {
      width: 100%;
      height: auto;
      position: relative;
    }

    .img .icon {
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      bottom: 0;
      margin-top: -25px;
    }

    .img .icon a {
      display: block;
      width: 60px;
      position: absolute;
      top: 0;
      left: 50%;
      margin-left: -25px;
    }

    .email-background {

      background-image: url(https://qendrimvllasa.de/img/email/lights_transparent.png);
/*      background-image: -webkit-gradient(linear, left top, left bottom, from(#a2b6c040), to(#474d5d)), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);
      background-image: -o-linear-gradient(#a2b6c040, #474d5d), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);
      background-image: linear-gradient(#a2b6c040, #474d5d), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);
      background-image: -webkit-gradient(linear, left top, left bottom, color-stop(2%, rgb(175, 189, 227)), color-stop(25%, rgb(172, 188, 197)), color-stop(59%, rgba(241, 111, 92, 0)), to(rgba(241, 111, 92, 0))), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);
      background-image: -o-linear-gradient(top, rgb(175, 189, 227) 2%, rgb(172, 188, 197) 25%, rgba(241, 111, 92, 0) 59%, rgba(241, 111, 92, 0) 100%), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);
      background-image: linear-gradient(to bottom, rgb(175, 189, 227) 2%, rgb(172, 188, 197) 25%, rgba(241, 111, 92, 0) 59%, rgba(241, 111, 92, 0) 100%), url(https://qendrimvllasa.de/img/email/lights_transparent.jpg);*/
      background-size: cover;
      height: 400px;
      background-position: center;
      background-color: #fcfcfc;
    }

    /*COUNTER*/
    .counter-text {
      text-align: center;
    }

    .counter-text .num {
      display: block;
      color: #ffffff;
      font-size: 34px;
      font-weight: 700;
    }

    .lower-text {
      padding: 0 3em;
      text-align: center;
      position: absolute;
      bottom: -20px;
      right: 0;
      left: 0;
    }

    .counter-text .name {
      display: block;
      color: rgba(255, 255, 255, .9);
      font-size: 13px;
    }

    .frame {
      height: 200px;
      width: 200px;
      background-color: #273343;
      display: inline-block;
      border-radius: 50%;
      background-repeat: no-repeat;
      -o-object-fit: contain;
      object-fit: contain;
      background-image: url(https://qendrimvllasa.de/img/email/DSC_1726.jpeg);
      background-size: 170px;
      background-position: top;
    }


    .bg-header {
      padding: 1em 2.5em;
      text-align: center;
      background-color:rgb(221, 221, 221);

    }


    /*FOOTER*/

    .footer {
      color: rgba(255, 255, 255, .5);

    }

    .footer .heading {
      color: #ffffff;
      font-size: 20px;
    }

    .footer ul {
      margin: 0;
      padding: 0;
    }

    .footer ul li {
      list-style: none;
      margin-bottom: 10px;
    }

    .footer ul li a {
      color: rgba(255, 255, 255, 1);
    }


    @media screen and (max-width: 500px) {

      .icon {
        text-align: left;
      }

      .text-services {
        padding-left: 0;
        padding-right: 20px;
        text-align: left;
      }

    }

  </style>


</head>

<body width=\"100%\" style=\"margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;\">
<center style=\"width: 100%; background-color: #f1f1f1;\">
  <div
    style=\"display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;\">
    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
  </div>
  <div style=\"max-width: 600px; margin: 0 auto;\" class=\"email-container\">
    <!-- BEGIN BODY -->
    <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\"
           style=\"margin: auto;\">
      <tr>
        <td class=\"bg-header logo\">
          <h1><a href=\"#\">hi!</a></h1>
          <div class=\"frame\">

          </div>
        </td>
      </tr><!-- end tr -->
      <tr>
        <td valign=\"middle\" class=\"hero email-background\"
        >
          <table>
            <tr>
              <td>
                <div class=\"text upper-text\">
                  <h2>Klasse! Du hast den ersten Schritt getan.</h2>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class=\"text lower-text\">
                  <p style=\"    position: relative;
     font-size: 16px;\">Ich melde mich innerhalb von 24h bei dir.
                    <br>
                    <span style=\"font-size: 24px;\">-&nbsp;Qendrim</span></p>

                </div>
              </td>
            </tr>
          </table>
        </td>
      </tr><!-- end tr -->


      <!-- 1 Column Text + Button : END -->
    </table>
    <table align=\"center\" role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\"
           style=\"margin: auto;\">
      <tr>
        <td valign=\"middle\" class=\"bg_black footer email-section\">
          <table>
            <tr>

              <td valign=\"top\" width=\"50%\" style=\"padding-top: 20px;\">
                <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                  <tr>
                    <td style=\"text-align: left; padding-left: 5px; padding-right: 5px;\">
                      <h3 class=\"heading\">Kontakt</h3>
                      <ul>
                        <li><span class=\"text\">Saarlandstraße 125, Karlsruhe, Baden-Württemberg, Deutschland</span></li>
                        <li><a href=\"mailto:qendrim.vllasa@gmail.com\"><span class=\"text\">qendrim.vllasa@gmail.com</span></a></a>
                        </li>
                        <li><span class=\"text\">+49 (0) 151 56 42 48 31</span></a></li>
                      </ul>
                    </td>
                  </tr>
                </table>
              </td>
              <td valign=\"top\" width=\"50%\" style=\"padding-top: 20px;\">
                <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                  <tr>
                    <td style=\"text-align: left; padding-left: 10px;\">
                      <h3 class=\"heading\">Links</h3>
                      <ul>
                        <li><a href=\"https://qendrimvllasa.de\" target=\"_blank\">Homepage</a></li>
                        <li><a href=\"https://qendrimvllasa.de/index.php#my-skills-section\" target=\"_blank\">Skills</a>
                        </li>
                        <li><a href=\"https://qendrimvllasa.de/index.php#my-portfolio-section\"
                               target=\"_blank\">Projekte</a></li>
                      </ul>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr><!-- end: tr -->
      <tr>
        <td valign=\"middle\" class=\"bg_black footer email-section\">
          <table>
            <tr>
              <td valign=\"top\" width=\"100%\">
                <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                  <tr>
                    <td style=\"text-align: left; padding-right: 10px;\">
                      <p>&copy; 2019 Qendrim Vllasa. All Rights Reserved</p>
                    </td>
                  </tr>
                </table>
              </td>

            </tr>
          </table>
        </td>
      </tr>
    </table>

  </div>
</center>
</body>
</html>


";


if(!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent';
}
