<?php
@ob_start();
@session_start();
        if(isset($_REQUEST['Username'])){
				
                  include 'mysql/config.php';
				
                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];

                  $sql="SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";

                  $result = mysqli_query($conn,$sql,$sql1);
				
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["UserID"]    = $row["ID"];
                      $_SESSION["User"]      = $row["Firstname"]." ".$row["Lastname"];
  
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if ($_SESSION["Userlevel"] == "1" ){  //ถ้า admin ให้ไปหน้า admin_page.php

                        Header("Location: admin_page.php");

                      }

                      if ($_SESSION["Userlevel"] == "2" ){  //ถ้า user ให้ไปหน้า user_page.php เปลี่ยน ***

                        Header("Location: user_page_his.php");

                      }

                      if ($_SESSION["Userlevel"] == "3" ){  //ถ้า member ให้ไปหน้า member_page.php เปลี่ยน ***

                        Header("Location: member_page_his.php");

                      }

                      if ($_SESSION["Userlevel"] == "4"){   /*boss_page */

                        Header("Location: boss_page.php");

                      } 
                      if ($_SESSION["Userlevel"] == "5"){  /*boss1_page */

                        Header("Location: boss1_page.php");

                      } 
                      if ($_SESSION["Userlevel"] == "6"){   

                        Header("Location: boss1_page.php");

                      } 
                      if ($_SESSION["Userlevel"] == "7"){  

                        Header("Location: bossit_page.php");

                      } 
                      if ($_SESSION["Userlevel"] == "8"){  

                        Header("Location: bossit1_page.php");

                      } 
                      if ($_SESSION["Userlevel"] == "9"){  /**/

                        Header("Location: bossit2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "10"){  /**/

                        Header("Location: bossa.php");

                      } 
                      if ($_SESSION["Userlevel"] == "11"){  /**/

                        Header("Location: bossa1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "12"){  

                        Header("Location: bossa2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "13"){  

                        Header("Location: bossa3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "14"){  

                        Header("Location: bossa4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "15"){  

                        Header("Location: bossa5.php");

                      } 
                      if ($_SESSION["Userlevel"] == "16"){  

                        Header("Location: bossa6.php");

                      } 
                      if ($_SESSION["Userlevel"] == "17"){  

                        Header("Location: bossa7.php");

                      } 
                      if ($_SESSION["Userlevel"] == "18"){  

                        Header("Location: bossa8.php");

                      } 
                      if ($_SESSION["Userlevel"] == "19"){  

                        Header("Location: bossa9.php");

                      } 
                      if ($_SESSION["Userlevel"] == "20"){  

                        Header("Location: bossb.php");

                      } 
                      if ($_SESSION["Userlevel"] == "21"){  

                        Header("Location: bossb1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "22"){  

                        Header("Location: bossb2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "23"){  

                        Header("Location: bossb3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "24"){  

                        Header("Location: bossb4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "25"){  

                        Header("Location: bossc.php");

                      } 
                      if ($_SESSION["Userlevel"] == "26"){  

                        Header("Location: bossc1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "27"){  

                        Header("Location: bossc2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "28"){  

                        Header("Location: bossc3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "29"){  

                        Header("Location: bossc4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "30"){  

                        Header("Location: bossd.php");

                      } 
                      if ($_SESSION["Userlevel"] == "31"){  

                        Header("Location: bossd1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "32"){  

                        Header("Location: bossd2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "33"){  

                        Header("Location: bossd3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "34"){  

                        Header("Location: bossd4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "35"){  

                        Header("Location: bossd5.php");

                      } 
                      if ($_SESSION["Userlevel"] == "36"){  

                        Header("Location: bosse.php");

                      } 
                      if ($_SESSION["Userlevel"] == "37"){  

                        Header("Location: bosse1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "38"){  

                        Header("Location: bosse2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "39"){  

                        Header("Location: bosse3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "40"){  

                        Header("Location: boossf.php");

                      } 
                      if ($_SESSION["Userlevel"] == "41"){  

                        Header("Location: boossf1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "42"){  

                        Header("Location: boossf2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "43"){  

                        Header("Location: boossf3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "44"){  

                        Header("Location: bossg.php");

                      } 
                      if ($_SESSION["Userlevel"] == "45"){  

                        Header("Location: bossg1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "46"){  

                        Header("Location: bossg2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "47"){  

                        Header("Location: bossg3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "48"){  

                        Header("Location: bossh.php");

                      } 
                      if ($_SESSION["Userlevel"] == "49"){  

                        Header("Location: bossh1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "50"){  

                        Header("Location: bossh2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "51"){  

                        Header("Location: bossh3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "52"){  

                        Header("Location: bossh4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "53"){  

                        Header("Location: bossi.php");

                      } 
                      if ($_SESSION["Userlevel"] == "54"){  

                        Header("Location: bossi1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "55"){  

                        Header("Location: bossi2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "56"){  

                        Header("Location: bossi3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "57"){  

                        Header("Location: bossi4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "58"){  

                        Header("Location: bossj.php");

                      } 
                      if ($_SESSION["Userlevel"] == "59"){  

                        Header("Location: bossj1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "60"){  

                        Header("Location: bossj2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "61"){  

                        Header("Location: bossj3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "62"){  

                        Header("Location: bossj4.php");

                      } 
                      if ($_SESSION["Userlevel"] == "63"){  

                        Header("Location: bossk.php");

                      } 
                      if ($_SESSION["Userlevel"] == "64"){  

                        Header("Location: bossk1.php");

                      } 
                      if ($_SESSION["Userlevel"] == "65"){  

                        Header("Location: bossk2.php");

                      } 
                      if ($_SESSION["Userlevel"] == "66"){  

                        Header("Location: bossk3.php");

                      } 
                      if ($_SESSION["Userlevel"] == "67"){  

                        Header("Location: bossk4.php");

                      } 

                  }else{
                    echo "<script>";
                        echo "alert(\" Username Or Password Wrong !!!\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location:form_login.php"); //user & password incorrect back to login again

        }
      ?>  

