<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

    Header("Location: form_login.php");

}else{?>

<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-navy elevation-4">

    <!-- Brand Logo -->
    <a href="" class="brand-link bg-navy">
      <img src="assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mamber </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <b>ID: <?php echo $_SESSION["UserID"];?></b>
          <a href="mem_detail_edits.php?ID=<?php echo $_SESSION["UserID"]; ?>"  class="d-block"><b><font color="blue"><?php echo $_SESSION["User"];?></font></a>
        </div>
      </div>

    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>

          

           <li class="nav-item" >
            <a href="member_page_his.php" class="nav-link <?php if($menu=="member_page_his"){echo "active";} ?> ">
              <i class="nav-icon fa fa-wrench"></i>
              <p> ประวัติ แจ้งซ่อม</p>
            </a>
          </li>

           

          <li class="nav-item" >
            <a href="member_page_his2.php" class="nav-link <?php if($menu=="member_page_his2"){echo "active";} ?> ">
              <i class="nav-icon fa fa-circle-notch"></i>
              <p> ประวัติ ขอใช้อุปกรณ์</p>
            </a>
          </li>

           

              <li class="nav-item" >
            <a href="member_page_his3.php" class="nav-link <?php if($menu=="member_page_his3"){echo "active";} ?> ">
              <i class="nav-icon fa fa-wifi"></i>
              <p> ประวัติ ขอใช้บริการระบบ </p>
            </a>
          </li>

         

              <li class="nav-item" >
            <a href="member_page_his4.php" class="nav-link <?php if($menu=="member_page_his4"){echo "active";} ?> ">
              <i class="nav-icon fa fa-universal-access"></i>
              <p> ประวัติ ลงทะเบียน/ยกเลิก </p>
            </a>
          </li>

          

               <li class="nav-item" >
            <a href="member_page_his5.php" class="nav-link <?php if($menu=="member_page_his5"){echo "active";} ?> ">
              <i class="nav-icon fa fa-file-code"></i>
              <p> ประวัติ ปรับปรุง/จัดทำระบบงาน </p>
            </a>
          </li>


    
      <div class="user-panel mt-2 pb-3 mb-2 d-flex">
  
      </div>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>
  


          
        </ul>
      </nav>
      
      <!-- /.sidebar-menu -->
   

    </div>
    <!-- /.sidebar -->
  </aside>

  <?php }?>