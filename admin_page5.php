<?php 
@session_start();
if (!$_SESSION["UserID"]){ 

	  Header("Location: form_login.php"); 

}else{?>

<?php

$menu = "admin_page5";

?>

<?php include('adm_header.php'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid"> 
    <h1><i class="nav-icon fas fa-address-card">
    </i> จัดการข้อมูลขอใช้บริการ บุคคลภายนอก</h1>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="card">
    <div class="card-header card-navy card-outline">
      
  <?php include('mysql/config.php');
              $sql = "SELECT * FROM serviceuser ORDER BY userstatus 
              ASC, userdate DESC, useridnum ASC";
                $result = $conn->query($sql);?>
               <div align="right"> 
<a href="search_ser2.php">   
<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#exampleModal">
<i class="fa fa-file"></i> รายงานข้อมูลขอใช้บริการระบบ </button></a>
</div></div>
       
      
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
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">เลขที่ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ผู้ขอใช้ระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ขอใช้บริการระบบ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">สถานะผู้ขอ</th>

                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">วันที่ให้บริการ</th>
                  <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ผู้ให้บริการ</th>

                   <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">-</th>
                </tr>
              </thead>
              <tbody ondragstart="return false" onselectstart="return false" oncopy="return false"  oncut="return false">
                <?php
                      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $useridnum = $row['useridnum'];
                    $username = $row['username'];
                    $userdate = $row['userdate'];
                    $usercase = $row['usercase'];
                    $serviceuserdate = $row['serviceuserdate'];
                    $userstatus = $row['userstatus'];
                    $suppuser = $row['suppuser'];
                    ?>
                <tr>
                    <td><center><?php echo $useridnum;?></center></td>
                        <td><?php echo $userdate;?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo $usercase;?></td>
                        <td><?php echo $userstatusname[$userstatus];?></td>
                        <td><?php echo $serviceuserdate;?></td>
                        <td><?php echo $suppuser;?></td>

                  <td>
                    <a class="btn btn-info btn-xs" href="adm_detail_user.php?useridnum=<?php echo $useridnum;?>" 
                     >
                      <i class="fas fa-eye">
                      </i>
                   
                    </a>                         
                   <a class="btn btn-warning btn-xs" href="adm_form_user.php?useridnum=<?php echo $useridnum; ?>" >
                      <i class="fas fa-pencil-alt">
                      </i>
                    </a>

                    <a class="btn btn-danger btn-xs" href="adm_deleted_user.php?useridnum=<?php echo $useridnum; ?>" >
                      <i class="fas fa-trash-alt">
                      </i> 
                    </a>
                  </td>     
                </tr>
                    
               <?php } ?>
                                    
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
