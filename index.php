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
        <div class="panel panel-info">
          <div class="panel-heading"><h3>ข้อมูลและการติดต่อ</h3></div>

       </div>

  			<div class="col-md-6 col-lg-6">
        sxxxxx
        </div>

        <div class="form-group  col-lg-12">
          <label>หน่วยงานผู้ใช้ประโยชน์จากงานวิจัย*</label>
          <input name="orgbenefit" class="form-control" type="text"  required>
        </div>

        <div class="form-group  col-lg-12">
          <label>ระยะเวลาการดำเนินงาน*</label>
          <input name="doyear" class="form-control txtcard" placeholder="ปี" type="number" pattern="[0-9]{10}" required>
          <input name="domonth" class="form-control txtcard" placeholder="เดือน" type="number" pattern="[0-9]{10}">
        </div>

        <div class="form-group col-lg-12">
          <label>งบประมาณ *</label>
          <input type="number" name="cost" class="form-control" id="cost" value=""  pattern="[0-9]{10}"  step="100" required>
        </div>


  <div class="form-group col-lg-12">
   <strong>ท่านได้ส่งข้อเสนอฯ เรื่องนี้ ไปแหล่งทุนอื่นด้วยหรือไม่? *</strong>
   <div class="radio">
     <label class="radio-inline">
         <input type="radio" value="0" name="sendother" id="sendother1" checked>ไม่
     </label>
     <label class="radio-inline">
         <input type="radio" value="1" name="sendother" id="sendother2">ใช่
     </label>
   </div>
   <label>ถ้าใช่โปรดระบุหน่วยงาน</label>
     <input type="text" name="sendothertxt" class="form-control" id="sendothertxt" placeholder="ระบุหน่วนงาน">
   </div>

   <div class="form-group col-lg-12">
    <strong>หน่วยงานร่วมลงทุนวิจัยหรือ Matching fund *</strong>
    <div class="radio">
      <label class="radio-inline">
          <input type="radio" value="0" name="matchingfund" id="matchingfund1" checked>ไม่มี
      </label>
      <label class="radio-inline">
          <input type="radio" value="1" name="matchingfund" id="matchingfund2">มี
      </label>
    </div>
    <label>ถ้ามี่โปรดระบุหน่วยงาน</label>
      <input type="text" name="matchingfundtxt" class="form-control" id="matchingfundtxt" placeholder="ระบุหน่วนงาน">
    </div>

   <div class="form-group col-lg-12">
     <label><span class="glyphicon glyphicon-floppy-disk" >ไฟล์ข้อเสนอ *</span></label>
     <input type="file" name="proposaldoc" class="form-control" id="proposaldoc" accept=".doc,.docx,.odt" required >
   </div>

</div>


  			<div class="col-md-6">
          <div class="form-group col-lg-12">
            <label class="text-info">ความสอดคล้องกับประเด็นวิจัย *(เลือกได้มากกว่า 1 ข้อ) *</label>
            <p>1) ระบบยาและเวชภัณฑ์</p>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch1" id="ch1">1.1) ระบบติดตามประเมินการบริโภคยาต้านจุลชีพ ในระดับประเทศ (ผู้ประกอบการ ผู้สั่งใช้ยา จนถึงระดับประชาชน)
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch2" id="ch2">1.2) การใช้ยาอย่างสมเหตุผล</input>
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch3" id="ch3">1.3) การประเมินความคุ้มค่าทางเศรษฐศาสตร์ของยา (รวมทั้งวัคซีน) ที่จะนำเข้าสู่บัญชียาหลักแห่งชาติ</input>
            </div>
            <br />
            <p>2) ระบบเทคโนโลยี</p>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch4" id="ch4">2.1) การนำดิจิทัลเทคโนโลยี มาใช้ประโยชน์ในระบบสุขภาพ</input>
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch5" id="ch5">2.2) การถ่ายทอดเทคโนโลยีนวัตกรรมมาใช้ประโยชน์ในระบบสุขภาพ</input>
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch6" id="ch6">2.3) การลดอุบัติการณ์ของการเกิดอาการที่ไม่พึงประสงค์จากการใช้ยา ในระบบบริการ ด้วยความรู้ทางเภสัชพันธุศาสตร์ (Genomic medicine)</input>
            </div>
            <br />
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch7" id="ch7">3)การพัฒนากำลังคนที่บริการและสนับสนุนระบบบริการปฐมภูมิ</input>
            </div>
            <br />
            <div class="checkbox">
            <p>4) การสำรวจสภาวะสุขภาพ</p>
              <label></label>
                  <input type="checkbox" value="1" name="ch8" id="ch8">4.1) การสำรวจสภาวะตาบอด สายตาเลือนราง และโรคตาที่เป็นปัญหาสาธารณสุข</input>
            </div>
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch9" id="ch9">4.2) การสำรวจสุขภาพประชาชนไทย (Health exam survey)</input>
            </div>
            <br />
            <div class="checkbox">
              <label></label>
                  <input type="checkbox" value="1" name="ch10" id="ch10">5) มาตรฐานระบบข้อมูลสารสนเทศสุขภาพ</input>
            </div>

            <div class="checkbox">

              <label></label>
                  <input type="checkbox" value="1" name="ch11" id="ch11">6) ระบบบริการปฐมภูมิเขตเมือง ท้องถิ่น และท้องถิ่นรูปแบบพิเศษ</input>
            </div>

            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch12" id="ch12">7) ระบบการบริการที่มีคุณภาพและปลอดภัย และระบบการจัดการและการช่วยเหลือเบื้องต้น เมื่อเกิดข้อผิดพลาดทางการแพทย์</input>
            </div>

            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch13" id="ch13">8) สิทธิประโยชน์ในระบบหลักประกันสุขภาพ</input>
            </div>


            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch14" id="ch14">9) การพัฒนากระบวนการดูแลรักษาระดับพื้นที่จังหวัด/ เขต ด้วยกลไก R2P (Routine to Policy)</input>
            </div>


            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch15" id="ch15">10) การสร้างความกลมกลืนคุณภาพบริการ ประสิทธิภาพ ความเป็นธรรม ความยั่งยืน และความพอเพียง ทางการคลัง ของระบบหลักประกันสุขภาพ ในประเทศไทย</input>
            </div>

            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch16" id="ch16">11) เขตสุขภาพเพื่อประชาชน</input>
            </div>

            <div class="checkbox">
            <label></label>
                  <input type="checkbox" value="1" name="ch17" id="ch17">12) Migrant Health และการปรับปรุงระบบหลักประกันสุขภาพ สำหรับคนต่างด้าวในประเทศไทย</input>
            </div>

            <div class="checkbox">

            <label></label>
                  <input type="checkbox" value="1" name="ch18" id="ch18">13) กลุ่มประชากรต่างๆที่ได้รับผลจากการกำหนดด้วยรัฐธรรมนูญ กฎหมาย และมติ ครม.ที่เกี่ยวข้อง</input>
            </div>

            <div class="checkbox">

            <label></label>
                  <input type="checkbox" value="1" name="ch19" id="ch19">14) ความรอบรู้ด้านสุขภาพ (health literacy)</input>
            </div>

          </div>


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
