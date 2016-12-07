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
  <style>

body {
  background-color:#fff;
  -webkit-font-smoothing: antialiased;
  font: normal 14px loma,tahoma,sans-serif;
}

.container {
    padding: 25px;
}

.form-login {
    background-color: #EDEDED;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
}

h4 {
 border:0 solid #fff;
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}

.wrapper {
    text-align: center;
}
.center-block
{float: none !important}
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	color:#666;
	font-size:13px!important;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;

	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr {
	text-align: center;
	padding-left:20px;
}
table td:first-child {
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;

	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
	border-bottom:0;
}
table tr:last-child td:first-child {
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td {
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);
}
  </style>
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
        <div class="panel-group">
          <div class="panel panel-info">
            <div class="panel-heading"><h3>รายงานการส่งข้อเสนอ</h3></div>
          </div>
        </div>

  			<div class="col-md-12 col-lg-12">
          <?php
          ///////////////////////////////////////////////////
            if(isset($_POST) && $_POST["pass"]=="55555"){

              require_once 'meekrodb.php';
              include_once 'config.inc.php';

              DB::$error_handler = false; // since we're catching errors, don't need error handler
              DB::$throw_exception_on_error = true;

              //query
              $results = DB::query("SELECT * FROM data");
              echo "<table id=\"report\"><thead>
              <tr>
                <th>#</th>
                <th>Code</th>
                <th>Title</th>
                <th>Name</th>
                <th>Tel</th>
                <th>Email</th>
                <th>File</th>
                <th>Submited</th>
              </tr>
              </thead>";
              echo "<tbody>";

              foreach ($results as $row) {
                echo "<tr><td>". $row['id'] . "</td>\n";
                echo "<td>". $row['code'] . "</td>\n";
                echo "<td>". $row['title'] . "</td>\n";
                echo "<td>". $row['name'] . "</td>\n";
                echo "<td>". $row['mobilephone'] . "</td>\n";
                echo "<td>". $row['email'] . "</td>\n";
                echo "<td><a href=\"files/". $row['uploadname'] . "\" title=\"ดาวน์โหลดไฟล์\"><span class=\"glyphicon glyphicon-floppy-disk\" >ดาวน์โหลด</span></a></td>\n";
                echo "<td>". $row['createtime'] . "</td></tr>\n";

              }
              echo "</tbody></table>";
              echo "<div class=\"wrapper\"><button class=\"btn btn-primary\" onclick=\"window.location.href='report.php'\">Logout</button></div>";
          //////////////////////////////////////////////////
            }else{
              //echo box password
          ?>
          <form method="post" name="report" />
          <div class="row">
            <div class="col-md-6 col-lg-6 center-block">
              <div class="form-login">
                <h4>ป้อนรหัส<?php if($_POST["pass"])echo " - รหัสผ่านผิด"; ?></h4>
                  <input name="pass" type="text" id="pass" class="form-control input-sm chat-input" placeholder="password" />
                  </br>
                  <div class="wrapper">
                    <span class="group-btn">
                        <button class="btn btn-primary btn-md" value="login" type="submit">login</button>
                    </span>
                  </div>
              </div>
            </div>
          </div>
          </from>
          <?php
            }
          ?>


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
