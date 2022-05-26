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
      <span class="brand-text font-weight-light">Boss1 IT </span>
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
          <a href="bossit1_detail_edits.php?ID=<?php echo $_SESSION["UserID"]; ?>" target="_bank" class="d-block"><font color="blue"><b><?php echo $_SESSION["User"];?></b></font></a>
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
            <a href="bossit1_page.php" class="nav-link <?php if($menu=="bossit1_page"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p> อนุมัตรายการแจ้งซ่อม</p>
            </a>
          </li>

            <li class="nav-item" >
            <a href="bossit1_page2.php" class="nav-link <?php if($menu=="bossit1_page2"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p> อนุมัตรายการขอใช้อุปกรณ์</p>
            </a>
          </li>

            <li class="nav-item" >
            <a href="bossit1_page3.php" class="nav-link <?php if($menu=="bossit1_page3"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p> อนุมัตรายการขอใช้บริการระบบ</p>
            </a>
          </li>

            <li class="nav-item" >
            <a href="bossit1_page4.php" class="nav-link <?php if($menu=="bossit1_page4"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p> อนุมัตรายการลงทะเบียน/ยกเลิกผู้ใช้งาน</p>
            </a>
          </li>

            <li class="nav-item" >
            <a href="bossit1_page5.php" class="nav-link <?php if($menu=="bossit1_page5"){echo "active";} ?> ">
              <i class="nav-icon fas fa-address-card"></i>
              <p> อนุมัตรายการปรับปรุง/จัดทำระบบงาน</p>
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