<?php

//error_reporting(E_ALL);
//ini_set("display_errors", 1);


require_once 'meekrodb.php';
require_once 'PHPMailer/PHPMailerAutoload.php';
include_once 'config.inc.php';

//Error checking
$err = false;
$err_message ="";
//DB error handle setup
DB::$error_handler = false; // since we're catching errors, don't need error handler
DB::$throw_exception_on_error = true;

if (!empty($_POST)){ //chk post var
    //checking file is ok! and then insert into database
    if ($_FILES["proposaldoc"]["error"] > 0){
      $err = true;
      $err_message .= "Fileupload error : " . $_FILES["proposaldoc"]["error"] . "<br>";
    }else{
      //no Fileupload error going to move file to /files

      //setup name & comde
      $last_id = DB::queryFirstField("SELECT MAX(id) FROM data");
      $last_id += 1;
      $target_extension = substr(strrchr($_FILES["proposaldoc"]["name"], "."), 1);
      $target_filename = $last_id."-".mb_substr($_POST["title"],0,30,'UTF-8').".".$target_extension;
      $target_filepath = "files/".$target_filename;
      $_POST['uploadname']=$target_filename;
      $code = $last_id.date("dmy");
      $_POST['code'] = $code;

      try{
        if(!move_uploaded_file($_FILES["proposaldoc"]["tmp_name"],$target_filepath)){
          throw new RuntimeException('Failed to move uploaded file.');
        }else{
          //move no erroor insert database
          try{
            DB::insert('data', $_POST);
            $submittedtime = date("Y-m-d h:i:sa");
          }catch(MeekroDBException $e) {
            //insert error coz re-submit in same proposal
            $err_message .= "Database Error : " . $e->getMessage() . " ชื่อข้อเสนอโครงการนี้มีอยู่แล้ว<br /><strong>\"".$_POST["title"]."\"</strong>"; // something about duplicate keys
            $err = true;
          }
        }
      }catch (RuntimeException $e){
        //move file error sending message to user.
        $err_message .= "Move Error : ".$e->getMessage()."<br>";
        $err = true;
      }
    }
    //mail to user
if(!$err){
    $mail = new PHPMailer;

    $mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->CharSet = "utf-8";
    $mail->isSMTP();
                                 // Set mailer to use SMTP
    $mail->Host = 'imsa.hsri.or.th';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    //$mail->SMTPSecure = 'ssl';
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->Port = 26;                                    // TCP port to connect to

    $mail->setFrom('hsri@hsri.or.th');
    $mail->addAddress($_POST["email"]);     // Add a recipient

    $mail->addReplyTo('hsri@hsri.or.th');
    $mail->addCC('hsri@hsri.or.th');



    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'ท่านส่งข้อเสนอโครงการเรียบร้อยแล้ว';
    $mail->Body    = "เราได้รับข้อเสนอโครงการ \"".$_POST["title"]."\" เรียบร้อยแล้ว<br>โปรดระบุรหัสด้านล่างเมื่อต้องการติดต่อ สวรส.<br><br>
    code : <strong>".$code."</strong> <br> สอบถามข้อมูลเพิ่มเติมได้ที่ คุณสุรางค์รัตน์ โทรศัพท์ 02 832 9257 Email surangrat@hsri.or.th หรือคุณพัชราภรณ์ โทรศัพท์ 02 832 9224 Email patcharaporn@hsri.or.th<br>has sumitted on ".$submittedtime;
    $mail->AltBody = "เราได้รับข้อเสนอโครงการ \"".$_POST["title"]."\" เรียบร้อยแล้ว โปรดระบุรหัส เมื่อต้องการติดต่อ สวรส.code : ".$code."  สอบถามข้อมูลเพิ่มเติมได้ที่ คุณสุรางค์รัตน์ โทรศัพท์ 02 832 9257 Email surangrat@hsri.or.th หรือคุณพัชราภรณ์ โทรศัพท์ 02 832 9224 Email patcharaporn@hsri.or.th";

    if(!$mail->send()) {
        $mess_mail = 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $mess_mail =  'Message has been sent to '.$_POST["email"];
    }
}



/*    if(!$err){
      $strSubject = "=?UTF-8?B?".base64_encode("ส่งข้อเสนอโครงการเรียบร้อย")."?=";
      $strHeader .= "MIME-Version: 1.0' . \r\n";
      $strHeader .= "Content-type: text/html; charset=utf-8\r\n";
      $strHeader .= "Cc: hsri@hsri.or.th\r\n";
      $strHeader .= "From: no-reply@hsri.or.th";
      $strMess = "เราได้รับข้อเสนอโครงการ \"".$_POST["title"]."\" เรียบร้อยแล้ว<br>โปรดระบุรหัสด้านล่างเมื่อต้องการติดต่อ สวรส.<br><br>
      code : <strong>".$code."</strong> <br> สอบถามข้อมูลเพิ่มเติมได้ที่ คุณสุรางรัตน์ โทรศัพท์ 02 832 9257 Email surangrat@hsri.or.th หรือคุณพัชราภรณ์ โทรศัพท์ 02 832 9224 Email patcharaporn@hsri.or.th";
      mail($_POST['email'],$strSubject, $strMess, $strHeader);
    }*/
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>สวรส.ระบบรับข้อเสนอโครงการวิจัยในปีงบประมาณ 2561</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="theme.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti&subset=thai">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="scriptlocal.js"></script>
</head>
<body>
  <div class="container-fluid" id="topPage">

      <section class="container">
        <div class="page-header">
            <img class="img-responsive" src="logo.png" alt="hsri logo" width="435" height="75" />
            <h2>โปรแกรมรับข้อเสนอโครงการปี 2561</h2>
        </div>
      <div class="container-page">
        <div class="row">
          <div class="col-md-4 col-lg-12">
              <?php
              if($err){
              ?>
              <div class="panel panel-danger">
                <div class="panel-heading">ข้อมูลผิดพลาด</div>
                <div class="panel-body text-center">
                  <p>
                    <strong class="text-danger"><?=$err_message?></strong>
                  </p>
                  <button class="btn btn-danger" onclick="window.history.back()">Back</button>
                </div>
              </div>
              <?php
                }else{
              ?>
              <div class="panel panel-success">
                <div class="panel-heading">ส่งข้อมูลสำเร็จ!!</div>
                <div class="panel-body text-center">
                  <p>
                    ระบบได้รับข้อมูลเรียบร้อยแล้ว<br> โปรดระบุรหัสด้านล่างเมื่อต้องการติดต่อ สวรส.<br><br>
                    code : <strong><?=$code?></strong>
                    <br/>
                    <?php
                      echo $mess_mail;
                     ?>
                     <br />submitted on <?$submittedtime?>
                  </p>
                </div>
              </div>

              <?php
                }
              ?>
          </div>
        </div>
      </div>
<footer class="col-lg-12 text-center">
  <br>
  <a class="up-arrow" href="#topPage" data-toggle="tooltip" title="TO TOP">
<span class="glyphicon glyphicon-chevron-up"></span></a><br><br>
  <p>สอบถามข้อมูลเพิ่มเติมได้ที่ คุณสุรางค์รัตน์ โทรศัพท์ 02 832 9257 Email surangrat@hsri.or.th หรือคุณพัชราภรณ์ โทรศัพท์ 02 832 9224 Email patcharaporn@hsri.or.th</p>
  <p class="text-info">power by bootstrap</p>
</footer>
</section>
</div>
</body>
</html>
