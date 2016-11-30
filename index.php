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
            <h2>โปรแกรมรับข้อเสนอโครงการปี 25601</h2>
        </div>
  		<div class="container-page">
        <div class="panel panel-info">
          <div class="panel-heading"><h3>ขั้นตอนที่ 1 </h3></div>
          <div class="panel-body">
              <p><strong class="text-warning">(ถ้าท่านเตรียมไฟล์มาเรียบแล้วแล้วข้ามไปขั้นตอนที่ 2)</strong> Download แบบฟอร์ม Proposal จากลิงก์ด้านล่าง กรอกข้อมูลในแบบฟอร์มให้เรียบร้อย แล้วอัพโหลดไฟล์  Proposal กลับเข้ามาในระบบพร้อมทั้งกรอกข้อมูลในแบบฟอร์มออนไลน์ขั้นตอนที่ 2 ให้เรียบร้อย
              </p>
               <a onclick="javascript:onDownload()" class="btn btn-info btn-lg" role="button">
                 <span class="glyphicon glyphicon-download"></span> Download form
               </a>
          </div>
        </div>

  			<div class="col-md-6 col-lg-6">
          <form role="form" action="complete.php" method="post" enctype="multipart/form-data" id="proposalfm">
  				<h3>ขั้นตอนที่ 2 รายละเอียดโครงการ<Small class="text-danger"> *กรอกข้อมูลให้ครบ</small></h3>

  				<div class="form-group col-lg-12">
  					<label>ชื่อ-สกุล หัวหน้าโครงการ *</label>
  					<input type="text" name="name" class="form-control" id="name" value="" required>
  				</div>

  				<div class="form-group col-lg-6">
  					<label>หน่วยงาน *</label>
  					<input type="text" name="workplace" class="form-control" id="workplace" value="" required>
  				</div>

  				<div class="form-group col-lg-6">
  					<label>ที่อยู่ส่งไปรษณีย์ *</label>
  					<input type="text" name="address" class="form-control" id="address" value="" required>
  				</div>

  				<div class="form-group col-lg-6">
  					<label>โทรศัพท์มือถือ * 0x-xxxx-xxxx</label>
  					<input type="text" name="mobilephone" class="form-control" id="mobilephone" value="" placeholder="รูปแบบ 0x-xxxx-xxxx"  required>
  				</div>

  				<div class="form-group col-lg-6">
  					<label>อีเมล์ *</label>
  					<input type="email" name="email" class="form-control" id="email" value=""  required>
  				</div>

          <div class="col-lg-12 col-md-12">
              <h4><strog class="text-primary"><span class="glyphicon glyphicon-book"></span> ข้อมูลข้อเสนอโครงการ</strong></h4>
          </div>

          <div class="form-group col-lg-12">
            <label>ชื่อโครงการภาษาไทย *</label>
            <input type="text" name="title" class="form-control" id="title" value=""  required>
          </div>
          <div class="form-group col-lg-12">
            <label>ชื่อโครงการภาษาอังกฤษ *</label>
            <input type="text" name="etitle" class="form-control" id="etitle" value=""  required>
          </div>
          <div class="form-group col-lg-12">
            <label>ความสอดคล้องกับประเด็นวิจัย *(เลือกได้มากกว่า 1 ข้อ) *</label>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="return1" id="retrun1">1. ด้านนโยบาย
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="return2" id="retrun2">2. ด้านสาธารณะ
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="return3" id="retrun3">3. ด้านพาณิชย์
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="return4" id="retrun4">4. ด้านชุมชนและพื้นที่
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="return5" id="retrun5">5. ด้านวิชาการ
            </div>
          </div>
          <div class="form-group col-lg-12">
            <label>ไฟล์ข้อเสนอ *</label>
            <input type="file" name="proposaldoc" class="form-control" id="proposaldoc" accept=".doc,.docx,.odt" required >
          </div>


  			</div>


  			<div class="col-md-6">
  				<h3>ข้อมูลและการติดต่อ</h3>
  				<ul class="list-group">
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span> การส่งข้อเสนอโครงการ(proposal)ต้องกรอกฟอร์มขั้นตอนที่ 1,2 ให้เรียบร้อยก่อนส่ง</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-ok-circle"></span> ขนาดไฟล์ข้อเสนอฯ ไม่ควรเกิน <strong class="bg-warning"><span class="glyphicon glyphicon-floppy-disk"></span> 500kb</strong></li>
              <li class="list-group-item"><span class="glyphicon glyphicon-warning-sign"></span> การส่งข้อเสนอโครงการจะสำเร็จเมื่่อท่านได้รับอีเมล์ตอบรับจากระบบเท่านั้น</li>
              <li class="list-group-item"><span class="glyphicon glyphicon-warning-sign"></span> ข้อเสนอโครงการจะมีเลขประจำตัว(ID) เมื่อติดต่อกับผู้เกี่ยวข้องควรแจ้ง ID ทุกครั้งเพื่อความสะดวก</li>
  				</ul>
          <div class="panel panel-warning">
              <div class="panel-heading"><span class="glyphicon glyphicon-warning-sign"></span> Warning!</div>
              <div class="panel-body"><p class="text-warning">สวรส. ขอสงวนสิทธิรับพิจารณาเฉพาะข้อเสนอโครงการที่มีรายละเอียดครบถ้วนสมบูรณ์ตามที่กำหนดไว้เท่านั้น</p>
              </div>
          </div>
  				<button type="submit" id="i-submit" class="btn btn-primary btn-lg">ส่งข้อเสนอ!</button>
          <button type="reset" class="btn btn-default btn-lg">ล้างข้อมูล</button>
  			</div>
  		</div>
    </from>
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
