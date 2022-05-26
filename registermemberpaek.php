<!--?php echo "<script>"; echo "alert(\"[ เจ้าหน้าที่ , พนักงาน , ลูกจ้าง ] กรุณาติดต่อ สำนักเทคโนโลยีสารสนเทศ หลังจากสมัครสมาชิกเรียบร้อยแล้ว เพื่อเข้าใช้ระบบ IT Support Service\");"; 
echo "</script>";?-->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <!--Made with love by Mutiullah Samim -->
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
      /* Made with love by Mutiullah Samim*/
    @import url('https://fonts.googleapis.com/css?family=Numans');
    html,body{
    background-image: url('http://getwallpapers.com/wallpaper/full/7/c/6/765090-most-popular-technology-background-images-1920x1080-hd-for-mobile.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }
    .container{
    height: 100%;
    align-content: center;
    }
    .card{
    height: 660px;
    margin-top: 100px;
    margin-bottom: auto;
    width: 400px;
    background-color: rgba(0,0,0,0.5) !important;
    }
    .social_icon span{
    font-size: 60px;
    margin-left: 10px;
    color: #FFC312;
    }
    .social_icon span:hover{
    color: white;
    cursor: pointer;
    }
    .card-header h3{
    color: white;
    }
    .social_icon{
    position: absolute;
    right: 20px;
    top: -45px;
    }
    .input-group-prepend span{
    width: 50px;
    background-color: #FFC312;
    color: black;
    border:0 !important;
    }
    input:focus{
    outline: 0 0 0 0  !important;
    box-shadow: 0 0 0 0 !important;
    }
    .remember{
    color: white;
    }
    .remember input
    {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
    }
    .login_btn{
    color: black;
    background-color: #CACFD2;
    width: 170px;
    }
    .login_btn2{
    color: black;
    background-color: #CACFD2;
    width: 170px;
    }
    .login_btn:hover{
    color: black;
    background-color: white;
    }
    .links{
    color: white;
    }
    .links a{
    margin-left: 4px;
    }
    </style>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){

   $("#Username").keyup(function(){

      var Username = $(this).val().trim();
    
      if(Username != ''){


         $.ajax({
            url: 'check.php',
            type: 'post',
            data: {Username: Username},
            success: function(response){


                $('#uname_response').html(response);

             }
         });
      }else {

         $("#uname_response").html("");

      }

    });

 });
</script>
  </head>
<body ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false" > <!--nocop ----> 
    <div class="container">
      <div class="d-flex justify-content-center h-100">
        <div class="card">
          <div class="card-header">
            <span class="glyphicon glyphicon-lock"> </span>
            <h3>แบบฟอร์มสมัครสมาชิก</h3>
            <div class="d-flex justify-content-end social_icon"> 
            </div>
        </div>
          <div class="card-body">


        <form action="insertregismem.php" method="POST" class="form-horizontal">
            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>  
                    <input type="text" id="Username" name="Username"  autocomplete="off" value="" placeholder="Username * "  size="28" required> 
                   <div id="uname_response" ></div> <br />
                </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>              
                    <input type="password" name="Password" value="" placeholder="Password * " size="28"  required> 
                </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>      
                    <input type="text" name="Firstname" autocomplete="off" value="" placeholder="ชื่อ * "size="28"  pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required>
                </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
            <input type="text" name="Lastname" autocomplete="off" value="" placeholder="นามสกุล * "size="28" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required>
                </div>
                     <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
                <select name="Position" id="Position" >
                 <option value="1">พนักงาน</option>   
                 <option value="1">ลูกจ้าง</option>   
                 <option value="1">ผู้ใช้ทั่วไป</option>   

                </select>



                <!--input type="text" name="Position" autocomplete="off" value="" placeholder="ตำแหน่ง (ผู้ใช้ทั่วไป/พนักงาน/ลูกจ้าง)* "size="28" pattern="^[ก-๏\s]{6,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" required-->
                </div>
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
                        <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
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

                        <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                </div>
            <!--input type="text" name="Work" autocomplete="off" value="" placeholder="งาน  "size="28" pattern="^[ก-๏\s]{3,}" title="กรอกตัวอักษรภาษาไทยเท่านั้น 3 ตัวอักษรขึ้นไป" -->

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
                <option value="9">งานคดีและอื่นๆ</option>
            </optgroup>
            </select>
                </div>
                <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
            <input type="text" name="Phone" autocomplete="off" value="" placeholder="เบอร์โทร * "  size="28"  pattern="[0-9]{9,}" title="กรอกตัวเลข 10 ตัวอักษรขึ้นไปเท่านั้น" required>
                </div>

            <div class="input-group form-group">
            <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                </div>
            <input type="email" name="Email" autocomplete="off" value="" placeholder="Email * "  size="28" required>
             <span id="sEmail"></span>
                </div>

            <div class="form-group">
            &nbsp;&nbsp;&nbsp;&nbsp;

                <input type="submit" value="Submit" class="btn float-left login_btn btn-save btn-save">

                
       
                <input type="button"  value="Refesh" onclick='window.location.reload()' class="btn float-Right login_btn">
            </div>
             <div align="right"> 
                <input type="button"  style="color:red" value="ออกจากรายการ" onclick='window.history.back()' class="btn float-Right login_btn">
                
               </div>
            </form>
       </div>
   </div>
 </div>
</div>
</body>
</html>



