<?php
include_once("connection.php");

$result = mysqli_query($con, "SELECT email, activationcode FROM users");

while($row = mysqli_fetch_array($result)) {
    
    // $subject = "It is a testing email";
    // $message = ' 
    // <!DOCTYPE html>
    // <html>

    // <head>
    //     <link rel="stylesheet" type="text/css" hs-webfonts="true"
    //         href="https://fonts.googleapis.com/css?family=Lato|Lato:i,b,bi">
    //     <title>MailComics</title>
    //     <meta property="og:title" content="Email template">
    //     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    //     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    //     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    //     <style type="text/css">
    //         a {
    //             text-decoration: underline;
    //             color: inherit;
    //             font-weight: bold;
    //             color: #253342;
    //         }

    //         h1 {
    //             font-size: 56px;
    //         }

    //         h2 {
    //             font-size: 28px;
    //             font-weight: 900;
    //         }

    //         p {
    //             font-weight: 100;
    //         }

    //         td {
    //             vertical-align: top;
    //         }

    //         #email {
    //             margin: auto;
    //             width: 600px;
    //             background-color: white;
    //         }

    //         button {
    //             font: inherit;
    //             background-color: #FF7A59;
    //             border: none;
    //             padding: 10px;
    //             text-transform: uppercase;
    //             letter-spacing: 2px;
    //             font-weight: 900;
    //             color: white;
    //             border-radius: 5px;
    //             box-shadow: 3px 3px #d94c53;
    //         }

    //         .subtle-link {
    //             font-size: 9px;
    //             text-transform: uppercase;
    //             letter-spacing: 1px;
    //             color: #CBD6E2;
    //         }
    //     </style>

    // </head>

    // <body bgcolor="#F5F8FA"
    //     style="width: 100%; margin: auto 0; padding:0; font-family:Lato, sans-serif; font-size:18px; color:#33475B; word-break:break-word">

    //     <div id="email">
    //         <!-- <table align="right" role="presentation">
    //                 <tr>
    //                     <td>
    //                         <a class="subtle-link" href="#">View in Browser</a>
    //                     </td>
    //                 <tr>
    //             </table> -->

    //         <table role="presentation" width="100%">
    //             <tr>

    //                 <td bgcolor="#00A4BD" align="center" style="color: white;">

    //                     <img alt="Flower"
    //                         src="https://hs-8886753.f.hubspotemail.net/hs/hsstatic/TemplateAssets/static-1.60/img/hs_default_template_images/email_dnd_template_images/ThankYou-Flower.png"
    //                         width="400px" align="middle">

    //                     <h1> Welcome! </h1>

    //                 </td>
    //         </table>

    //         <!-- <table role="presentation" border="0" cellpadding="0" cellspacing="10px" style="padding: 30px 30px 30px 60px;">
    //             <tr>
    //                 <td>
    //                     <h2> Lorem ipsum dolor sit amet</h2>
    //                     <p>
    //                         Ut eget semper libero. Vestibulum non maximus nisl, ut iaculis ante. Nunc arcu elit,
    //                         cursus eget urna et, tempus aliquam eros. Ut eget semper libero. Vestibulum non
    //                         maximus nisl, ut iaculis ante. Nunc arcu elit, cursus eget urna et, tempus aliquam
    //                         eros.
    //                     </p>
    //                     <button>
    //                         Button 1
    //                     </button>
    //                 </td>
    //             </tr>
    //         </table> -->


    //         <!-- <table role="presentation" border="0" cellpadding="0" cellspacing="10px" width="100%"
    //             style="padding: 30px 30px 30px 60px;">
    //             <tr>
    //                 <td>
    //                     <img alt="Blog"
    //                         src="https://www.hubspot.com/hubfs/assets/hubspot.com/style-guide/brand-guidelines/guidelines_sample-illustration-3.svg"
    //                         width="200px" align="middle">

    //                     <h2> Vivamus ac elit eget </h2>
    //                     <p>
    //                         Vivamus ac elit eget dolor placerat tristique et vulputate nibh. Sed in
    //                         elementum nisl, quis mollis enim. Etiam gravida dui vel est euismod, at aliquam
    //                         ipsum euismod.

    //                     </p>

    //                 </td>

    //                 <td>

    //                     <img alt="Shopping"
    //                         src="https://www.hubspot.com/hubfs/assets/hubspot.com/style-guide/brand-guidelines/guidelines_sample-illustration-5.svg"
    //                         width="200px" align="middle">
    //                     <h2> Suspendisse tincidunt iaculis </h2>
    //                     <p>
    //                         Suspendisse tincidunt iaculis fringilla. Orci varius natoque penatibus et magnis
    //                         dis parturient montes, nascetur ridiculus mus. Cras laoreet elit purus, quis
    //                         pulvinar ipsum pulvinar et.

    //                     </p>
    //                 </td>
    //             </tr>

    //             <tr>
    //                 <td> <button> Button 2 </button> </td>
    //                 <td> <button> Button 3 </button> </td>
    //             </tr>
    //         </table> -->

    //         <table role="presentation" bgcolor="#EAF0F6" width="100%" style="margin-top: 50px;">
    //             <tr>
    //                 <td align="center" style="padding: 30px 30px;">

    //                     <h2> Mail Comic</h2>
    //                     <p>This mail is sent because you have subscribed to the MailComic.</p>
    //                     <p>If if want to unsubscribe to this service, click <a href="">here.</a></p>
    //                     <!-- <a href="#"> Ask us a question</a> -->
    //                 </td>
    //             </tr>
    //         </table>

    //         <!-- <table role="presentation" bgcolor="#F5F8FA" width="100%">
    //             <tr>
    //                 <td align="left" style="padding: 30px 30px;">
    //                     <p style="color:#99ACC2"> Made with &hearts; at HubSpot HQ </p>
    //                     <a class="subtle-link" href="#"> Unsubscribe </a>
    //                 </td>
    //             </tr>
    //         </table> -->
    //     </div>
    // </body>
    // </html>'; 
    // $headers = "MIME-Version: 1.0" . "\r\n"; 
    // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    // $headers .= 'From: MailComics'. "\r\n"; 
    // if(mail($row['email'],$subject,$message,$headers)) {
    //     echo "Email has sent successfully.\r\n";
    // } else{
    //     echo "Email has not sent. <br />";
    // }

    sendMail($row['email'], $row['activationcode'],);
    
}

