<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // set to SMTP::DEBUG_OFF in production
    $mail->isSMTP();
    $mail->Host       = '0xgthuva.com';     // Outgoing Server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'hello@0xgthuva.com';
    $mail->Password   = 'kKHz~tiOzG)h'; // <-- put the mailbox password here
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // implicit TLS
    $mail->Port       = 465;

    // If your server uses a self-signed cert or has TLS quirks, uncomment this block:
    /*
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];
    */

    // Recipients
    $mail->setFrom('hello@0xgthuva.com', 'Thuva');
    $mail->addAddress('gthuvadev@gmail.com', 'Theeksh'); // <-- change recipient

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You';   //Add a recipient (your bae's email address)
    $htmlBody = <<<'HTML'
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <style type="text/css">
          ReadMsgBody{ width: 100%;}
          .ExternalClass {width: 100%;}
          .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
          body {-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;margin:0 !important;}
          p { margin: 1em 0;}
          table td { border-collapse: collapse;}
          img {outline:0;}
          a img {border:none;}
          @-ms-viewport{ width: device-width;}
        </style>
        <style type="text/css">
          @media only screen and (max-width: 480px) {
            .container {width: 100% !important;}
            .footer { width:auto !important; margin-left:0; }
            .mobile-hidden { display:none !important; }
            .logo { display:block !important; padding:0 !important; }
            img { max-width:100% !important; height:auto !important; max-height:auto !important;}
            .header img{max-width:100% !important;height:auto !important; max-height:auto !important;}
            .photo img { width:100% !important; max-width:100% !important; height:auto !important;}
            .drop { display:block !important; width: 100% !important; float:left; clear:both;}
            .footerlogo { display:block !important; width: 100% !important; padding-top:15px; float:left; clear:both;}
            .nav4, .nav5, .nav6 { display: none !important; }
            .tableBlock {width:100% !important;}
            .responsive-td {width:100% !important; display:block !important; padding:0 !important; }
            .fluid, .fluid-centered {
              width: 100% !important;
              max-width: 100% !important;
              height: auto !important;
              margin-left: auto !important;
              margin-right: auto !important;
            }
            .fluid-centered {
              margin-left: auto !important;
              margin-right: auto !important;
            }
            /* MOBILE GLOBAL STYLES - DO NOT CHANGE */
    body, .tb_properties{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif !important; font-size: 14px !important; color: transparent !important; line-height: 1.15 !important; padding: 0px !important; }.buttonstyles{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif !important; font-size: 14px !important; color: #411F20 !important; padding: 10px !important; }h1{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif !important; font-size: 14px !important; color: transparent !important; line-height: 1.15 !important; }h2{font-family: Arial !important; font-size: 20px !important; color: transparent !important; line-height: 1.15 !important; }h3{font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif !important; font-size: 18px !important; color:
     transparent !important; line-height: 1.15 !important; }a:not(.buttonstyles){line-height: 1.15 !important; }.mobile-hidden{display: none !important; }.responsive-td {width: 100% !important; display: block !important; padding: 0 !important;}
    /* END OF MOBILE GLOBAL STYLES - DO NOT CHANGE */
          }
          @media only screen and (max-width: 640px) {
            .container { width:100% !important; }
            .mobile-hidden { display:none !important; }
            .logo { display:block !important; padding:0 !important; }
            .photo img { width:100% !important; height:auto !important;}
            .nav5, .nav6 { display: none !important;}
            .fluid, .fluid-centered {
              width: 100% !important;
              max-width: 100% !important;
              height: auto !important;
              margin-left: auto !important;
              margin-right: auto !important;
            }
            .fluid-centered {
              margin-left: auto !important;
              margin-right: auto !important;
            }
          }
        </style>
        <!--[if mso]>       <style type="text/css">           /* Begin Outlook Font Fix */               body, table, td {                  font-family : "Palatino Linotype", "Book Antiqua", Palatino, serif;                  line-height : 115%;                  font-size : 14px;                  color : transparent;               }           /* End Outlook Font Fix */       </style>     <![endif]-->
      <!-- start:processor:head --><!-- start:processor:body:head --><style>body{background:#fff0}.a11yHidden{max-height:0;overflow:hidden;opacity:0}table.mso{border-collapse:collapse;padding:0;table-layout:fixed}.sc-box-sizing{display:inherit}</style><style>
    u + .body .ie-form{display:block!important}@media screen and (max-width:801px) and (min-width:800px) and (orientation: landscape) and (min-device-width: 801px){u + .body .ie-form{display:none!important} }noinput{display:inline!important}.ie-radio-check{display:inline-block;opacity:0;width:0;height:0;margin:0;margin:0 0 0 -9999px;float:left;position:absolute;-webkit-appearance:none}#MessageWebViewDiv .ie-radio-check{display:block}
    .ie-radio-check:focus + .ie-btn-wrap .ie-btn,.ie-radio-check:focus + .ie-btn,.ie-radio-check:focus + .ie-frm-btn,.ie-rating-group .ie-radio-check:focus + .ie-btn,.ie-rating-default:focus + .ie-input-group .ie-rating-group > label > .ie-btn-wrap .ie-btn{outline:Highlight auto 2px;outline:-webkit-focus-ring-color auto 5px}.ie-btn-wrap,.ie-frm-btn,select,.ie-dropdown-i{cursor:pointer}.ie-frm-btni{-webkit-appearance:none;appearance:none;border:none;background:none;padding:0;border-radius:0}
    *.ie-input-wraper{display:block}*.ie-label{display:block}.ie-b-label,.ie-btn,.ie-gmail-btn-wrap{display:inline-block;vertical-align:middle;word-wrap:normal}.ie-b-label-box{width:100%;vertical-align:middle}.ie-frm-btn{display:inline-block;text-align:center;font:inherit}*.sc-text-c1pfui3g-ic-required{color:#ff0000;font-weight:bold;display:inline-block}u + .body .ie-frm-btni{font:inherit;color:inherit;opacity:1;width:auto;height:auto;float:none}u + .body .ie-frm-btn{display:none}
    u + .body .ie-frm-btni-c1pfui3g-ic-submit,*.ie-frm-btn-c1pfui3g-ic-submit{width:auto;margin:15px 0px;padding:5px 10px;color:#ffffff;text-decoration:none;background:#309ddd}u + .body .ie-frm-btni{background-image:linear-gradient(transparent,transparent)}
    </style><style></style><style>
    #interactive:checked+#rebel .ie-form{display:block!important}@media screen and (max-width: 800px){.& #interactive:checked+#rebel .ie-form{display:none!important} }#MessageWebViewDiv #rebel#rebel .ie-form,.edo-email-view #rebel#rebel .ie-form,.edo #rebel#rebel .ie-form,#msgBody #rebel#rebel .ie-form,.netease_mail_readhtml #interactive:checked+#rebel .ie-form,.c17637 #interactive:checked+#rebel .ie-form{display:none!important}@media (hover: hover) and (pointer: fine){
    _:-webkit-full-screen,_::-webkit-full-page-media,_:future,:root .body:not(.Singleton) #rebel#rebel .ie-form{display:none!important} }
    </style><noscript> <style>#interactive:checked+#rebel .ie-form{display:none!important}#interactive:checked+#rebel .ie-formFallback{display:block!important}</style> </noscript><!-- end:processor:body:head --><!-- end:processor:head --></head>
      <body bgcolor="#F8EDED" text="#000000" style="-webkit-text-size-adjust:none;background-color : #F8EDED; font-family : 'Palatino Linotype', 'Book Antiqua', Palatino, serif; line-height : 115%; font-size : 14px; color : transparent; padding : 10px; " class="body"><style type="text/css">
    div.preheader 
    { display: none !important; } 
    </style>
    <div class="preheader" style="font-size: 1px; display: none !important;">From romance to revelry – at JOALI Maldives</div><!-- start:processor:prepend --><!-- start:processor:body:prepend --><!--[if mso]><!--><input type="radio" name="limited" id="interactive" style="display:none;mso-hide:all;" checked><!--<![endif]--><div id="rebel"><!-- end:processor:body:prepend --><!-- end:processor:prepend -->
        <div style="font-size:0; line-height:0;"><img src="https://click.e.joali.com/open.aspx?MSC2OMPCONSEBJZUMRP6OORHXM.120043&d=120043&bmt=0" width="1" height="1" alt=""></div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
          <tr>
            <td align="center" valign="top">
               
            </td>
          </tr>
          <tr>
            <td align="center">
              <table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center">
                <tr>
                  <td>
                    <table class="tb_properties border_style" style="border-image : initial;font-size : 14px; font-family : 'Palatino Linotype', 'Book Antiqua', Palatino, serif; color : transparent;background-color : #F8EDED; border : 7px solid #FFFFFF; line-height : 100%; " cellspacing="0" cellpadding="0" bgcolor="#F8EDED" width="100%">
                      <tr>
                        <td align="center" valign="top">
                          <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <!-- added padding here -->
                              <td class="content_padding" style="padding : 0px; ">
                                <!-- end of comment -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                  <tr> <!-- top slot -->
                                    <td align="center" class="header" valign="top">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                              <td align="left" valign="top">
                                                <table cellspacing="0" cellpadding="0" style="width:100%">
                                                  <tbody>
                                                  <tr>
                                                    <td class="responsive-td" valign="top" style="width: 100%;">
                                                      <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><div style="line-height: 100%;">
     <span style="color: transparent;"><span style="font-size:12px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><meta charset="UTF-8"> <meta name="viewport" content="initial-scale=1, user-scalable=yes"> <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]--> <!--[if (gte mso 9)]> 
    <style type="text/css"> table {border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border:0;} table td, table th {border-collapse:collapse; font-size:1px; line-height:1px;}  .inpl-not-mailing table {border-collapse:separate;} .lh {line-height:108% !important;} .inpl-not-mailing .lh, .inpl-not-mailing .lh font {line-height:1.3 !important;} .lh15p {line-height:125% !important;} .inpl-not-mailing .lh15p, .inpl-not-mailing .lh15p font {line-height:1.5 !important;} </style> <![endif]--> </span></span></span></div><table bgcolor="transparent" border="0" cellpadding="0" cellspacing="0" class="ol600 fw" width="100%">
     
      <tr>
       <td bgcolor="transparent" class="lh dplr25 plr10" style="line-height: 100%; text-align: center;">
        <span style="color:#411f20;"><span style="font-size:10px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span class="la1b  gf" e-editable="text">Can&rsquo;t view this email?</span></span></span></span></td></tr><tr>
       <td bgcolor="transparent" class="lh dplr25 plr10" style="line-height: 100%; text-align: center;">
        <span style="font-size:10px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><a  class="fc2 fwn tdn"  data-linkto="other" e-editable="onlinelink" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjAzMjc4OGJjLWUyMmQtNDYwNy04ZDIxLWMxYzFjYzA3YzQyZCIsImRla1ZlcnNpb24iOjEsIml2IjoiQlU1R2ZBcklwdXVDcUVGT2JFd2ZiZz09IiwiY2lwaGVyVGV4dCI6Ing1dWZTdG9kRjYremJtOTYyTW4yVUlzazN2blNVNWhnL0tjU0phN1FxUUJxeElEZEhEZkRKaDNtMGJFTURuMWdMcG5XSDRaR3NkV2ZGMnhRMExoRWVlemZWb3F4dHdVRlRrWjhDc2ltNjRLb1FVNXNUQjl1IiwiYXV0aFRhZyI6IjFaOFhiRkRRdUVSNTdOOVdpckczQlE9PSJ9" style="color:#411f20;text-decoration:underline;font-weight:normal;line-height:100%;" target="_blank" title=""><span style="color:#411f20;"><span class="gf" e-editable="online">Please click here to view it online.</span></span></a></span></span></td></tr><tr>
      </tr></table><span style="color:#411f20;"><style type="text/css">
    font{letter-spacing:1.6px;}
    .ff {font-family:Baskerville,Georgia,Times,serif;}
    .lh, .lh font {line-height:1.3;}
    .lh15, .lh15 font {line-height:1.5;}
    .fwn{font-weight:normal;}
    .fwb{font-weight:bold;}
    .fsi{font-style:italic;}
    .tdn{text-decoration:none;}
    .tdu{text-decoration:underline;}
    .tds, .tds span span {text-decoration:line-through;}
    .fs13{font-size:13px;}
    .fs12{font-size:12px;}
    .fs11{font-size:11px;}
    .fs10{font-size:10px;}
    .fc1{color:#aaceb8;}
    .fc2{color:#ffffff;}
    .fc3{color:#001e61;}
    .fc4{color:#c86c61;}
    .fc5{color:#411f20;}
    .la1 a {font-weight:normal; text-decoration:none; color:#aaceb8;}
    .la1b a {font-weight:bold; text-decoration:none; color:#aaceb8;}
    .la3 a {font-weight:normal; text-decoration:none; color:#001e61;}
    .la3b a {font-weight:bold; text-decoration:none; color:#001e61;}
    .la3bu a {font-weight:bold; text-decoration:underline; color:#001e61;}
    .la4b a {font-weight:bold; text-decoration:none; color:#c86c61;}
    .la4bu a {font-weight:bold; text-decoration:underline; color:#c86c61;}
    .la5b a {font-weight:bold; text-decoration:none; color:#411f20;}
    .la5bu a {font-weight:bold; text-decoration:underline; color:#411f20;}
    .dplr10 {padding:0 10px;}
    .dpl70{padding:0 0 0 70px;}
    .dpr70{padding:0 70px 0 0;}
    .dplr60{padding:0 60px;}
    .dplr25{padding:0 25px;}
    .vam{vertical-align:middle;}
    .vat{vertical-align:top;}
    @media only screen and (max-width:414px) {
    .fl {display:block !important; width:100% !important;}
    .fw {width:100% !important; min-width:0 !important;}
    .hw {width:50% !important; min-width:0 !important;}
    .sec {width:100% !important; float:none !important;}
    .mh {display:none !important;}
    .image {width:100% !important; height:auto !important;}
    .comt {margin:0 auto !important;}
    .com {text-align:center !important;}
    .lom {text-align:left !important;}
    .rom {text-align:right !important;}
    .gf { font-size:13px !important; font-size:3.61vw !important; }
    .h1 {font-size:24px !important; font-size:6.67vw !important;}
    .h2 {font-size:20px !important; font-size:5.55vw !important;}
    .small { font-size:11px !important; font-size:3.06vw !important; }
    .xsmall {font-size:13px !important; font-size:3.61vw !important;}
    .rwom {width:auto !important;}
    .rhom {height:auto !important;}
    .rw10, .rw10 img {width:10px !important;}
    .rw15, .rw15 img {width:15px !important;}
    .rw20, .rw20 img {width:20px !important;}
    .rw50p {width:50% !important;}
    .rw33p {width:33.3% !important;}  
    .rh10, .rh10 img {height:10px !important; height:2.78vw !important;}
    .rh20, .rh20 img {height:20px !important; height:5.55vw !important;}
    .mtop5 {margin-top:5px !important; margin-top:1.39vw !important;}
    .mtop10 {margin-top:10px !important; margin-top:2.78vw !important;}
    .pb20{padding-bottom:20px !important; padding-bottom:5.56vw;}
    .plr10 {padding:0 10px !important;}
    .ptb10 {padding:10px 0 !important; padding:2.78vw 0 !important;}
    .pl10 {padding-left:10px !important;}
    .pr10 {padding-right:5px !important;}
    .pl5 {padding-left:5px !important;}
    .pr5 {padding-right:5px !important;}
    .plr5 {padding:0 5px !important;}
    .p10 {padding:10px 10px !important; padding:2.78vw 10px !important;}
    .nopad {padding: 0 !important;}
    .s1, .s1 img {height:10px !important; height:2.78vw !important;}
    .s2, .s2 img {height:5px !important; height:1.39vw !important;}
    .s3, .s3 img {height:10px !important; height:2.78vw !important;}
    .s4, .s4 img {height:40px !important; height:11.1vw !important;}
    .sm1 {margin-bottom:10px !important; margin-bottom:2.78vw !important;}
    .sm4 {margin-bottom:40px !important; margin-bottom:11.1vw !important;}
    .break {display:block !important;}
    .tlf {table-layout:fixed !important;}
    .nobg {background-color:transparent !important; background-image:none !important;}
    u + .body .gwfw { width:100% !important; width:100vw !important;}
    }
    @media only screen and (width:375px) {.iph {padding:0 8px 0 7px !important;}}
      <!-- body {margin:0; padding:0; background:transparent; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;} a, a:active, a:visited, .yshortcuts, .yshortcuts span a {text-decoration:none; font-weight:normal; color:transparent;} a[x-apple-data-detectors] {color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important;} [office365] td div, [office365] button {display:block !important;} table th {padding:0; Margin:0; border:0; font-weight:normal; vertical-align:top;} --></style></span></td></tr></table>
                                                      
                                                    </td>
                                                  </tr>
                                                  </tbody>
                                                </table>
                                              </td>
                                            </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                  <tr> <!-- main slot -->
                                    <td align="center" class="header" valign="top">
                                      <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                        <tr>
                                          <td align="left" valign="top">
                                            <table cellspacing="0" cellpadding="0" style="width:100%">
                                              <tbody>
                                              <tr>
                                                <td class="responsive-td" valign="top" style="width: 100%;">
                                                  <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 15px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center">
    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjNlZDUwY2ZlLTU3MTAtNGFkYS04ZTQ3LTFiM2M0NTliNzM1NSIsImRla1ZlcnNpb24iOjEsIml2IjoiNUFtSG55V2J4VEpkVG9FdkVlYWlNZz09IiwiY2lwaGVyVGV4dCI6IjFMYm40T3hacTVTSThrWWRVK29VcVk2Z2hWYUxUSkFDRXFRMllzandRMjVldVVzc2lsRk9mTm9ucUxNSEsrOWRNS3hiU000VllxalQySERSU25IWVhQQUErMi9zUG1GYWVlM2FPZVFKaDU4bG04VXlYVTZCTHhIbW9qST0iLCJhdXRoVGFnIjoiU25IWVhQQUErMi9zUG1GYWVlM2FPUT09In0%3D" title=""   data-linkto="https://">
    <img data-assetid="98418" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/a3a5577e-a950-4bc6-9c64-bc2ff6356e5b.png" alt="joalimaldives.com" height="141" width="200" style="display: block; padding: 10px 0px; text-align: center; height: 141px; width: 200px; border: 0px;"></a></td></tr></table></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217723" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/b7b782c0-c2c3-4fbb-9b74-32299ce21cc9.gif" alt="Heart of the Matter" height="315" width="630" style="display: block; padding: 0px; text-align: center; height: 315px; width: 630px; border: 0px;"></td></tr>
    </table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 25px 6px 10px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 150%;">
        <span style="font-size:26px;"><span style="color:#411f20;"><i><b><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;">A Celebration of Love</span></b></i></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;">February arrives like a sunburst, bringing magic, artistry and radiant joy to JOALI Maldives. Framed by endless ocean views and golden sunsets, each day at our island invites you to live creatively and celebrate love in all its vibrancy &ndash; from romance to family bonds and friendship.</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center">
    <img data-assetid="217685" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/c45ef730-7ff3-44d7-8c4e-5bbcb2a7b5fe.png" alt="" height="100" width="100" style="display: block; padding: 0px; text-align: center; height: 100px; width: 100px; border: 0px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:18px;"><b><i>Around the World Celebrations</i></b></span><br>
        <br>
        <span style="font-size:14px;">A month of dazzling festivities.</span></span></span></div></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:16px;"><b>Valentine's Day</b></span><br>
        <span style="font-size:14px;"><i>14 February</i></span></span></span></div><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;"><i>Love, Lived Creatively</i><br>
        <br>
        Embrace joyful creativity as a way of life. Romance shines brighter with our extraordinary experiences for two. Catch a glimpse of what awaits &ndash; with so much more in store.</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" style="width: 33%; padding-right: 4px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner">
    <table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217721" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/03704740-64f4-4c5e-8251-d7f4253539d4.png" alt="" height="275" width="200" style="display: block; padding: 0px; text-align: center; border: 0px solid transparent; height: 275px; width: 200px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;"><b>Written in<br>
        the Skies</b></span><br>
        <br>
        <span style="font-size:14px;">Golden-hour champagne and art, followed by seaside stargazing.</span></span></span></div></td></tr></table></td><td valign="top" style="width: 33%; padding-left: 2px; padding-right: 2px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217720" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/8d65b16b-89b6-47b2-b347-f309b9488d51.png" alt="" height="275" width="200" style="display: block; padding: 0px; text-align: center; border: 0px solid transparent; height: 275px; width: 200px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr>
    <td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;"><b>Cupid&rsquo;s<br>
        Chemistry</b></span><br>
        <br>
        <span style="font-size:14px;">A chocolate-kissed pastry class to sweeten your precious bond.</span></span></span></div></td></tr></table></td><td valign="top" style="width: 33%; padding-left: 4px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217722" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/f91f8a98-2b54-4bbd-8ec3-abaf56db037a.png" alt="" height="275" width="200" style="display: block; padding: 0px; text-align: center; height: 275px; width: 200px; border: 0px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr>
    <td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;"><b>A Match Made<br>
        in Heaven</b></span><br>
        <br>
        <span style="font-size:14px;">Thrilling game or relaxed rally &ndash; the tennis court is your stage.</span></span></span></div></td></tr></table></td></tr></table></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" style="width: 45%; padding-right: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center">
    <img data-assetid="217728" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/0088053d-1330-4c7d-a65a-73866b76295a.gif" alt="" height="251" width="250" style="display: block; padding: 0px; text-align: center; border: 0px solid transparent; height: 251px; width: 250px;"></td></tr></table></td></tr></table></td><td valign="top" style="width: 55%; padding-left: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:16px;"><b>Chinese New Year</b></span><br>
        <span style="font-size:14px;"><i>16-17 February</i><br>
        <i>Year of the Fire Horse</i></span></span></span><br>
        &nbsp;</div><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;">Step into a thrilling new chapter, fuelled by the Horse&rsquo;s energy. Celebrate with lavish New Year feasts, dragon dances and dynamic wellness &ndash; paired with artful festivities in clay and colour.</span></span></span></div></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><table border="0" cellspacing="0" cellpadding="0" role="presentation"><tr>
    <td class="innertd buttonblock" bgcolor="transparent" style=" border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; background-color: transparent;">
    <a target="_blank" class="buttonstyles" style=" font-size: 14px; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; color: #411F20; text-align: center; text-decoration: none; display: block; background-color: transparent; border: 1px solid #411F20; padding: 10px; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjRhZTVmODlkLWJmODEtNGZmYi05NDRiLWUzOTFlZDlkZmZhNyIsImRla1ZlcnNpb24iOjEsIml2IjoibEFyS1VyMFlUQ0laL2NEaHRZSWF2Zz09IiwiY2lwaGVyVGV4dCI6Inc5d0EyTFUraENkY0RxMW4zK1Y0Z1BCRmwzRHNGTmtYT3AvR2I5OW1YdWtZNG1kRTFtNFhNU3pjSG1CQnJJNXpmcGNRNW1GNmNLQi9BSW91ZWRoKzdrZ2tnaWpuelpqVmJHMnEycFFLeWxLOUdFd2lHZjNBNGJXQ0dyND0iLCJhdXRoVGFnIjoiZWRoKzdrZ2tnaWpuelpqVmJHMnEyZz09In0%3D" title=""   data-linkto="https://">DISCOVER MORE</a></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 5px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" style="width: 100%; padding-bottom: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:18px;"><b><i>Events by Experts</i></b></span><br>
        <br>
        <span style="font-size:14px;">Exclusive experiences by renowned specialists.</span></span></span></div></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" style="width: 50%; padding-top: 3px; padding-right: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 25px 5px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:16px;"><b>Healing Touch</b></span><br>
        <span style="font-size:14px;"><i><b>Zoa Avi&ntilde;o Hernandez</b><br>
        Until 28 February</i></span></span></span><br>
        &nbsp;</div><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;">A month of transcendent journeys, guided by Zoa&rsquo;s &ldquo;magic hands&rdquo;. Bringing modern vitality to ancestral traditions, these rituals restore energy, lightness and freedom.&nbsp;</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><table border="0" cellspacing="0" cellpadding="0" role="presentation"><tr>
    <td class="innertd buttonblock" bgcolor="transparent" style=" border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; background-color: transparent;">
    <a target="_blank" class="buttonstyles" style=" font-size: 14px; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; color: #411F20; text-align: center; text-decoration: none; display: block; background-color: transparent; border: 1px solid #411F20; padding: 10px; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6ImQ5ZGQ5YzQ4LWY1N2ItNGUwNy04MGRiLTIwZmQ0OTZhNGMwNCIsImRla1ZlcnNpb24iOjEsIml2IjoidUx2dTFrYWNnM1NlMk9KWTNUK0o4Zz09IiwiY2lwaGVyVGV4dCI6IktTM2JrcFdHT1d1cWlKL2Y2a2FFeVJPcTZBOUNUNGRLTnE3TStiSmtzNTh5Z2JBbGVpZy81cG9BT3VPVzJhTWVuclhiNUF0d3JRR25VSk1ZL01GaldNejJpYll0VWoyV2swRXhpTGk3N3RaR25JTjBudGppV04wL2lmST0iLCJhdXRoVGFnIjoiL01GaldNejJpYll0VWoyV2swRXhpQT09In0%3D" title=""   data-linkto="https://">DISCOVER MORE</a></td></tr></table></td></tr></table></td></tr></table></td><td valign="top" style="width: 50%; padding-top: 3px; padding-left: 3px;">
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217729" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/dfedc859-64e6-42a7-8c26-88f88eb0975f.png" alt="" height="275" width="200" style="display: block; padding: 0px; text-align: center; height: 275px; width: 200px; border: 0px;"></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 5px 0px 0px; ">
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 150%;">
        <span style="color:#411f20;"><i><b><span style="font-size:18px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;">Artscape: Manta Treehouse</span></span></b><br>
        <span style="font-size:16px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;">By&nbsp;Porky Hefer</span></span></i></span></div></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217794" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/34eabfed-4106-4662-bf04-9627f3d32354.gif" alt="" height="275" width="550" style="display: block; padding: 0px; text-align: center; height: 275px; width: 550px; border: 0px;"></td></tr></table></td></tr></table>
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-size:14px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;">Inspired by the graceful reef manta rays of the Maldives, the Manta Treehouse tells a story of art, nature, and timeless craftsmanship, shaped from natural materials using traditional techniques. Floating quietly among the treetops, it becomes a dreamlike setting for an intimate private dining experience.</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><table border="0" cellspacing="0" cellpadding="0" role="presentation"><tr>
    <td class="innertd buttonblock" bgcolor="transparent" style=" border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; color: #411F20; background-color: transparent;">
    <a target="_blank" class="buttonstyles" style=" font-size: 14px; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; color: #411F20; text-align: center; text-decoration: none; display: block; line-height: 100%; background-color: transparent; border: 1px solid #411F20; padding: 10px; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjU2NDQ3M2NmLTlhMzgtNDI1Mi04YTg4LWRlYzkwM2I5ZWRhZiIsImRla1ZlcnNpb24iOjEsIml2IjoiNVVsMmJaRHB2eDBlR2lsOFJzNGl1QT09IiwiY2lwaGVyVGV4dCI6InNIT0JmODZHYWRoR2dGQ3BIbUpHdzZ0VXdaakRlVGUzdDBDQmNPeS91TW50b0J6cVRGQXIraUJxOFdCclMrUloySW8wUkJwZGNRVHhyUXp4TGdCdTJ5eGpyZHlpNTZ3SDQ5YnNXdVZKZG0yUTZiOGRIaG9wZkViT0lyZz0iLCJhdXRoVGFnIjoiTGdCdTJ5eGpyZHlpNTZ3SDQ5YnNXZz09In0%3D" title=""   data-linkto="https://">DISCOVER MORE</a></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="63495" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/64c77942-c806-4ead-9896-6ef59180c77e.png" alt="" height="92" width="110" style="display: block; padding: 0px; text-align: center; height: 92px; width: 110px; border: 0px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 0px; ">
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px 10px 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr>
    <td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 0px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 5px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><i><span style="font-size:18px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><b>Ultimate Residence Escape</b></span></span></i><br>
        <br>
        <span style="font-size:14px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;">Celebrate the joy of creative living with family and friends at JOALI Maldives. Enjoy generous savings and benefits when staying in our three- or four-bedroom residences. Book by 31 March 2026, stay until 10 May 2026.</span></span></span></div></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 40%; padding-top: 0px; padding-bottom: 0px; padding-right: 0px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; ">
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center">
    <img data-assetid="217734" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/9a270a28-0aa4-4e8a-838c-140e55de8205.gif" alt="" height="220" width="250" style="display: block; padding: 0px; text-align: center; height: 220px; width: 250px; border: 0px;"></td></tr></table></td></tr></table></td></tr></table></td><td valign="top" class="responsive-td" style="width: 60%; padding-top: 0px; padding-bottom: 0px; padding-left: 0px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 20px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="line-height: 125%;">
        <span style="color:#411f20;"><span style="font-size:14px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="line-height:150%"><span lang="EN-GB">&bull; &nbsp; <b>Up to 33% savings </b>on three- and four-bedroom residences when booking 4 nights or more<br>
        &bull; &nbsp; <b>Daily gourmet breakfast</b> at Vandhoo<br>
        &bull;&nbsp; &nbsp;<b>Complimentary half-board</b> meal plan upgrade<br>
        &bull;&nbsp;<b>&nbsp; Roundtrip seaplane transfers for kids </b>2-11 years at<b> USD 355</b><br>
        &bull;&nbsp; &nbsp;Kids 11 years and below dine and stay with compliments<br>
        &bull;&nbsp; One-time whiskey, wine, gin or sake tasting or family cooking class<br>
        &bull;&nbsp; One-time 30-minute padel tennis session<br>
        &bull;&nbsp; One-time 60-minute spa treatment</span></span></span></span></span></div></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-top: 0px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center;">
        <span style="font-size:12px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="line-height:150%"><span lang="EN-GB"><span style="color:#411f20;">Reserve directly from </span><a   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6ImRiNjY4OGM1LTJhOTMtNGMzOC1iNGRhLWI4YTA3YmI1ZGRkYSIsImRla1ZlcnNpb24iOjEsIml2IjoiVlNJekZ1V0Zzb3BhSjkzWFBNTTBoQT09IiwiY2lwaGVyVGV4dCI6IlNSREpMOXdJV3dqZ3Y0UTB3bks4cExBWWc4ZUJXRER5aFB4TzgzYUJ5aHRoNHZaNzA0S0ZnWmRZeVphZ0oveXJDTmppQVNpbXRSUWN0U2lvVTUzOGU1S1dNSGxnVUZXTU5kK0cwbFVpTXhibGhiS0tXaWZkMXp6RE5JUT0iLCJhdXRoVGFnIjoiVTUzOGU1S1dNSGxnVUZXTU5kK0cwZz09In0%3D" style="color:#411F20;text-decoration:underline;font-weight:normal;line-height:100%;" title="joali.com"><span style="color:#411f20;">joali.com</span></a>
    <span style="color:#411f20;"> for extra perks, including one complimentary in-villa breakfast, a USD 100 Food and Beverage dining credit per adult and a 10% savings on any individual treatments at JOALI BEING Cure.&nbsp;</span></span></span></span></span><span style="color:#411f20;"><span style="font-size:12px;">
    <span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="line-height:150%"><span lang="EN-GB"><i>Terms and Conditions apply.</i></span></span></span></span></span></div></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><table border="0" cellspacing="0" cellpadding="0" role="presentation"><tr><td class="innertd buttonblock" bgcolor="transparent" style=" border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; color: #411F20; background-color: transparent;">
    <a target="_blank" class="buttonstyles" style=" font-size: 14px; font-family: &quot;Palatino Linotype&quot;, &quot;Book Antiqua&quot;, Palatino, serif; color: #411F20; text-align: center; text-decoration: none; display: block; line-height: 100%; background-color: transparent; border: 1px solid #411F20; padding: 10px; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjBjOWI4MmZmLTMzNTctNGYzMi1iZmQ4LTkyZjc4NGUzYjJlZiIsImRla1ZlcnNpb24iOjEsIml2IjoiaStXUHRiZlVCV0lxSno3clRueVZVUT09IiwiY2lwaGVyVGV4dCI6Ik12ZzlxbmIyd0xsZ2lXd3dPS20zWlNtZlVwNFNsdDhPMGF6Um5oWW8wWm9EaTY1Q3ZiYy9DL1Q0N0RPU2kxZzVpU0lRNytGVGVVQVh6ZWlnaEJZVE1yMGJGRnBqcHE4VlJYdUFwb3ZsajdXMzFBVmlLaWMrNjA1OGxWRT0iLCJhdXRoVGFnIjoiaEJZVE1yMGJGRnBqcHE4VlJYdUFwZz09In0%3D" title=""   data-linkto="https://">BOOK NOW</a></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
    <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center"><img data-assetid="217737" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/665e1653-55c1-474b-b6c0-205ffb1206fa.png" alt="" height="93" width="350" style="display: block; padding: 0px; text-align: center; height: 93px; width: 350px; border: 0px;"></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td>
    <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="color:#411f20;"><span style="font-size: 18px;"><b><i>Coming Soon: Easter</i></b></span></span></div></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 5px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 125%;">
        <span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><span style="font-size:14px;"><span style="color:#411f20;">Easter is hopping closer! <a   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6ImE4MWNhZWI1LWFlYmQtNDc4My04MDUxLTE4M2JhZTNiODUwNSIsImRla1ZlcnNpb24iOjEsIml2IjoiK1l4TzR5OVNtUWNwbWtNL0xrTGkxUT09IiwiY2lwaGVyVGV4dCI6IkhCQkdpaGV4a1VpWis4SzhWUjByZC9pbHZabzlIUS9xdUp1U0ltNWdyS0VyRnRaTzNxeis3NWM1NEpEK0lEOWhsYTc5cm9vcUJGd0RjbVpvR3MzRGxkNkVPZFl3MVFaMnJ4NUFpZm1NVHVNdlVwa0hLWnBEUHk1QzR0VT0iLCJhdXRoVGFnIjoiR3MzRGxkNkVPZFl3MVFaMnJ4NUFpUT09In0%3D" style="color:#411F20;text-decoration:underline;" title="Look back at last year’s fun">Look back at last year&rsquo;s fun</a> as we craft this season&rsquo;s celebration. 
    <a   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjlmMWFiYWFmLTBjZjItNDQ5YS1iZjY1LTM4M2M2NmEzYzMxOSIsImRla1ZlcnNpb24iOjEsIml2IjoiZlgwemZNN1JLWVVlUGtxVTc3S0Vsdz09IiwiY2lwaGVyVGV4dCI6ImY2MVAwYkp4UFdSdjZWNlFOem13STVmaFl5OXhXZXV3d0dpR2JFU3oyclVCeW5jMFJsTlg5K25FR2p1RkpDSkFwOTNjN00xM3ZtbVNNd3JZR0FRTy81R1ViTXZSUDVQM2MrWjI5bjE5TTN6TzBTbUZIajVLbE8reWhKYz0iLCJhdXRoVGFnIjoiR0FRTy81R1ViTXZSUDVQM2MrWjI5Zz09In0%3D" style="color:#411F20;text-decoration:underline;" title="Follow us">Follow us</a> on Instagram to stay in the loop &ndash; egg hunts, festive arts and lots more magic coming soon.</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper"><tr><td class="stylingblock-content-wrapper camarker-inner"><table width="100%" cellspacing="0" cellpadding="0" role="presentation"><tr><td align="center">
    <img data-assetid="217736" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/efe99c69-473f-4650-9552-5a0244190cb2.gif" alt="" height="277" width="500" style="display: block; padding: 0px; text-align: center; height: 277px; width: 500px; border: 0px;"></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner"><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td>
    <table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr><td valign="top" class="responsive-td" style="width: 100%; padding-bottom: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 0px 0px 10px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center;">
        <hr>
        <br>
        <span style="color:#411f20;"><span style="font-size:22px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><b>FOLLOW US</b></span></span>&nbsp;</span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 0px 50px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px 20px; " class="stylingblock-content-wrapper camarker-inner"><table border="0" cellpadding="0" cellspacing="0" style="width:100%;">
        
            <tr>
                <td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6Ijg1ZGY3MzQ4LWIyZTctNDZjNy1hNDZmLTllNDhmMDRhZDc2NSIsImRla1ZlcnNpb24iOjEsIml2IjoiRGt1QWR3NDRRNmUwSUtjVWtpeE8yZz09IiwiY2lwaGVyVGV4dCI6Ii9UcmdNUE1neC90dXI1cE40QUpFeWpMRDNQOWYwRnNRejBNbU01aUVYZWErN0JDNHl6bVZIbE9WQ2g2M2tLNWRnRDY0Q3paZ1c4Sm5CUTFadENJWm5Hd0c5NE5PKzhRT1M0QjNEamhEcDdRZ3B4U1NMRTdhIiwiYXV0aFRhZyI6IndtY0ZEVm0wSWhtY2JBYjNnMDc3eEE9PSJ9" title=""><img alt="Facebook" data-assetid="58808" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/236b0571-dea5-4da4-a570-f4d0ab58a033.png" style="padding: 0px; text-align: center; height: 25px; width: 25px; border: 0px;" width="25"></a></td><td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjZhM2M3NjBmLWQzMDQtNDhjNy04NDFjLWNlOTYwYTg4YzJhYSIsImRla1ZlcnNpb24iOjEsIml2IjoiU21WZUVkY1l1YzkrejZpaHYwWDlUZz09IiwiY2lwaGVyVGV4dCI6InlrZFNyS29sSG1pcW1RZG5ralZ5SmorYS9lRUxmYXd4OUg2ZXlCaXpuZEZiTE13SFYrTTRFdXAzVUY3N3ZQU0VTZktLQUwzL1oxMXdmdzJKa3NPNTdadVhkeDZ1SGdzeFV1QWNsVXBsWGhIWEdMblBmcytvb2I5Ri9VND0iLCJhdXRoVGFnIjoia3NPNTdadVhkeDZ1SGdzeFV1QWNsUT09In0%3D" title=""><img alt="Instagram" data-assetid="58805" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/3a88b3d0-f0f0-4a9e-895c-d8e95055703f.png" style="padding: 0px; text-align: center; height: 25px; width: 25px; border: 0px;" width="25"></a></td><td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjM4NWRiNDU0LTg4OTctNDhiMi1hZjI5LTc3MTU3NGM4YTg5MCIsImRla1ZlcnNpb24iOjEsIml2IjoiNVpCWTRjRDNKQURmSTQxOEgyRVFHQT09IiwiY2lwaGVyVGV4dCI6IllEUGVSRmZLazRXVEp0eDQ4MkFpdDdzSm9tQjlCZ0Y4NWllcURjYzBMY0JmUllZSkVNRTZuNFZodXFIYzBwU0ppckFkczJKbDZCbkl2VVdTQnN2eW9tbkRqa21YMFhwcWVCUUUwdVdRV09IQTl5UUEzeU9OZkI5aEVCZz0iLCJhdXRoVGFnIjoiQnN2eW9tbkRqa21YMFhwcWVCUUUwZz09In0%3D" title=""><img alt="Youtube" data-assetid="58806" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/4df804f1-4997-4bf8-9751-5e269950dc7d.png" style="padding: 0px; text-align: center; height: 25px; width: 25px; border: 0px;" width="25"></a></td><td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6ImQ3NzgzODY1LTYwMmUtNGFkNi05ZmI5LWRlOGE4MjdhOGMzNSIsImRla1ZlcnNpb24iOjEsIml2IjoiM25vQUZ0RW9tTEtXMi9YWG5wNnJ2Zz09IiwiY2lwaGVyVGV4dCI6IklzYjhsU1NlSUV3VzZMSlE5OEwxbm5xbGYreGdzL2VMeG5jZlE1NThzN0xMdTRoR3UwT0VxdDdkS3NsT1NPMmU5UXZTajV0YTdmYWMxRzNxNE9lNWZBTGVFU2t3TzkydVZydVFXdDU2QUJiUktKaXlsdHYxMTU2ZXE3ND0iLCJhdXRoVGFnIjoiNE9lNWZBTGVFU2t3TzkydVZydVFXZz09In0%3D" title=""><img alt="LinkedIn" data-assetid="58801" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/0ab8b19f-9373-4194-beae-4f6d8a15af38.png" style="padding: 0px; text-align: center; height: 25px; width: 25px; border: 0px;" width="25"></a></td><td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjlkNTYwNjUzLTQyMjktNGNlZi1iZGNkLTIyMzc2ZGMzZTBlZSIsImRla1ZlcnNpb24iOjEsIml2IjoiT1Jobk1QSTRKQ2UxaURkcWVNWFdGUT09IiwiY2lwaGVyVGV4dCI6ImNzdVlJT0tzem5NeXhGWDVCamxsT0tFMkVhYkFZaVNIL2I3SklyVzk5ZjYvVkxPbDhIc1E4N01TSGd6TndPMVVTWDFMQU5POEdPMjhsSW1ieFFjalE2RTl2NGtDSmxEK0ZuMGhTamtZWnpEeU9DUW50WWczYW5qRjFoVT0iLCJhdXRoVGFnIjoieFFjalE2RTl2NGtDSmxEK0ZuMGhTZz09In0%3D" title=""><img alt="Pinterest" data-assetid="58804" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/4307f5ca-252d-4c3b-9680-cb36831f4c55.png" style="padding: 0px; height: 25px; width: 25px; text-align: center; border: 0px;" width="25"></a></td><td style="text-align: center;">
                    <a style="font-weight:normal;color:#411F20;text-decoration:underline;line-height:100%;"   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjJjMWZlYTUxLTQ2MTUtNDIxNS1iYWExLTBjOWU5ZjJiMmY3MCIsImRla1ZlcnNpb24iOjEsIml2IjoiWkt5NFVNdmI5WG5DMXlsamRKWk9tZz09IiwiY2lwaGVyVGV4dCI6IjAvTkxpNUJwcFdYOWRsRjVZV29GcW5vUnJGc3RCak1KUnl6NlAxSC9SZzd6azBzSmI4LzQwR3FYK0UrUDFXdnY5TjZMenZiYzUrczlILzFIRU1LYjNOVEhGamtkOUtEZnNkaDZmR1NzdUZETDIvVjV3dGNwWTNTV1Rwbz0iLCJhdXRoVGFnIjoiRU1LYjNOVEhGamtkOUtEZnNkaDZmQT09In0%3D" title=""><img alt="" data-assetid="68442" height="25" src="https://image.e.joali.com/lib/fe2e11727364047e761c76/m/1/f8229d26-51d7-4eba-a252-31eb3bd19b12.png" style="padding: 0px; height: 25px; width: 25px; border: 0px; text-align: center;" width="25"></a></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr><tr><td><table cellspacing="0" cellpadding="0" role="presentation" style="width: 100%;"><tr>
    <td valign="top" class="responsive-td" style="width: 100%; padding-top: 3px;"><table cellpadding="0" cellspacing="0" width="100%" role="presentation" class="stylingblock-content-wrapper" style="min-width: 100%; "><tr><td class="stylingblock-content-margin-cell" style="padding: 10px 0px 0px; "><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center; line-height: 115%;">
        <span style="color:#411f20;"><span style="font-size:10px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><b>JOALI Muravandhoo</b><br>
        Muravandhoo Island, Raa Atoll, Republic of Maldives</span></span></span></div></td></tr></table></td></tr></table><table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper"><tr><td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner"><div style="text-align: center;">
        <span style="font-size:10px;"><span style="font-family:Palatino Linotype,Book Antiqua,Palatino,serif;"><a   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjBmYWI2MzE4LTdkMGItNDAxOC04OGM5LTgwOWYyZGIzMzc5OSIsImRla1ZlcnNpb24iOjEsIml2IjoibXY3QXhWdlVYMWxqUmpSNEtLM3pLQT09IiwiY2lwaGVyVGV4dCI6IkZzaXRjeXU4M2V4aEdUZXFTRllIMVQ3WmxzaFhtTG4yc0U0QW5jVjkvaWdwMW4rVGFXV1d5QXFWR1N1RGJjZUxGMjdSVW9wejdiM0FjdjRScWxtSzBmRlFRWXUvWHFDQUFmTlNpWnIrd01WYjFGOVpZMFkwZUNpdDh5Zz0iLCJhdXRoVGFnIjoicWxtSzBmRlFRWXUvWHFDQUFmTlNpUT09In0%3D" style="color:#411F20;text-decoration:underline;font-weight:normal;line-height:100%;" title="joali.com "><span style="color:#411f20;">joali.com</span></a><span style="color:#411f20;">&nbsp;| </span>
    <a   data-linkto="https://" href="https://click.e.joali.com/?qs=eyJkZWtJZCI6IjllYTlmNTcyLTZlNjYtNGY5NC04NmQwLThhMTJhOWMwNDllYSIsImRla1ZlcnNpb24iOjEsIml2Ijoiajd4V1pvcW5udlNNVDF5MzE1M0laZz09IiwiY2lwaGVyVGV4dCI6InkwUG9CZ0tINUhGaXBVTmJtTC92SWJJN0dTdjNHb3pDOXZxNTZxcFVuM1dsQllHNThWRGJkelEvU2RITnZRUTRtL3k2U2NZUlVhZjVpSDRmM2xPY3J1M29BZlhsdzlwOXBDaCtTNCs4Vm1hS3A1NzBqRTljdDllZHlHWT0iLCJhdXRoVGFnIjoiM2xPY3J1M29BZlhsdzlwOXBDaCtTdz09In0%3D" style="color:#411F20;text-decoration:underline;font-weight:normal;line-height:100%;" title="joalimaldives.com"><span style="color:#411f20;">joalimaldives.com</span></a></span></span></div></td></tr></table></td></tr></table></td></tr></table></td></tr></table></td></tr></table>
                                                  
                                                </td>
                                              </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td valign="top">
              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="">
        <br>
        <br>
        <tr>
            <td bgcolor="">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
                    <tr>
                        <td align="center">
                            <table class="container" cellpadding="0" cellspacing="0" border="0" width="550">
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- FOOTER CONTENT -->
        <tr>
            <td align="center" valign="top" style="" width="100%">
                <table class="container" cellpadding="0" cellspacing="0" width="600">
                    <tr>
                        <td align="center"
                            style="font-family: Palatino Linotype,Book Antiqua,Palatino, sans-serif; font-size: 11px; color: #959595; padding:0px 0px 25px 0px;">
                            This email was sent by:<br>
                            <span>JOALI<br>
    Boduthakurufaanu Magu, Malé, Republic of Maldives, 20066 
                                
                            </span>
                            <br>
                            <br>
                            <a href="https://click.e.joali.com/?qs=eyJkZWtJZCI6ImM3MGY1MjcyLTA5ZjQtNGViMS05NjAyLWY3YTM3MGU0ODVmOSIsImRla1ZlcnNpb24iOjEsIml2IjoicDZnNnlNZ1BvbW5MZG5KUTd1MndFQT09IiwiY2lwaGVyVGV4dCI6InNBMUkwSCtrMEZ4S01zZ0ZkKzEwdkhQVDA3K3pZK3VGeU1lcTc3alBwQkJaK2hJWUtrN2YvYzJjNGJSemFhVmJlYzZpOGRKU2RaMTFaWjROVVEzdlUzMVNJM3FOQ1JLbnFEckl5QStpYWN0MmNsRHU3YkFRIiwiYXV0aFRhZyI6Im5YVmxuZzFSRGU5VGZWSWplbzBKRWc9PSJ9"
                                target="_blank"
                                style="font-size:12px; color: #959595; text-decoration: none; font-weight:bold;">Privacy
                                Policy</a>
                            <br>
                            <br>
                            <a href="https://click.e.joali.com/profile_center.aspx?qs=eyJkZWtJZCI6IjY2OTJjMmE5LTU2ZDUtNDQ0ZC1hOGIzLWZhMzFmNWUzMmMxNiIsImRla1ZlcnNpb24iOjEsIml2IjoidFZvTVVic2VUdjlUN1BTN3B0RUd2Zz09IiwiY2lwaGVyVGV4dCI6ImxxSlJSSTJRbHpSalhwd1dLZnZrTGJTRHdCamNuTU1NUnRFVVNVQnBlQmxXQS9LZUtDU1hWQnoyb2RKbnJDYWd0UGp6VDFwbGxGYWcrK0drb2RkOVFpOWNkVkhEbUR6elRhM2VsM0FodlZkaHRWb01VYnNlVHY5VDdQUzdwdEVHdmc9PSIsImF1dGhUYWciOiJYSFZSdzVnODgwMnQzcGR3SWIxWFlRPT0ifQ%3D%3D" target="_blank"
                                style="font-size:12px; color: #959595; text-decoration: none; font-weight:bold;">Update
                                Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://click.e.joali.com/subscription_center.aspx?qs=eyJkZWtJZCI6IjI1NjdlNTJjLTY0YjgtNDdiMC1iOGYzLTZiNWVmY2UyZmUxMiIsImRla1ZlcnNpb24iOjEsIml2Ijoic0lWZDR3QTVQVE5nSEdBaVVUbS9xQT09IiwiY2lwaGVyVGV4dCI6IjdBRHpZZDQ4N1o0OXM2eTRWVWVzSkx3cTVHZnovZUxpNDY4Rzc1eDB5aVBtRWpteDFoZUpoS3RSQ1gzWFpNQmpiTWprVDkvODFLeG1JeDJDekliNHJ6VFZURmJoZ3B6eHVBRG1CbUczbVJxdnNJVmQ0d0E1UFROZ0hHQWlVVG0vcUE9PSIsImF1dGhUYWciOiIxVXhXNFlLYzhiZ0E1Z1podDVrYXJ3PT0ifQ%3D%3D"
                                target="_blank"
                                style="font-size:12px; color: #959595; text-decoration: none; font-weight:bold;">Manage
                                Subscriptions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="https://click.e.joali.com/unsub_center.aspx?qs=eyJkZWtJZCI6Ijk2YmU1MjJhLWQyNGUtNDExZi05ZmRhLWJjNWQxYTMxNDczZiIsImRla1ZlcnNpb24iOjEsIml2IjoibUZUWEV1ZjN5aUh6cWtWOWZjQlB0UT09IiwiY2lwaGVyVGV4dCI6IjZzQXRVQmJPZ1BvbTFHYnY0UDkyaDNjM0RPMUdFWFAvM0JueFVTMFk4cFJYamZxTUFWRnY4QjF4clg0Y1ZwL2JzNm5acklEK25CTnZMd1Z5RE1ZVllvL2lVa3U3OG9rZnhZRXZIYzBucmt6TWdvYVlWTmNTNS9mS0lmT3FSWDE5d0UrMSIsImF1dGhUYWciOiJTN3Z5aVIvRmdTOGR6U2V1VE15Q2hnPT0ifQ%3D%3D" target="_blank"
                                style="font-size:12px; color: #959595; text-decoration: none; font-weight:bold;">Unsubscribe</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    
    </td>
    </tr>
    </table>
            </td>
          </tr>
        </table>
      <!-- start:processor:append --><!-- start:processor:body:append --></div><!-- end:processor:body:append --><!-- end:processor:append --></body>
    </html>
    HTML;

    $mail->Body = $htmlBody;

    // Plain-text fallback (recommended)
    $mail->AltBody = "Please view this email in an HTML-capable email client.";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}