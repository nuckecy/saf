<?php

$email    = 'nuckecy@gmail.com';

function SendGrid($to,$from,$subject,$message)
{
	$url = 'https://api.sendgrid.com/';
	$user = 'myspecta';
    $pass = '5P3cT@2018';
	
	$params = array(
	'api_user' => $user,
	'api_key' => $pass,
	'to' => $to,
	'subject' => $subject,
	'html' => $message,
	'text' => 'testing body',
	'from' => $from,
	);
	
	$request = $url . 'api/mail.send.json';
	
	// Generate curl request
	$session = curl_init($request);
	// Tell curl to use HTTP POST
	curl_setopt($session, CURLOPT_POST, true);
	// Tell curl that this is the body of the POST
	curl_setopt($session, CURLOPT_POSTFIELDS, $params);
	// Tell curl not to return headers, but do return the response
	curl_setopt($session, CURLOPT_HEADER, false);
	// Tell PHP not to use SSLv3 (instead opting for TLS)
	curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
	curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
	
	// obtain response
	$response = curl_exec($session);
	curl_close($session);
}

//// SEND THE EMAIL /////
if($email !='')
{

$message='
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting"> 
    <title>Sterling Alternative Finance</title>

	<!-- Web Font / @font-face : BEGIN -->
	<!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->
	<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
	<!--[if mso]><style>* { font-family: sans-serif !important; } </style> <![endif]-->
	<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
	<!--[if !mso]><!-->
		<!-- insert web font reference, eg: <link href=\'https://fonts.googleapis.com/css?family=Roboto:400,700\' rel=\'stylesheet\' type=\'text/css\'> -->
	<!--<![endif]-->
	<!-- Web Font / @font-face : END -->
	<!-- CSS Reset -->
        <style>

                    /* What it does: Remove spaces around the email design added by some email clients. */
                    /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
            html,
            body {
                    margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
            }

            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            /* What is does: Centers email on Android 4.4 */
            div[style*="margin: 16px 0"] {
                margin:0 !important;
            }

            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,
            td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }

            /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
            table table table {
                table-layout: auto;
            }

            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode:bicubic;
            }

            /* What it does: A work-around for iOS meddling in triggered links. */
            *[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
            }

            /* What it does: A work-around for Gmail meddling in triggered links. */
            .x-gmail-data-detectors,
            .x-gmail-data-detectors *,
            .aBn {
                border-bottom: 0 !important;
                cursor: default !important;
            }

            /* What it does: Prevents Gmail from displaying an download button on large, non-linked images. */
            .a6S {
                    display: none !important;
                    opacity: 0.01 !important;
            }
            /* If the above doesn\'t work, add a .g-img class to any image in question. */
            img.g-img + div {
                    display:none !important;
                    }

            /* What it does: Prevents underlining the button text in Windows 10 */
            .button-link {
                text-decoration: none !important;
            }

            @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
                .email-container {
                    min-width: 375px !important;
                }
            }

        </style>

    <!-- Progressive Enhancements -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>

</head>
<body width="100%" bgcolor="#dddddd" style="margin: 0; mso-line-height-rule: exactly;">
    <center style="width: 100%; background: #dddddd; text-align: left;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
        Sterling Alternative Finance
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Header : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr><td style="padding: 20px 0; text-align: center"></td></tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto; border: 1px solid #d8d8d8;" class="email-container">
            <tr>
            <td bgcolor="#000000">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                        <tr>
                            <td style="text-align: center; padding: 1px; font-family: sans-serif; font-size: 12px; line-height: 15px; color: #ffffff;">
                                <p style="letter-spacing: 0.4625em; text-transform: uppercase;">Sterling Alternative Finance</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td bgcolor="#a00003">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    	<tr>
                            <td style="text-align: center; padding: 10px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #ffffff;">
                                <h2 style="margin:0px;">Thank you Partner, your feedback was received.</h2>
                            </td>
			</tr>
                    </table>
                </td>
            </tr>

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor="#ffffff" style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">                    
                    <p>Dear Partner,<br><br>

                    Thank you for sharing your honest feedback with us. Your feedback is being collated and will be reviewed by our team to help us grow.<br><br>
                    
                    Please remember to stay in touch with us on:<br><br>
                    
                    <b>Social Media:</b> <b>@Altfinanceng</b> <a style="text-decoration:none;" target="_blank" href="https://web.facebook.com/AltFinanceNg/">on Facebook</a>, <a style="text-decoration:none;" target="_blank" href="https://twitter.com/AltFinanceNg/">Twitter</a> and <a style="text-decoration:none;" target="_blank" href="https://www.instagram.com/AltFinanceNg//">Instagram
                    </a> 
                    
                    <b>Email:</b> <a style="text-decoration:none;" href="mailto: customercare@saf.ng">customercare@saf.ng</a><br><br>
                    
                    <b>Telephone:</b> <a href="tel:23419037080">01-9037080</a><br><br>
                    
                    Thank you for choosing Alternative Finance.
                    </p>
                    <!-- Button : END -->
                </td>
            </tr>
            <!-- 1 Column Text : BEGIN -->
            
            <!-- Clear Spacer : BEGIN -->
            <tr>
                <td height="5" style="font-size: 0; line-height: 0;">
                    &nbsp;
                </td>
            </tr>
            <!-- Clear Spacer : END -->

            <!-- 1 Column Text + Button : BEGIN -->
            <tr>
                <td bgcolor="#ffffff">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    	<tr>
                            <td style="text-align: center; padding: 5px; font-family: sans-serif; font-size: 12px; line-height: 20px; color: #555555;">
                                <p style="letter-spacing: 0.2em; text-transform: uppercase;">Sterling Alternative Finance</p>
                            </td>
			</tr>
                    </table>
                </td>
            </tr>
            <!-- 1 Column Text + Button : BEGIN -->
        </table>
        
        <!-- Email Footer : BEGIN -->
        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;" class="x-gmail-data-detectors"></td>
            </tr>
        </table>
        <!-- Email Footer : END -->
    </center>
</body>
</html>
';

$to         = $email;
$fromemail  = 'customercare@saf.ng';
$fromname   = 'Sterling Alternative Finance';
$subject    = "Growing as Partners";
$body       = $message;
$reply_to   = 'customercare@saf.ng';
//$add_cc='';
$priority='1';

$mailresponse = SendGrid($to,$fromemail,$subject,$body);

//$to         = $email;
//$fromemail  = 'noreply@myspecta.com';
//$fromname   = 'Specta';
//$subject    = "Specta - Free Voucher Email Confirmation";
//$body       = $message;
//$reply_to   = 'noreply@myspecta.com';
//$priority   = '1';
//
//$mailresponse = send($to,$fromemail,$subject,$body,$fromname);
}