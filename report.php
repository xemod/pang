<?php
/*
* โปรแกรมส่งบทความวิจัยของ สวรส.
*/
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
        <?php
          if(isset($_GET) && $_GET["pass"]=="55555")
        ?>

        <div class="panel panel-info">
            <h3>รายงานการส่งข้อเสนอ</h3>
        </div>

  			<div class="col-md-6 col-lg-6">


        </div>
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
