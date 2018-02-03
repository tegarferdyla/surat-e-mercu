
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS Ticket</title>
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<style>

.notice{
	background-color: #333333;
	color: #FFFFFF;
	padding: 15px 0;
	text-align: center;
	font-weight: bold;
	border: 1px solid;
	border-color: black;
}
body {
		-webkit-print-color-adjust: exact;
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
}
.cut{
	border-style: dashed;
	width: 700px;
	margin: 0px auto;
}
.ticket {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  width: 700px;
  margin: 0px auto;
}
.ticket .stub,
.ticket .check {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
.stub {
  background: #ef5658;
  height: 250px;
  width: 307px;
  color: white;
  padding: 20px;
  position: relative;
}
.stub:before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  border-top: 20px solid #dd3f3e;
  border-left: 20px solid #ef5658;
  width: 0;
}
.stub:after {
  content: '';
  position: absolute;
  bottom: 0;
  right: 0;
  border-bottom: 20px solid #dd3f3e;
  border-left: 20px solid #ef5658;
  width: 0;
}
.stub .top {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 40px;
  text-transform: uppercase;
}
.stub .top .line {
  display: block;
  background: #fff;
  height: 40px;
  width: 3px;
  margin: 0 20px;
}
.stub .top .num {
  font-size: 16px;
}
.stub .top .num span {
  color: #000;
}
.stub .number {
  position: absolute;
  left: 40px;
  font-size: 150px;
}
.stub .invite {
  position: absolute;
  left: 150px;
  bottom: 45px;
  color: #000;
  width: 20%;
}
.stub .invite:before {
  content: '';
  background: #fff;
  display: block;
  width: 40px;
  height: 3px;
  margin-bottom: 5px;
}
.check {
  background: #2D5F73;
  height: 250px;
  width: 450px;
  padding: 21px;
  position: relative;
}
.check:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  border-top: 20px solid #dd3f3e;
  border-right: 20px solid #fff;
  width: 0;
}
.check:after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  border-bottom: 20px solid #dd3f3e;
  border-right: 20px solid #fff;
  width: 0;
}
.check .big {
  font-size: 30px;
  font-weight: 900;
  line-height: .8em;
}
.check .number {
  top: 50px;
  right: 50px;
  color: #fff;
  font-size: 40px;
}
.check .info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  font-size: 12px;
  margin-top: 20px;
  width: 100%;
}
.check .info section {
  margin-right: 50px;
}
.check .info .title:after {
  content: '';
  background: #ef5658;
  display: block;
  width: 40px;
  height: 3px;
  margin-bottom: 5px;
}
.check .info section .title {
  font-size: 10px;
  text-transform: uppercase;
}

</style>
  
</head>

<body>
<div class="notice">Print dan bawa tiket ini untuk ditukarkan dengan surat Kerja Praktek/Riset Tugas Akhir di Tata Usaha</div>
<div class="body"></div>
  <!-- CSS Ticket inspired by -->
<!-- https://dribbble.com/shots/2677752-Dribbble-invite-competition -->
<center>
<i style="display: block; margin:auto; padding-top: 20px; "; class="fas fa-cut fa-lg"></i>
</center>
<div class="cut">
<div class="ticket">
  <div class="stub">
    <div class="top">
      <span class="admit">E-SURAT</span>
      <span class="line"></span>
      <span class="num">
       Kerja Pratek
      </span>
    </div>
    <div class="number"><img src="<?php echo base_url('assets/image/logomercu.png') ?>" width="200" alt=""></div>
  </div>
  <div class="check">
    <div class="big">
      Mohammad Dirsza Safiro Asyari
    </div>
    <div class="number">41814010058</div>
    <div class="info">
      <section>
        <div class="title">Tanggal Dibuat</div>
        <div>4/27/2016</div>
      </section>
      <section>
        <div class="title">Jumlah Anggota</div>
        <div>3</div>
      </section>
      <section>
        <div class="title">Terserah mau nambahin apa</div>
        <div>31415926</div>
      </section>
    </div>
  </div>
</div>
  </div>
  <center>
  <i style="display: block; margin:auto; "; class="fas fa-cut fa-lg fa-rotate-180"></i>
</center>
</body>

</html>