function sendMail($email, $activationcode) {
    $to=$email;
    $msg= "Thanks for new Registration.";   
    $subject="Email verification";
    $headers .= "MIME-Version: 1.0"."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
    $headers .= 'From:MailComics'."\r\n";
    $ms = '<!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
        xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="x-apple-disable-message-reformatting">
        <title></title>
    
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    
        <style>
            html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
                background: #f1f1f1;
            }
    
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
    
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }
    
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }
    
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
    
            img {
                -ms-interpolation-mode: bicubic;
            }
    
            a {
                text-decoration: none;
            }
    
            *[x-apple-data-detectors],
            /* iOS */
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
    
            .a6S {
                display: none !important;
                opacity: 0.01 !important;
            }
    
            .im {
                color: inherit !important;
            }
    
            img.g-img+div {
                display: none !important;
            }
    
            /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
            @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
                u~div .email-container {
                    min-width: 320px !important;
                }
            }
    
            /* iPhone 6, 6S, 7, 8, and X */
            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
                u~div .email-container {
                    min-width: 375px !important;
                }
            }
    
            /* iPhone 6+, 7+, and 8+ */
            @media only screen and (min-device-width: 414px) {
                u~div .email-container {
                    min-width: 414px !important;
                }
            }
        </style>
        <style>
            .primary {
                background: #30e3ca;
            }
    
            .bg_white {
                background: #ffffff;
            }
    
            .bg_light {
                background: #fafafa;
            }
    
            .bg_black {
                background: #000000;
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
                display: inline-block;
            }
    
            .btn.btn-primary {
                border-radius: 5px;
                background: #30e3ca;
                color: #ffffff;
            }
    
            .btn.btn-white {
                border-radius: 5px;
                background: #ffffff;
                color: #000000;
            }
    
            .btn.btn-white-outline {
                border-radius: 5px;
                background: transparent;
                border: 1px solid #fff;
                color: #fff;
            }
    
            .btn.btn-black-outline {
                border-radius: 0px;
                background: transparent;
                border: 2px solid #000;
                color: #000;
                font-weight: 700;
            }
    
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: Lato, sans-serif;
                color: #000000;
                margin-top: 0;
                font-weight: 400;
            }
    
            body {
                font-family: Lato, sans-serif;
                font-weight: 400;
                font-size: 15px;
                line-height: 1.8;
                color: rgba(0, 0, 0, .4);
            }
    
            a {
                color: #30e3ca;
            }
    
            table {}
    
            /*LOGO*/
    
            .logo h1 {
                margin: 0;
            }
    
            .logo h1 a {
                color: #30e3ca;
                font-size: 24px;
                font-weight: 700;
                font-family: Lato, sans-serif;
            }
    
            .hero {
                position: relative;
                z-index: 0;
            }
    
            .hero .text {
                color: rgba(0, 0, 0, .3);
            }
    
            .hero .text h2 {
                color: #000;
                font-size: 40px;
                margin-bottom: 0;
                font-weight: 400;
                line-height: 1.4;
            }
    
            .hero .text h3 {
                font-size: 24px;
                font-weight: 300;
            }
    
            .hero .text h2 span {
                font-weight: 600;
                color: #30e3ca;
            }
    
            .heading-section {}
    
            .heading-section h2 {
                color: #000000;
                font-size: 28px;
                margin-top: 0;
                line-height: 1.4;
                font-weight: 400;
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
                width: 100%;
                height: 2px;
                background: #30e3ca;
                margin: 0 auto;
            }
    
            .heading-section-white {
                color: rgba(255, 255, 255, .8);
            }
    
            .heading-section-white h2 {
                font-family: Lato;
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
    
    
            ul.social {
                padding: 0;
            }
    
            ul.social li {
                display: inline-block;
                margin-right: 10px;
            }
    
            .footer {
                border-top: 1px solid rgba(0, 0, 0, .05);
                color: rgba(0, 0, 0, .5);
            }
    
            .footer .heading {
                color: #000;
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
                color: rgba(0, 0, 0, 1);
            }
    
    
            @media screen and (max-width: 500px) {}
        </style>
    
    
    </head>
    
    <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
        <center style="width: 100%; background-color: #f1f1f1;">
            <div
                style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
                &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
            </div>
            <div style="max-width: 600px; margin: 0 auto;" class="email-container">
                <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                    style="margin: auto;">
                    <tr>
                        <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td class="logo" style="text-align: center;">
                                        <h1><a href="#">MailComics</a></h1>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="hero bg_white" style="padding: 3em 0 2em 0;">
                            <img src="https://raw.githubusercontent.com/sumeetmathpati/mailing-list-manager/main/assets/images/comic.png"
                                alt="" style="width: 300px; max-width: 600px; height: auto; margin: auto; display: block;">
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
                            <table>
                                <tr>
                                    <td>
                                        <div class="text" style="padding: 0 2.5em; text-align: center;">
                                            <h2>Please verify your email</h2>
                                            <h3>Recieve amazing comics in your inbox, every five minutes!</h3>
                                            <p><a href="192.168.0.104/emailverify/email_verification.php?code='.$activationcode.'"
                                                    class="btn btn-primary">Yes! Subscribe Me</a></p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin: auto;">
                    <tr>
                        <td class="bg_light" style="text-align: center;">
                            <p>No longer want to receive these email? You can <a href="192.168.0.104/emailverify/remove_email.php?code='.$activationcode.'&unsub=1"
                                    style="color: rgba(0,0,0,.8);">Unsubscribe here</a></p>
                        </td>
                    </tr>
                </table>
    
            </div>
        </center>
    </body>
    
    </html>';
    
    mail($to,$subject,$ms,$headers);
}

?>