<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<style type="text/css">
    /* @extend display-flex; */
display-flex {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }

/* roboto-slab-300 - latin */

@import url('https://fonts.googleapis.com/css?family=Numans');
    html,body{
    background-image: url('https://t3.ftcdn.net/jpg/03/83/81/80/360_F_383818080_RyXyzgCAq9C2Kn6IZkBbt4iU1KGHDYhU.jpg');
    }
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 300;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Light"), local("RobotoSlab-Light"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-300.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-regular - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 400;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Regular"), local("RobotoSlab-Regular"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-regular.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
/* roboto-slab-700 - latin */
@font-face {
  font-family: 'Roboto Slab';
  font-style: normal;
  font-weight: 700;
  src: url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot");
  /* IE9 Compat Modes */
  src: local("Roboto Slab Bold"), local("RobotoSlab-Bold"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.eot?#iefix") format("embedded-opentype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff2") format("woff2"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.woff") format("woff"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.ttf") format("truetype"), url("../fonts/roboto-slab/roboto-slab-v7-latin-700.svg#RobotoSlab") format("svg");
  /* Legacy iOS */ }
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }

input, select, textarea {
  outline: none;
  appearance: unset !important;
  -moz-appearance: unset !important;
  -webkit-appearance: unset !important;
  -o-appearance: unset !important;
  -ms-appearance: unset !important; }

input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
  appearance: none !important;
  -moz-appearance: none !important;
  -webkit-appearance: none !important;
  -o-appearance: none !important;
  -ms-appearance: none !important;
  margin: 0; }

input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: none !important;
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  -o-box-shadow: none !important;
  -ms-box-shadow: none !important; }

input[type=checkbox] {
  appearance: checkbox !important;
  -moz-appearance: checkbox !important;
  -webkit-appearance: checkbox !important;
  -o-appearance: checkbox !important;
  -ms-appearance: checkbox !important; }

input[type=radio] {
  appearance: radio !important;
  -moz-appearance: radio !important;
  -webkit-appearance: radio !important;
  -o-appearance: radio !important;
  -ms-appearance: radio !important; }


img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin-bottom: 0px; }

input:-webkit-autofill {
  box-shadow: 0 0 0 30px white inset;
  -moz-box-shadow: 0 0 0 30px white inset;
  -webkit-box-shadow: 0 0 0 30px white inset;
  -o-box-shadow: 0 0 0 30px white inset;
  -ms-box-shadow: 0 0 0 30px white inset; }

h2 {
  line-height: 1.8;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #222;
  font-family: 'Roboto Slab';
  font-size: 20px;
  margin-bottom: 30px;
  text-transform: uppercase; }

h3 {
  font-weight: bold;
  color: #222;
  font-size: 15px;
  margin: 0px;
  margin-bottom: 35px; }

.clear {
  clear: both; }

body {
  font-size: 13px;
  line-height: 1.8;
  color: #fff;
  background-image: url("../images/body-bg.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  -moz-background-size: cover;
  -webkit-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  background-position: center center;
  font-weight: 400;
  font-family: 'Roboto Slab';
  margin: 0px; }

.main {
  padding: 60px 0;
  position: relative; }

.container {
  width: 586px;
  background: #fff;
  margin-left: 165px;
  border-radius: 10px;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  -o-border-radius: 10px;
  -ms-border-radius: 10px; }

.appointment-form {
  padding: 50px 60px 70px 60px; }
  .submitbtn {
  background-color: #04AA6D;
  color: white;
  padding: 20px 24px;
  margin: 12px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}


input, select {
  width: 100%;
  display: block;
  border: none;
  border-bottom: 2px solid #ebebeb;
  padding: 5px 0;
  color: #222;
  margin-bottom: 31px;
  font-family: 'Roboto Slab'; }
  input:focus, select:focus {
    color: #222;
    border-bottom: 2px solid #4966b1; }

input[type=checkbox]:not(old) {
  width: 2em;
  margin: 0;
  padding: 0;
  font-size: 1em;
  display: none; }

input[type=checkbox]:not(old) + label {
  display: inline-block;
  margin-top: 7px;
  margin-bottom: 25px; }

input[type=checkbox]:not(old) + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  margin-right: 15px;
  margin-bottom: 3px;
  border: 1px solid #ebebeb;
  background: white;
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white);
  vertical-align: bottom; }

input[type=checkbox]:not(old):checked + label > span {
  background-image: -moz-linear-gradient(white, white);
  background-image: -ms-linear-gradient(white, white);
  background-image: -o-linear-gradient(white, white);
  background-image: -webkit-linear-gradient(white, white);
  background-image: linear-gradient(white, white); }

input[type=checkbox]:not(old):checked + label > span:before {
  content: '\f26b';
  display: block;
  color: #222;
  font-size: 11px;
  line-height: 1.2;
  text-align: center;
  font-family: 'Material-Design-Iconic-Font';
  font-weight: bold; }

