<!DOCTYPE html>
<html lang="en">
<head>
<!-- โชว์ชื่อเเท็บ -->
    <title>Login Page</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: white;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #06CA26,
        #0f354f
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #151414
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 500px;
    width: 400px;
    background-color: rgba(0, 0, 0, 0.508);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(50px);
    border: 2px solid rgb(118, 118, 118);
    box-shadow: 0 0 40px rgba(240, 240, 245, 0.936);
    padding: 80px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #fbf9f9;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgb(80, 80, 80);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 18px;
    font-weight: 300;
}
::placeholder{
    color: #160c0c;
}
button{
    margin-top: 50px;
    width: 200%;
    background-color: #3e3d3d;
    color: #f5f4f8;
    
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
    margin-top: 30px;
    display: flex;
}
.social div{
    background: red;
    width: 150px;
    border-radius: 3px;
    padding: 5px 10px 10px 5px;
    background-color: rgb(255, 255, 255);
    color: #eaf0fb;
    text-align: center;
}
.social div:hover{
    background-color: rgb(255, 255, 255);
}
.social .fb{
    margin-left: 25px;
}
.social i{
    margin-right: 4px;
}
.login_btn{
    color: black;
    background-color: #FFFFFFFF;
    width: 150px;
}
.register_btn{
    color: black;
    background-color: #FFFFFFFF;
    width: 150px;
}
.login_btn:hover{
    color: rgb(102, 99, 99);
    background-color: white;
}
.register_btn:hover{
    color: rgb(102, 99, 99);
    background-color: white;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
        
    </div>
    <form>
        <h3>PWO IT Service</h3>
        <div class ="card-body">
<!--<form name = "frmlogin" action ="login.php" method="POST" class ="form-horizontal"> -->


        <label for="Username">Username</label>
        <input type="Text" placeholder="Username" id="Username">

        <label for="Password">Password</label>
        <input type="Password" placeholder="Password" id="Password">
        
        <div class="form-group">
            <div align="center">
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="registermember.php" style="position:fixed; left:35px;">
            <input type="button" value="Register" class="btn float-left register_btn"></a>

            <a href="login.php" style="position:fixed; left: 200px;">
            <input type="submit" value="Login" class="btn float-right login_btn"></a>
                
        </div>
    </form>
</body>
</html>
