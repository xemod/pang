<?php
require_once 'meekrodb.php';
include_once 'config.inc.php';

//Error checking
$err = fale;

DB::$error_handler = false; // since we're catching errors, don't need error handler
DB::$throw_exception_on_error = true;

if (!empty($_POST)){

    $target_filename = "files/".$_POST["title"].".".$_FILES["proposaldoc"]["type"];


    if(move_uploaded_file($_FILES["proposaldoc"]["tmp_name"],$target_filename)){
      $_POST["uploadname"] = $target_filename;
      $err = fals;//no error
    }else {
      $err = true;
    }



  try{
    DB::insert('data', $_POST);
  }catch(MeekroDBException $e) {
    $err_message .= "Error: " . $e->getMessage() . "<br>\nข้อมูลซ้ำ..ตรวจสอบสถานะได้จาก email ของท่าน"; // something about duplicate keys
    $err = true;
  }
}

//DB::query("SELCT * FROM accounts"); // misspelled SELECT
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>สวรส.ระบบรับข้อเสนอโครงการวิจัยในปีงบประมาณ 2560</title>
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
            <h2>โปรแกรมรับข้อเสนอโครงการปี 2560</h2>
        </div>
      <div class="container-page">
          <pre>
            <?php print_r($_POST); ?>
          </pre>
      </div>
<footer class="col-lg-12 text-center">
  <br>
  <a class="up-arrow" href="#topPage" data-toggle="tooltip" title="TO TOP">
<span class="glyphicon glyphicon-chevron-up"></span></a><br><br>
  <p>ติดต่อ hsri@hsri.or.th โทรศัพท์ 0-2832-9200 แฟกซ์ 0-2832-9201</p>
  <p class="text-info">power by bootstrap</p>
</footer>
</section>
</div>
</body>
</html>
