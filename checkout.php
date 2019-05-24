<?php
header('Content-Type: application/json');
require_once('config.php'); // โหลดไฟล์ config การตั้งค่า Public key / Secret key

$charge = OmiseCharge::create(array(
    'return_uri' => 'https://www.google.com',  // หลังจากชำระเงินเสร็จให้ไปหน้าไหน
    'amount'   => $_POST['amount'], // จำนวนเงินที่รับมาจากหน้าเว็บ
    'currency' => $_POST['currency'], // สกุลเงิน
    'source'=> $_POST['source_id']  // id การชำระ
  ));
  
  if ($charge['status'] == 'pending') { // ตรวจสถานะ
    echo json_encode(array('status' => 'success','url'=> $charge['authorize_uri'])); // สร้าง url ชำระเงินส่งกลับไปหน้าเว็บ
  } else {
 
  }
  
?>