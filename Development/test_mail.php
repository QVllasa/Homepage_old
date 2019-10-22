<?php


$to = "qendrimvllasa@hotmail.de";
$subject = "Willkommen";


$headers [] = "From: " . $email;
$headers [] = "Reply-To: ";
$headers [] = "Return-Path: ";
$headers [] = "CC: ";
$headers [] = "BCC: ";




$text =

  '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="format-detection" content="telephone=no"> 
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <title>Page title</title>

    <style type="text/css"> 
        @media screen and (max-width: 630px) {
 
        *[class="mobile-column"] {display: block;} 
        *[class="mob-column"] {float: none !important;width: 100% !important;} 
        *[class="hide"] {display:none !important;} 
        *[class="100p"] {width:100% !important; height:auto !important;}    
         *[class="condensed"] {padding-bottom:40px !important; display: block;}
         *[class="center"] {text-align:center !important; width:100% !important; height:auto !important;} 
         *[class="100pad"] {width:100% !important; padding:20px;} 
         *[class="100padleftright"] {width:100% !important; padding:0 20px 0 20px;} 
          *[class="100padtopbottom"] {width:100% !important; padding:20px 0px 20px 0px;} 
        }
        
         @import url(http://fonts.googleapis.com/css?family=Roboto:300);
        #outlook a { padding:0; }
        body{ width:100% !important; -webkit-text; size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; }     
        .ReadMsgBody { width: 100%; }
        .ExternalClass {width:100%;} 
        .backgroundTable {margin:0 auto; padding:0; width:100%;!important;} 
        table td {border-collapse: collapse;}
        .ExternalClass * {line-height: 115%;} 
       
        
    </style>


</head>

<body style="padding:0; margin:0">

<table width="640" cellspacing="0" cellpadding="0" bgcolor="#" class="100p">
                <tr>
                    <td background="img/backgrounds/business_background_600x400_png8.png" bgcolor="#3b464e" width="640" valign="top" class="100p">
                        <!--[if gte mso 9]>
                        <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:640px;">
                            <v:fill type="tile" src="img/backgrounds/business_background_600x400_png8.png" color="#3b464e" />
                            <v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0">
                                <![endif]-->
                                <div>
                                    <table width="640" border="0" cellspacing="0" cellpadding="20" class="100p">
                                        <tr>
                                            <td valign="top">
                                                <table border="0" cellspacing="0" cellpadding="0" width="600" class="100p">
                                                    <tr>
                                                        <td align="left" width="50%" class="100p"><img src="images/logo.png" alt="Logo" border="0" style="display:block" /></td>
                                                        <td width="50%" class="hide" align="right" style="font-size:16px; color:#FFFFFF;"><font face="\'Roboto\', Arial, sans-serif"><a href="#" style="color:#FFFFFF; text-decoration:none;">HOME</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; <a href="#" style="color:#FFFFFF; text-decoration:none;">HOME</a> &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; <a href="#" style="color:#FFFFFF; text-decoration:none;">HOME</a></font></td>
                                                    </tr>
                                                </table>
                                                <table border="0" cellspacing="0" cellpadding="0" width="600" class="100p">
                                                    <tr>
                                                        <td height="35"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center" style="color:#FFFFFF; font-size:24px;">
                                                            <font face="\'Roboto\', Arial, sans-serif">
                                                                <span style="font-size:44px;">Introducing Crowder</span><br />
                                                                <br />
                                                                <Span style="font-size:24px;">Your ultimate crowd<br />
                                                                sourcing solution</Span>
                                                                <br /><br />


                                                                <table border="0" cellspacing="0" cellpadding="10" style="border:2px solid #FFFFFF;">
                                                                    <tr>
                                                                        <td align="center" style="color:#FFFFFF; font-size:16px;"><font face="\'Roboto\', Arial, sans-serif"><a href="##" style="color:#FFFFFF; text-decoration:none;">FIND OUT MORE</a></font></td>
                                                                    </tr>
                                                                </table>

                                                            </font>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="35"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if gte mso 9]>
                            </v:textbox>
                        </v:rect>
                        <![endif]-->
                    </td>
                </tr>
            </table>

</body>
</html>
';

if(mail($to, $subject, $text, implode("\r\n", $headers))){
  echo "Email versendet!";
}