.label-agree-term {
  color: #999; }

.term-service {
  color: #222; }

.submit {
  width: auto;
  background: #4966b1;
  color: #fff;
  padding: 16px 17px;
  font-size: 13px;
  border: none;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  cursor: pointer;
  box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -moz-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -webkit-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -o-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7);
  -ms-box-shadow: 0px 1px 15px 0px rgba(73, 102, 177, 0.7); }
  .submit:hover {
    background: #3a518d; }

ul {
  background: 0 0;
  z-index: 9; }

ul li {
  padding: 3px 0px;
  z-index: 2;
  color: #999; }
  ul li:last-child {
    border-bottom: 1px solid #ebebeb; }

ul li:not(.init) {
  display: none;
  background: #fff;
  color: #222;
  padding: 5px 10px;
  border-left: 1px solid #ebebeb;
  border-right: 1px solid #ebebeb;
  border-top: 1px solid #ebebeb; }

ul li:not(.init):hover, ul li.selected:not(.init) {
  background: #4966b1;
  color: #fff; }

li.init {
  cursor: pointer;
  position: relative;
  border-bottom: 2px solid #ebebeb; }
  li.init:after {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    font-size: 20px;
    color: #999;
    font-family: 'Material-Design-Iconic-Font';
    content: '\f2f9'; }

#confirm_type {
  margin-bottom: 30px; }

.form-group-2 {
  margin-top: 15px;
  margin-bottom: 30px; }

.form-check {
  margin-bottom: 20px; }

.select-list {
  position: relative;
  display: inline-block;
  width: 100%;
  margin-bottom: 55px; }

.list-item {
  position: absolute;
  width: 100%; }

#confirm_type {
  z-index: 99; }

#hour_appointment {
  z-index: 9; }

@media screen and (max-width: 1024px) {
  .container {
    margin: 0 auto; } }
@media screen and (max-width: 768px) {
  .container {
    width: calc( 100% - 30px);
    max-width: 100%; } }
@media screen and (max-width: 480px) {
  .appointment-form {
    padding: 50px 30px 70px 30px; } }

</style>


<center>
    <div class="main">
     

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>แบบฟอร์มสมัครสมาชิก</h2>
                <div class="form-group-1">
               
                    <input type="text" placeholder="Username*" name="Username" id="Username" required>
                    <input type="password" placeholder="Password*" name="Password" id="Password" required><br>
                    <input type="text" placeholder="ชื่อ*" name="Name" id=" Name"required><br>
                    <input type="text" placeholder="นามสกุล*" name="Surname" id=" Name"required><br>
                    <div class="select-list">
                    <select name="Position" id="Position" >
                 <option value="1">พนักงาน</option>   
                 <option value="1">ลูกจ้าง</option>   
                 <option value="1">ผู้ใช้ทั่วไป</option>   

        </select>
         <!--input type="text" name="Position" autocomplete="off" value="" placeholder="ตำแหน่ง (ผู้ใช้ทั่วไป/พนักงาน/ลูกจ้าง)* "size="28" pattern="^[ก-๏\s]{6,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required-->
        
                     <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
            <!--input type="text" name="Office" autocomplete="off" value="" placeholder="สำนัก  "size="28" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" -->

            <select  name="Office" id="Office">
                <option value="0">สำนัก...</option>
                <option value="1">สำนักตรวจสอบภายใน</option>
                <option value="2">สำนักอำนวยการ</option>
                <option value="3">สำนักทรัพยากรมนุษย์</option>
                <option value="4">บัญชีและการเงิน</option>
                <option value="5">สำนักยุทธศาสตร์และงบประมาณ</option>
                <option value="6">สำนักเทคโนโลยีดิจิทัล</option>
                <option value="7">สำนักนิติการ</option>
                <option value="8">สำนักคดี</option>
                <option value="9">สำนักพัฒนาธุรกิจ</option>
                <option value="10">สำนักโลจิสติกส์</option>
                <option value="11">สำนักข้าว</option>
                <option value="12">สำนักเกษตร</option>
                <option value="13">สำนักสัตว์น้ำและบริหารคลัง</option>
            </select>
                </div>
                
            <select name="Partwork" id="Partwork">
                <option value="0">ส่วนงาน...</option>

                    <optgroup label="สำนักตรวจสอบภายใน">
                <option value="1">ส่วนงานตรวจสอบภายใน1</option>
                <option value="2">ส่วนงานตรวจสอบภายใน2</option>
                    </optgroup>

                    <optgroup label="สำนักอำนวยการ">
                <option value="3">ส่วนงานสารบรรณ</option>
                <option value="4">ส่วนงานเลขานุการ</option>
                <option value="5">ส่วนงานงานประชุม</option>
                <option value="6">ส่วนงานประชาสัมพันธ์</option>
                    </optgroup>

                    <optgroup label="สำนักทรัพยากรมนุษย์">
                <option value="7">ส่วนงานบริหารบุคคล</option>
                <option value="8">ส่วนงานประเมินผลและพัฒนาบุคคล</option>
                <option value="9">ส่วนงานเงินเดือนและสวัสดิการ</option>
                    </optgroup>

                    <optgroup label="สำนักบัญชีและการเงิน">
                <option value="10">ส่วนงานรายได้และลูกหนี้</option>
                <option value="11">ส่วนงานการเงิน</option>
                <option value="12">ส่วนงานบัญชีและรายงาน</option>
                <option value="13">ส่วนงานบัญชีสินค้าและต้นทุน</option>
                    </optgroup>

                    <optgroup label="สำนักยุทธศาสตร์และงบประมาณ">
                <option value="14">ส่วนงานวางแผนยุทศาสตร์</option>
                <option value="15">ส่วนงานงบประมาณ</option>
                <option value="16">ส่วนงานบริหารความเสี่ยงและควบคุมภายใน</option>
                <option value="17">ส่วนงานพัสดุ</option>
                    </optgroup>

                    <optgroup label="สำนักเทคโนโลยีดิจิทัล">
                <option value="18">ส่วนงานพัฒนาเทคโนโลยี</option>
                <option value="19">ส่วนงานอุปกรณ์และเครือข่าย</option>
                    </optgroup>

                    <optgroup label="สำนักนิติการ">
                <option value="20">ส่วนงานที่ปรึกษากฎหมาย</option>
                <option value="21">ส่วนงานบริหารสัญญา</option>
                <option value="22">ส่วนงานวนัย</option>
                    </optgroup>

                    <optgroup label="สำนักคดี">
                <option value="23">ส่วนงานคดีแพ่งและปกครอง1</option>
                <option value="24">ส่วนงานคดีแพ่งและปกครอง2</option>
                <option value="25">ส่วนงานคดีอาญา</option>
                <option value="26">ส่วนงานบังคับคดี</option>
                    </optgroup>

                    <optgroup label="สำนักพัฒนาธุรกิจ">
                <option value="27">ส่วนงานการตลาดออนไลน์และออฟไลน์</option>
                <option value="28">ส่วนงานพัฒนาผลิตภัณฑ์</option>
                <option value="29">ส่วนงานผู้ประกอบการจำหน่ายอาหาร</option>
                    </optgroup>

                    <optgroup label="สำนักโลจิสติกส์">
                <option value="30">ส่วนงานร้านค้า</option>
                <option value="31">ส่วนงานบริหารการขนส่ง</option>
                <option value="32">ส่วนงานปศุสัตว์</option>
                <option value="33">ภาครัฐและเอกชน</option>
                    </optgroup>

                    <optgroup label="สำนักข้าว">
                <option value="34">ส่วนงานข้าวหอม</option>
                <option value="35">ส่วนงานข้าวสาร</option>
                <option value="36">ส่วนงานข้าวชนิดพิเศษ</option>
                <option value="37">ส่วนงานโครงการรัฐ</option>
                    </optgroup>
                   
                    <optgroup label="สำนักเกษตร">
                <option value="38">ส่วนงานเกษตร1</option>
                <option value="39">ส่วนงานเกษตร2</option>
                <option value="40">ส่วนงานเกษตร3</option>
                    </optgroup>

                    <optgroup label="สำนักสัตว์น้ำและบริหารคลัง">
                <option value="41">ส่วนงานคลัง1และภูมิภาค</option>
                <option value="42">ส่วนงานคลัง2</option>
                <option value="43">ส่วนงานสัตว์น้ำ</option>
                    </optgroup>
            </select>
                </div>
                        <center>
                        <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
            <!--input type="text" name="Work" autocomplete="off" value="" placeholder="งาน  "size="28" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" -->
          <div>
            <select name="Work" id="Work">
                <option value="0">งาน...</option>
                <option value="1">(ไม่มี)</option>
            <optgroup label="สำนักทรัพยากรมนุษย์">
                <option value="2">งานประเมินผลและพัฒนาบุคคล</option>
                <option value="3">งานศูนย์บริการการต่อต้านทุจริตและบริการประชาชน</option>
            </optgroup>
            <optgroup label="สำนักนิติการ">
                <option value="4">งานสืบสวนสอบสวน</option>
            </optgroup>
            <optgroup label="สำนักเกษตร">
                <option value="5">งานสัญญาซื้อขาย</option>
                <option value="6">งานปิดบัญชีโครงการ</option>
                <option value="7">งานปิดบัญชี</option>
                <option value="8">งานค่าใช้จ่าย</option>
                <option value="9">งานคดีและอื่นๆ</option><br>
            
               
              
            </optgroup>
            </select>
                </div><br>
                <label for="psw-repeat"><b>เบอร์โทร</b></label>
                <input type="text" placeholder="เบอร์โทร*" name="Tel" id=" Name"required><br>
                <label for="psw-repeat"><b>Email</b></label>
                <input type="text" placeholder="Email*" name="Email" id=" Name"required><br>
                 </center>
                        <div class="input-group form-group">
            <div class="input-group-prepend">
            
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
            

                <button type="submit" class="submitbtn">Submit</button>
                <button type="submit" class="submitbtn">Refesh</button>
            </form>
        </div>

    </div>
</center>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>