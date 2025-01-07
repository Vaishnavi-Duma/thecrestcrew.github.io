<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if((isset($_POST['captchahide'])) && ($_POST['captchahide'] == "reCAPTCHASuccess")){ 
    //$pgname = $_POST['pgname'];
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $countrycode = $_POST['countrycode'];
    $phoneno = $_POST['phoneno'];
    $companyname = $_POST['company_name'];
    $message = $_POST['message'];
        
    // mail code
    $mail = new PHPMailer();
    $mail->IsHTML(true);
    $mail->Username = "contact@thecrestcrew.com"; // your GMail user name
    $mail->Password = "CrestContact@123*"; // your GMail password
    $mail->AddAddress('inquiry@thecrestcrew.com');
    
    $mail->AddReplyTo = '';
    $mail->ReturnPath = '';
    $mail->FromName = 'The Crestcrew International';
    $mail->Subject = 'Contact Details';
    $msg = '<!DOCTYPE html>
                <html>
                    <head>
                        <title>
                            Contact 
                        </title>
                        <style type="text/css" title="x-apple-mail-formatting"></style>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <body  width="100%" class="mobilePadding" style="background:#edf1f4;font-family:Helvetica Neue,Helvetica,Arial,DejaVuSansBook,sans-serif;">
    
                        <table style="Margin:0;background:#edf1f4;color:#33373d;
                               font-size:16px;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                            <tbody>
                                <tr>
                                    <td>
                                        <center>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table align="center" style="Margin:0 auto;background:#fff;border-collapse:collapse;border-radius:10px;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
    
                                                                            <div style="background:#c6def1;border-top-left-radius:10px;border-top-right-radius:10px;width:100%!important;word-break:keep-all!important">
                                                                                <table>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th style="Margin:0 auto;color:#c6def1;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:18px;padding-left:4%;padding-right:4%;text-align:left;width:96%;word-break:keep-all!important">
                                                                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                    <tbody>
                                                                                                        <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                            <th style="Margin:0;color:#c6def1;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:1.3rem;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                                <label style="color:#334452;font-weight:600;clear:both;display:block;float:left;max-height:32px;max-width:300px;
                                                                                                                       outline:0;padding:20px;padding-bottom:0;padding-left:0;text-align:left;text-decoration:none;
                                                                                                                       width:450px;word-break:keep-all!important" 
                                                                                                                       class="CToWUd" data-bit="iit">The Crestcrew International</label></th>
                                                                                                            <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
    
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:10%!important;padding-right:10%!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                            <p style="Margin:0;Margin-bottom:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.4;margin:0;margin-bottom:0;margin-top:25px!important;padding:0;text-align:center;word-break:keep-all!important">
                                                                                                                Contact Details of ' . $cname . '
                                                                                                            </p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
        
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th valign="middle" style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:5px!important;padding-left:10%!important;padding-right:10%!important;text-align:left;width:46%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
    
                                                                                                            <div style="border-bottom-style:dashed;border-bottom-width:2px;border-color:#cb202d;border-left-style:dashed;border-left-width:2px;border-right-style:dashed;border-right-width:2px;border-top-style:dashed;border-top-width:2px;margin-top:25px;padding:10px;word-break:keep-all!important">
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;margin-top:0;padding:0;text-align:center;word-break:keep-all!important"></p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#cb202d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.5;margin:0;margin-bottom:0;padding:0;word-break:keep-all!important">
                                                                                                                    Name : <span style="color:black;">' . $cname . '</span>
                                                                                                                </p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#cb202d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.5;margin:0;margin-bottom:0;padding:0;word-break:keep-all!important">
                                                                                                                    Email : <span style="color:black;">' . $cemail . '</span>
                                                                                                                </p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#cb202d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.5;margin:0;margin-bottom:0;padding:0;word-break:keep-all!important">
                                                                                                                    Mobile No : <span style="color:black;">' . $phoneno . '</span>
                                                                                                                </p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#cb202d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.5;margin:0;margin-bottom:0;padding:0;word-break:keep-all!important">
                                                                                                                    Message : <span style="color:black;">' . $message . '</span>
                                                                                                                </p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;margin-top:0;padding:0;text-align:center;word-break:keep-all!important"></p>
                                                                                                            </div>
    
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:10%!important;padding-right:10%!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                            <p style="Margin:0;Margin-bottom:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;margin-top:25px!important;padding:0;text-align:center;word-break:keep-all!important">Note: Please do not share Details with anyone.</p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:10%!important;padding-right:10%!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                            <p style="Margin:0;Margin-bottom:16px;color:#b9bfc7;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;padding:0;padding-bottom:0;padding-top:10px;text-align:center;word-break:keep-all!important"></p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:25px;padding-left:10%!important;padding-right:10%!important;padding-top:25px!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
    
                                                                                                            <p style="Margin:0;Margin-bottom:16px;color:#b9bfc7;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;margin-bottom:16px;padding:0;padding-top:10px;text-align:center;word-break:keep-all!important">Thank you,
                                                                                                                <br style="word-break:keep-all!important">Team Crestcrew International
                                                                                                                <br style="word-break:keep-all!important">
                                                                                                                <br style="word-break:keep-all!important">If you did not make this request, you can safely ignore this email.</p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    
                    </body>
                </html>';
    
    $mail->Body = $msg;
    //-----------------------------------------------------------------------
    
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Host = "smtp.hostinger.com"; // For Host
    $mail->SMTPSecure = "ssl"; // For Host
    //$mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    
    //$mail->SMTPDebug = 1;   
    $mail->From = $mail->Username;
    $mail->Send();
          
    //-----------------------------------------------------------------------
    //-----------------------Customer Email---------------------------------
    ////-----------------------------------------------------------------------
    // mail code
    $mail_cust = new PHPMailer();
    $mail_cust->IsHTML(true);
    $mail_cust->Username = "contact@thecrestcrew.com"; // your GMail user name
    $mail_cust->Password = "CrestContact@123*"; // your GMail password
    $mail_cust->AddAddress($cemail);
    $mail_cust->AddReplyTo = '';
    $mail_cust->ReturnPath = '';
    $mail_cust->FromName = 'The Crestcrew International';
    $mail_cust->Subject = 'Contact Response ';
    $msg_cust = '<!DOCTYPE html>
                <html>
                    <head>
                        <title>
                            Contact 
                        </title>
                        <style type="text/css" title="x-apple-mail-formatting"></style>
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <body  width="100%" class="mobilePadding" style="background:#edf1f4;font-family:Helvetica Neue,Helvetica,Arial,DejaVuSansBook,sans-serif;">
    
                        <table style="Margin:0;background:#edf1f4;color:#33373d;
                               font-size:16px;line-height:1.4;margin:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                            <tbody>
                                <tr>
                                    <td>
                                        <center>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table align="center" style="Margin:0 auto;background:#fff;border-collapse:collapse;border-radius:10px;border-spacing:0;margin:0 auto;padding:0;text-align:inherit;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
    
                                                                            <div style="background:#c6def1;border-top-left-radius:10px;border-top-right-radius:10px;width:100%!important;word-break:keep-all!important">
                                                                                <table>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th style="Margin:0 auto;color:#c6def1;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:18px;padding-left:4%;padding-right:4%;text-align:left;width:96%;word-break:keep-all!important">
                                                                                                <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                    <tbody>
                                                                                                        <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                            <th style="Margin:0;color:#c6def1;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:1.3rem;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                                <label style="color:#334452;font-weight:600;clear:both;display:block;float:left;max-height:32px;max-width:450px;
                                                                                                                       outline:0;padding:20px;padding-bottom:0;padding-left:0;text-align:left;text-decoration:none;
                                                                                                                       width:450px;word-break:keep-all!important" 
                                                                                                                       class="CToWUd" data-bit="iit">The Crestcrew International</label></th>
                                                                                                            <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th valign="middle" style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:5px!important;padding-left:10%!important;padding-right:10%!important;text-align:left;width:46%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
    
                                                                                                            <div style="border-bottom-style:dashed;border-bottom-width:2px;border-color:#cb202d;border-left-style:dashed;border-left-width:2px;border-right-style:dashed;border-right-width:2px;border-top-style:dashed;border-top-width:2px;margin-top:25px;padding:10px;word-break:keep-all!important">
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;margin-top:0;padding:0;text-align:center;word-break:keep-all!important"></p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#cb202d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:15px;font-weight:600;line-height:1.5;margin:0;margin-bottom:0;padding:0;word-break:keep-all!important">
                                                                                                                    Thank you for taking the time to reach out <br> to The Crestcrew International.<br>
                                                                                                                    Our team is currently reviewing your inquiry and <br>
                                                                                                                    will get back to you as soon as possible with a detailed response.<br>
    
                                                                                                                </p>
                                                                                                                <p style="Margin:0;Margin-bottom:16px;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;margin-top:0;padding:0;text-align:center;word-break:keep-all!important"></p>
                                                                                                            </div>
    
                                                                                                        </th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                                   
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:0;padding-left:10%!important;padding-right:10%!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
                                                                                                            <p style="Margin:0;Margin-bottom:16px;color:#b9bfc7;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:12px;font-weight:400;line-height:1.4;margin:0;margin-bottom:0;padding:0;padding-bottom:0;padding-top:10px;text-align:center;word-break:keep-all!important"></p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                            <table style="border-collapse:collapse;border-spacing:0;display:table;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                <tbody style="word-break:keep-all!important">
                                                                                    <tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                        <th style="Margin:0 auto;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0 auto;padding:0;padding-bottom:25px;padding-left:10%!important;padding-right:10%!important;padding-top:25px!important;text-align:left;width:96%;word-break:keep-all!important">
                                                                                            <table style="border-collapse:collapse;border-spacing:0;padding:0;text-align:left;vertical-align:top;width:100%;word-break:keep-all!important">
                                                                                                <tbody><tr style="padding:0;text-align:left;vertical-align:top;word-break:keep-all!important">
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0;text-align:left;word-break:keep-all!important">
    
                                                                                                            <p style="Margin:0;Margin-bottom:16px;color:#b9bfc7;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;line-height:1.4;margin:0;margin-bottom:16px;padding:0;padding-top:10px;text-align:center;word-break:keep-all!important">Thank you,
                                                                                                                <br style="word-break:keep-all!important">Team Crestcrew International
                                                                                                                <br style="word-break:keep-all!important">
                                                                                                                <br style="word-break:keep-all!important">If you did not make this request, you can safely ignore this email.</p>
                                                                                                        </th>
                                                                                                        <th style="Margin:0;color:#33373d;font-family:-apple-system,Helvetica,Arial,sans-serif;font-size:16px;font-weight:400;line-height:1.4;margin:0;padding:0!important;text-align:left;width:0;word-break:keep-all!important"></th>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </th>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
    
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    
                    </body>
                </html>';
    
    $mail_cust->Body = $msg_cust;
    //-----------------------------------------------------------------------
    
    $mail_cust->IsSMTP(); // use SMTP
    $mail_cust->SMTPAuth = true; // turn on SMTP authentication
    $mail_cust->Host = "smtp.hostinger.com"; // For Host
    $mail_cust->SMTPSecure = "ssl"; // For Host
    //$mail_cust->Host = "ssl://smtp.gmail.com"; // GMail
    $mail_cust->Port = 465;
    
    //$mail_cust->SMTPDebug = 2;   
    $mail_cust->From = $mail_cust->Username;
    
    // $mail->Send();
    if ($mail_cust->Send()) {
        header('location:contact-us.php');
    } else {
        header('location:contact-us.php?error=Oops Something went wrong!!!');
    }
} else {
    header('location:contact-us.php?error=Oops Something went wrong!!!');
}
?>