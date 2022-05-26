<?php 
@session_start();
if (!$_SESSION["UserID"] ){ 

      Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page";

?>

<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลสมาชิก</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">

  <?php include('mysql/config.php');
  
              $sqli = "SELECT * FROM user ORDER BY Userlevel 
              ASC, Regidate DESC, ID ASC";
                $result = $conn->query($sqli);?>
        
        <div align="right"> 
        <a href="search_tb.php">   <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-file"></i> รายงานข้อมูลสมาชิก </button></a>
          
        
        <div align="left"> 
        <a href="registermember.php">   <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-user-plus"></i> เพิ่มข้อมูลสมาชิก </button></a>
          
        </div></div>

      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-12">
        <table id="example1" class="table table-bordered table-striped dataTable" 
                      role="grid" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 8%;">เลขที่ผู้ใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">เริมใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">นามสกุล</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">เบอร์โทร</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">อีเมล์</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้ใช้</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ให้บริการ</th>
                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 9%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $ID = $row['ID'];
                    $Firstname = $row['Firstname'];
                    $Lastname = $row['Lastname'];
                    $Phone = $row['Phone'];
                    $Email = $row['Email'];
                    $Regidate = $row['Regidate'];
                    $supportdate = $row['supportdate'];
                    $Userlevel = $row['Userlevel'];
                    $supportuser = $row['supportuser'];
                    ?>
                <tr>
                   <td><center><?php echo $ID;?></center></td>
                        <td><?php echo $Regidate;?></td>
                        <td><?php echo $Firstname;?></td>
                        <td><?php echo $Lastname;?></td>
                        <td><?php echo $Phone;?></td>
                        <td><?php echo $Email;?></td>
                        <td><?php echo $Userlevelname[$Userlevel];?></td>
                        <td><?php echo $supportdate;?></td>
                        <td><?php echo $supportuser;?></td>


                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_u.php?ID=<?php echo $ID;?>" 
                      >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="adm_form_u.php?ID=<?php echo $ID; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_u.php?ID=<?php echo $ID; ?>" >
                      <i class="fas fa-trash-alt">
                      </i> 
                    </a>
                  </td>     
                </tr>
                    
              <?php }?>

              </tbody>
            </table>
            
          </div>
          <div class="col-md-1" >    
          </div>
        </div>
      </div>      
    </div>  
  </div>
  <!-- /.col -->
</div>
</section>
<!-- /.content -->
<?php include('adm_footer.php'); ?>
<script>
$(function () {
$(".datatable").DataTable();
$('#example2').DataTable({
"paging": true,
"lengthChange": false,
"searching": false,
"ordering": true,
"info": true,
"autoWidth": false,
});
});
</script>
</body>
</html>
<?php }?>
