  <nav class="main-header  navbar navbar-expand navbar-navy navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link 
        <?php if ($menu == "member_page"){echo "active";} ?>"  href="member_page.php"><i class="fas fa-home"></i> Home</a>
      </li>
      
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a href="logout.php" class="nav-link ">
          <i class="fa fa-power-off"></i> Logout
        </a>
        
      </li>
    </ul>
  </nav>

  <!-- /.navbar -->