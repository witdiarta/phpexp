<?php
// Writed by Gembul at 09/05/2014 07:23 WIB  
//=========================================
// User session
require_once($_SERVER['DOCUMENT_ROOT'].'/apps/userSession.php');
//**************** AppsAccess file Config ****************************************
$apps_id = "5"; // isi sesuai dengan id apps
$apps_level = "4"; // 1 (akses & show), 2 (audit), 3 (update), 4 (create), 5 (edit), 6 (delete)
// appsAccess file
require_once ($_SERVER['DOCUMENT_ROOT'].'/apps/appsAccess.php');
//*************** End of AppsAccess file Config ***********************************
// =================================================
// *************************   QR code start here  *******************
include('../../global/qr/qrlib.php'); 
// how to build raw content - QRCode
$dirPlace = '/apps/global/qr/img/';
$fileName = substr(hash('sha256', md5(uniqid(rand(),TRUE))),7,6).'.png';
$dirFullPlace = $_SERVER['DOCUMENT_ROOT'].$dirPlace.$fileName;
$code_qr = '<img src="http://'.$_SERVER['SERVER_NAME'].$dirPlace.$fileName.'" />';
// data to Qr
$codeContents = $data_to_qr;
// generating 
QRcode::png($codeContents, $dirFullPlace, QR_ECLEVEL_H, 1);
// displaying 
// echo $code_qr;
// *************************    QR code end here   *******************
?>
